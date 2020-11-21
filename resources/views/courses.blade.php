@extends('layouts.search')

@section('content')

		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">

		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
								<a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>Our Courses</li>
                            </ul>

		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		@if (session('status'))
		<div class="alert alert-danger">
			{{ session('status') }}
		</div>
	@endif
		<!-- Courses Start -->
        <div id="rs-courses-3" class="rs-courses-3 sec-spacer">

            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">

                        <form action=""  method="post">

                            @csrf

                            <input class="right-bar-icon rs-offcanvas-link text-right" type="text" name="q" id="q" class="form-control" placeholder="search by name">

                            <button type="submit" class="btn btn-danger " style="color:black">search</button>


                    </form>
                            </div>
                </div>
            </div>
			<div class="container">
				<div class="abt-title">
				    <h2>OUR COURSES</h2>
				</div>


				<div class="row grid">

					@foreach ($courses as $course)
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
                                <img class="" src="{{asset('images/courses')}}/{{ $course->image }}"  alt="" />

		                        <div class="course-toolbar">
								<h4 class="course-category"><a href="{{ route('course-details' , ['id'=>$course->id]) }}">{{  $course->name   }}</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> {{ $course->date }}
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> {{ $course->length }} months
		                        	</div>
		                        </div>
		                    </div>
		                    <div class="course-body">
		                    	<div class="course-desc">
								<h4 class="course-title"><a href="{{ route('course-details' , ['id'=>$course->id]) }} "> {{ $course->secondName   }}</a></h4>
		                    		<p>{{ $course->content }}
		                    		</p>
		                    	</div>
		                    </div>

                            <div class="event-btn">
                                <a href=" {{ route('course-details' , ['id' => $course->id]) }} " class="btn btn-danger">View Course</a>
                            </div>
		                </div>
					</div>
					@endforeach

			    </div>

			</div>
        </div>
        <!-- Courses End -->


@endsection
