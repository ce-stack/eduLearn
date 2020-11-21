@extends('layouts.search')

@section('content')



		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
                            {{-- {{ dd($course->id) }} --}}
		                    <h1 class="page-title">{{ $course->name }}</h1>
		                    <ul>
		                        <li>
                                <a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>{{ $course->name }}</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Courses Details Start -->
        <div class="rs-courses-details pt-100 pb-70">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-12 col-md-12 text-center">
                	    <div class="detail-img">
                            <img class="" src="{{asset('images/courses')}}/{{ $course->image }}"  alt="" />

                	    </div>
                	    <div class="course-content">
                	    	<!--<h3 class="course-title">Computer Science And Engineering</h3>-->
                	    	<div class="course-instructor">
                	    		<div class="row">

                	    			<div class="col-md-12">
                	    				<h3 class="instructor-title">BASIC <span class="primary-color">INFORMATION</span></h3>
                	    				<div class="row info-list">
                	    					<div class="col-md-12">
                	    						<ul>

                	    							<li>
                	    								<span>Lessons :</span> {{ $course->lesson }}
                	    							</li>
                	    							<li>
                	    								<span>Length :</span> {{ $course->length }} Month
                	    							</li>
                	    							<li>
                	    								<span>Level :</span> {{ $course->level }}
                	    							</li>
                	    							<li>
                	    								<span>Category :</span> {{ $course->category }}
                	    							</li>
                	    						</ul>
                	    					</div>

                	    				</div>
                                        <form id="addUser" action="{{ route('addUser') }}" method="get">
                                            @csrf
                                            <input type="hidden" value="{{ $course->id }}" name="course_id">

                                            <div class="event-btn">
                                                @if ($userSubs)
                                                <button disabled style="btn btn-danger">Subscribed</button>
                                                @else
                                                <button class="btn btn-danger">Subscribe</button>
                                                @endif

                                            </div>
                                        </form>
                	    			</div>
                	    		</div>
                	    	</div>
                	    </div>
                        @if ($userSubs)
                        <div class="course-desc text-center">
                            <h3 class="desc-title">Course Description</h3>

                	    	<div class="desc-text">
                	    		<p>
                	    			{{ $course->secondContent }}
                                </p>
                                <div id="video-player">
                                    <video src="{{ asset("images/videos")}}/{{$course->video }}"  width="80%" controls>

                                    </video>
                            </div>

                            <div class="course-syllabus">
                                <h3 class="desc-title">Course Syllabus</h3>



                                @foreach ($courseLesson as $lesson)

                                <div id="accordion" class="rs-accordion-style1">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h3 class="acdn-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <strong>Lessons  {{ $lesson->id }} </strong>
                                            <span>{{ $lesson->title }}</span>
                                            </h3>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                {{ $lesson->content }}
                                            </div>
                                        </div>
                                    </div>




                                </div>
                                @endforeach
                            </div>
                            <!-- Testimonial End -->

                	    </div>
                        @else


                        <div>
                            <p style="color:red">subscribe to watch course content</p>
                         </div>
                        @endif

                    </div>

                </div>
            </div>



        </div>
        <!-- Courses Details End -->

        @endsection

