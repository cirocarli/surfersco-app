@component('mail::message')
# Hi {{ $name }},

{{ $senderMessage }}

Received your email. I will try to quickly answer.

@component('mail::button', ['url' => $mailData['url']])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent