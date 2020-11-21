{{-- <style>
    body{
        font-family: Arial, Helvetica, sans-serif
    }
</style>
 <p>
     you subscribe to this course
 <a class="btn btn-danger" href="{{ route('course-details' , ['id' => $course->id]) }}">view</a>
 </p> --}}


@component('mail::message')
# Subscribe Completed
{{-- Thank you for your order the amount is {{ dd($order)}}.  --}}
Thank you for your subscription .

<p>
    you subscribe to this course
<a class="btn btn-danger" href="{{ route('course-details' , ['id' => $course->id]) }}">view</a>
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
