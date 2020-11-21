@extends('layouts.header')

@section('content')


		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">TEACHERS SINGLE</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="{{ route('index') }}">Home</a>
		                        </li>
		                        <li>Teachers Single</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Team Single Start -->
		<div class="rs-team-single pt-100">
			<div class="container">
				<div class="row team">
				    <div class="col-lg-4 col-md-12">
				        <div class="team-photo mobile-mb-40">
				            <img class="" src="{{asset('images/teachers')}}/{{ $teacher->image }}"  alt="" />
				            <div class="team-icons">
				                <a href="#" title="facebook">
				                    <i class="fa fa-facebook"></i>
				                </a>
				                <a href="#" title="twitter">
				                    <i class="fa fa-twitter"></i>
				                </a>
				                <a href="#" title="google plus">
				                    <i class="fa fa-google-plus"></i>
				                </a>
				                <a href="#" title="linkedin">
				                    <i class="fa fa-linkedin"></i>
				                </a>
				            </div>
				        </div>
				    </div>
				    <div class="col-lg-8 col-md-12">
				        <h3 class="team-name">{{ $teacher->name }}</h3>
				        <p class="team-title">
							<span>{{ $teacher->position }}</span>
				        </p>
				        <p class="team-contact">
				        	<i class="fa fa-mobile"></i> {{ $teacher->phone }} <i class="ml-15 fa fa-envelope-o"></i> {{ $teacher->email }}
				        </p>
				        <p>{{ $teacher->text }}
				        </p>
				        <div class="team-skill">
					        <h3 class="skill-title">Our Teacher Skill:</h3>
					        <div class="row">
					        	<div class="col-md-6">
					        		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $teacher->accounting }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $teacher->accounting }}px">
											<span class="pb-label">Accounting</span>
											<span class="pb-percent">{{ $teacher->accounting }}</span>
										</div>
			                		</div>
			                		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $teacher->reading }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $teacher->reading }}px">
											<span class="pb-label">Reading</span>
											<span class="pb-percent">{{ $teacher->reading }}</span>
										</div>
			                		</div>
					        	</div>
					        	<div class="col-md-6">
					        		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $teacher->writing }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $teacher->writing }}px">
											<span class="pb-label">Writing</span>
											<span class="pb-percent">{{ $teacher->writing }}</span>
										</div>
			                		</div>
			                		<div class="progress rs-progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="{{ $teacher->speaking }}" aria-valuemin="0" aria-valuemax="100" style="width:{{ $teacher->speaking }}px">
											<span class="pb-label">Speaking</span>
											<span class="pb-percent">{{ $teacher->speaking }}</span>
										</div>
			                		</div>
					        	</div>
					        </div>
				        </div>
				    </div>
				</div>
			</div>
		</div>
		<!-- Team Single End -->

		<!-- Team Start -->
        <div id="rs-team-2" class="rs-team-2 pt-70 pb-70">
			<div class="container">
				<div class="sec-title-2 mb-50">
                    <h2>REALATED TEACHERS</h2>
                	<p>Fusce sem dolor, interdum in fficitur at, faucibus nec lorem.</p>
                </div>
				<div class="row">
					<div class="col-lg-3 col-md-6">
		                <div class="team-item">
		                    <div class="team-img">
		                        <a href="#"><img src="images/teachers/5.jpg" alt="" /></a>
		                        <div class="social-icon">
		                        	<a href="#"><i class="fa fa-facebook"></i></a>
		                        	<a href="#"><i class="fa fa-twitter"></i></a>
		                        	<a href="#"><i class="fa fa-google-plus"></i></a>
		                        	<a href="#"><i class="fa fa-linkedin"></i></a>
		                        </div>
		                    </div>
		                    <div class="team-body">
		                    	<h3 class="name">Alex Hilfisher</h3>
		                    	<span class="designation">Science</span>
		                    </div>
		                </div>
					</div>
					<div class="col-lg-3 col-md-6">
		                <div class="team-item">
		                    <div class="team-img">
		                        <a href="#"><img src="images/teachers/6.jpg" alt="" /></a>
		                        <div class="social-icon">
		                        	<a href="#"><i class="fa fa-facebook"></i></a>
		                        	<a href="#"><i class="fa fa-twitter"></i></a>
		                        	<a href="#"><i class="fa fa-google-plus"></i></a>
		                        	<a href="#"><i class="fa fa-linkedin"></i></a>
		                        </div>
		                    </div>
		                    <div class="team-body">
		                    	<h3 class="name">Naila Naime</h3>
		                    	<span class="designation">Business Studies</span>
		                    </div>
		                </div>
					</div>
					<div class="col-lg-3 col-md-6">
		                <div class="team-item">
		                    <div class="team-img">
		                        <a href="#"><img src="images/teachers/7.jpg" alt="" /></a>
		                        <div class="social-icon">
		                        	<a href="#"><i class="fa fa-facebook"></i></a>
		                        	<a href="#"><i class="fa fa-twitter"></i></a>
		                        	<a href="#"><i class="fa fa-google-plus"></i></a>
		                        	<a href="#"><i class="fa fa-linkedin"></i></a>
		                        </div>
		                    </div>
		                    <div class="team-body">
		                    	<h3 class="name">Shoykot Hassan</h3>
		                    	<span class="designation">Arts</span>
		                    </div>
		                </div>
					</div>
					<div class="col-lg-3 col-md-6">
		                <div class="team-item">
		                    <div class="team-img">
		                        <a href="#"><img src="images/teachers/8.jpg" alt="" /></a>
		                        <div class="social-icon">
		                        	<a href="#"><i class="fa fa-facebook"></i></a>
		                        	<a href="#"><i class="fa fa-twitter"></i></a>
		                        	<a href="#"><i class="fa fa-google-plus"></i></a>
		                        	<a href="#"><i class="fa fa-linkedin"></i></a>
		                        </div>
		                    </div>
		                    <div class="team-body">
		                    	<h3 class="name">Eyamin Hossain</h3>
		                    	<span class="designation">Diploma</span>
		                    </div>
		                </div>
					</div>
			    </div>
			</div>
        </div>
        <!-- Team End -->


@endsection
