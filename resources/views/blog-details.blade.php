@extends('layouts.search')

@section('content')
	

		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">blog details</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>blog details</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- Blog Single Start Here -->
		<div class="single-blog-details sec-spacer">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-12">
						<div class="single-image">
							<img src="{{ asset('images/blog-details/1.jpg') }}" alt="single">
						</div><!-- .single-image End -->
						<h5 class="top-title">{{ $newsAll->name }}</h5>
					   <p>{{ $newsAll->description }}</p>
						<div class="share-section">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 life-style">
									<span class="author"> 
										<a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Admin </a>
									</span> 
									{{-- <span class="comment"> 
										<a href="#"> 
											<i class="fa fa-commenting-o" aria-hidden="true"></i> {{ $newsAll->comments_count }}
										</a>
									</span> --}}
									<span class="date">
										<i class="fa fa-calendar" aria-hidden="true"></i> {{ $newsAll->date }} 
									</span>
									{{-- <span class="cat">
										<a href="#"><i class="fa fa-folder-o" aria-hidden="true"></i> Life Style </a>
									</span> --}}
								</div>
								<div class="col-lg-6 col-md--12">
									{{-- <ul class="share-link1">
										<li><a href="#"> Tags:</a></li>
										<li><a href="#"> Building</a></li>
										<li><a href="#"> Plumbing</a></li>
										<li><a href="#"> Painting</a></li>
									</ul> --}}
								</div>
							</div>
						</div><!-- .share-section End -->

						<div class="share-section2">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<span> You Can Share It : </span>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12">
									<ul class="share-link">
										<li><a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
										<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a></li>
									</ul>
								</div>
							</div>
						</div><!-- .share-section2 End -->

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul class="next-pre-section">
									<li class="left-arrow"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i> Previous Post</a></li>
									<li class="right-arrow"><a href="#">Next Post <i class="fa fa-angle-right" aria-hidden="true"></i> </a></li>
								</ul><!-- .next-pre-section End -->
							</div>
						</div>    
						{{-- <div class="like-section mt-30">
							<h3 class="title-bg">YOU MIGHT ALSO LIKE</h3>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="popular-post-img">
										<a href="#"><img src="images/blog-details/mid1.jpg" alt="Blog single photo"></a>                                   
									</div>                                
									<h5>
										<a href="#">Easy to Use Your Gallery</a>
									</h5>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="popular-post-img">
										<a href="#"><img src="images/blog-details/mid2.jpg" alt="Blog single photo"></a>                                   
									</div>                                
									<h5>
										<a href="#">Easy to Use Your Gallery</a>
									</h5>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12">
									<div class="popular-post-img">
										<a href="#"><img src="images/blog-details/mid3.jpg" alt="Blog single photo"></a>                                  
									</div>                                
									<h5>
										<a href="#">Easy to Use Your Gallery</a>
									</h5>
									<span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 13, 2017</span>
								</div>
							</div>
						</div> <!-- .like-section End -->  --}}
						<div class="author-comment">
							<h3 class="title-bg">Recent Comments</h3>
							@foreach ($newsAll->comments as $comment)
								
							@endforeach
						</div><!-- .author-comment End --> 
				        <div class="leave-comments-area">
				            
						<form action="{{ route('comments.store.store' , ['course' => $newsAll->id])}}" method="POST">
									
										@csrf
										<div class="row"> 
											<div class="col-md-12 col-sm-12">    
												<div class="form-group">
													<label>Your comment here...</label>
													<textarea cols="40" name="content" type="text" rows="10" class="textarea form-control" value="here"></textarea>
												<input type="hidden" name="newsid" value="{{$newsAll->id}}">
												</div>
											</div>
										</div>     
											 
												<button class="btn-send form-group mb-0" type="submit">Post Comment</button>
											 
									</form>
									
						
						</div><!-- .leave-comments-area end -->
						{{-- <livewire:comments :comments="$comments"/> --}}
					</div>
                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar-area">
                            <div class="search-box">
                                <h3 class="title">Search Courses</h3>
                                <div class="box-search">
                                    <input class="form-control" placeholder="Search Here ..." name="srch-term" id="srch-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div><!-- .search-box end -->
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
                            </div><!-- .cate-box end -->
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
	                            </div><!-- .post-item end -->
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
	                            </div><!-- .post-item end -->
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
	                            </div><!-- .post-item end --> 
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
                            </div><!-- .tags-cloud end --> 
                            <div class="newsletter">
                                <h4>Newsletter</h4>
                                <p>Sign up for our Newsletter !</p>
                                <div class="box-newsletter">
                                    <input class="form-control" placeholder="support@rstheme.com" name="newsletter-term" id="newsletter-term" type="text">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                                </div>
                            </div><!-- .newsletter end --> 
                        </div><!-- .sidebar-area end --> 
                    </div>             
				</div>
			</div>
		</div>
		<!-- Blog Single End  -->     
       
		@endsection