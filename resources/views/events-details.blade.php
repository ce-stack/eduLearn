@extends('layouts.header')


@section('content')



		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">EVENT DETAILS</h1>
		                    <ul>
		                        <li>
                                <a class="active" href="{{route('index')}}">Home</a>
		                        </li>
		                        <li>Event Details</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

        <!-- Event Details Start -->
        <div class="rs-event-details pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="event-details-content">
                        <h3 class="event-title"><a href="#">{{ $event->name }}</a></h3>
                            <div class="event-meta">
                                <div class="event-date">
                                    <i class="fa fa-calendar"></i>
                                    <span>{{ $event->date }}</span>
                                </div>
                                <div class="event-time">
                                    <i class="fa fa-clock-o"></i>
                                    <span>{{ $event->time }}</span>
                                </div>
                                <div class="event-location">
                                    <i class="fa fa-map-marker"></i>
                                    <span>{{ $event->place }}</span>
                                </div>
                            </div>
                            <div class="event-img">
                                <img src="{{asset('images/events')}}/{{ $event->image }}" alt="Event Details Images" />
                            </div>
                            <div class="event-desc">
                                <p>
                                    {{ $event->description }}
                                </p>
                                <p>
                                    {{ $event->secondDesc }}
                                </p>
                            </div>
                            <div class="share-area">

                                <form id="addUser" action="{{ route('addUserEvent') }}" method="get">
                                    @csrf
                                    <input type="hidden" value="{{ $event->id }}" name="event_id">
                                    <div class="event-btn">
                                        @if ($userSubsEvent)
                                        <button disabled style="btn btn-danger">Booked</button>
                                        @else
                                        <button class="btn btn-danger">Book Now</button>
                                        @endif

                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Event Details End -->





@endsection
