
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
{{-- 
		@if (session('status'))
			<div class="alert alert-danger">
				{{ session('status') }}
			</div>
		@endif --}}
		<!-- Team Start -->
        <div id="rs-team-2" class="rs-team-2 team-all pt-100 pb-70">
			<div class="container">
				<div class="row">
					
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
        <!-- Team End -->
				
      