@extends('layouts.header')



@section('content')


		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR TEACHERS</h1>
		                    <ul>
		                        <li>
								<a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>Our Teachers</li>
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

		<!-- Team Start -->
        <div id="rs-team-2" class="rs-team-2 team-page sec-spacer">
			<div class="container">

				<div class="row grid">


					@foreach ($teachers as $teacher)
					<div class="col-lg-3 col-md-6 col-xs-6 grid-item filter1">
		                <div class="team-item">
		                    <div class="team-img">
		                        <img class="" src="{{asset('images/teachers')}}/{{ $teacher->image }}"  alt="" />
		                        <div class="social-icon">
		                        	<a href="#"><i class="fa fa-facebook"></i></a>
		                        	<a href="#"><i class="fa fa-twitter"></i></a>
		                        	<a href="#"><i class="fa fa-google-plus"></i></a>
		                        	<a href="#"><i class="fa fa-linkedin"></i></a>
		                        </div>
		                    </div>
		                    <div class="team-body">
								<a href="{{ route('teachers-single' , ['id'=>$teacher->id]) }} "><h3 class="name">{{  $teacher->name   }}</h3></a>
		                    	<span class="designation">{{ $teacher->position }}</span>
		                    </div>
		                </div>
					</div>
					@endforeach


			    </div>

			</div>
        </div>
        <!-- Team End -->

		@endsection
