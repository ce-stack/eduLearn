@extends('layouts.search')


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
                    <div class="col-lg-8 col-md-12">
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
                                <img src="{{ asset('images/events/event-details.jpg') }}" alt="Event Details Images" />
                            </div>
                            <div class="event-desc">
                                <p>
                                    {{ $event->description }}
                                </p>
                                <p>
                                    {{ $event->secondDesc }}
                                </p>
                            </div>
                            <div id="googleMap"></div>
                            <div class="share-area">
                                <div class="row rs-vertical-middle">
                                    <div class="col-md-4">
                                        <div class="book-btn">
                                            <a href="#">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="share-inner">
                                            <span>SHARE:</span>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-google"></i></a>
                                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="search-box">
                                <h3 class="title">Search Courses</h3>
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search Here ..." name="srch-term" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="cate-box">
                                <h3 class="title">Categories</h3>
                                <ul>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Analysis & Features <span>(05)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Video Reviews <span>(07)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">Engineering Tech <span>(09)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#"> Righteous Indignation <span>(08)</span></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> <a href="#">General Education <span>(04)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="latest-courses">
                                <h3 class="title">Latest Courses</h3>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="blog-details.html"><img src="images/blog-details/sm1.jpg" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="blog-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="blog-details.html"><img src="images/blog-details/sm2.jpg" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="blog-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <div class="post-img">
                                        <a href="blog-details.html"><img src="images/blog-details/sm3.jpg" alt="" title="News image"></a>
                                    </div>
                                    <div class="post-desc">
                                        <h4><a href="blog-details.html">Raken develops reporting The software</a></h4>
                                        <span class="duration"> 
                                            <i class="fa fa-clock-o" aria-hidden="true"></i> 4 Years
                                        </span> 
                                        <span class="price">Price: <span>$350</span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="tags-cloud clearfix">
                                <h3 class="title">Product Tags</h3>
                                <ul>
                                    <li>
                                        <a href="#">SCIENCE</a>
                                    </li>
                                    <li>
                                        <a href="#">HUMANITIES</a>
                                    </li>
                                    <li>
                                        <a href="#">DIPLOMA</a>
                                    </li>
                                    <li>
                                        <a href="#">BUSINESS</a>
                                    </li>
                                    <li>
                                        <a href="#">SPROTS</a>
                                    </li>
                                    <li>
                                        <a href="#">RESEARCH</a>
                                    </li>
                                    <li>
                                        <a href="#">ARTS</a>
                                    </li>
                                    <li>
                                        <a href="#">ADMISSIONS</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Event Details End -->

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
                                503  Old Buffalo Street
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
                                503  Old Buffalo Street<br>
                                Northwest City #205, United States
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Branches End -->
				
     

@endsection