@component('mail::message')

    # Contact Form Submission

    Good day,

    You have received a new contact form submission. Here are the details:

    ---

    # Name:
    {{ $data['first_name'] }}
    # Email:
    {{ $data['email'] }}
    # Phone:
    {{ $data['phone'] }}
    # Service:
    {{ $data['service'] ?? 'Not specified' }}
    # Message:
    {{ $data['message'] }}

    Thank you,
    # {{ config('app.name') }}

@endcomponent

