@component('mail::message')
# {{ $mailData['subject'] }}

Name: {{ $mailData['name'] }}
Email: {{ $mailData['email'] }}
Service: {{ $mailData['service'] }}
Message: {{ $mailData['message'] }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
