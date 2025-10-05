<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('projects', [\App\Http\Controllers\ProjectsController::class, 'projectsPages'])->name('projects.index');
Route::get('boat_repairs', [\App\Http\Controllers\ProjectsController::class, 'boat_repairsPages'])->name('boat_repairs.index');
Route::get('trailer_repairs', [\App\Http\Controllers\ProjectsController::class, 'trailer_repairsPages'])->name('trailer_repairs.index');
Route::get('custom_trailers', [\App\Http\Controllers\ProjectsController::class, 'custom_trailersPages'])->name('custom_trailers.index');
Route::get('boat_wraps', [\App\Http\Controllers\ProjectsController::class, 'boat_wrapsPages'])->name('boat_wraps.index');
Route::get('boat_recarpeting', [\App\Http\Controllers\ProjectsController::class, 'boat_recarpetingPages'])->name('boat_recarpeting.index');
Route::get('conversions', [\App\Http\Controllers\ProjectsController::class, 'conversionsPages'])->name('conversions.index');
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'contactPage'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submitForm']);
