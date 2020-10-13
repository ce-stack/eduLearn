
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
								<a class="active" href="{{route('index')}}">Home</a>
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
				<div class="row">
					
					@foreach ($teachers as $teacher)
					<div class="col-lg-3 col-md-6 col-xs-6">
		                <div class="team-item">
		                    <div class="team-img">
		                        <a href="#"><img src="{{ asset(' images/teachers/1.jpg') }}" alt="" /></a>
		                        <div class="social-icon">
		                        	<a href="#"><i class="fa fa-facebook"></i></a>
		                        	<a href="#"><i class="fa fa-twitter"></i></a>
		                        	<a href="#"><i class="fa fa-google-plus"></i></a>
		                        	<a href="#"><i class="fa fa-linkedin"></i></a>
		                        </div>
		                    </div>
		                    <div class="team-body">
							<a href="{{ route('teachers-single' , ['id' => $teacher->id]) }}"><h3 class="name">{{ $teacher->name }}</h3></a>
		                    	<span class="designation">{{ $teacher->position }}</span>
		                    </div>
		                </div>						
					</div>
					@endforeach

				</div>
			
			</div>
        </div>
        <!-- Team End -->
				
      