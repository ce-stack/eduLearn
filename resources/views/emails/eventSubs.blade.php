@component('mail::message')
# Booked Completed

to visit your event click the button below.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/events-details/'.$event->id])
visit your event
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
