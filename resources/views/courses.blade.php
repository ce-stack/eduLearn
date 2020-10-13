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
				<div class="abt-title">
				    <h2>OUR COURSES</h2>
				</div>
				

				<div class="row grid">
					
					@foreach ($courses as $course)
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{ asset('images/courses/10.jpg') }}" alt="" />
							<span class="course-value">{{ $course->price }}</span>
		                        <div class="course-toolbar">
								<h4 class="course-category"><a href="{{ route('course-details' , ['id'=>$course->id]) }}">{{  $course->name   }}</a></h4>
		                        	<div class="course-date">
		                        		<i class="fa fa-calendar"></i> {{ $course->date }}
		                        	</div>
		                        	<div class="course-duration">
		                        		<i class="fa fa-clock-o"></i> {{ $course->length }} year
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
		                    <div class="course-footer">
		                    	<div class="course-seats">
		                    		<i class="fa fa-users"></i> {{ $course->seats }} SEATS
		                    	</div>
		                    	
		                    </div>
		                </div>						
					</div>
					@endforeach

			    </div>
			    
			</div>
        </div>
        <!-- Courses End -->
				
       
@endsection