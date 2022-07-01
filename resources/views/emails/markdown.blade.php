@component('mail::message')
# Hello, User

This is an attendance reminder.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
