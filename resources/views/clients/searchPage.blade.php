<!doctype html>
<html lang="en">

<!-- Mirrored from themezhub.net/veshm-demo/veshm/grid-full-style-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 17:33:41 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
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


			<!-- ============================ Page Title Start================================== -->
			<div class="page-title" style="background:#181823 url({{ asset('img/page-title.png') }}) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">


						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->

			<!-- ============================ All Property ================================== -->
			<section class="over-top micler gray-simple">

				<div class="container">
					<!-- Start Search -->
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12">
							<div class="full-search-2 mt-2">
								<div class="hero-search-content colored">

									<div class="row classic-search-box m-0 gx-2">

										<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
											<div class="form-group briod">
												<div class="input-with-icon">
													<input type="text" class="form-control" placeholder="Ex. villa, town etc.">
													<i class="fa-solid fa-magnifying-glass"></i>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
												<div class="form-group briod">
													<div class="input-with-icon">
														<select class="form-control">
															<option value="1">Property types</option>
															<option value="2">Townhome</option>
															<option value="3">Office & Studio</option>
															<option value="4">Apartments</option>
															<option value="5">Condos</option>
															<option value="6">Bungalow</option>
															<option value="7">Farmhouse</option>
															<option value="8">Tiny House</option>
														</select>
														<i class="fa-solid fa-house-crack"></i>
													</div>
												</div>
											</div>
										<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
											<div class="form-group">
												<div class="input-with-icon">
													<select class="form-control">
														<option value="1">Select City</option>
														<option value="2">Huntingdon</option>
														<option value="3">Fenland</option>
														<option value="4">Aylesbury</option>
														<option value="5">Amersham</option>
														<option value="6">Macclesfield</option>
														<option value="7">Congleton</option>
														<option value="8">UNantwich</option>
													</select>
													<i class="fa-solid fa-location-crosshairs"></i>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
											<div class="fliox-search-wiop">
												<div class="form-group me-2">
													<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#filter" class="btn btn-filter-search"><i class="fa-solid fa-filter"></i>Filter</a>
												</div>
												<div class="form-group">
													<button type="submit" class="btn btn-primary full-width">Search</button>
												</div>
											</div>
										</div>

									</div>

								</div>
							</div>
						</div>
					</div>

					<!-- Start Shorting -->
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="item-shorting-box mt-4 bg-white border rounded px-3 py-3 mb-5">
								<div class="item-shorting clearfix">
									<div class="left-column"><h4 class="m-0 text-dark font--medium"><span>8</span> Results Shown of {{ $results->count() }}</h4></div>
								</div>
								<div class="item-shorting-box-right">
									<div class="shorting-by">
										<select>
											<option value="0">Shorting By:</option>
											<option value="1">Low Price</option>
											<option value="2">High Price</option>
											<option value="3">Most Popular</option>
										</select>
									</div>
									<ul class="shorting-list">
										<li><a href="grid-full-style-1.html" class="active border"><i class="fas fa-table-cells-large"></i></a></li>
										<li><a href="list-full-style-1.html" class="border"><i class="fas fa-list"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<!-- Start All Listing -->
					<div class="row justify-content-center gx-3 gy-4">

						<!-- Single Property -->
						@php $counter = 0 @endphp
						@foreach ($results as $property)
							@if ($counter <8)
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
								<div class="veshm-list-wraps">
									@if ($property->isSell = 'rent')
										<div class="veshm-type"><span>For rent</span></div>
										@elseif ($property->isSell = 'sell')
										<div class="veshm-type fr-sale"><span>For sell></span></div>
									@endif

									<div class="veshm-list-thumb">
										{{-- <button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button> --}}
										<div class="veshm-list-img-slide">
											<div class="veshm-list-click">
												<div><a href="single-property-1.html"><img src="{{ asset('img/prt-2.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												<div><a href="single-property-1.html"><img src="{{ asset('img/prt-11.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												<div><a href="single-property-1.html"><img src="{{ asset('img/prt-10.png') }}" class="img-fluid mx-auto" alt=""></a></div>
											</div>
										</div>
									</div>
									<div class="veshm-list-block">
										<div class="veshm-list-head">
											<div class="veshm-list-head-caption">
												<div class="rlhc-price">
													@if ($property->isSell = 'rent')
														<h4 class="rlhc-price-name theme-cl">{{ $property->price }}<span class="monthly">/Months</span></h4>
														@elseif ($property->isSell = 'sell')
														<h4 class="rlhc-price-name theme-cl">{{ $property->price }}</h4>
													@endif
												</div>
												<div class="listing-short-detail-flex">
													<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">{{ \Illuminate\Support\Str::limit($property->title, $limit = 35, $end = '...') }}</a></h5>
													<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">{{ \Illuminate\Support\Str::limit($property->address, $limit = 25, $end = '...') }}</div>
												</div>
											</div>
											<div class="veshm-list-head-flex">
												{{-- <button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button> --}}
											</div>
										</div>

										<div class="veshm-list-footer">
											<div class="veshm-list-circls">
												<ul>
													<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>{{ (int)$property->Bedrooms }} Bed</li>
													<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>{{  (int)$property->bathrooms }} Ba</li>
													<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>{{ (int)$property->size }} Sft</li>
												</ul>
											</div>
										</div>
									</div>

								</div>
							</div>
							@endif
							@php $counter++ @endphp
						@endforeach

					</div>

					<div class="row" style="margin-top: 3vh">
						<div class="col-lg-12 col-md-12 col-sm-12 text-center">
							<a href="JavaScript:Void(0);" class="btn btn-outline-gray" style="background-color: #181823; color:wheat;">Explore More Properties<i class="fa-regular fa-circle-down ms-2"></i></a>
						</div>
					</div>

					<!-- Start Pagination -->
					{{-- <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<nav aria-label="Page navigation example">
								  <ul class="pagination">
									<li class="page-item">
									  <a class="page-link" href="JavaScript:Void(0);" aria-label="Previous">
										<span aria-hidden="true">&laquo;</span>
									  </a>
									</li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">2</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">3</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">4</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">5</a></li>
									<li class="page-item"><a class="page-link" href="JavaScript:Void(0);">6</a></li>
									<li class="page-item">
									  <a class="page-link" href="JavaScript:Void(0);" aria-label="Next">
										<span aria-hidden="true">&raquo;</span>
									  </a>
									</li>
								  </ul>
							</nav>
						</div>
					</div> --}}

				</div>
			</section>
			<!-- ============================ All Property ================================== -->

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

			<!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="loginmodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-header">
							<div class="mdl-thumb"><img src="{{ asset('img/ico.png') }}" class="img-fluid" width="70" alt=""></div>
							<div class="mdl-title"><h4 class="modal-header-title">Hello, Again</h4></div>
						</div>
						<div class="modal-body">
							<div class="modal-login-form">
								<form>

									<div class="form-floating mb-4">
										<input type="email" class="form-control" placeholder="name@example.com">
										<label>User Name</label>
									</div>

									<div class="form-floating mb-4">
										<input type="password" class="form-control" placeholder="Password">
										<label>Password</label>
									</div>

									<div class="form-group">
										<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
									</div>

									<div class="modal-flex-item mb-3">
										<div class="modal-flex-first">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
												<label class="form-check-label" for="savepassword">Save Password</label>
											</div>
										</div>
										<div class="modal-flex-last">
											<a href="JavaScript:Void(0);">Forget Password?</a>
										</div>
									</div>
								</form>
							</div>
							<div class="social-login">
								<ul>
									<li><a href="JavaScript:Void(0);" class="btn connect-fb"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
									<li><a href="JavaScript:Void(0);" class="btn connect-google"><i class="fa-brands fa-google"></i>Google+</a></li>
								</ul>
							</div>
						</div>
						<div class="modal-footer">
							<p>Don't have an account yet?<a href="signup.html" class="theme-cl font--bold ms-1">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->

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
		<script src="{{ asset('js/rangeslider.js')}}"></script>
		<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/slick.js') }}"></script>
		<script src="{{ asset('js/lightbox.js') }}"></script>
		<script src="{{ asset('js/imagesloaded.js') }}"></script>
		<script src="{{ asset('js/dropzone.js') }}"></script>
		<script src="{{ asset('js/datedropper-javascript.js') }}"></script>


		<script src="{{ asset('js/custom.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/veshm-demo/veshm/grid-full-style-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 17:33:41 GMT -->
</html>