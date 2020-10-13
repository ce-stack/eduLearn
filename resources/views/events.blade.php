@extends('layouts.search')
		
@section('content')
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR EVENTS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>Events</li>
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
		<!-- Events Start -->
        <div class="rs-events-2 sec-spacer">
            <div class="container">
                <div class="row space-bt30">
					@foreach ($events as $event)
                    <div class="col-lg-6 col-md-12">
                    	<div class="event-item">
	                        <div class="row rs-vertical-middle">
	                        	<div class="col-md-6">
	                        	    <div class="event-img">
	                        	        <img src="{{ asset('images/events/4.jpg') }}" alt="events Images" />
									<a class="image-link" href="{{ route('events-details' , ['id' => $event->id]) }}" title="University Tour 2018">
                                            <i class="fa fa-link"></i>
                                        </a>
	                        	    </div>                        		
	                        	</div>
	                        	<div class="col-md-6">
	                    	        <div class="event-content">
	                    	        	<div class="event-meta">
		                    	        	<div class="event-date">
		                    	        		<i class="fa fa-calendar"></i>
		                    	        		<span>{{ $event->date }}</span>
		                    	        	</div>
	                    	        		<div class="event-time">
	                    	        			<i class="fa fa-clock-o"></i>
	                    	        			<span>{{ $event->time }}</span>
	                    	        		</div>
	                    	        	</div>
	                    	        	<h3 class="event-title"><a href="events-details.html">{{ $event->name }}</h3>
                    	        		<div class="event-location">
                    	        			<i class="fa fa-map-marker"></i>
                    	        			<span>{{ $event->place }}</span>
                    	        		</div>
	                    	        	<div class="event-desc">
	                    	        		<p>
												{{ $event->description }}
	                    	        		</p>
	                    	        	</div>
	                    	        </div>                    		
	                        	</div>
	                        </div>                    		
                    	</div>
					</div>					
					@endforeach

                </div>
            </div>
        </div>
        <!-- Events End -->

        <!-- Branches Start -->
        <div id="rs-branches" class="rs-branches sec-color pt-100 pb-70">
            <div class="container">
                <div class="sec-title mb-70 text-center">
                    <h2>OUR BRANCHES</h2>      
                	<p>Considering desire as primary motivation for the generatio.</p>
                </div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="images/about/australia.png" alt="Australia Flag">
							<h3>
								<span>01</span>
								Australia
							</h3>
							<p>
								503  Old Buffalo Street<br>
								Northwest City #205, Australia
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="images/about/china.png" alt="China Flag">
							<h3>
								<span>02</span>
								China
							</h3>
							<p>
								503  Old Buffalo Street<br>
								Northwest City #205, China
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="images/about/india.png" alt="India Flag">
							<h3>
								<span>03</span>
								India
							</h3>
							<p>
								503  Old Buffalo Street<br>
								Northwest City #205, India
							</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="branches-item">
							<img src="images/about/united-states.png" alt="United States Flag">
							<h3>
								<span>04</span>
								United States
							</h3>
							<p>
								503  Old Buffalo Street
								Northwest City #205, United States
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- Branches End -->
				
     @endsection