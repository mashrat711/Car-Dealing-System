<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/style.css" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/css/dark.css" type="text/css" />

	<!-- Bootstrap Select CSS -->
	<link rel="stylesheet" href="../../../../public/assets/css/components/bs-select.css" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="../../../../public/assets/css/components/bs-switches.css" type="text/css" />

	<!-- Datepicker Slider CSS -->
	<link rel="stylesheet" href="../../../../public/assets/css/components/datepicker.css" type="text/css" />

	<!-- Range Slider CSS -->
	<link rel="stylesheet" href="../../../../public/assets/css/components/ion.rangeslider.css" type="text/css" />

	<!-- car Specific Stylesheet -->
	<link rel="stylesheet" href="../../../../public/assets/demos/car/car.css" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/demos/car/css/car-icons/style.css" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/demos/car/css/fonts.css" type="text/css" />
	<!-- / -->

	<link rel="stylesheet" href="../../../../public/assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="../../../../public/assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="../../../../public/assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="../../../../public/assets/css/colors.php?color=c85e51" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Dealers - Car Demo | Canvas</title>

	<style>

		.dropdown-toggle::after { margin-left: 0.255em; }

		.dark .irs-bar { background-color: #CCC }
		.dark .irs-grid-text { color: #EEE }

		.flex-caption {
			opacity: 0;
			-webkit-transition: opacity .4s .4s, transform .4s .4s ease-in-out ;
			-o-transition: opacity .4s .4s, transform .4s .4s ease-in-out ;
			transition: opacity .4s .4s, transform .4s .4s ease-in-out ;
			-webkit-transform: translateY(50px);
			-ms-transform: translateY(50px);
			-o-transform: translateY(50px);
			transform: translateY(50px);
		}

		.flex-viewport { height: 100% !important; }

		.flex-caption.slider-caption-bottom {
			padding: 20px;
			width: 100%;
			min-width: 100%;
			left: 0;
			bottom: 0;
		}

		.flex-caption.slider-caption-bottom p {
			margin-bottom: 0;
			font-size: 15px;
		}

		.slide.flex-active-slide .flex-caption {
			opacity: 1;
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			-o-transform: translateY(0);
			transform: translateY(0);
		}

		.slide .flex-caption.card {
			top: 20px;
			font-size: 18px;
			-webkit-transform: translateY(0);
			-ms-transform: translateY(0);
			-o-transform: translateY(0);
			transform: translateY(0);
			-webkit-transition: opacity .4s .6s;
			-o-transition: opacity .4s .6s;
			transition: opacity .4s .6s;
		}


	</style>

</head>

<body class="stretched side-push-panel" data-loader-html="<div><img src='images/page-loader.gif' alt='Loader'></div>">

	<!-- Side Panel Overlay -->
	<div class="body-overlay"></div>

	<!-- Side Panel -->
	<div id="side-panel">

		<div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

		<div class="side-panel-wrap">

			<div class="widget clearfix">

				<a href="index.html"><img src="../../../../public/assets/demos/car/images/logo@2x.png" alt="Canvas Logo" height="50"></a>

				<p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>

				<div class="widget quick-contact-widget form-widget noborder notoppadding clearfix">

					<h4>Quick Contact</h4>
					<div class="form-result"></div>
					<form id="quick-contact-form" name="quick-contact-form" action="../../../../public/assets/include/form.php" method="post" class="quick-contact-form nobottommargin">
						<div class="form-process"></div>
						<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
						<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
						<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
						<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
						<input type="hidden" name="prefix" value="quick-contact-form-">
						<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
					</form>

				</div>


			</div>

		</div>

	</div>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="static-sticky full-header clearfix">

			<div id="header-wrap">

				<div class="container-fluid clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
						============================================= -->
					<div id="logo">
						<a href="../../demo-car.html" class="standard-logo"><img src="../../../../public/assets/demos/car/images/logo.png" alt="Canvas Logo"></a>
						<a href="../../demo-car.html" class="retina-logo"><img src="../../../../public/assets/demos/car/images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="with-arrows clearfix">
						<ul>
							<li><a href="../../demo-car.html"><div>Home</div></a></li>
							<!-- Mega Menu -->
							<li class="mega-menu"><a href="car-single.blade.php"><div>Models</div></a>
								<div class="mega-menu-content style-2 clearfix">
									<ul class="mega-menu-column col-lg-12">
										<li>
											<div class="widget center clearfix">

												<h3 class="nobottommargin">Featured Models</h3>
												<a href="#" class="button button-small button-rounded button-border button-dark button-black font-primary" style="margin: 10px 0 40px">Show all Cars</a>

												<!-- Mega Menu Cars Carousel -->
												<div class="owl-carousel customjs image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-lg="6" data-items-xl="6">
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/1.png" alt="Car">BMW 1 Series ActiveE</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/4.png" alt="Car">Mercedes-Benz S-Class</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/5.png" alt="Car">Gran Turismo</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/6.png" alt="Car">Mclaren 675LT SPIDER</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/7.png" alt="Car">Honda City</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/8.png" alt="Car">Toyota Qualis</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/9.png" alt="Car">Honda WR-V</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/10.png" alt="Car">Suzuki Breeza</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/2.png" alt="Car">Chevrolet Spark</a></div>
													<div class="oc-item center"><a href="car-single.blade.php"><img src="../../../../public/assets/demos/car/images/mega-menu/3.png" alt="Car">Honda JaZZ</a></div>

												</div>
											</div>
										</li>
									</ul>
								</div>
							</li>
							<li><a href="car-listing.blade.php"><div>Car Listing</div></a></li>
							<li class="current"><a href="car-dealers.blade.php"><div>Dealers</div></a></li>
							<li><a href="car%20parts.blade.php"><div>Accessories</div></a></li>
							<li><a href="../../../../public/assets/demos/car/car-faqs.html"><div>FAQs</div></a></li>
							<li><a href="../../../../public/assets/demos/car/car-blog.html"><div>Blog</div></a></li>
							<li><a href="car-contact.blade.php"><div>Contacts</div></a></li>
						</ul>
					</nav><!-- #primary-menu end -->
				</div>

			</div>

			<div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>

		</header><!-- #header end -->

		<!-- Slider
		============================================= -->
		<div id="slider" class="slider-element full-screen clearfix">
			<div class="row" style="height: 100%;">
				<div class="col-md-4 col-sm-12 pr-0" style="height: 100%;">
					<div class="card bgcolor noradius shadow-sm" style="height: 100%; overflow-y: scroll;">
						<div class="card-body">
							<h3 class="text-white">Search Your Car:</h3>
							<form action="#" method="post" class="nobottommargin">
								<div class="row clearfix">
									<div class="col-12">
										<label class="text-white d-block" for="">Type</label>
										<input class="bt-switch" type="checkbox" checked data-on-text="New" data-off-text="Used" data-on-color="default" data-off-color="default" data-handle-width="50">
									</div>
									<div class="col-12 mt-3">
										<label class="text-white" for="">All Brands</label>
										<select class="selectpicker form-control customjs" title="Select Brand"  data-size="7" data-live-search="true" multiple data-live-search="true" style="width:100%;">
											<optgroup label="All Brands">
												<option value="Audi">Audi</option>
												<option value="BMW">BMW</option>
												<option value="Ferrari">Ferrari</option>
												<option value="Ford">Ford</option>
												<option value="Honda">Honda</option>
												<option value="Mercedes-Benz">Mercedes-Benz</option>
												<option value="Manza">Manza</option>
												<option value="Porsche">Porsche</option>
												<option value="Tayota">Tayota</option>
											</optgroup>
										</select>
									</div>
									<div class="col-12 mt-3">
										<label class="text-white" for="">Select Model</label>
										<select class="selectpicker customjs form-control" data-size="7" data-live-search="true" title="Select Model" style="width:100%; line-height: 30px;">
											<optgroup label="AUDI">
												<option value="R8">Audi R8</option>
												<option value="TT">Audi TT</option>
												<option value="S5">Audi S5</option>
												<option value="A5">Audi A5</option>
												<option value="TTS">Audi TTS</option>
												<option value="RS5">Audi RS 5</option>
											</optgroup>
											<optgroup label="BMW All Series">
												<option value="1-Series">BMW 1 Series 5-Door</option>
												<option value="Series-ActiveE">BMW 1 Series ActiveE</option>
												<option value="3-Series-Sedan">BMW 3 Series Sedan</option>
												<option value="ActiveHybrid-3">BMW ActiveHybrid 3</option>
												<option value="5-Series-Sedan">BMW 5 Series Sedan</option>
												<option value="ActiveHybrid-5">BMW ActiveHybrid 5</option>
												<option value="7-Series">BMW 7 Series</option>
												<option value="ActiveHybrid-7">BMW ActiveHybrid 7</option>
												<option value="M3-Sedan">BMW M3 Sedan</option>
												<option value="M5-Sedan">BMW M5 Sedan</option>
												<option value="3-Series-Turismo">BMW 3 Series Gran Turismo</option>
												<option value="5=Series-Turismo">BMW 5 Series Gran Turismo</option>
											</optgroup>
											<optgroup label="HONDA">
												<option value="Fit">Honda Fit</option>
												<option value="City">Honda City</option>
												<option value="Civic">Honda Civic</option>
												<option value="Fit-EV1">Honda Fit EV1</option>
												<option value="Accord">Honda Accord</option>
												<option value="Crosstour">Honda Crosstour</option>
												<option value="FCX-Clarity">Honda FCX Clarity</option>
												<option value="Civic-Hybrid">Honda Civic Hybrid</option>
												<option value="Accord-Hybrid">Honda Accord Hybrid</option>
												<option value="Accord-Plug-In">Honda Accord Plug-In</option>
											</optgroup>
											<optgroup label="MERCEDES-BENZ">
												<option value="S-Class">2015 Mercedes-Benz S-Class Sedan</option>
												<option value="C-Class">2015 Mercedes-Benz C-Class Sedan</option>
												<option value="E-Class">2015 Mercedes-Benz E-Class Sedan</option>
												<option value="E-Class-Hybrid">2015 Mercedes-Benz E-Class Hybrid</option>
												<option value="Maybach-S600">2016 Mercedes-Benz Maybach S600</option>
												<option value="B-Class-Electric-Drive">2015 Mercedes-Benz B-Class Electric Drive</option>
											</optgroup>
											<optgroup label="Ferrari">
												<option value="Ferrari Daytona">Ferrari Daytona</option>
												<option value="Ferrari 250 GTO">Ferrari 250 GTO</option>
												<option value="Ferrari 275">Ferrari 275</option>
												<option value="Ferrari 599 GTB Fiorano">Ferrari 599 GTB Fiorano</option>
												<option value="Ferrari F430">Ferrari F430</option>
												<option value="Ferrari 250">Ferrari 250</option>
											</optgroup>
											<optgroup label="Porsche">
												<option value="Porsche Carrera GT">Porsche Carrera GT</option>
												<option value="Porsche Boxster">Porsche Boxster</option>
												<option value="Porsche 911 classic">Porsche 911 classic</option>
												<option value="Porsche 911">Porsche 911</option>
												<option value="Porsche Cayman">Porsche Cayman</option>
												<option value="Porsche Panamera">Porsche Panamera</option>
												<option value="Porsche 959">Porsche 959</option>
												<option value="Porsche 356">Porsche 356</option>
												<option value="Porsche Cayenne">Porsche Cayenne</option>
												<option value="Porsche 997">Porsche 997</option>
											</optgroup>
										</select>
									</div>
									<div class="col-12 mt-3 input-daterange travel-date-group">
										<label class="text-white" for="template-contactform-date">Min Year</label>
										<input type="text" id="template-contactform-date" name="template-contactform-date" value="" class="form-control tleft">
										<label class="mt-3 text-white" for="template-contactform-date">Max Year</label>
										<input type="text" class="form-control tleft" name="template-contactform-end" />
									</div>

									<div class="col-12 mt-3 dark input-daterange travel-date-group">
										<label class="text-white" for="template-contactform-price">Price Range</label>
										<input class="price-range" />
									</div>
									<div class="col-12 mt-4">
										<button class="button button-3d button-rounded button-white button-light button-large btn-block m-0"">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="col-md-8 col-sm-12 pl-0" data-height-xs="400" data-height-sm="400" data-height-md="100%" data-height-lg="100%" data-height-xl="100%">
					<div class="fslider shadow-sm" data-arrows="true" data-autoplay="6000" data-loop="true" style="height: 100%">
						<div class="flexslider" style="height: 100%">
							<div class="slider-wrap full-screen">
								<div class="slide" data-height-xs="400" data-height-sm="400" data-height-md="100%" data-height-lg="100%" data-height-xl="100%" style="background: url('../../../../public/assets/demos/car/images/dealers/1.jpg') center center; background-size: cover;">
									<div class="flex-caption bg-dark card shadow-sm"><div class="card-body t600 py-1 px-2">2011</div></div>
									<div class="flex-caption d-flex justify-content-between align-items-center dark slider-caption-bottom bg-dark slider-caption-bg py-4 px-4">
										<div class="w-75">
											<h2 class="mb-1">Audi A6 Sportback</h2>
											<p class="t300 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ullam blanditiis voluptas quam iste tenetur laboriosam consectetur dignissimos recusandae, incidunt veritatis fugit!</p>
										</div>
										<h2 class="t700 h2 mb-0">$15,39,000</h2>
									</div>
								</div>
								<div class="slide" data-height-xs="400" data-height-sm="400" data-height-md="100%" data-height-lg="100%" data-height-xl="100%" style="background: url('../../../../public/assets/demos/car/images/dealers/2.jpg') center center; background-size: cover;">
									<div class="flex-caption bg-dark card shadow-sm"><div class="card-body t600 py-1 px-2">2012</div></div>
									<div class="flex-caption d-flex justify-content-between align-items-center dark slider-caption-bottom bg-dark slider-caption-bg py-4 px-4">
										<div class="w-75">
											<h2 class="mb-1">Bentley Continental GT</h2>
											<p class="t300 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ullam blanditiis voluptas quam iste tenetur laboriosam consectetur dignissimos recusandae, incidunt veritatis fugit!</p>
										</div>
										<h2 class="t700 h2 mb-0">$15,39,000</h2>
									</div>
								</div>
								<div class="slide" data-height-xs="400" data-height-sm="400" data-height-md="100%" data-height-lg="100%" data-height-xl="100%" style="background: url('../../../../public/assets/demos/car/images/dealers/3.jpg') center center; background-size: cover;">
									<div class="flex-caption bg-dark card shadow-sm"><div class="card-body t600 py-1 px-2">2013</div></div>
									<div class="flex-caption d-flex justify-content-between align-items-center dark slider-caption-bottom bg-dark slider-caption-bg py-4 px-4">
										<div class="w-75">
											<h2 class="mb-1">BMW Gran Turismo</h2>
											<p class="t300 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos ullam blanditiis voluptas quam iste tenetur laboriosam consectetur dignissimos recusandae, incidunt veritatis fugit!</p>
										</div>
										<h2 class="t700 h2 mb-0">$15,39,000</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Content
		============================================= -->
		<section id="content" class="clearfix">

			<div class="content-wrap nopadding">

				<div class="section nomargin">
					<div class="container">
						<div class="row py-5 clearfix">
							<div class="col-md-4 mb-md-3 mb-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-car-battery"></i></a>
									</div>
									<h3>Long Battery Life</h3>
									<p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
								</div>
							</div>
							<div class="col-md-4 mb-md-3 mb-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-car-cogs2"></i></a>
									</div>
									<h3>24x7 Service</h3>
									<p>Complete control on each &amp; every element that provides endless customization.</p>
								</div>
							</div>
							<div class="col-md-4 mb-md-3 mb-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-car-pump"></i></a>
									</div>
									<h3>Petrol, Diesel &amp; LPG</h3>
									<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
								</div>
							</div>
							<div class="col-md-4 mt-0 mt-md-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-car-meter"></i></a>
									</div>
									<h3>Powerful Dashboard</h3>
									<p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
								</div>
							</div>
							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-car-paint"></i></a>
									</div>
									<h3>Differnt Color Options</h3>
									<p>Complete control on each &amp; every element that provides endless customization.</p>
								</div>
							</div>
							<div class="col-md-4 mt-5">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-car-wheel"></i></a>
									</div>
									<h3>All wheel Drive</h3>
									<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row clearfix border-bottom align-content-stretch flex-wrap">

					<a href="#" class="col-lg-3 image_fade col-sm-6 p-5 order-1" style="background: url('../../../../public/assets/demos/car/images/dealers/car-wheel.jpg') no-repeat center center / cover;">
						<div class="p-5 p-sm-0"></div>
					</a>

					<div class="col-lg-3 col-sm-6 arrow-box bg-white py-5 px-4 d-flex align-self-center order-2">
						<div class="card noborder">
							<div class="card-body">
								<h3 class="mb-1">Car Alloy Wheels</h3>
								<h5 class="text-muted t400">With faded secondary text</h5>
								<p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with competitive niches. Competently initiate 24/7 internal.</p>
							</div>
						</div>
					</div>

					<a href="#" class="col-lg-3 col-sm-6 image_fade p-5 order-3 order-sm-4 order-lg-3" style="background: url('../../../../public/assets/demos/car/images/dealers/car-light.jpg') no-repeat center center / cover;">
						<div class="p-5 p-sm-0"></div>
					</a>

					<div class="col-lg-3 col-sm-6 arrow-box bg-white py-5 px-4 d-flex align-self-center order-4 order-sm-3 order-lg-4">
						<div class="card noborder">
							<div class="card-body">
								<h3 class="mb-1">Car Head Lights</h3>
								<h5 class="text-muted t400">With faded secondary text</h5>
								<p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with competitive niches. Competently initiate 24/7 internal.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-sm-6 arrow-box right bg-white py-5 px-4 d-flex align-self-center order-6 order-md-6 order-lg-5">
						<div class="card noborder">
							<div class="card-body">
								<h3 class="mb-1">Premium Interiors</h3>
								<h5 class="text-muted t400">With faded secondary text</h5>
								<p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with competitive niches. Competently initiate 24/7 internal.</p>
							</div>
						</div>
					</div>

					<a href="#" class="col-lg-3 image_fade col-sm-6 p-5 order-md-5 order-5 order-lg-6" style="background: url('../../../../public/assets/demos/car/images/dealers/car-interior.jpg') no-repeat center center / cover;">
						<div class="p-5 p-sm-0"></div>
					</a>

					<div class="col-lg-3 col-sm-6 arrow-box right bg-white py-5 px-4 d-flex align-self-center order-8 order-sm-7">
						<div class="card noborder">
							<div class="card-body">
								<h3 class="mb-1">Comfortable Leather Seats</h3>
								<h5 class="text-muted t400">With faded secondary text</h5>
								<p class="mb-0 text-black-50">Monotonectally actualize error-free total linkage with competitive niches. Competently initiate 24/7 internal.</p>
							</div>
						</div>
					</div>

					<a href="#" class="col-lg-3 image_fade col-sm-6 p-5 order-7 order-sm-8" style="background: url('../../../../public/assets/demos/car/images/dealers/car-seat.jpg') no-repeat center center / cover;">
						<div class="p-5 p-sm-0"></div>
					</a>

				</div>

				<div class="section nomargin">
					<div class="container">
						<div class="heading-block mb-4 center">
							<h2>Popular Cars</h2>
						</div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">

							<!-- Car 1 -->
							<article class="portfolio-item mt-4 cf-sedan">
								<div class="portfolio-image">
									<a href="#">
										<img src="../../../../public/assets/demos/car/images/filter-cars/1.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">$32,568</span>
											<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Ford Mustang - White</a></h3>
									<span>Dramatically synthesize parallel applications vis-a-vis revolutionary e-tailers. Monotonectally incubate cooperative partnerships.</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 20000</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> 5 Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</article>

							<!-- Car 2 -->
							<article class="portfolio-item mt-4 cf-suv">
								<div class="portfolio-image">
									<a href="#">
										<img src="../../../../public/assets/demos/car/images/filter-cars/2.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">$32,568</span>
											<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Chevrolet Brown Traverse</a></h3>
									<span>Enthusiastically incubate turnkey technologies for exceptional materials. Seamlessly implement emerging scenarios.</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 0-50 mph</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> 7 Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-paint"></i><span> Brown</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Manual</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 20-Inch</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>
							</article>

							<!-- Car 3 -->
							<article class="portfolio-item mt-4 cf-cabriolet">
								<div class="portfolio-image">
									<a href="#">
										<img src="../../../../public/assets/demos/car/images/filter-cars/3.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">$62,300</span>
											<span class="p-price-msrp">MSRP : <strong>$62,700</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Audi 2018 S5 Cabriolet</a></h3>
									<span>Competently evolve intuitive synergy without corporate human capital. Monotonectally.</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 0-60 mph</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-bearing"></i><span> Six-cylinder</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 23 mpg8</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>
							</article>

							<!-- Car 4 -->
							<article class="portfolio-item mt-4 cf-cuv">
								<div class="portfolio-image">
									<a href="#">
										<img src="../../../../public/assets/demos/car/images/filter-cars/4.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">$32,568</span>
											<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">BMW 3 Series, ABS</a></h3>
									<span>Energistically engineer user friendly synergy vis-a-vis enabled channels. Rapidiously utilize value-added. Laudantium debitis perferendis obcaecati.</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 0-80 mph</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> Hybrid</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-stearing"></i><span> 3000</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2017</span></div>
								</div>
							</article>

							<!-- Car 5 -->
							<article class="portfolio-item mt-4 cf-supercar">
								<div class="portfolio-image">
									<a href="#">
										<img src="../../../../public/assets/demos/car/images/filter-cars/5.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">$32,568</span>
											<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">2016 LEXUS IS 200T FSPORT</a></h3>
									<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium debitis unde laboriosam perferendis obcaecati.</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-cog3"></i><span> 30,000 mi</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-paint"></i><span> Metalic</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel"></i><span> 11 kmpl</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 18 Inch</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2018</span></div>
								</div>
							</article>

							<!-- Car 6 -->
							<article class="portfolio-item mt-4 cf-hatchback">
								<div class="portfolio-image">
									<a href="#">
										<img src="../../../../public/assets/demos/car/images/filter-cars/6.jpg" alt="Open Imagination">
										<div class="filter-p-pricing">
											<span class="p-price t700 ls1">$32,568</span>
											<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
										</div>
									</a>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#">Chevrolet T430 Hatchback</a></h3>
									<span>Appropriately exploit strategic niche markets rather than optimal products. Enthusiastically negotiate perferendis the art methods of empowermen.</span>
								</div>
								<div class="row no-gutters car-p-features font-primary clearfix">
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> 20000</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> 5 Seater</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> Automatic</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
									<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span> 2015</span></div>
								</div>
							</article>

						</div>
					</div>
				</div>

				<!-- Buy And Sell Section
				============================================= -->
				<div class="section nomargin nopadding clearfix">
					<div class="row align-items-stretch clearfix">
						<!-- Half Section 1 -->
						<div class="col-lg-6 dark bgcolor" style="background: url('../../../../public/assets/demos/car/images/5.jpg') center center no-repeat; background-size: cover;">
							<div class="col-padding clearfix">
								<i class="i-plain i-xlarge icon-car-service inline-block" style="margin-bottom: 20px;"></i>
								<div class="heading-block noborder" style="margin-bottom: 20px;">
									<h3>Are You Looking for a New Car?</h3>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus. Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
								<a href="#" class="button button-rounded button-white button-light nomargin">Know More</a>
							</div>
						</div>
						<!-- Half Section 2 -->
						<div class="col-lg-6 clearfix bgcolor" style="background: url('../../../../public/assets/demos/car/images/6.jpg') center center no-repeat; background-size: cover;">
							<div class="col-padding clearfix">
								<i class="i-plain i-xlarge icon-car-care inline-block" style="margin-bottom: 20px;"></i>
								<div class="heading-block noborder" style="margin-bottom: 20px;">
									<h3>Want to sell a used car?</h3>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aspernatur, doloribus. Aspernatur, maiores earum eaque quas temporibus eius dolore dicta.</p>
								<a href="#" class="button button-large button-dark button-black button-rounded nomargin">Know More</a>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark noborder" style="background-color: #080808;">

			<div class="container-fluid clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix" style="padding: 30px;">

					<div class="row clearfix">
						<div class="col-lg-6">

							<div class="col_one_fourth">
								<div class="widget widget_links clearfix">
									<h4>Hire</h4>
									<ul>
										<li><a href="#">Documentation</a></li>
										<li><a href="#">Feedback</a></li>
										<li><a href="#">Plugins</a></li>
									</ul>
								</div>
							</div>
							<div class="col_one_fourth">
								<div class="widget widget_links clearfix">
									<h4>Community</h4>
									<ul>
										<li><a href="#">Documentation</a></li>
										<li><a href="#">Feedback</a></li>
										<li><a href="#">Plugins</a></li>
										<li><a href="#">Support Forums</a></li>
									</ul>
								</div>
							</div>
							<div class="col_one_fourth">
								<div class="widget widget_links clearfix">
									<h4>Learn</h4>
									<ul>
										<li><a href="#">Documentation</a></li>
										<li><a href="#">Feedback</a></li>
										<li><a href="#">Plugins</a></li>
									</ul>
								</div>
							</div>
							<div class="col_one_fourth col_last">
								<div class="widget widget_links clearfix">
									<h4>About</h4>
									<ul>
										<li><a href="#">Documentation</a></li>
										<li><a href="#">Feedback</a></li>
										<li><a href="#">Plugins</a></li>
									</ul>
								</div>
							</div>

						</div>

						<div class="col-lg-5 fright tright col_last">

							<img src="../../../../public/assets/demos/car/images/logo-footer.png" alt="" height="50" style="margin-top: ">
							<br>
							<div style="color: #444">
								<span>&copy; Canvas Automotive. All Rights Reserved.</span><div class="clear"></div>
								<p style="margin-top: 10px;">Objectively restore standards compliant opportunities whereas one-to-one collaboration and idea-sharing.</p>
							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- Contact Button
	============================================= -->
	<div id="contact-me" class="icon-line-mail side-panel-trigger bgcolor"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="../../../../public/assets/js/jquery.js"></script>
	<script src="../../../../public/assets/js/plugins.js"></script>

	<!-- Bootstrap Select Plugin -->
	<script src="../../../../public/assets/js/components/bs-select.js"></script>

	<!-- Bootstrap Switch Plugin -->
	<script src="../../../../public/assets/js/components/bs-switches.js"></script>

	<!-- Datepicker Slider Plugin -->
	<script src="../../../../public/assets/js/components/datepicker.js"></script>

	<!-- Range Slider Plugin -->
	<script src="../../../../public/assets/js/components/rangeslider.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="../../../../public/assets/js/functions.js"></script>

	<script>

		jQuery(".bt-switch").bootstrapSwitch();

		$(function() {
			$('.travel-date-group').datepicker({
				autoclose: true,
				startView: 2,
    			minViewMode: 2,
    			todayHighlight: false,
    			defaultViewDate: { year: 2010, month: 01, day: 01 }
			});

			$(".price-range").ionRangeSlider({
				type: "double",
				grid: true,
				min: 0,
				max: 10000,
				from: 1000,
				prefix: "$"
			});
		});

	</script>


</body>
</html>