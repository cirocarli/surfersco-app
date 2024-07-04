@component('mail::message')
# New Post Created

**Name:** {{ $name }}<br>
**Email:** {{ $email }}<br>
**Birthplace:** {{ $birthPlace }}<br>
**Birthday:** {{ $birthday }}<br>
**Phone:** {{ $phone }}<br>
**Company:** {{ $company }}<br><br>
**Message:**<br> {{ $mailMessage }}

@component('mail::button', ['url' => $url])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
