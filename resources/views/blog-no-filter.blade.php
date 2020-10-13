
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
        <div class="blog-page-area sec-spacer">
			<div class="container">
                
                @foreach ($news as $new)
                <div class="row mb-50 blog-inner">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-images">
                            <a href="blog-details.html"><i class="fa fa-link" aria-hidden="true"></i> <img src="{{ asset('images/blogpage/1.jpg') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="blog-content">
                            <div class="date">
                                <i class="fa fa-calendar-check-o"></i> {{ $new->date }}
                            </div>
                        <h4><a href="{{ route('blog-details' , ['id' => $new->id]) }}">{{$new->name}}</a></h4>
                            <ul class="blog-meta">
                                <li class="time"><a href="#"><i class="fa fa-user-o"></i> Admin</a></li>
                                <li class="date"><i class="fa fa-comments-o"></i>{{$new->comments_count}}</li>
                            </ul>
                        <p>{{ $new->description }}</p>
                            <a class="primary-btn" href="{{ route('blog-details' , ['id' => $new->id]) }}">Read More</a>
                        </div> 
                    </div>
				</div>
                @endforeach

			</div>
		</div>
        <!-- Team End -->

        @endsection
				
      