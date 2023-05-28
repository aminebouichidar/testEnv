@extends('layouts.agent')
@section('title' , 'Dashboard')

@section('meta')
	<meta name="csrf-token" content="<?php echo csrf_token(); ?>">
	<script src="{{ asset('js/custom/watermark.js') }}"></script>
@endsection

@section('user_name')
    @auth
        {{ Auth::user()->name }}
    @endauth
@endsection

@section('content')
<section class="gray-simple pt-5 pb-5">
    <div class="container-fluid">
                    
        <div class="row">
            
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="property_dashboard_navbar">
                    
                    <div class="dash_user_avater">
                        <img src="assets/img/team-3.jpg" class="img-fluid avater" alt="">
                        <h4>{{ Auth::user()->name }}</h4>
                        {{-- <span class="font--medium small"><i class="fa-solid fa-location-dot me-2"></i>Liverpool, USA</span> --}}
                    </div>

                    <div class="adgt-wriop-footer py-3 px-3">
                        <div class="single-button d-flex align-items-center justify-content-between">
                            <button type="button" class="btn btn-md font--bold btn-light-primary me-2 full-width"><i class="fa-solid fa-phone me-2"></i>856 742 672</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#message" class="btn btn-md font--bold btn-light-success full-width"><i class="fa-solid fa-paper-plane me-2"></i>Send Message</button>
                        </div>
                    </div>
                    
                    <div class="dash_user_menues">
                        <ul>
                            <li><a href="{{ route('dashboard') }}"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>
                            {{-- <li><a href="my-profile.html"><i class="fa fa-user-tie"></i>My Profile</a></li> --}}
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('newAgent') }}"><i class="fa fa-user-plus"></i>New Agent</a></li>
                                <li><a href="#"><i class="fa fa-users"></i>Manage Agents</a></li>
                            @endif
                            <li><a href="#"><i class="fa fa-tasks"></i>My Properties</a></li>
                            <li class="active"><a href="{{ route('newProperty') }}"><i class="fa fa-pen-nib"></i>Submit New Property</a></li>
                            <li><a href="change-password.html"><i class="fa fa-unlock-alt"></i>Change Password</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-xl-9 col-lg-9 col-md-12">
				<div class="dashboard-body">
		
					<div class="dashboard-wraper">
						<div class="row">
							
							<!-- Submit Form -->
							<div class="col-lg-12 col-md-12">
								<div class="submit-page">
									
									<!-- Notice -->
									{{-- <div class="form-group col-lg-12 col-md-12">
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>Notice!</strong> Before submitting this form, please make sure you have read and agreed to our <a href="#">Terms & Conditions</a>.
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
									</div> --}}

									<form action="{{ route('properties.store') }}" enctype="multipart/form-data" method="POST" id="upload-form">
										@csrf
										
										
										
										<div class="previews"></div>

										<!-- Basic Information -->
										<div class="frm_submit_block">	
											<h3>Basic Information</h3>
											<div class="frm_submit_wrap">
												<div class="row">
												
													<div class="form-group col-md-12">
														<input type="hidden" class="form-control" placeholder="Property Title" name="property_id" value="{{ $randomId }}">
														<label>Property Title<a href="#" class="tip-topdata" data-tip="Property Title"><i class="fa-solid fa-info"></i></a></label>
														<input type="text"  name="title" class="form-control">
													</div>
													
													<div class="form-group col-md-6">
														<label>Status</label>
														<select id="status" name="isSell" class="form-control">
															<option value="">&nbsp;</option>
															<option value="Rent">For Rent</option>
															<option value="Sell">For Sale</option>
														</select>
													</div>
													
													<div class="form-group col-md-6">
														<label>Property Type</label>
														{{-- those are the type wich the user should chose one of them 'house', 'apartment', 'commercial' ,'town home' ,'office & studio' 
														,'condos' ,
														 'bungalow' , 'farmhouse' ,'tiny house' ,'villa' ,'land' ,'acreage' ,'rural' ,'block of unit' ,'retirement living'
														 now i will make it as a select option for the user to chose one of them
														 --}}
														 <select id="ptypes" name="property_types" class="form-control">
															 <option value="">&nbsp;</option>
															 <option value="house">House</option>
															 <option value="apartment">Apartment</option>
															 <option value="commercial">Commercial</option>
															 <option value="town home">Town Home</option>
															 <option value="office & studio">Office & Studio</option>
															 <option value="condos">Condos</option>
															 <option value="bungalow">Bungalow</option>
															 <option value="farmhouse">Farmhouse</option>
															 <option value="tiny house">Tiny House</option>
															 <option value="villa">Villa</option>
															 <option value="land">Land</option>
															 <option value="acreage">Acreage</option>
															 <option value="rural">Rural</option>
															 <option value="block of unit">Block of Unit</option>
															 <option value="retirement living">Retirement Living</option>
														 </select>
														{{-- <select id="ptypes" name="property_types" class="form-control">
															<option value="">&nbsp;</option>
															<option value="Houses">Houses</option>
															<option value="Apartment">Apartment</option>
															<option value="Villas">Villas</option>
															<option value="Commercial">Commercial</option>
															<option value="Offices">Offices</option>
														</select> --}}
													</div>
													
													<div class="form-group col-md-6">
														<label>Price</label>
														<input type="text" class="form-control" name="price" placeholder="USD">
													</div>
													
													<div class="form-group col-md-6">
														<label>Area</label>
														<input type="text" name="size" class="form-control">
													</div>
													
													<div class="form-group col-md-6">
														<label>Bedrooms</label>
														<select class="form-control" name="bedrooms">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
													
													<div class="form-group col-md-6">
														<label>Bathrooms</label>
														<select id="bathrooms" name="bathrooms" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>

													<div class="form-group col-md-6">
														<label>Floor</label>
														<select id="floor" name="floor" class="form-control">
															<option value="">&nbsp;</option>
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
										
										<!-- Gallery -->
										<div class="frm_submit_block">	
											<h3>Gallery</h3>
											<div class="frm_submit_wrap">
												<div class="row">
													<div class="form-group col-md-12">
														<div id="dropzone-container" class="dropzone" style="background-color: #05264e; border-radius: 5px;">
															<div class="dz-default dz-message">
																<i class="fa-solid fa-images" style="color: #c6c6cb;"></i>
																<span style="color: #c6c6cb;">Drag & Drop To Change Logo</span>
															</div>
														</div>
														<div class="previews"></div>
													</div>
													
												</div>
											</div>
										</div>
										
										<!-- Location -->
										<div class="frm_submit_block">	
											<h3>Location</h3>
											<div class="frm_submit_wrap">
												<div class="row">
												
													<div class="form-group col-md-6">
														<label>Address</label>
														<input type="text" name="address" class="form-control">
													</div>
													
													<div class="form-group col-md-6">
														<label>Country</label>
														<input type="text" name="country" class="form-control">
													</div>
													
													<div class="form-group col-md-6">
														<label>City</label>
														<input type="text" name="city" class="form-control">
													</div>
													
													{{-- <div class="form-group col-md-6">
														<label>Zip Code</label>
														<input type="text" name="zip" class="form-control">
													</div> --}}
													
												</div>
											</div>
										</div>
										
										<!-- Detailed Information -->
										<div class="frm_submit_block">	
											<h3>Detailed Information</h3>
											<div class="frm_submit_wrap">
												<div class="row">
												
													<div class="form-group col-md-12">
														<label>Description</label>
														<textarea class="form-control h-120" name="description"></textarea>
													</div>
													
													<div class="form-group col-md-4">
														<label>Building Age (optional)</label>
														<select id="bage" name="buildingAge" class="form-control">
															<option value="">&nbsp;</option>
															<option value="0 - 5 Years">0 - 5 Years</option>
															<option value="5 - 10 Years">5 - 10Years</option>
															<option value="0 - 15 Years">0 - 15 Years</option>
															<option value="0 - 20 Years">0 - 20 Years</option>
															<option value="20+ Years">20+ Years</option>
														</select>
													</div>
													
													{{-- <div class="form-group col-md-4">
														<label>Garage (optional)</label>
														<select id="garage" name="garage" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div> --}}

													<div class="form-group col-md-4">
														<label>parking (optional)</label>
														<select id="parking" name="parking" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
													
													<div class="form-group col-md-4">
														<label>Rooms (optional)</label>
														<select id="rooms" name="rooms" class="form-control">
															<option value="">&nbsp;</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													</div>
													
													<div class="form-group col-md-12">
														<strong>Other Features (optional)</strong>
														<div class="o-features mt-2">
															<ul class="no-ul-list row">
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-1" class="form-check-input" name="amenities[]" value="equipped kitchen" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="equipped_kitchen">Equipped Kitchen</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-2" class="form-check-input" name="amenities[]" value="gym"type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="gym">Gym</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-3" class="form-check-input" name="amenities[]" value="Laundry" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="laundry">Laundry</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-4" class="form-check-input" name="amenities[]" value="Media Room" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="mediaRoom">Media Room</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-5" class="form-check-input" name="amenities[]" value="TV Set" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="tvSet">TV Set</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-6" class="form-check-input" name="amenities[]" value="Back yard" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="backYard">Back yard</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-7" class="form-check-input" name="amenities[]" value="Basketball court" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="basketballCourt">Basketball court</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-8" class="form-check-input" name="amenities[]" value="Front yard" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="frontYard">Front yard</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-9" class="form-check-input" name="amenities[]" value="Garage Attached" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="garageAttached">Garage Attached</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-10" class="form-check-input" name="amenities[]" value="Hot Bath" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="hotBath">Hot Bath</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-11" class="form-check-input" name="amenities[]" value="Pool" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="pool">Pool</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-12" class="form-check-input" name="amenities[]" value="Central Air" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="Central Air">Central Air</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-13" class="form-check-input" name="amenities[]" value="Electricity" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="electricity">Electricity</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-14" class="form-check-input" name="amenities[]" value="Heating" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="heating">Heating</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-15" class="form-check-input" name="amenities[]" value="Natural Gas" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="naturalGas">Natural Gas</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-16" class="form-check-input" name="amenities[]" value="Ventilation" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="ventilation">Ventilation</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-17" class="form-check-input" name="amenities[]" value="Chair Accessible" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="chairAccessible">Chair Accessible</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-18" class="form-check-input" name="amenities[]" value="Fireplace" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="Fireplace">Fireplace</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-19" class="form-check-input" name="amenities[]" value="Smoke detectors" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="smokeDetectors">Smoke detectors</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-20" class="form-check-input" name="amenities[]" value="Car parking" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="carParking">Car parking</label>
																</li>
																<li class="col-xl-4 col-lg-4 col-md-6 col-6">
																	<input id="a-21" class="form-check-input" name="amenities[]" value="WIFI" type="checkbox">
																	<label for="amenities[]" class="form-check-label" name="wifi">WIFI</label>
																</li>
															</ul>
														</div>
													</div>
													
												</div>
											</div>
										</div>
										
										<!-- Contact Information -->
										{{-- <div class="frm_submit_block">	
											<h3>Contact Information</h3>
											<div class="frm_submit_wrap">
												<div class="row">
												
													<div class="form-group col-md-4">
														<label>Name</label>
														<input type="text" class="form-control">
													</div>
													
													<div class="form-group col-md-4">
														<label>Email</label>
														<input type="text" class="form-control">
													</div>
													
													<div class="form-group col-md-4">
														<label>Phone (optional)</label>
														<input type="text" class="form-control">
													</div>
													
												</div>
											</div>
										</div>
										
										<div class="form-group col-lg-12 col-md-12">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="gdpr">
												<label class="form-check-label" for="gdpr">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
											</div>
										</div> --}}
										
										<div class="form-group col-lg-12 col-md-12">
											<button class="btn btn-primary" type="submit">Submit & Preview</button>
										</div>
									</form>
								</div>
							</div>
							
						</div>
						
					</div>
					<!-- row -->
				
				</div>
			</div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
	<script>
		///////////////////////// NEW ///////////////////////////
		
		Dropzone.autoDiscover = false;
		// Initialize Dropzone
		var myDropzone = new Dropzone("#dropzone-container", {
			// Send data with image
			url: "{{ route('assets.upload', $randomId) }}",
			// Set headers
			headers: {
				'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
			},
			paramName: "file",
			maxFilesize: 5, // Maximum file size in MB
			addRemoveLinks: true, // Show remove button for uploaded files
			acceptedFiles: "image/*", // Accept images only
			// CSRF token mismatch error fix - https://stackoverflow.com/a/30272073/1049688
			init: function() {
				this.on("addedfile", function(file) {
					// verify the file dimensions
					var reader = new FileReader();
						reader.onload = function(e) {
							var img = new Image();
							img.onload = function() {
								if (img.width != 1920 || img.height != 1280) {
									alert("The image dimensions should be at least " + 1920 + "x" + 1080 + " pixels.");
									myDropzone.removeFile(file);
									// send a post request to delete the image from the server
									$.post("{{ route('assets.delete', $randomId) }}", {
										file: file.name,
										_token: $('[name="_token"]').val()
									});
								}
							};
							img.src = e.target.result;
						};
						reader.readAsDataURL(file);
				});
				this.on("success", function(file, response) {
					// Handle success
					console.log(response);
				});
				this.on("error", function(file, response) {
					// Handle error
					console.log(response);
				});
			}
		});


	</script>

@endsection