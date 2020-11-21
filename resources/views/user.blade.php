@extends('layouts.header')

@section('content')

<div class="container" style="height: 100%">

 <div class="row">
     <div class="col-md-2">
        <div class="text-center">
            <div  class="header">

                <div class="card mt-3" style="width: 100%; border-color:red; border-radius: 5px">
                    <div class="card-body">
                        <h5>Your Name: {{ $user->name }}</h5>


                    </div>
                  </div>
            </div>
        </div>
     </div>
     {{-- <div class="col-md-1"></div> --}}
     <div class="col-md-5 text-center">

        <h2>Your Courses</h2>
        <div class="text-center ">
            @foreach ($user->courses as $course)
            <div class="card text-center" style="width: 18rem; margin: 10px">
                <div class="card-body">
                  <h5 class="card-title">{{ $course->name }}</h5>

                  <a class="btn btn-danger" href="{{ route('course-details' , ['id' => $course->id]) }}">Vist Course</a>
                </div>
              </div>
        @endforeach
        </div>
     </div>
     <div class="col-md-5 text-center">

        <h2>Your Events</h2>
        <div class="text-center">
            @foreach ($user->events as $event)
            <div class="card" style="width: 18rem; margin:10px">
                <div class="card-body">
                  <h5 class="card-title">{{ $event->name }}</h5>

                  <a class="btn btn-danger" href="{{ route('events-details' , ['id' => $event->id]) }}">Vist Event</a>
                </div>
              </div>
        @endforeach
        </div>
     </div>
 </div>



</div>

@endsection
