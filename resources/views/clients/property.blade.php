@extends('layouts.client')

@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
	<div class="featured_slick_gallery gray">
		<div class="featured_slick_gallery-slide">
			<div class="featured_slick_padd"><a href="{{ asset('img/gallery-1.jpg') }}" class="mfp-gallery"><img src="{{ asset('img/gallery-1.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
			<div class="featured_slick_padd"><a href="{{ asset('img/gallery-2.jpg') }}" class="mfp-gallery"><img src="{{ asset('img/gallery-2.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
			<div class="featured_slick_padd"><a href="{{ asset('img/gallery-3.jpg') }}" class="mfp-gallery"><img src="{{ asset('img/gallery-3.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
			<div class="featured_slick_padd"><a href="{{ asset('img/gallery-4.jpg') }}" class="mfp-gallery"><img src="{{ asset('img/gallery-4.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
			<div class="featured_slick_padd"><a href="{{ asset('img/gallery-5.jpg') }}" class="mfp-gallery"><img src="{{ asset('img/gallery-5.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
			<div class="featured_slick_padd"><a href="{{ asset('img/gallery-6.jpg') }}" class="mfp-gallery"><img src="{{ asset('img/gallery-6.jpg') }}" class="img-fluid mx-auto" alt=""></a></div>
		</div>
	</div>
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
									<span class="label label-success">For Sale</span>
									<h4>Jannat Graynight Mood In Siver Colony, London</h4>
									<span class="text-mid"><i class="fa-solid fa-location-dot me-2"></i>778 Country St. Panama City, FL</span>
									<div class="list-fx-features mt-2">
										<div class="list-fx-fisrt">
											<span class="label font--medium label-light-success me-2">3 Beds</span>
											<span class="label font--medium label-light-info me-2">2 Bath</span>
											<span class=" label font--medium label-light-danger">4500 Sqft</span>
										</div>
										<div class="list-fx-last">
										
										</div>
									</div>
								</div>
							</div>
							<div class="vesh-detail-headup-last">
								<h3 class="prt-price-fix theme-cl">$10,76500<span>One Time</span></h3>
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
									<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
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
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-bed"></i></div><div class="ilio-text">3 Bedrooms</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-bath"></i></div><div class="ilio-text">2 Bathrooms</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-layer-group"></i></div><div class="ilio-text">4,240 sq ft</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-warehouse"></i></div><div class="ilio-text">1 Garage</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-regular fa-building"></i></div><div class="ilio-text">Apartment</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-building-wheat"></i></div><div class="ilio-text">Built 1982</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-building-circle-check"></i></div><div class="ilio-text">Active</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-fan"></i></div><div class="ilio-text">Central A/C</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-regular fa-snowflake"></i></div><div class="ilio-text">Forced Air</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-bowl-food"></i></div><div class="ilio-text">Kitchen Facilities</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-solid fa-martini-glass-citrus"></i></div><div class="ilio-text">Bar & Drinks</div></div></div>
									<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6"><div class="ilio-icon-wrap"><div class="ilio-icon"><i class="fa-regular fa-building"></i></div><div class="ilio-text">4 Floor</div></div></div>
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
									<li>Air Conditioning</li>
									<li>Swimming Pool</li>
									<li>Central Heating</li>
									<li>Laundry Room</li>
									<li>Gym</li>
									<li>Alarm</li>
									<li>Window Covering</li>
									<li>Internet</li>
									<li>Pets Allow</li>
									<li>Free WiFi</li>
									<li>Car Parking</li>
									<li>Spa & Massage</li>
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
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-utensils"></i>Equipped Kitchen</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-dumbbell"></i>Gym</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-jug-detergent"></i>Laundry</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-brands fa-chromecast"></i>Media Room</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-tv"></i>TV Set</div></div>
									</div>
								</div>
								<div class="lvs-detail mb-4">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12"><h6>Outdoor Details</h6></div>
									</div>
									<div class="row gy-3">
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-brands fa-canadian-maple-leaf"></i>Back yard</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-basketball"></i>Basketball court</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-seedling"></i>Front yard</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-square-parking"></i>Garage Attached</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-shower"></i>Hot Bath</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-water-ladder"></i>Pool</div></div>
									</div>
								</div>
								<div class="lvs-detail mb-4">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12"><h6>Utilities</h6></div>
									</div>
									<div class="row gy-3">
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fan"></i>Central Air</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-plug"></i>Electricity</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fire"></i>Heating</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fire-flame-simple"></i>Natural Gas</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-snowflake"></i>Ventilation</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-droplet"></i>Water</div></div>
									</div>
								</div>
								<div class="lvs-detail">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12"><h6>Other Features</h6></div>
									</div>
									<div class="row gy-3">
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-wheelchair"></i>Chair Accessible</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-elevator"></i>Elevator</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-fire-extinguisher"></i>Fireplace</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-smoking"></i>Smoke detectors</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-bacon"></i>Washer and dryer</div></div>
										<div class="col-xl-4 col-lg-4 col-md-4 col-12"><div class="lvs-caption"><i class="fa-solid fa-wifi"></i>WiFi</div></div>
									</div>
								</div>
							</div>
						</div>
					</div>							
					<!-- All over Review -->
					<div class="veshm-fl-rate-box">
						<div class="fl-rate-box-head theme-bg">
							<div class="flt-yuo10">
								<h4>5.0</h4>
								<p>Excellent</p>
							</div>
							<div class="flt-yuo12">
								<span>Out of 5</span>
							</div>
						</div>
						<div class="fl-rate-box-caption">
							<div class="fls-by1">
								<div class="fls-by2">
									<div class="fls-bystar">
										<span class="fas fa-star fill"></span>
										<span class="fas fa-star fill"></span>
										<span class="fas fa-star fill"></span>
										<span class="fas fa-star fill"></span>
										<span class="fas fa-star fill"></span>
									</div>
									<div class="fls-byheadline">
										<h5>Wonderful Score</h5>
									</div>
									<div class="fls-bycaps">
										<p>112 Total Reviews</p>
									</div>
								</div>
								<div class="fls-by3">
									<button type="button" class="btn btn-success font--medium">Submit Review</button>
								</div>
							</div>
						</div>
					</div>
					<!-- All over Review -->
					
					<!-- Property Reviews Detail -->
					<div class="vesh-detail-bloc">
						<div class="vesh-detail-bloc_header">
							<h4 class="property_block_title no-arrow">Property Reviews</h4>
						</div>
						<div class="panels">
							<div class="vesh-detail-bloc-body">
								<div class="prt-reviews-groups">
								
									<div class="prt-reviews-single">
										<div class="prt-reviews-single-thumb">
											<div class="prt-rvs-head">
												<div class="prt-rvs-head-img">
													<img src="{{ asset('img/team-1.jpg') }}" class="img-fluid circle" alt="">
												</div>
												<div class="prt-rvs-head-caption">
													<div class="prt-ves-ratting">
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-regular fa-star"></span>
													</div>
													<div class="prt-ves-reviewer"><h4>By: Shuryabhan Singh</h4></div>
													<div class="prt-ves-ratting-title"><h5 class="text-success">Superb</h5></div>
												</div>
											</div>
										</div>
										<div class="prt-reviews-single-content">
											<div class="prt-ves-paragraph">
												<p>Overall a wonderful building. The apartments are great. The reviews are second to none. I find the staff largely very friendly and helpful. The amenity space is clean and well appointed. The gym is convenient. The neighborhood is hard to be. Very pet friendly. I’ve been here for 2 1/2 years and really have had zero complaints.</p>
											</div>
											<div class="prt-post-date"><span>Posted on 10 Jan 2023</span></div>
										</div>
									</div>
									
									<div class="prt-reviews-single">
										<div class="prt-reviews-single-thumb">
											<div class="prt-rvs-head">
												<div class="prt-rvs-head-img">
													<img src="{{ asset('img/team-2.jpg') }}" class="img-fluid circle" alt="">
												</div>
												<div class="prt-rvs-head-caption">
													<div class="prt-ves-ratting">
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-regular fa-star"></span>
													</div>
													<div class="prt-ves-reviewer"><h4>By: Maithali Gupta</h4></div>
													<div class="prt-ves-ratting-title"><h5 class="text-warning">Middle</h5></div>
												</div>
											</div>
										</div>
										<div class="prt-reviews-single-content">
											<div class="prt-ves-paragraph">
												<p>Overall a wonderful building. The apartments are great. The reviews are second to none. I find the staff largely very friendly and helpful. The amenity space is clean and well appointed. The gym is convenient. The neighborhood is hard to be. Very pet friendly. I’ve been here for 2 1/2 years and really have had zero complaints.</p>
											</div>
											<div class="prt-post-date"><span>Posted on 18 Jan 2023</span></div>
										</div>
									</div>
									
									<div class="prt-reviews-single">
										<div class="prt-reviews-single-thumb">
											<div class="prt-rvs-head">
												<div class="prt-rvs-head-img">
													<img src="{{ asset('img/team-3.jpg') }}" class="img-fluid circle" alt="">
												</div>
												<div class="prt-rvs-head-caption">
													<div class="prt-ves-ratting">
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-solid fa-star"></span>
														<span class="fa-regular fa-star"></span>
													</div>
													<div class="prt-ves-reviewer"><h4>By: Rajvanshi Patel</h4></div>
													<div class="prt-ves-ratting-title"><h5 class="text-success">Superb</h5></div>
												</div>
											</div>
										</div>
										<div class="prt-reviews-single-content">
											<div class="prt-ves-paragraph">
												<p>Overall a wonderful building. The apartments are great. The reviews are second to none. I find the staff largely very friendly and helpful. The amenity space is clean and well appointed. The gym is convenient. The neighborhood is hard to be. Very pet friendly. I’ve been here for 2 1/2 years and really have had zero complaints.</p>
											</div>
											<div class="prt-post-date"><span>Posted on 20 Jan 2023</span></div>
										</div>
									</div>
								
								</div>
								<div class="alert alert-info mt-3" role="alert">
									<span class="font--medium small">You need to login in order to post a review</span>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Property Graph Detail -->
					<div class="vesh-detail-bloc" style="visibility: hidden; height:0% !important;">
						<div class="vesh-detail-bloc_header">
							<h4 class="property_block_title no-arrow">View property Graph</h4>
						</div>
						<div id="clOne" class="panel-collapse collapse show" aria-labelledby="clOne">
							<div class="vesh-detail-bloc-body">
								<ul class="list-inline text-center m-t-40">
									<li>
										<h5><i class="fa fa-circle me-1 text-warning"></i>Total Revenue</h5>
									</li>
									<li>
										<h5><i class="fa fa-circle me-1 text-danger"></i>Total Property</h5>
									</li>
									<li>
										<h5><i class="fa fa-circle me-1 text-success"></i>Total income</h5>
									</li>
								</ul>
								<div class="chart" id="line-chart" style="height:300px;"></div>
							</div>
						</div>
					</div>
					

					<!-- Submit Reviews -->
					<div class="vesh-detail-bloc">
						<div class="vesh-detail-bloc_header">
							<h4 class="property_block_title no-arrow">Submit Review</h4>
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
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label>Ratting</label>
												<select class="form-control">
													<option value="1">1 : Very Poor</option>
													<option value="2">2 : Poor</option>
													<option value="3">3 : Good</option>
													<option value="4">4 : Very Good</option>
													<option value="5">5 : Superb</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label>Your Message</label>
												<textarea class="form-control ht-80" placeholder="Messages"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<button class="btn btn-theme" type="submit">Submit Review</button>
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
					<div class="vesh-detail-bloc">
						<ul class="like_share_list">
							<li><a href="JavaScript:Void(0);" class="btn btn-light-success" data-toggle="tooltip" data-original-title="Share"><i class="fa-solid fa-share-from-square me-2"></i>Share</a></li>
							<li><a href="JavaScript:Void(0);" class="btn btn-light-danger" data-toggle="tooltip" data-original-title="Save"><i class="fa-solid fa-heart-circle-check me-2"></i>Save</a></li>
							<li><a href="JavaScript:Void(0);" class="btn btn-light-primary" data-toggle="tooltip" data-original-title="Save"><i class="fa-solid fa-print me-2"></i>Print</a></li>
						</ul>
					</div>
					
					<div class="pg-side-groups">
						
						<div class="pg-side-block">
							<div class="pg-side-block-head">
								<div class="pg-side-left">
									<div class="pg-side-thumb"><img src="{{ asset('img/team-1.jpg') }}" class="img-fluid circle" alt=""></div>
								</div>
								<div class="pg-side-right">
									<div class="pg-side-right-caption">
										<h4>Ht. Mickle Hussy</h4>
										<span><i class="fa-solid fa-location-dot me-2"></i>Liverpool, UK</span>
									</div>
								</div>
							</div>
							<div class="pg-side-block-body">
								<div class="pg-side-block-info">
									<div class="vl-elfo-group">
										<div class="vl-elfo-icon"><i class="fa-solid fa-phone-volume"></i></div>
										<div class="vl-elfo-caption"><h6>Call Us</h6><p>+91 856 457 5243</p></div>
									</div>
									<div class="vl-elfo-group">
										<div class="vl-elfo-icon"><i class="fa-regular fa-envelope"></i></div>
										<div class="vl-elfo-caption"><h6>Drop A Mail</h6><p>paythemezhub@gmail.com</p></div>
									</div>
									<div class="vl-elfo-group">
										<div class="vl-elfo-icon"><i class="fa-solid fa-globe"></i></div>
										<div class="vl-elfo-caption"><h6>Website</h6><p>Https://themezhub.com</p></div>
									</div>
								</div>
								<div class="pg-side-block-buttons">
									<div class="single-button"><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#offer" class="btn font--medium btn-light-success full-width"><i class="fa-solid fa-paper-plane me-2"></i>Send An offer</a></div>
									<div class="single-button"><a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#message" class="btn font--medium btn-theme full-width"><i class="fa-solid fa-comments me-2"></i>Send A Message</a></div>
								</div>
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
						<h6>Similar Property in NewYork</h6>
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
@endsection

@section('custom_models')
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
@endsection