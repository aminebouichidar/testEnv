<!doctype html>
<html lang="en">
	
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>ASPLAROSE - Residence & Real Estate Agency</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
		
        <!-- Custom CSS -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		
    </head>
	
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-transparent change-logo">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape d-flex justify-content-center">
						<div class="nav-header text-center">
							<a class="nav-brand static-logo" href="{{ route('home') }}"><img src="{{ asset('img/logo-light.png') }}" class="logo" alt=""></a>
							<a class="nav-brand fixed-logo" href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" class="logo" alt=""></a>
							<div class="nav-toggle"></div>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-header video-banner">
				<div class="overlay"></div>	

				<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
					<source src="{{ asset('img/video.mp4') }}" type="video/mp4">
				</video>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9 col-md-11 col-sm-12">
							<div class="inner-banner-text text-center">
								<h1 class="text-light">Discover A Beautiful<br>Place With Us</h1>
								<p class="text-light">Would you explore nature paradise in the world, let't find the best property in California withus.</p>
							</div>
							<div class="search-from-clasic mt-5">
								<div class="hero-search-content">
									<form action="{{ route('search') }}" method="get">
										<div class="row">
										{{-- <form method="GET" action="/search"> --}}
											<div class="col-xl-10 col-lg-10 col-md-9 col-sm-12 pe-xl-0 pe-lg-0 pe-md-0">
												<div class="classic-search-box">
													<div class="form-group full">
														<div class="input-with-icon">
															<input id="location" type="text" class="form-control" list="locationsList" placeholder="Search for a city">
															<div id="location-options" class="nice-select form-control" style="display: none;" tabindex="0">
																<datalist id="locationsList" class="list select-options">
																	{{-- <option data-value="" class="option selected">&nbsp;</li> --}}
																</datalist>
															</div>
															<img src="{{ asset('img/pin.svg') }}" width="20" alt="">
														</div>
													</div>
													<div class="form-group">
														<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#filter" class="btn btn-filter-search"><i class="fa-solid fa-filter"></i>Filter</a>
													</div>
												</div>
											</div>
										
											<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12">
												<div class="form-group">
													<button type="submit" class="btn btn-primary full-width">Search</button>
												</div>
											</div>
										
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Our Partners Start ================================== -->
			<div class="clearfix"></div>
			<!-- ============================ Our Partners End ================================== -->
			
			<!-- ============================ Latest Property For Sale Start ================================== -->
			<section class="mid">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 text-center">
							<div class="sec-heading center mb-4">
								<h2>Recent Property</h2>
								<p> we bring you the most desirable properties on the market. Discover our collection of exquisite homes and investment opportunities, including our latest addition</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center gx-3 gy-4">
						
						{{-- for each property in properties --}}
						@foreach ($properties as $propety )
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
								<div class="veshm-list-wraps">
									@if ($propety->isSell == 'rent')
										<div class="veshm-type">
											<span>For {{ $propety->isSell }}</span>
										</div>
										@elseif ($propety->isSell == 'sell')
											<div class="veshm-type fr-sale">
												<span>For {{ $propety->isSell }}</span>
											</div>
									@endif
									
									<div class="veshm-list-thumb">
										{{-- <button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button> --}}
										<div class="veshm-list-img-slide">
											<div class="veshm-list-click">
												<div><a href="single-property-1.html"><img src="{{ asset('img/prt-1.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												<div><a href="single-property-1.html"><img src="{{ asset('img/prt-9.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												<div><a href="single-property-1.html"><img src="{{ asset('img/prt-10.png') }}" class="img-fluid mx-auto" alt=""></a></div>
											</div>
										</div>
									</div>
									<div class="veshm-list-block">
										{{-- <div class="veshm-tags trending"><span><i class="fa-solid fa-meteor"></i>Trending</span></div> --}}
										<div class="veshm-list-head">
											<div class="veshm-list-head-caption">
												<div class="rlhc-price">
													<h4 class="rlhc-price-name theme-cl">{{ (int)$propety->price }}
														@if ($propety->isSell == 'rent')
															<span class="monthly">/Months</span>
														@endif
													</h4>
												</div>
												<div class="listing-short-detail-flex">
													<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">{{ \Illuminate\Support\Str::limit($propety->title, $limit = 35, $end = '...') }}</a></h5>
													<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">{{ \Illuminate\Support\Str::limit($propety->address, $limit = 25, $end = '...') }}</div>
												</div>
											</div>
											<div class="veshm-list-head-flex">
												{{-- <button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	 --}}
											</div>
										</div>
										
										<div class="veshm-list-footer">
											<div class="veshm-list-circls">
												<ul>
													<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>{{  (int)$propety->Bedrooms }} Bed</li>
													<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>{{  (int)$propety->bathrooms }} Ba</li>
													<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>{{ (int)$propety->size }} Sft</li>
												</ul>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						@endforeach
					</div>
					
				</div>
			</section>
			<!-- ============================ Latest Property For Sale End ================================== -->
			
			<!-- ============================ Better Services ================================== -->
			<section class="classic-bg">
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 text-center">
							<div class="sec-heading center light">
								<h2>We Provide Better Services For You</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores qui blanditiis praesentium.</p>
							</div>
						</div>
					</div>
				
					<div class="row gy-5">
					
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="veshm-servs-box light">
								<div class="veshm-servs-box-icon">
									<div class="veshm-posted-figure"><i class="fa-solid fa-house-circle-check"></i></div>
								</div>
								<div class="veshm-servs-box-caption">
									<h4>Buy properties</h4>
									<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae qui blanditiis praesentium.</p>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="veshm-servs-box light">
								<div class="veshm-servs-box-icon">
									<div class="veshm-posted-figure"><i class="fa-solid fa-house-user"></i></div>
								</div>
								<div class="veshm-servs-box-caption">
									<h4>Sell Your House</h4>
									<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae qui blanditiis praesentium.</p>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="veshm-servs-box light">
								<div class="veshm-servs-box-icon">
									<div class="veshm-posted-figure"><i class="fa-solid fa-fire-flame-curved"></i></div>
								</div>
								<div class="veshm-servs-box-caption">
									<h4>High Quality</h4>
									<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae qui blanditiis praesentium.</p>
								</div>
							</div>
						</div>
						
						<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
							<div class="veshm-servs-box light">
								<div class="veshm-servs-box-icon">
									<div class="veshm-posted-figure"><i class="fa-solid fa-lira-sign"></i></div>
								</div>
								<div class="veshm-servs-box-caption">
									<h4>Friendly Price</h4>
									<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae qui blanditiis praesentium.</p>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>		
			</section>
			<!-- ============================ Better Services ================================== -->
			
			<!-- ============================ Select Your City ================================== -->
			<section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-8 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Select Your City</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
				
					<div class="row g-xl-3 g-lg-3">
					
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="veshm-location-prt">
								<div class="veshm-location-lists">32 Lists</div>
								<a href="search-property.html" class="veshm-location-figure">
									<img src="{{ asset('img/c-1.png') }}" class="img-fluid" alt="">
								</a>
								<div class="veshm-location-content">
									<h4>California, USA</h4>
									<div class="vesh-aget-rates">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<span class="resy-98">322 Reviews</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="veshm-location-prt">
								<div class="veshm-location-lists">22 Lists</div>
								<a href="search-property.html" class="veshm-location-figure">
									<img src="{{ asset('img/dubai.jpg') }}" class="img-fluid" alt="">
								</a>
								<div class="veshm-location-content">
									<h4>Dubai , UAE</h4>
									<div class="vesh-aget-rates">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<span class="resy-98">410 Reviews</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="veshm-location-prt">
								<div class="veshm-location-lists">52 Lists</div>
								<a href="search-property.html" class="veshm-location-figure">
									<img src="{{ asset('img/c-3.png') }}" class="img-fluid" alt="">
								</a>
								<div class="veshm-location-content">
									<h4>Washington, USA</h4>
									<div class="vesh-aget-rates">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<span class="resy-98">340 Reviews</span>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
							<div class="veshm-location-prt">
								<div class="veshm-location-lists">42 Lists</div>
								<a href="search-property.html" class="veshm-location-figure">
									<img src="{{ asset('img/c-4.png') }}" class="img-fluid" alt="">
								</a>
								<div class="veshm-location-content">
									<h4>Liverpool, UK</h4>
									<div class="vesh-aget-rates">
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<i class="fa-solid fa-star"></i>
										<span class="resy-98">512 Reviews</span>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="JavaScript:Void(0);" class="btn btn-outline-gray">Explore More Cities<i class="fa-regular fa-circle-right ms-2"></i></a>
						</div>
					</div>
					
				</div>		
			</section>
			<!-- ============================ Select Your City ================================== -->
			
			<!-- ============================ Explore Egents ================================== -->
			{{-- <section class="gray">
				<div class="container">
					
					<div class="row align-items-center">
						
						<div class="col-xl-4 col-lg-4 col-md-12">
							<div class="sec-heading">
								<h2 class="mb-3">Browse Agents</h2>
								<p class="text-paragraph">At vero eos et accusamus et iusto odio more dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
							</div>
						</div>
						
						<div class="col-xl-8 col-lg-8 col-md-12">
							<div class="side-slide">
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-agent-wrap">
										<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>
										<div class="veshm-list-75"><span>23 Property</span></div>
										<div class="veshm-agent-thumb">
											<img src="{{ asset('img/user-1.png') }}" class="img-fluid circle" alt="">
										</div>
										<div class="veshm-agent-content">
											<h4 class="vesh-content-title">Amber M. Felton</h4>
											<div class="vesh-aget-rates">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<span class="resy-98">410 Reviews</span>
											</div>
											<div class="vesh-contact">
												<a href="agent-detail.html" class="btn rounded btn-light-success full-width">Contact Agent</a>	
											</div>
										</div>
										<div class="veshm-agent-footer">
											<div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool</div>
											<div class="veshm-agent-social">
												<ul>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-agent-wrap">
										<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>
										<div class="veshm-list-75"><span>62 Property</span></div>
										<div class="veshm-agent-thumb">
											<img src="{{ asset('img/user-2.png') }}" class="img-fluid circle" alt="">
										</div>
										<div class="veshm-agent-content">
											<h4 class="vesh-content-title">Agnes R. Boggess</h4>
											<div class="vesh-aget-rates">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<span class="resy-98">143 Reviews</span>
											</div>
											<div class="vesh-contact">
												<a href="agent-detail.html" class="btn rounded btn-light-success full-width">Contact Agent</a>	
											</div>
										</div>
										<div class="veshm-agent-footer">
											<div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool</div>
											<div class="veshm-agent-social">
												<ul>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-agent-wrap">
										<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>
										<div class="veshm-list-75"><span>84 Property</span></div>
										<div class="veshm-agent-thumb">
											<img src="{{ asset('img/user-3.png') }}" class="img-fluid circle" alt="">
										</div>
										<div class="veshm-agent-content">
											<h4 class="vesh-content-title">Elizabeth A. Sanchez</h4>
											<div class="vesh-aget-rates">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<span class="resy-98">216 Reviews</span>
											</div>
											<div class="vesh-contact">
												<a href="agent-detail.html" class="btn rounded btn-light-success full-width">Contact Agent</a>	
											</div>
										</div>
										<div class="veshm-agent-footer">
											<div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool</div>
											<div class="veshm-agent-social">
												<ul>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-agent-wrap">
										<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>
										<div class="veshm-list-75"><span>34 Property</span></div>
										<div class="veshm-agent-thumb">
											<img src="{{ asset('img/user-4.png') }}" class="img-fluid circle" alt="">
										</div>
										<div class="veshm-agent-content">
											<h4 class="vesh-content-title">Jerry E. Middleton</h4>
											<div class="vesh-aget-rates">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<span class="resy-98">147 Reviews</span>
											</div>
											<div class="vesh-contact">
												<a href="agent-detail.html" class="btn rounded btn-light-success full-width">Contact Agent</a>	
											</div>
										</div>
										<div class="veshm-agent-footer">
											<div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool</div>
											<div class="veshm-agent-social">
												<ul>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-agent-wrap">
										<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>
										<div class="veshm-list-75"><span>89 Property</span></div>
										<div class="veshm-agent-thumb">
											<img src="{{ asset('img/user-5.png') }}" class="img-fluid circle" alt="">
										</div>
										<div class="veshm-agent-content">
											<h4 class="vesh-content-title">Lamont B. Morrissey</h4>
											<div class="vesh-aget-rates">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<span class="resy-98">432 Reviews</span>
											</div>
											<div class="vesh-contact">
												<a href="agent-detail.html" class="btn rounded btn-light-success full-width">Contact Agent</a>	
											</div>
										</div>
										<div class="veshm-agent-footer">
											<div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool</div>
											<div class="veshm-agent-social">
												<ul>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-agent-wrap">
										<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>
										<div class="veshm-list-75"><span>22 Property</span></div>
										<div class="veshm-agent-thumb">
											<img src="{{ asset('img/user-6.png') }}" class="img-fluid circle" alt="">
										</div>
										<div class="veshm-agent-content">
											<h4 class="vesh-content-title">Bryan H. Radley</h4>
											<div class="vesh-aget-rates">
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<i class="fa-solid fa-star"></i>
												<span class="resy-98">370 Reviews</span>
											</div>
											<div class="vesh-contact">
												<a href="agent-detail.html" class="btn rounded btn-light-success full-width">Contact Agent</a>	
											</div>
										</div>
										<div class="veshm-agent-footer">
											<div class="rlhc-prt-location"><i class="fa-solid fa-location-dot me-1"></i>Liverpool</div>
											<div class="veshm-agent-social">
												<ul>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook-f"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-instagram"></i></a></li>
													<li><a href="JavaScript:Void(0);"><i class="fa-brands fa-linkedin-in"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section> --}}
			<!-- ============================ Explore Egents End ================================== -->
			
			<!-- ============================ Good Reviews By Customers ================================== -->
			{{-- <section>
				<div class="container">
				
					<div class="row justify-content-center">
						<div class="col-lg-7 col-md-10 text-center">
							<div class="sec-heading center">
								<h2>Good Reviews By Customers</h2>
								<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores</p>
							</div>
						</div>
					</div>
					
					<div class="row justify-content-center gx-4 gy-4">
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="veshm-reviews-box">
								<div class="veshm-reviews-flex">
									<div class="veshm-reviews-thumb">
										<div class="veshm-reviews-figure"><img src="{{ asset('img/team-1.jpg') }}" class="img-fluid circle" alt=""></div>
									</div>
									<div class="veshm-reviews-caption">
										<div class="veshm-reviews-title"><h4>Lucia E. Nugent</h4></div>
										<div class="veshm-reviews-designation"><span>CEO of Climber</span></div>
										<div class="veshm-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star deactive"></i>
										</div>
									</div>
								</div>
								<div class="veshm-reviews-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
									<figure class="mt-2 mb-0"><img src="{{ asset('img/brand/a.webp') }}" class="img-fluid" width="120" alt=""></figure>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="veshm-reviews-box">
								<div class="veshm-reviews-flex">
									<div class="veshm-reviews-thumb">
										<div class="veshm-reviews-figure"><img src="{{ asset('img/team-2.jpg') }}" class="img-fluid circle" alt=""></div>
									</div>
									<div class="veshm-reviews-caption">
										<div class="veshm-reviews-title"><h4>Brenda R. Smith</h4></div>
										<div class="veshm-reviews-designation"><span>Founder of Yeloower</span></div>
										<div class="veshm-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>
								</div>
								<div class="veshm-reviews-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
									<figure class="mt-2 mb-0"><img src="{{ asset('img/brand/b.webp') }}" class="img-fluid" width="120" alt=""></figure>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="veshm-reviews-box">
								<div class="veshm-reviews-flex">
									<div class="veshm-reviews-thumb">
										<div class="veshm-reviews-figure"><img src="{{ asset('img/team-3.jpg') }}" class="img-fluid circle" alt=""></div>
									</div>
									<div class="veshm-reviews-caption">
										<div class="veshm-reviews-title"><h4>Brian B. Wilkerson</h4></div>
										<div class="veshm-reviews-designation"><span>CEO of Mark Soft</span></div>
										<div class="veshm-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>
								</div>
								<div class="veshm-reviews-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
									<figure class="mt-2 mb-0"><img src="{{ asset('img/brand/c.webp') }}" class="img-fluid" width="120" alt=""></figure>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="veshm-reviews-box">
								<div class="veshm-reviews-flex">
									<div class="veshm-reviews-thumb">
										<div class="veshm-reviews-figure"><img src="{{ asset('img/team-4.jpg') }}" class="img-fluid circle" alt=""></div>
									</div>
									<div class="veshm-reviews-caption">
										<div class="veshm-reviews-title"><h4>Miguel L. Benbow</h4></div>
										<div class="veshm-reviews-designation"><span>Founder of Mitche LTD</span></div>
										<div class="veshm-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star deactive"></i>
										</div>
									</div>
								</div>
								<div class="veshm-reviews-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
									<figure class="mt-2 mb-0"><img src="{{ asset('img/brand/h.webp') }}" class="img-fluid" width="120" alt=""></figure>
								</div>
							</div>
						</div>
						
						<!-- Single Review -->
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="veshm-reviews-box">
								<div class="veshm-reviews-flex">
									<div class="veshm-reviews-thumb">
										<div class="veshm-reviews-figure"><img src="{{ asset('img/team-5.jpg') }}" class="img-fluid circle" alt=""></div>
									</div>
									<div class="veshm-reviews-caption">
										<div class="veshm-reviews-title"><h4>Hilda A. Sheppard</h4></div>
										<div class="veshm-reviews-designation"><span>CEO of Doodle</span></div>
										<div class="veshm-reviews-rates">
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
											<i class="fa-solid fa-star"></i>
										</div>
									</div>
								</div>
								<div class="veshm-reviews-desc">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
									<figure class="mt-2 mb-0"><img src="{{ asset('img/brand/g.webp') }}" class="img-fluid" width="120" alt=""></figure>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>	
			</section> --}}
			<!-- ============================ Good Reviews By Customers ================================== -->						
			
			<!-- ============================ Call To Action ================================== -->
			<section class="bg-cover call-action-container dark" style="background:#181823 url({{ asset('img/footer-bg-dark.png') }})no-repeat;">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-7 col-lg-10 col-md-12 col-sm-12">
							
							<div class="call-action-wrap">
								<div class="call-action-caption">
									<h2 class="text-light">Are You Already Working With Us?</h2>
									<p class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias</p>
								</div>
								<div class="call-action-form">
									<form>
										<div class="newsltr-form">
											<input type="text" class="form-control" placeholder="Enter Your email">
											<button type="button" class="btn btn-subscribe">Subscribe</button>
										</div>
									</form>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Call To Action End ================================== -->
			
			<!-- ============================ Footer Start ================================== -->
			<footer class="skin-light-footer">
				<div>
					<div class="container">
						<div class="row">
							
							<div class="col-lg-3 col-md-4">
								<div class="footer-widget">
									<img src="{{ asset('img/logo.png') }}" class="img-footer" alt="">
									<div class="footer-add">
										<p>The agency adress.</p>
										<p><span class="ftp-info"><i class="fa fa-phone" aria-hidden="true"></i>+1 123-456878</span></p>
										<p><span class="ftp-info"><i class="fa fa-envelope" aria-hidden="true"></i>info@asplarose.com</span></p>
									</div>
									
								</div>
							</div>		
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Navigations</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQs Page</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">The Highlights</h4>
									<ul class="footer-menu">
										<li><a href="JavaScript:Void(0);">Apartment</a></li>
										<li><a href="JavaScript:Void(0);">Houses</a></li>
										{{-- <li><a href="JavaScript:Void(0);">Restaurant</a></li> --}}
										{{-- <li><a href="JavaScript:Void(0);">Nightlife</a></li> --}}
										<li><a href="JavaScript:Void(0);">Villas</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">My Account</h4>
									<ul class="footer-menu">
										{{-- <li><a href="JavaScript:Void(0);">My Profile</a></li> --}}
										{{-- <li><a href="JavaScript:Void(0);">My account</a></li> --}}
										<li><a href="JavaScript:Void(0);">Properties</a></li>
										<li><a href="JavaScript:Void(0);">Favorites</a></li>
										<li><a href="JavaScript:Void(0);">Cart</a></li>
									</ul>
								</div>
							</div>
							
							{{-- <div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Download Apps</h4>	
									<div class="app-wrap">
										<p><a href="JavaScript:Void(0);"><img src="{{ asset('img/light-play.png') }}" class="img-fluid" alt=""></a></p>
										<p><a href="JavaScript:Void(0);"><img src="{{ asset('img/light-ios.png') }}" class="img-fluid" alt=""></a></p>
									</div>
								</div>
							</div> --}}
							
						</div>
					</div>
				</div>
				
				{{-- <div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							
							<div class="col-lg-12 col-md-12">
								<p class="mb-0">© 2023 Veshm. Designd By <a href="#">Themez Hub</a> All Rights Reserved</p>
							</div>
							
						</div>
					</div>
				</div> --}}
			</footer>
			<!-- ============================ Footer End ================================== -->
			<!-- Filter Modal -->
			<div class="modal fade" id="filter" tabindex="-1" role="dialog" aria-labelledby="filtermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered filter-popup" role="document">
					<div class="modal-content" id="filtermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-header">
							<h4 class="modal-header-sub-title">Start Your <span class="theme-cl">Filter</span></h4>
						</div>
						<div class="modal-body p-0">
							<div class="filter-header">
								<ul class="nav nav-tabs" id="filTab" role="tablist">
									<li class="nav-item" role="presentation">
									<button class="nav-link active" id="buy-tab" data-bs-toggle="tab" data-bs-target="#buy" type="button" role="tab" aria-controls="buy" aria-selected="true">Buy</button>
									</li>
									<li class="nav-item" role="presentation">
									<button class="nav-link" id="rent-tab" data-bs-toggle="tab" data-bs-target="#rent" type="button" role="tab" aria-controls="rent" aria-selected="false">Rent</button>
									</li>
									<li class="nav-item" role="presentation">
									<button class="nav-link" id="sold-tab" data-bs-toggle="tab" data-bs-target="#sold" type="button" role="tab" aria-controls="sold" aria-selected="false">Sold</button>
									</li>
								</ul>
							</div>
							<div class="filter-content">
								<div class="tab-content" id="filTabContent">
									<div class="tab-pane fade show active" id="buy" role="tabpanel" aria-labelledby="buy-tab">
										<div class="full-tabs-group">
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Select Property Types</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-1" class="form-check-input" name="a-1" type="checkbox">
																<label for="a-1" class="form-check-label">All types</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-2" class="form-check-input" name="a-2" type="checkbox">
																<label for="a-2" class="form-check-label">House</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-3" class="form-check-input" name="a-3" type="checkbox">
																<label for="a-3" class="form-check-label">Apartment & Unit</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-4" class="form-check-input" name="a-4" type="checkbox">
																<label for="a-4" class="form-check-label">Townhouse</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-5" class="form-check-input" name="a-5" type="checkbox">
																<label for="a-5" class="form-check-label">Villa</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-6" class="form-check-input" name="a-6" type="checkbox">
																<label for="a-6" class="form-check-label">Land</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-7" class="form-check-input" name="a-7" type="checkbox">
																<label for="a-7" class="form-check-label">Acreage</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-8" class="form-check-input" name="a-8" type="checkbox">
																<label for="a-8" class="form-check-label">Rural</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-9" class="form-check-input" name="a-9" type="checkbox">
																<label for="a-9" class="form-check-label">Block Of Units</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a-10" class="form-check-input" name="a-10" type="checkbox">
																<label for="a-10" class="form-check-label">Retirement Living</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Choose Price</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">$50,000</option>
																	<option value="2">$75,000</option>
																	<option value="3">$1000,000</option>
																	<option value="4">$125,000</option>
																	<option value="5">$150,000</option>
																	<option value="6">$175,000</option>
																	<option value="7">$2000,000</option>
																	<option value="8">$225,000</option>
																	<option value="9">$250,000</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">$50,000</option>
																	<option value="2">$75,000</option>
																	<option value="3">$1000,000</option>
																	<option value="4">$125,000</option>
																	<option value="5">$150,000</option>
																	<option value="6">$175,000</option>
																	<option value="7">$2000,000</option>
																	<option value="8">$225,000</option>
																	<option value="9">$250,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Bedrooms</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Bathrooms</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Outdoor features</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-1" class="form-check-input" name="s-1" type="checkbox">
																<label for="s-1" class="form-check-label">Swimming pool</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-2" class="form-check-input" name="s-2" type="checkbox">
																<label for="s-2" class="form-check-label">Garage</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-3" class="form-check-input" name="s-3" type="checkbox">
																<label for="s-3" class="form-check-label">Balcony</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-4" class="form-check-input" name="s-4" type="checkbox">
																<label for="s-4" class="form-check-label">Outdoor area</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-5" class="form-check-input" name="s-5" type="checkbox">
																<label for="s-5" class="form-check-label">Undercover parking</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-6" class="form-check-input" name="s-6" type="checkbox">
																<label for="s-6" class="form-check-label">Shed</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-7" class="form-check-input" name="s-7" type="checkbox">
																<label for="s-7" class="form-check-label">Fully fenced</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-8" class="form-check-input" name="s-8" type="checkbox">
																<label for="s-8" class="form-check-label">Outdoor spa</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-9" class="form-check-input" name="s-9" type="checkbox">
																<label for="s-9" class="form-check-label">Tennis court</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s-10" class="form-check-input" name="s-10" type="checkbox">
																<label for="s-10" class="form-check-label">Car Parking</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Indoor features</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-1" class="form-check-input" name="r-1" type="checkbox">
																<label for="r-1" class="form-check-label">Ensuite</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-2" class="form-check-input" name="r-2" type="checkbox">
																<label for="r-2" class="form-check-label">Dishwasher</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-3" class="form-check-input" name="r-3" type="checkbox">
																<label for="r-3" class="form-check-label">Study</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-4" class="form-check-input" name="r-4" type="checkbox">
																<label for="r-4" class="form-check-label">Built in robes</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-5" class="form-check-input" name="r-5" type="checkbox">
																<label for="r-5" class="form-check-label">Alarm system</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-6" class="form-check-input" name="r-6" type="checkbox">
																<label for="r-6" class="form-check-label">Broadband</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-7" class="form-check-input" name="r-7" type="checkbox">
																<label for="r-7" class="form-check-label">Floorboards</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-8" class="form-check-input" name="r-8" type="checkbox">
																<label for="r-8" class="form-check-label">Gym</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-9" class="form-check-input" name="r-9" type="checkbox">
																<label for="r-9" class="form-check-label">Rumpus room</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r-10" class="form-check-input" name="r-10" type="checkbox">
																<label for="r-10" class="form-check-label">Workshop</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Keywords</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Air con, pool, garage, solar, ensuite...">
													</div>
												</div>
											</div>
											
										</div>
									</div>
								  
									<div class="tab-pane fade" id="rent" role="tabpanel" aria-labelledby="rent-tab">
										<div class="full-tabs-group">
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Select Property Types</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-1" class="form-check-input" name="a1-1" type="checkbox">
																<label for="a1-1" class="form-check-label">All types</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-2" class="form-check-input" name="a1-2" type="checkbox">
																<label for="a1-2" class="form-check-label">House</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-3" class="form-check-input" name="a1-3" type="checkbox">
																<label for="a1-3" class="form-check-label">Apartment & Unit</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-4" class="form-check-input" name="a1-4" type="checkbox">
																<label for="a1-4" class="form-check-label">Townhouse</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-5" class="form-check-input" name="a1-5" type="checkbox">
																<label for="a1-5" class="form-check-label">Villa</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-6" class="form-check-input" name="a1-6" type="checkbox">
																<label for="a1-6" class="form-check-label">Land</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-7" class="form-check-input" name="a1-7" type="checkbox">
																<label for="a1-7" class="form-check-label">Acreage</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-8" class="form-check-input" name="a1-8" type="checkbox">
																<label for="a1-8" class="form-check-label">Rural</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-9" class="form-check-input" name="a1-9" type="checkbox">
																<label for="a1-9" class="form-check-label">Block Of Units</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a1-10" class="form-check-input" name="a1-10" type="checkbox">
																<label for="a1-10" class="form-check-label">Retirement Living</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Choose Price</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">$50,000</option>
																	<option value="2">$75,000</option>
																	<option value="3">$1000,000</option>
																	<option value="4">$125,000</option>
																	<option value="5">$150,000</option>
																	<option value="6">$175,000</option>
																	<option value="7">$2000,000</option>
																	<option value="8">$225,000</option>
																	<option value="9">$250,000</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">$50,000</option>
																	<option value="2">$75,000</option>
																	<option value="3">$1000,000</option>
																	<option value="4">$125,000</option>
																	<option value="5">$150,000</option>
																	<option value="6">$175,000</option>
																	<option value="7">$2000,000</option>
																	<option value="8">$225,000</option>
																	<option value="9">$250,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Bedrooms</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Bathrooms</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Outdoor features</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-1" class="form-check-input" name="s1-1" type="checkbox">
																<label for="s1-1" class="form-check-label">Swimming pool</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-2" class="form-check-input" name="s1-2" type="checkbox">
																<label for="s1-2" class="form-check-label">Garage</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-3" class="form-check-input" name="s1-3" type="checkbox">
																<label for="s1-3" class="form-check-label">Balcony</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-4" class="form-check-input" name="s1-4" type="checkbox">
																<label for="s1-4" class="form-check-label">Outdoor area</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-5" class="form-check-input" name="s1-5" type="checkbox">
																<label for="s1-5" class="form-check-label">Undercover parking</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-6" class="form-check-input" name="s1-6" type="checkbox">
																<label for="s1-6" class="form-check-label">Shed</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-7" class="form-check-input" name="s1-7" type="checkbox">
																<label for="s1-7" class="form-check-label">Fully fenced</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-8" class="form-check-input" name="s1-8" type="checkbox">
																<label for="s1-8" class="form-check-label">Outdoor spa</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-9" class="form-check-input" name="s1-9" type="checkbox">
																<label for="s1-9" class="form-check-label">Tennis court</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s1-10" class="form-check-input" name="s1-10" type="checkbox">
																<label for="s1-10" class="form-check-label">Car Parking</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Indoor features</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-1" class="form-check-input" name="r1-1" type="checkbox">
																<label for="r1-1" class="form-check-label">Ensuite</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-2" class="form-check-input" name="r1-2" type="checkbox">
																<label for="r1-2" class="form-check-label">Dishwasher</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-3" class="form-check-input" name="r1-3" type="checkbox">
																<label for="r1-3" class="form-check-label">Study</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-4" class="form-check-input" name="r1-4" type="checkbox">
																<label for="r1-4" class="form-check-label">Built in robes</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-5" class="form-check-input" name="r1-5" type="checkbox">
																<label for="r1-5" class="form-check-label">Alarm system</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-6" class="form-check-input" name="r1-6" type="checkbox">
																<label for="r1-6" class="form-check-label">Broadband</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-7" class="form-check-input" name="r1-7" type="checkbox">
																<label for="r1-7" class="form-check-label">Floorboards</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-8" class="form-check-input" name="r1-8" type="checkbox">
																<label for="r1-8" class="form-check-label">Gym</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-9" class="form-check-input" name="r1-9" type="checkbox">
																<label for="r1-9" class="form-check-label">Rumpus room</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r1-10" class="form-check-input" name="r1-10" type="checkbox">
																<label for="r1-10" class="form-check-label">Workshop</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Keywords</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Air con, pool, garage, solar, ensuite...">
													</div>
												</div>
											</div>
											
										</div>
									</div>
								  
									<div class="tab-pane fade" id="sold" role="tabpanel" aria-labelledby="sold-tab">
										<div class="full-tabs-group">
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Select Property Types</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-1" class="form-check-input" name="a2-1" type="checkbox">
																<label for="a2-1" class="form-check-label">All types</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-2" class="form-check-input" name="a2-2" type="checkbox">
																<label for="a2-2" class="form-check-label">House</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-3" class="form-check-input" name="a2-3" type="checkbox">
																<label for="a2-3" class="form-check-label">Apartment & Unit</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-4" class="form-check-input" name="a2-4" type="checkbox">
																<label for="a2-4" class="form-check-label">Townhouse</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-5" class="form-check-input" name="a2-5" type="checkbox">
																<label for="a2-5" class="form-check-label">Villa</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-6" class="form-check-input" name="a2-6" type="checkbox">
																<label for="a2-6" class="form-check-label">Land</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-7" class="form-check-input" name="a2-7" type="checkbox">
																<label for="a2-7" class="form-check-label">Acreage</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-8" class="form-check-input" name="a2-8" type="checkbox">
																<label for="a2-8" class="form-check-label">Rural</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-9" class="form-check-input" name="a2-9" type="checkbox">
																<label for="a2-9" class="form-check-label">Block Of Units</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="a2-10" class="form-check-input" name="a2-10" type="checkbox">
																<label for="a2-10" class="form-check-label">Retirement Living</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Choose Price</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">$50,000</option>
																	<option value="2">$75,000</option>
																	<option value="3">$1000,000</option>
																	<option value="4">$125,000</option>
																	<option value="5">$150,000</option>
																	<option value="6">$175,000</option>
																	<option value="7">$2000,000</option>
																	<option value="8">$225,000</option>
																	<option value="9">$250,000</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">$50,000</option>
																	<option value="2">$75,000</option>
																	<option value="3">$1000,000</option>
																	<option value="4">$125,000</option>
																	<option value="5">$150,000</option>
																	<option value="6">$175,000</option>
																	<option value="7">$2000,000</option>
																	<option value="8">$225,000</option>
																	<option value="9">$250,000</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Bedrooms</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Bathrooms</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="row">
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Min</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
														<div class="col-xl-6 col-lg-6 col-md-6 col-12">
															<div class="form-group">
																<label>Max</label>
																<select class="select-normal">
																	<option value="0">Any</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Outdoor features</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-1" class="form-check-input" name="s2-1" type="checkbox">
																<label for="s2-1" class="form-check-label">Swimming pool</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-2" class="form-check-input" name="s2-2" type="checkbox">
																<label for="s2-2" class="form-check-label">Garage</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-3" class="form-check-input" name="s2-3" type="checkbox">
																<label for="s2-3" class="form-check-label">Balcony</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-4" class="form-check-input" name="s2-4" type="checkbox">
																<label for="s2-4" class="form-check-label">Outdoor area</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-5" class="form-check-input" name="s2-5" type="checkbox">
																<label for="s2-5" class="form-check-label">Undercover parking</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-6" class="form-check-input" name="s2-6" type="checkbox">
																<label for="s2-6" class="form-check-label">Shed</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-7" class="form-check-input" name="s2-7" type="checkbox">
																<label for="s2-7" class="form-check-label">Fully fenced</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-8" class="form-check-input" name="s2-8" type="checkbox">
																<label for="s2-8" class="form-check-label">Outdoor spa</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-9" class="form-check-input" name="s2-9" type="checkbox">
																<label for="s2-9" class="form-check-label">Tennis court</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="s2-10" class="form-check-input" name="s2-10" type="checkbox">
																<label for="s2-10" class="form-check-label">Car Parking</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Indoor features</h5></div>
												
												<div class="single-tabs-group-content">
													<ul class="row p-0 m-0">
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-1" class="form-check-input" name="r2-1" type="checkbox">
																<label for="r2-1" class="form-check-label">Ensuite</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-2" class="form-check-input" name="r2-2" type="checkbox">
																<label for="r2-2" class="form-check-label">Dishwasher</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-3" class="form-check-input" name="r2-3" type="checkbox">
																<label for="r2-3" class="form-check-label">Study</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-4" class="form-check-input" name="r2-4" type="checkbox">
																<label for="r2-4" class="form-check-label">Built in robes</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-5" class="form-check-input" name="r2-5" type="checkbox">
																<label for="r2-5" class="form-check-label">Alarm system</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-6" class="form-check-input" name="r2-6" type="checkbox">
																<label for="r2-6" class="form-check-label">Broadband</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-7" class="form-check-input" name="r2-7" type="checkbox">
																<label for="r2-7" class="form-check-label">Floorboards</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-8" class="form-check-input" name="r2-8" type="checkbox">
																<label for="r2-8" class="form-check-label">Gym</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-9" class="form-check-input" name="r2-9" type="checkbox">
																<label for="r2-9" class="form-check-label">Rumpus room</label>
															</div>
														</li>
														<li class="col-lg-6 col-md-6 p-0">
															<div class="form-check form-check-inline">
																<input id="r2-10" class="form-check-input" name="r2-10" type="checkbox">
																<label for="r2-10" class="form-check-label">Workshop</label>
															</div>
														</li>
													</ul>
												</div>
											</div>
											<div class="single-tabs-group">
												<div class="single-tabs-group-header"><h5>Keywords</h5></div>
												
												<div class="single-tabs-group-content">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Air con, pool, garage, solar, ensuite...">
													</div>
												</div>
											</div>
											
										</div>
									</div>
								  
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="filt-buttons-updates">
								<button type="button" class="btn btn-dark">Clear Filter</button>
								<button type="button" class="btn btn-primary">Search</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/rangeslider.js') }}"></script>
		<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/slick.js') }}"></script>
		<script src="{{ asset('js/lightbox.js') }}"></script> 
		<script src="{{ asset('js/imagesloaded.js') }}"></script>
		<script src="{{ asset('js/dropzone.js') }}"></script>
		<script src="{{ asset('js/datedropper-javascript.js') }}"></script>
		
		<script>
			// search using an api and display the result as a dropdown list while typing in the search box
			$(document).ready(function(){
				$('#location').keyup(function(){
					var query = $(this).val();
					if(query != '')
					{
						var _token = $('input[name="_token"]').val();
						$.ajax({
							method: 'GET',
							url: 'https://api.api-ninjas.com/v1/city',
							headers: { 'X-Api-Key': 'yOUE/1+EAhss6sQtIkKJzQ==dWr5VcKdp7GeaZYO' },
							data: { name: query, limit: 15 },
							contentType: 'application/json',
							success: function(result) {
								var emptyVal = '';
								$('#locationsList').empty();
								$.each(result, function(index, city) {
									var cityCountry = city.name+ ' ,' + result[index].country;
									var option = $('<option>').attr('value', cityCountry );
									$('#locationsList').append(option);
									console.log(result);
								});
							},
							error: function ajaxError(jqXHR) {
								console.error('Error: ', jqXHR.responseText);
							}
						});
					}
				});
				$(document).on('click', 'li', function(){  
					$('#search').val($(this).text());  
					$('#searchList').fadeOut();  
				});  
			});
		</script>
		 
		<script src="{{ asset('js/custom.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>