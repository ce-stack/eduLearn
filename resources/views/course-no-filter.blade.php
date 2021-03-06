
	@extends('layouts.search')
	
	@yield('content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">TEACHERS WITHOUT FILTER</h1>
		                    <ul>
		                        <li>
								<a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>Teachers Without Filter</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

   
		<!-- Team Start -->
        <div id="rs-team-2" class="rs-team-2 team-all pt-100 pb-70">
			<div class="container">
				<div class="row grid">
					
					@foreach ($courses as $course)
					<div class="col-lg-4 col-md-6 grid-item filter1">
		                <div class="course-item">
		                    <div class="course-img">
		                        <img src="{{ asset('images/courses/10.jpg') }}" alt="" />
							<span class="course-value">{{ $course->price }}</span>
		                        <div class="course-toolbar">
		                    		<h4 class="course-category"><a href="{{ route('course-details' , ['id' => $course->id]) }}">{{ $course->name }}</a></h4>
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
								<h4 class="course-title"><a href="{{ route('course-details' , ['id' => $course->id]) }}">{{  $course->secondName}}</a></h4>
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
        <!-- Team End -->

        @endsection
				
      