# Deploying Trax Boats to podhosting (cPanel)

Runbook for a shared-hosting cPanel deploy. Written against Laravel 12.11 / PHP 8.2+.

## What this app does and doesn't need

Worth knowing up front, because it removes most of the usual Laravel deploy steps:

| Step | Needed? | Why |
| --- | --- | --- |
| `composer install` | **No** | `vendor/` is committed to the repo on purpose. See `.gitignore`. |
| `npm install` / `npm run build` | **No** | Nothing uses `@vite`. All CSS/JS is static in `public/assets`. |
| `php artisan migrate` | **No** | Production uses file drivers for session/cache and `sync` for queue. No database. |
| `php artisan storage:link` | **No** | Nothing uses the `Storage` facade or the public disk. |
| Queue worker / cron | **No** | Mail is sent synchronously in the request. Nothing is dispatched. |

So the deploy is: get the files up, set the document root, write `.env`, cache, done.

---

## 1. Before you upload

- [ ] **Rotate the `sales@shifttechgs.com` mailbox password.** The old one was committed to a public repo and must be treated as compromised.
- [ ] **Purge `.env` from git history**, then force-push:
      `git filter-repo --path .env --invert-paths`
- [ ] Confirm the PHP version available in cPanel → **MultiPHP Manager** is **8.2 or higher**. `composer.json` requires `^8.2`. If podhosting defaults to 8.1, raise it before uploading or the app will not boot.
- [ ] Note the CLI binary path — on cPanel it is usually `/usr/local/bin/ea-php82` rather than plain `php`. Every `php artisan` command below may need that full path.

## 2. Get the files onto the server

Upload the **whole repository**, including `vendor/`. Do not upload `node_modules` (there isn't one) or `.env`.

Fastest route is cPanel → Git Version Control, or upload a zip via File Manager and extract. Plain FTP works but 288MB of images in `public/assets` will take a while — a zip upload plus server-side extract is much faster.

**Put the app outside `public_html`.** Target layout:

```
/home/<user>/
├── trax_boats/          ← the repo lives here
│   ├── app/
│   ├── bootstrap/
│   ├── config/
│   ├── public/
│   ├── storage/
│   ├── vendor/
│   └── .env             ← created in step 4
└── public_html/         ← document root, see step 3
```

## 3. Point the domain at `public/`

Pick **one** of these. Option A is correct and much preferred.

### Option A — change the document root (do this if you can)

cPanel → **Domains** → edit the domain → set document root to `trax_boats/public`. Nothing else to do; `public/.htaccess` already has the correct Laravel rewrite rules.

### Option B — fallback if podhosting locks the document root

Copy the *contents* of `trax_boats/public/` into `public_html/`, then edit `public_html/index.php` to point one level further out:

```php
if (file_exists($maintenance = __DIR__.'/../trax_boats/storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../trax_boats/vendor/autoload.php';

$app = require_once __DIR__.'/../trax_boats/bootstrap/app.php';
```

> **Never** upload the repo root into `public_html` directly. That makes `.env`, `storage/logs/laravel.log`, and `vendor/` publicly fetchable over HTTP, which is exactly how the credentials leaked the first time.

## 4. Create `.env` on the server

Copy `.env.production.example` to `.env` **on the server** and fill in the blanks. It is pre-set with `APP_ENV=production`, `APP_DEBUG=false`, file drivers, and the correct mail host.

Two values are intentionally empty:

- [ ] `MAIL_PASSWORD=` — the newly rotated mailbox password.
- [ ] `APP_KEY=` — generate a fresh one, do not reuse the local key (also public):

```
php artisan key:generate
```

- [ ] Confirm `APP_URL` matches the real domain, including `https://`.

## 5. Permissions

```
chmod -R 775 storage bootstrap/cache
```

If podhosting runs suPHP/FCGI under your own user, `755` is sufficient and safer. These two directories are the only ones that need to be writable.

## 6. Cache for production

```
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

> **Every time you change `.env` afterwards, re-run `php artisan config:cache`.** With config cached, `.env` is not read at runtime at all — edits appear to do nothing until you re-cache. This is the same mechanism that used to break the contact form.

To undo all of it: `php artisan optimize:clear`.

## 7. Post-deploy verification

- [ ] All 9 pages return 200: `/`, `/projects`, `/boat_repairs`, `/trailer_repairs`, `/custom_trailers`, `/boat_wraps`, `/boat_recarpeting`, `/conversions`, `/contact`
- [ ] Images and CSS load on an inner page, not just the homepage. Asset paths are relative (`assets/images/...`), which resolves correctly only because every route is a single URL segment and `.htaccess` strips trailing slashes. If you ever add a nested route like `/projects/boats`, its assets will 404 — switch to `{{ asset('assets/...') }}` at that point.
- [ ] **`https://yourdomain.com/.env` returns 404 or 403, not the file contents.** If it returns contents, stop and fix step 3.
- [ ] `https://yourdomain.com/storage/logs/laravel.log` is not reachable either.
- [ ] Submit the contact form and confirm the mail arrives at `info@shifttechgs.com`.
- [ ] Force an error and confirm you get a plain "Server Error" page with no stack trace. If you see a trace, `APP_DEBUG` is still `true`.

### If the contact form doesn't deliver

Shared hosts commonly block outbound SMTP to external mail servers. Check `storage/logs/laravel.log` — the controller catches send failures and logs them rather than surfacing them.

- If port 465 is blocked, try `MAIL_PORT=587` with `MAIL_SCHEME=smtp` (STARTTLS).
- If podhosting blocks external SMTP entirely, switch `MAIL_HOST` to `localhost` and use a mailbox created inside the same cPanel account.
- Re-run `php artisan config:cache` after any change.

## 8. Redeploying later

```
git pull
php artisan optimize:clear
php artisan config:cache && php artisan route:cache && php artisan view:cache
```

If you ran `composer require` or `composer update` locally, commit the resulting `vendor/` changes too — this repo ships `vendor/` deliberately, so an uncommitted update means production runs stale packages.

---

## Known issues, not blocking

- `vendor/` includes dev packages (phpunit, faker, mockery, sail, pint) — roughly 30MB of dead weight uploaded to production. Not reachable over HTTP, just wasteful.
- `public/assets` is 288MB of unoptimised images. Check it against your podhosting disk quota, and consider compressing before upload.
- `resources/views/layouts/master.blade.php:196` still carries a Cloudflare beacon and `__CF$cv$params` iframe injector left over from the scraped template. It points at `../cdn-cgi/...` and will 404 on your domain. Harmless, worth deleting.
- On a mail send failure the visitor is redirected to `/projects` rather than back to `/contact`, losing their form input. The error toast does display, but returning them to the form would be better.
