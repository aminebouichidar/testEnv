<!doctype html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/veshm-demo/veshm/single-property-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 17:33:49 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Veshm - Residence & Real Estate HTML Template</title>
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
			<div class="header header-light head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="{{ route('home') }}">
								<img src="{{ asset('img/logo.png') }}" class="logo" alt="">
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li class="list-buttons">
										<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i class="fas fa-sign-in-alt me-2"></i>Log In</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">
								
								{{-- <li class="list-buttons border">
									<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i class="fas fa-sign-in-alt me-2"></i>Log In</a>
								</li> --}}
								<li class="list-buttons ms-2">
									{{-- <a href="signup.html"><i class="fas fa-user-alt me-2"></i>Sign Up</a> --}}
								</li>
							</ul>
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
			{{-- <div class="featured_slick_gallery gray">
				<div class="featured_slick_gallery-slide">
					@foreach ($property_asset as $property_assets)
						@php
							$imageUrl = Storage::url($property_assets->filename);
						@endphp
						<div class="featured_slick_padd"><a href="{{ asset('img/gallery-1.jpg') }}" class="mfp-gallery"><img src="{{ $imageUrl }} " class="img-fluid mx-auto" alt=""></a></div>
					@endforeach	
				</div>
			</div> --}}
			<div class="featured_slick_gallery gray">
				<div class="featured_slick_gallery-slide">
					@if (count($property_asset) == 0)
						<div class="featured_slick_padd">
							<a href="{{ asset('img/gallery-1.jpg') }}" class="mfp-gallery">
								<img src="{{ Storage::url($property_asset[0]->filename) }}" class="img-fluid mx-auto w-100" alt="">
							</a>
						</div>
					@else
						@foreach ($property_asset as $property_assets)
							<div class="featured_slick_padd">
								<a href="{{ Storage::url($property_assets->filename) }}" class="mfp-gallery">
									<img src="{{ Storage::url($property_assets->filename) }}" class="img-fluid mx-auto img_awesome" alt="">
								</a>
							</div>
						@endforeach	
					@endif
				</div>
			</div>
			
			{{-- <div class="featured_slick_gallery gray">
				<div class="featured_slick_gallery-slide">
					@foreach ($property_asset as $property_assets)
						<div class="featured_slick_padd">
							<a href="{{ Storage::url($property_assets->filename) }}" class="mfp-gallery">
								<img src="{{ Storage::url($property_assets->filename) }}" class="img-fluid mx-auto" alt="">
							</a>
						</div>
					@endforeach	
				</div>
			</div> --}}
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Property Detail Start ================================== -->
			<section class="gray-simple">
				<div class="container">
					<div class="row">
						
						<!-- property main detail -->
						<div class="col-lg-8 col-md-12 col-sm-12">
							
							<!-- Main Info Detail -->
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-headup">
									<div class="vesh-detail-headup-first">
										<div class="prt-detail-title-desc">
											@if ($property->isSell == 'rent')
												<span class="label label-warning">For Rent</span>
											@elseif ($property->isSell == 'sale')

											@else
												<span class="label label-success">For Sale</span>
											@endif
											{{-- <span class="label label-success">For Sale</span> --}}
											<h4>{{ $property->title }}</h4>
											{{-- <h4>Jannat Graynight Mood In Siver Colony, London</h4> --}}
											<span class="text-mid"><i class="fa-solid fa-location-dot me-2"></i>{{ $property->address }}</span>
											<div class="list-fx-features mt-2">
												<div class="list-fx-fisrt">
													<span class="label font--medium label-light-success me-2">{{ (int)$property->Bedrooms }} Beds</span>
													<span class="label font--medium label-light-info me-2">{{ (int)$property->bathrooms }} Bath</span>
													<span class=" label font--medium label-light-danger">{{ $property->size }} Sqft</span>
												</div>
												<div class="list-fx-last">
												
												</div>
											</div>
										</div>
									</div>
									<div class="vesh-detail-headup-last">
										<h3 class="prt-price-fix theme-cl">${{ $property->price }}<span></span></h3>
									</div>
								</div>
							</div>
							
							<!-- About Property Detail -->
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-bloc_header">
									<h4 class="property_block_title no-arrow">About Property</h4>
								</div>
								<div class="vesh-detail-bloc-body">
									<div class="row g-3">
										<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
											<p>{{ $property->description }}</p>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Basic Detail -->
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-bloc_header">
									<a data-bs-toggle="collapse" data-parent="#basicinfo" data-bs-target="#basicinfo" aria-controls="basicinfo" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Basic Detail</h4></a>
								</div>
								<div id="basicinfo" class="panel-collapse collapse show" aria-labelledby="basicinfo">
									<div class="vesh-detail-bloc-body">
										<div class="row g-3">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-bed"></i></div><div class="ilio-text">{{ (int)$property->Bedrooms  }} Bedrooms</div></div></div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-bath"></i></div><div class="ilio-text">{{ (int)$property->bathrooms  }} Bathrooms</div></div></div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-layer-group"></i></div><div class="ilio-text">{{ $property->size }} sq ft</div></div></div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-warehouse"></i></div><div class="ilio-text">1 Garage</div></div></div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-regular fa-building"></i></div><div class="ilio-text">{{ $property->type }}</div></div></div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-fan"></i></div><div class="ilio-text">Central A/C</div></div></div>
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-regular fa-snowflake"></i></div><div class="ilio-text">Forced Air</div></div></div>
											@foreach ($property_amenities as $amentPro)
												@if ($amentPro->amenity_id == 32 || $amentPro->amenity_id == 1)
													<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-bowl-food"></i></div><div class="ilio-text">Kitchen Facilities</div></div></div>
												@endif
											@endforeach
											@if ($property->floor =! null)
												<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-regular fa-building"></i></div><div class="ilio-text">{{ $property->floor }} Floor</div></div></div>
												
											@endif
										</div>
									</div>
								</div>
							</div>
							
							<!-- Amenties Detail -->
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-bloc_header">
									<a data-bs-toggle="collapse" data-parent="#amenitiesinfo" data-bs-target="#amenitiesinfo" aria-controls="amenitiesinfo" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Amenties</h4></a>
								</div>
								<div id="amenitiesinfo" class="panel-collapse collapse show" aria-labelledby="amenitiesinfo">
									<div class="vesh-detail-bloc-body">
										<ul class="avl-features third color">
											@foreach ($property_amenities as $amentPro)
												@if ($amentPro->amenity_id == 11)
													<li>Swimming Pool</li>
													@elseif ($amentPro->amenity_id == 28)
														<li>Central Heating</li>
													@elseif ($amentPro->amenity_id == 31)
														<li>Laundry Room</li>
													@elseif ($amentPro->amenity_id == 2)
														<li>Gym</li>
													@elseif ($amentPro->amenity_id == 27)
														<li>Alarm</li>
													@elseif ($amentPro->amenity_id == 24)
														<li>Window Covering</li>
													@elseif ($amentPro->amenity_id == 30 || $amentPro->amenity_id == 23)
														<li>Internet</li>
													@elseif ($amentPro->amenity_id == 26)
														<li>Pets Allow</li>
													@elseif ($amentPro->amenity_id == 25)
														<li>Car Parking</li>
												@endif
											@endforeach
										</ul>
									</div>
								</div>
							</div>
							
							
							<!-- All features Detail -->
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-bloc_header">
									<a data-bs-toggle="collapse" data-parent="#featuresinfo" data-bs-target="#featuresinfo" aria-controls="featuresinfo" href="javascript:void(0);" aria-expanded="false"><h4 class="property_block_title">Features</h4></a>
								</div>
								<div id="featuresinfo" class="panel-collapse collapse show" aria-labelledby="featuresinfo">
									<div class="vesh-detail-bloc-body">
										<div class="lvs-detail mb-4">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12"><h6>Interior Details</h6></div>
											</div>
											<div class="row gy-3">
												@foreach ($property_amenities as $amentPro)
													@if ($amentPro->amenity_id == 32 || $amentPro->amenity_id == 1)
														<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-utensils"></i>Equipped Kitchen</div></div>
														@elseif ($amentPro->amenity_id == 2)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-dumbbell"></i>Gym</div></div>
														@elseif ($amentPro->amenity_id == 5)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-jug-detergent"></i>Laundry</div></div>
														@elseif ($amentPro->amenity_id == 3)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-brands fa-chromecast"></i>Media Room</div></div>
														@elseif ($amentPro->amenity_id == 4)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-tv"></i>TV Set</div></div>
													@endif
												@endforeach
											</div>
										</div>
										<div class="lvs-detail mb-4">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12"><h6>Outdoor Details</h6></div>
											</div>
											<div class="row gy-3">
												@foreach ($property_amenities as $amentPro)
													@if ($amentPro->amenity_id == 32 || $amentPro->amenity_id == 6)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-brands fa-canadian-maple-leaf"></i>Back yard</div></div>
														@elseif ($amentPro->amenity_id == 7)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-basketball"></i>Basketball court</div></div>
														@elseif ($amentPro->amenity_id == 10)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-seedling"></i>Front yard</div></div>
														@elseif ($amentPro->amenity_id == 9)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-square-parking"></i>Garage Attached</div></div>
														@elseif ($amentPro->amenity_id == 8)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-shower"></i>Hot Bath</div></div>
														@elseif ($amentPro->amenity_id == 11)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-water-ladder"></i>Pool</div></div>
														@endif
												@endforeach
											</div>
										</div>
										<div class="lvs-detail mb-4">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12"><h6>Utilities</h6></div>
											</div>
											<div class="row gy-3">
												@foreach ($property_amenities as $amentPro)
													@if ($amentPro->amenity_id == 12)
														<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fan"></i>Central Air</div></div>
														@elseif ($amentPro->amenity_id == 14)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fire"></i>Heating</div></div>
														@elseif ($amentPro->amenity_id == 15 )
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fire-flame-simple"></i>Natural Gas</div></div>
														@elseif ($amentPro->amenity_id == 16)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-snowflake"></i>Ventilation</div></div>
														@endif
												@endforeach
											</div>
										</div>
										<div class="lvs-detail">
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12"><h6>Other Features</h6></div>
											</div>
											<div class="row gy-3">
												@foreach ($property_amenities as $amentPro)
													@if ($amentPro->amenity_id == 33)
													<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-wheelchair"></i>Chair Accessible</div></div>
														@elseif ($amentPro->amenity_id == 19)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-elevator"></i>Elevator</div></div>
														@elseif ($amentPro->amenity_id == 20)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fire-extinguisher"></i>Fireplace</div></div>
														@elseif ($amentPro->amenity_id == 21)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-smoking"></i>Smoke detectors</div></div>
														@elseif ($amentPro->amenity_id == 22)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-bacon"></i>Washer and dryer</div></div>
														@elseif ($amentPro->amenity_id == 23)
															<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-wifi"></i>WiFi</div></div>
														@endif
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>							
													
							<!-- Submit Reviews -->
							<div class="vesh-detail-bloc">
								<div class="vesh-detail-bloc_header">
									<h4 class="property_block_title no-arrow">Ask us about</h4>
								</div>
								<div class="panels">
									<div class="vesh-detail-bloc-body">
										<form class="simple-form">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Name</label>
														<input type="text" class="form-control" placeholder="Your Name">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Email</label>
														<input type="email" class="form-control" placeholder="Your eMail">
													</div>
												</div>
												
												<div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Phone No.</label>	
														<input type="text" class="form-control" placeholder="Your Contact">
													</div>
												</div>
												{{-- <div class="col-lg-6 col-md-6 col-sm-12">
													<div class="form-group">
														<label>Ratting</label>
														<select class="form-control">
															<option value="1">1 : Very Poor</option>
															<option value="2">2 : Poor</option>
															<option value="2">3 : Good</option>
															<option value="2">4 : Very Good</option>
															<option value="2">5 : Superb</option>
														</select>
													</div>
												</div> --}}
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<label>Your Message</label>
														<textarea class="form-control ht-80" placeholder="Messages"></textarea>
													</div>
												</div>
												<div class="col-lg-12 col-md-12 col-sm-12">
													<div class="form-group">
														<button class="btn btn-theme" type="submit">Submit</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
						<!-- property main detail -->
						
						
						<!-- Property Sidebar -->
						<div class="col-lg-4 col-md-12 col-sm-12">
							
							<!-- Like And Share -->
							{{-- <div class="vesh-detail-bloc">
								<ul class="like_share_list">
									<li><a href="JavaScript:Void(0);" class="btn btn-light-success" data-toggle="tooltip" data-original-title="Share"><i class="fa-solid fa-share-from-square me-2"></i>Share</a></li>
									<li><a href="JavaScript:Void(0);" class="btn btn-light-danger" data-toggle="tooltip" data-original-title="Save"><i class="fa-solid fa-heart-circle-check me-2"></i>Save</a></li>
									<li><a href="JavaScript:Void(0);" class="btn btn-light-primary" data-toggle="tooltip" data-original-title="Save"><i class="fa-solid fa-print me-2"></i>Print</a></li>
								</ul>
							</div> --}}
							
							<div class="pg-side-groups">
								
								{{-- <div class="pg-side-block">
									<div class="pg-side-block-head">
										<h5 class="mb-0">Book your Room</h5>
									</div>
									<div class="pg-side-block-body">
										<div class="pg-side-block-info pt-0 pb-4">
											<div class="sides-widget-body simple-form mt-2">
												<div class="form-row row">
													<div class="form-group col-6">
														<label class="font--bold">Check In</label>
														<input type="text" id="checkin" data-dd-opt-custom-class="datedrp" data-dd-opt-expanded-default="true" class="form-control" placeholder="Check IN">
													</div>
													<div class="form-group col-6">
														<label class="font--bold">Check Out</label>
														<input type="text" id="checkout" data-dd-opt-custom-class="datedrp" data-dd-opt-expanded-default="true" class="form-control" placeholder="Check Out">
													</div>
													<div class="form-group col-6">
														<label>Adults<span class="label label-success ms-1 px-2">$299/Per Day</span></label>
														<select class="form-control">
															<option value="1">01 Adults</option>
															<option value="2">02 Adults</option>
															<option value="3">03 Adults</option>
															<option value="4">04 Adults</option>
															<option value="5">05 Adults</option>
															<option value="6">06 Adults</option>
															<option value="7">07 Adults</option>
															<option value="8">08 Adults</option>
															<option value="9">09 Adults</option>
															<option value="10">10 Adults</option>
														</select>
													</div>
													<div class="form-group col-6">
														<label>Children</label>
														<select class="form-control">
															<option value="1">0 Adults</option>
															<option value="2">01 Adults</option>
															<option value="3">02 Adults</option>
															<option value="4">03 Adults</option>
															<option value="5">04 Adults</option>
															<option value="6">05 Adults</option>
															<option value="7">06 Adults</option>
															<option value="8">07 Adults</option>
															<option value="9">08 Adults</option>
															<option value="10">9 Adults</option>
															<option value="11">10 Adults</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-12">
														<h6>Add Custom Amenties</h6>
													</div>
													<div class="col-12">
														<input type="checkbox" class="btn-check" id="Conditioning">
														<label class="btn btn-md btn-outline-primary" for="Conditioning">Air Conditioning</label>
														
														<input type="checkbox" class="btn-check" id="Internet">
														<label class="btn btn-md btn-outline-primary" for="Internet">Internet</label>
														
														<input type="checkbox" class="btn-check" id="massage" checked>
														<label class="btn btn-md btn-outline-primary" for="massage">Spa & Massage</label>	
														
														<input type="checkbox" class="btn-check" id="Laundry">
														<label class="btn btn-md btn-outline-primary" for="Laundry">Laundry</label>
														
														<input type="checkbox" class="btn-check" id="Accessible" checked>
														<label class="btn btn-md btn-outline-primary" for="Accessible">Chair Accessible</label>
														
														<input type="checkbox" class="btn-check" id="yard">
														<label class="btn btn-md btn-outline-primary" for="yard">Front yard</label>

														<input type="checkbox" class="btn-check" id="Smoking" checked>
														<label class="btn btn-md btn-outline-primary" for="Smoking">Smoking</label>

														<input type="checkbox" class="btn-check" id="parking">
														<label class="btn btn-md btn-outline-primary" for="parking">Car Parking</label>

														<input type="checkbox" class="btn-check" id="Food">
														<label class="btn btn-md btn-outline-primary" for="Food">Fast Food</label>														
													</div>
												</div>
											</div>
											<div class="sides-widget-body simple-form">
												<div class="form-group">
													<label class="font--bold">Name*</label>
													<input type="text" class="form-control" placeholder="Your Name">
												</div>
												<div class="form-group">
													<label>Email*</label>
													<input type="text" class="form-control" placeholder="Your Email">
												</div>
												<div class="form-group">
													<label>Phone No.*</label>
													<input type="text" class="form-control" placeholder="Your Phone">
												</div>
												<div class="form-group">
													<label>Description</label>
													<textarea class="form-control">I'm interested in this property.</textarea>
												</div>
												
												<div class="form-group">
													<div class="booking-info-try rounded bg-light-success border border-success">
														<ul>
															<li><h6>Adults</h6><span>$299x4 = $1196</span></li>
															<li><h6>Children</h6><span>$0x4 = $00</span></li>
															<li><h6>Spa & Massage</h6><span>$29x4 = $116</span></li>
															<li><h6>Chair Accessible</h6><span>$50X4 = $200</span></li>
															<li><h6>Smoking</h6><span>$15x4 = $60</span></li>
															<li><h6 class="total-title">Total</h6><span class="total-price">$1760</span></li>
														</ul>
													</div>
												</div>
												
												<button class="btn btn-theme font--medium full-width">Submit & Book</button>
											</div>												
										</div>
									</div>
								</div> --}}
								
								<div class="pg-side-block">
									<div class="pg-side-block-head">
										<div class="pg-side-left">
											<div class="pg-side-thumb"><img src="https://media.licdn.com/dms/image/C4D03AQFS_2bgrfPlkg/profile-displayphoto-shrink_800_800/0/1622476454867?e=1689811200&v=beta&t=27B5UiyHAZ-mdsqO6g7PZSNbsUiWodUYh9F8I8RL-Pc" class="img-fluid circle" alt=""></div>
										</div>
										<div class="pg-side-right">
											<div class="pg-side-right-caption">
												<h4>La rose agency</h4>
												<span><i class="fa-solid fa-location-dot me-2"></i>Everywhere</span>
											</div>
										</div>
									</div>
									<div class="pg-side-block-body">
										<div class="pg-side-block-info">
											<div class="vl-elfo-group">
												<div class="vl-elfo-icon"><i class="fa-solid fa-phone-volume"></i></div>
												<div class="vl-elfo-caption"><h6>WhatsApp</h6><p><a href="https://wa.me/+1212345678" target="_blank">Contact us</a></p></div>
											</div>
											<div class="vl-elfo-group">
												<div class="vl-elfo-icon"><i class="fa-regular fa-envelope"></i></div>
												<div class="vl-elfo-caption"><h6>Drop A Mail</h6><p>info@larose.com</p></div>
											</div>
											{{-- <div class="vl-elfo-group">
												<div class="vl-elfo-icon"><i class="fa-solid fa-globe"></i></div>
												<div class="vl-elfo-caption"><h6>Website</h6><p>Https://larose.com</p></div>
											</div> --}}
										</div>
										{{-- <div class="pg-side-block-buttons">
											<div class="single-button"><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer" class="btn font--medium btn-light-success full-width"><i class="fa-solid fa-paper-plane me-2"></i>Send An offer</a></div>
											<div class="single-button"><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#message" class="btn font--medium btn-theme full-width"><i class="fa-solid fa-comments me-2"></i>Send A Message</a></div>
										</div> --}}
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>
			</section>
			<!-- ============================ Property Detail End ================================== -->
			
			<!-- ============================ Related Property ===================================== -->
			<section>
				<div class="container">
				
					<div class="row">
						<div class="col-lg-7 col-md-10">
							<div class="sec-heading">
								<h6>Similar Property in {{ $property->city }}</h6>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 col-md-12">
						
							<div class="similar-slide">
							
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type"><span>For rent</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
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
														<h4 class="rlhc-price-name theme-cl">$8,540<span class="monthly">/Months</span></h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">Great Apex Realty Group</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>1 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>2150 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type fr-sale"><span>For Sale</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
											<div class="veshm-list-img-slide">
												<div class="veshm-list-click">
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-3.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-11.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-13.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												</div>
											</div>
										</div>
										<div class="veshm-list-block">
											<div class="veshm-tags featured"><span><i class="fa-solid fa-star"></i>Featured</span></div>
											<div class="veshm-list-head">
												<div class="veshm-list-head-caption">
													<div class="rlhc-price">
														<h4 class="rlhc-price-name theme-cl">$50,752</h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">Hearthstone Real Property</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>2 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>2500 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type"><span>For rent</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
											<div class="veshm-list-img-slide">
												<div class="veshm-list-click">
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-4.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-13.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-15.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												</div>
											</div>
										</div>
										<div class="veshm-list-block">
											<div class="veshm-list-head">
												<div class="veshm-list-head-caption">
													<div class="rlhc-price">
														<h4 class="rlhc-price-name theme-cl">$10,890<span class="monthly">/Months</span></h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">The Select Brick Builders</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>1 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>2000 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type"><span>For rent</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
											<div class="veshm-list-img-slide">
												<div class="veshm-list-click">
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-5.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-10.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-14.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												</div>
											</div>
										</div>
										<div class="veshm-list-block">
											<div class="veshm-list-head">
												<div class="veshm-list-head-caption">
													<div class="rlhc-price">
														<h4 class="rlhc-price-name theme-cl">$7,999<span class="monthly">/Months</span></h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">Dream Big Real Estate Group</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>2300 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type fr-sale"><span>For Sale</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
											<div class="veshm-list-img-slide">
												<div class="veshm-list-click">
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-6.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-14.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-10.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												</div>
											</div>
										</div>
										<div class="veshm-list-block">
											<div class="veshm-tags featured"><span><i class="fa-solid fa-star"></i>Featured</span></div>
											<div class="veshm-list-head">
												<div class="veshm-list-head-caption">
													<div class="rlhc-price">
														<h4 class="rlhc-price-name theme-cl">$80,750</h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">Allen Tate Real Company</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>5 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>2800 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type"><span>For rent</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
											<div class="veshm-list-img-slide">
												<div class="veshm-list-click">
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-7.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-11.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-13.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												</div>
											</div>
										</div>
										<div class="veshm-list-block">
											<div class="veshm-list-head">
												<div class="veshm-list-head-caption">
													<div class="rlhc-price">
														<h4 class="rlhc-price-name theme-cl">$9,540<span class="monthly">/Months</span></h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">Arroyo Blue Real Property</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>3 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>2100 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
								
								<!-- Single Slide -->
								<div class="single-slide">
									<div class="veshm-list-wraps">
										<div class="veshm-type"><span>For rent</span></div>
										
										<div class="veshm-list-thumb">
											<button type="button" class="compare-btn"><i class="fa-solid fa-repeat"></i>Compare</button>
											<div class="veshm-list-img-slide">
												<div class="veshm-list-click">
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-8.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-15.png') }}" class="img-fluid mx-auto" alt=""></a></div>
													<div><a href="single-property-1.html"><img src="{{ asset('img/prt-11.png') }}" class="img-fluid mx-auto" alt=""></a></div>
												</div>
											</div>
										</div>
										<div class="veshm-list-block">
											<div class="veshm-tags trending"><span><i class="fa-solid fa-meteor"></i>Trending</span></div>
											<div class="veshm-list-head">
												<div class="veshm-list-head-caption">
													<div class="rlhc-price">
														<h4 class="rlhc-price-name theme-cl">$8,570<span class="monthly">/Months</span></h4>
													</div>
													<div class="listing-short-detail-flex">
														<h5 class="rlhc-title-name verified"><a href="single-property-1.html" class="prt-link-detail">Catbird Realty Advisors</a></h5>
														<div class="rlhc-prt-location"><img src="{{ asset('img/pin.svg') }}" width="16" class="me-1" alt="">210 Zirak Road, Canada</div>
													</div>
												</div>
												<div class="veshm-list-head-flex">
													<button class="btn btn-like" type="button"><i class="fa-solid fa-heart-circle-check"></i></button>	
												</div>
											</div>
											
											<div class="veshm-list-footer">
												<div class="veshm-list-circls">
													<ul>
														<li><span class="bed-inf"><i class="fa-solid fa-bed"></i></span>4 Bed</li>
														<li><span class="bath-inf"><i class="fa-solid fa-bath"></i></span>3 Ba</li>
														<li><span class="area-inf"><i class="fa-solid fa-vector-square"></i></span>3000 Sft</li>
													</ul>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							
							</div>
						</div>
					</div>
				
				</div>
			</section>
			<!-- ============================= Related Property End ================================= -->
			
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
			
			<!-- Bid Offer Modal -->
			<div class="modal fade" id="offer" tabindex="-1" role="dialog" aria-labelledby="offermodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered offer-pop-form" role="document">
					<div class="modal-content" id="offermodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-body">
							<div class="text-center">
								<h2 class="mb-0">Bid Your Offer</h2>
								<h4 class="mb-0">For 5689 Resot Relly, Canada</h4>
								<a class="text-success font--bold" href="tel:4048651904">(404) 865-1904</a>
							</div>
							<div class="offer-form">
								<form>
									
									<div class="row">

										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Name</label>
												<input type="text" class="form-control" placeholder="Dhananjay Preet">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control" placeholder="dhananjaypreet@gmail.com">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Your Offer</label>
												<input type="text" class="form-control" placeholder="$47,500">
											</div>
										</div>
										
									</div>
									
									<div class="default-terms_wrap mb-3">
										<div class="default-terms_flex">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="terms" value="option1">
												<label class="form-check-label small font--medium" for="terms">By submitting this form, you agree to our <a href="JavaScript:Void(0);" title="Terms of Service" class="theme-cl font--medium">Terms of Service</a> and <a href="JavaScript:Void(0);" title="Privacy Policy" class="theme-cl font--medium">Privacy Policy</a>.</label>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn full-width btn-primary">Submit Offer</button>
									</div>
								
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Message Modal -->
			<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered message-pop-form" role="document">
					<div class="modal-content" id="messagemodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-body">
							<div class="text-center">
								<h2 class="mb-0">Say Hi,</h2>
								<h4 class="mb-0">Mr. Dhananjay Preet</h4>
								<a class="text-success font--bold" href="tel:4048651904">(404) 865-1904</a>
							</div>
							<div class="message-form">
								<form>
									
									<div class="row">
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Message</label>
												<textarea class="form-control ht-60">I'm interested in 5689 Resot Relly, Canada. Please send me current availability and additional details.</textarea>
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Email*</label>
												<input type="email" class="form-control">
											</div>
										</div>
										
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<label>Phone</label>
												<input type="text" class="form-control">
											</div>
										</div>
										
									</div>
									
									<div class="default-terms_wrap mb-3">
										<div class="default-terms_flex">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="msg" value="option1">
												<label class="form-check-label small font--medium" for="msg">By submitting this form, you agree to our <a href="JavaScript:Void(0);" title="Terms of Service" class="theme-cl font--medium">Terms of Service</a> and <a href="JavaScript:Void(0);" title="Privacy Policy" class="theme-cl font--medium">Privacy Policy</a>.</label>
											</div>
										</div>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn full-width btn-primary">Send Message</button>
									</div>
								
								</form>
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
		{{-- <script src="{{ asset('js/custom/watermark.js') }}"></script> --}}
		<script src="{{ asset('js/custom/jquery.watermark.js') }}"></script>
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
		
{{-- 		
		<!-- Morris.js charts -->
		<script src="assets/js/raphael/raphael.min.js"></script>
		<script src="assets/js/morris.js/morris.min.js"></script>
		<!-- Custom Chart JavaScript -->
		<script src="assets/js/custom/dashboard.js"></script> --}}

		<script>
			$(function() {
				$('.img_awesome').watermark({
					text: 'ASGREALTOR',
					textWidth: 1000,
					textHeight: 1000,
					textSize: 100,
					opacity: 1,
					margin: 12,
					gravity: 'c',
				});
				});
		</script>
		 
		<script src="{{ asset('js/custom.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->
		
		<script>
		new dateDropper({
		  selector: '#checkin'
		});
		</script>
		<script>
		new dateDropper({
		  selector: '#checkout'
		});
		</script>

	</body>

<!-- Mirrored from themezhub.net/veshm-demo/veshm/single-property-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 17:33:49 GMT -->
</html>