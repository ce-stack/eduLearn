@component('mail::message')
# Subscribe Completed

to visit your course click the button below.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/course-details/'.$course->id])
visit your course
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
