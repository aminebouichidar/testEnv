<!doctype html>
<html lang="en">
	
<!-- Mirrored from themezhub.net/veshm-demo/veshm/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 17:33:52 GMT -->
<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>@yield('title')</title>
		<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.png') }}">
		
        <!-- Custom CSS -->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
		@yield('meta')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css">
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
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">

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
			<div class="page-title" style="background:#017efa url({{ asset('img/page-title.jpg') }}) no-repeat;">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							
							<h2 class="ipt-title">Hello, @yield('user_name')</h2>
							<span class="ipn-subtitle">Manage your profile and view property</span>
							
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Page Title End ================================== -->
			
            @yield('content')
			
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
										<p>Collins Street West, Victoria 8007, Australia.</p>
										<p><span class="ftp-info"><i class="fa fa-phone" aria-hidden="true"></i>+1 246-345-0695</span></p>
										<p><span class="ftp-info"><i class="fa fa-envelope" aria-hidden="true"></i>info@example.com</span></p>
									</div>
									
								</div>
							</div>		
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">Navigations</h4>
									<ul class="footer-menu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="faq.html">FAQs Page</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="blog.html">Blog</a></li>
									</ul>
								</div>
							</div>
									
							<div class="col-lg-2 col-md-4">
								<div class="footer-widget">
									<h4 class="widget-title">The Highlights</h4>
									<ul class="footer-menu">
										<li><a href="JavaScript:Void(0);">Apartment</a></li>
										<li><a href="JavaScript:Void(0);">My Houses</a></li>
										<li><a href="JavaScript:Void(0);">Restaurant</a></li>
										<li><a href="JavaScript:Void(0);">Nightlife</a></li>
										<li><a href="JavaScript:Void(0);">Villas</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">My Account</h4>
									<ul class="footer-menu">
										<li><a href="JavaScript:Void(0);">My Profile</a></li>
										<li><a href="JavaScript:Void(0);">My account</a></li>
										<li><a href="JavaScript:Void(0);">My Property</a></li>
										<li><a href="JavaScript:Void(0);">Favorites</a></li>
										<li><a href="JavaScript:Void(0);">Cart</a></li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="footer-widget">
									<h4 class="widget-title">Download Apps</h4>	
									<div class="app-wrap">
										<p><a href="JavaScript:Void(0);"><img src="{{ asset('img/light-play.png') }}" class="img-fluid" alt=""></a></p>
										<p><a href="JavaScript:Void(0);"><img src="{{ asset('img/light-ios.png') }}" class="img-fluid" alt=""></a></p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</footer>
			<!-- ============================ Footer End ================================== -->
			
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
		@yield('scripts')
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/rangeslider.js') }}"></script>
		<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('js/slick.js') }}"></script>
		<script src="{{ asset('js/lightbox.js') }}"></script> 
		<script src="{{ asset('js/imagesloaded.js') }}"></script>
		{{-- <script src="{{ asset('js/dropzone.js') }}"></script> --}}

		{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script> --}}
		
		<script src="{{ asset('js/datedropper-javascript.js') }}"></script>
		
		
		<script src="{{ asset('js/custom.js') }}"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>

<!-- Mirrored from themezhub.net/veshm-demo/veshm/my-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 17:33:52 GMT -->
</html>