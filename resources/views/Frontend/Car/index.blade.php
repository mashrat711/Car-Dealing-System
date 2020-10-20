@extends('Frontend.Car.Elemets.master')
@section('content')

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper full-screen force-full-screen clearfix" data-dots="true" data-loop="true" data-grab="false">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide dark" style="background-image: url('{{asset('assets/demos/car/images/hero-slider/4.jpg')}}'); background-size: cover">
						<div class="container clearfix">
							<div class="slider-caption top-left center">
								<h2 class="font-primary nott">Renegade 730S</h2>
								<p class="t300 font-primary d-none d-sm-block">Raise your limits over</p>
								<a href="demos/car/car-single.html" class="button button-rounded button-border button-white button-light nott">View Details</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('{{asset('assets/demos/car/images/hero-slider/2.jpg')}}'); background-size: cover">
						<div class="container clearfix">
							<div class="slider-caption center">
								<h2 class="font-primary nott">Chevrolet Traverse</h2>
								<p class="t300 font-primary d-none d-sm-block">New and Powerful SUV</p>
								<a href="demos/car/car-single.html" class="button button-rounded button-border button-white button-light nott">View Details</a>
							</div>
						</div>
					</div>
					<div class="swiper-slide dark" style="background-image: url('{{asset('assets/demos/car/images/hero-slider/3.jpg')}}'); background-size: cover">
						<div class="container clearfix">
							<div class="slider-caption slider-caption-center">
								<h2 class="font-primary nott">Audi 2018 S5 Cabriolet</h2>
								<p class="t300 font-primary d-none d-sm-block">A Black Diamond</p>
								<a href="demos/car/car-single.html" class="button button-rounded button-border button-white button-light nott">View Details</a>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</section><!-- #Slider End -->

		<!-- Content
		============================================= -->
		<section id="content" class="clearfix">

			<div class="content-wrap nobottompadding" style="padding-top: 1px">

				<!-- Masonry Thums
				============================================= -->
				<div class="row m-0 dark clearfix" data-height-xs="500" data-height-sm="500" data-height-md="350" data-height-lg="350" data-height-xl="350">
					<a href="/car_list" class="col-md-4 image_fade border-right"
					   style="background: url('{{asset('assets/demos/car/images/categories/1.jpg')}}') no-repeat center center / cover;">
						<div class="overlay">
							<div class="text-overlay">
								<div class="text-overlay-title">
									<h3>Exteriors Looks</h3>
								</div>
								<div class="text-overlay-meta">
									<span>McLaren 430L &rarr;</span>
								</div>
							</div>
						</div>
					</a>
					<a href="/autoLists" class="col-md-4 image_fade p-0 border-right"
					   style="background: url('{{asset('assets/demos/car/images/categories/2.jpg')}}') no-repeat center center / cover;">
						<div class="overlay">
							<div class="text-overlay">
								<div class="text-overlay-title">
									<h3>Interior Looks</h3>
								</div>
								<div class="text-overlay-meta">
									<span>Beautiful Dashing Interiors &rarr;</span>
								</div>
							</div>
						</div>
					</a>
					<a href="{{route('car_contacts.create')}}" class="col-md-4 image_fade p-0"
					   style="background: url('{{asset('assets/demos/car/images/categories/3.jpg')}}') no-repeat center center / cover;">
						<div class="overlay">
							<div class="text-overlay">
								<div class="text-overlay-title">
									<h3>Our Stores</h3>
								</div>
								<div class="text-overlay-meta">
									<span>find out Stores &rarr;</span>
								</div>
							</div>
						</div>
					</a>
				</div>

				<!-- Moving car on scroll
				============================================= -->
				<div class="section notopmargin clearfix" style="padding: 100px 0">
					<div class="running-car topmargin-sm">
						<img class="car" src="{{asset('assets/demos/car/images/moving-car/car.jpg')}}" alt="">
						<img class="wheel" src="{{asset('assets/demos/car/images/moving-car/car-tier.png')}}" alt="">
					</div>
					<div class="container clearfix">
						<div class="row clearfix" style="position: relative;">
							<div class="col-lg-6 offset-lg-6">
								<div class="heading-block hlarge">
									<h3>Our Fleet<br>Your Fleet</h3>
								</div>
								<p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>
							</div>
						</div>
					</div>
				</div> <!-- Moving car on scroll End -->

				<!-- Features Section
				============================================= -->
				<div class="container clearfix">

					<div class="row clearfix topmargin bottommargin">

						<div class="col-lg-4 col-md-6 topmargin bottommargin-sm">

							<div class="heading-block nobottomborder">
								<h2 class="nott ls0" style="font-size: 44px; line-height: 1.2">Explore the New Mercedec Benz</h2>
							</div>
							<span style="color: #BBB;">Eum nihil pretium quas aliqua, laboris ipsam diam congue natoque mollitia occaecati! Cubilia pede, numquam fringilla proident dis? Molestias repellat.<br><br>Quas perferendis urna, officiis necessitatibus deserunt recusandae urna ullamco hac do beatae cubilia iste dolorum, facilisi? Sit, hic, varius! Sollicitudin.<br><br>Nostrum feugiat beatae proident porro eleifend adipiscing nostrud aliquid sit.</span>
							<div class="clear"></div>
							<a href="#" class="button button-rounded button-black button-dark noleftmargin topmargin-sm clearfix">Know More</a>

						</div>

						<div class="col-lg-4 d-md-none d-lg-block center">
							<img src="{{asset('assets/demos/car/images/features/bg1.png')}}" alt="Car">
						</div>

						<div class="col-lg-4 col-md-6 topmargin bottommargin-sm">
							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car-battery"></i></a>
								</div>
								<h3>Long Battery Life</h3>
								<p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>
							</div>

							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car-cogs2"></i></a>
								</div>
								<h3>24x7 Service</h3>
								<p>Complete control on each &amp; every element that provides endless customization.</p>
							</div>

							<div class="feature-box fbox-plain topmargin">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car-pump"></i></a>
								</div>
								<h3>Petrol, Diesel &amp; LPG</h3>
								<p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>
							</div>
						</div>
					</div>

				</div> <!-- Features Area End -->



				<!-- 360 degree car
				============================================= -->
				<div class="section dark nobottommargin clearfix" style="background: #FFF url('{{asset('assets/demos/car/images/1.jpg')}}') right bottom no-repeat; background-size: cover; padding: 80px 0 40px">
					<div class="container-fluid clearfix" style="position: relative; z-index: 2;">
						<div class="row clearfix">
							<div class="col-lg-8">
								<div class="heading-block noborder nobottommargin center">
									<h3 style="font-size: 32px; text-transform: ;  font-weight: 700;">360 Degree Drag</h3>
								</div>
								<!-- 360 degree Car Content -->
								<div class="threesixty 360-car">
									<div class="spinner">
										<span>0%</span>
									</div>
									<ol class="threesixty_images"></ol>
								</div>

							</div>
							<div class="col-lg-4">
								<div class="row clearfix">
									<div class="col-lg-10">
										<div class="heading-block topmargin-sm noborder">
											<h3 style="text-transform: none; font-size: 36px; letter-spacing: 0px; font-weight: 700;">Select other Models</h3>
											<span>Intrinsicly formulate plug-and-play systems with interactive communities. Quickly aggregate plug-and-play.</span>
										</div>
										<form id="login-form" name="login-form" class="nobottommargin" action="{{route('carByCategory')}}" method="post">
                                              @csrf
											<div class="col_full">
												<select class="selectpicker sm-form-control customjs border-form-control" name="car_brand_id" data-size="6" data-live-search="true" title="Select Model" style="width:100%; line-height: 30px;">
													@foreach($carBrand  as $key => $brand)
														<option value="{{$key}}"> {{$brand}}  </option>
													@endforeach
												</select>
											</div>

											<div class="col_full">
												<select class="selectpicker sm-form-control customjs border-form-control" name="car_model_id"  data-size="6" data-live-search="true" title="Select Model" style="width:100%; line-height: 30px;">
													@foreach($carModel as $key => $student)
														<option value="{{$key}}"> {{$student}}  </option>
													@endforeach



												</select>
											</div>

											<div class="col_full nobottommargin">
												<button class="button button-rounded btn-block t400 nomargin" id="login-form-submit" name="login-form-submit" value="login">Search</button>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="video-wrap d-block d-md-block d-lg-none" style="z-index: 0;">
						<div class="video-overlay" style="background: rgba(255,255,255,0.8);"></div>
					</div>
				</div> <!-- 360 Degree Section End -->

				<!-- 360 degree car
				============================================= -->
				<div class="section nomargin nobg clearfix" style="padding: 100px 0;">
					<div class="container clearfix">
						<div class="heading-block center">
							<div class="before-heading uppercase ls1" style="font-size: 13px; font-style: normal;">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
							<h3 class="t700">Featured Vehicles</h3>
						</div>

						<!-- Portfolio Filter
                            ============================================= -->
						<ul class="portfolio-filter style-2 clearfix" data-container="#portfolio">
							@foreach($carTypes as $carType)
								<li><a href="#" data-filter=".cf-{{$carType}}"><i class="icon-car-cuv"></i><span>{{$carType}}</span></a></li>
						@endforeach
						<!-- Show All Button -->
							<li class="fright activeFilter"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
						</ul> <!-- #portfolio-filter end -->

						<div class="clear"></div>
						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-3 grid-container clearfix" data-layout="fitRows">

						@foreach($cars as $car)
							<!-- Car 1 -->
								<article class="portfolio-item cf-{{$car->type}}" style="padding-bottom: 40px">
									<div class="portfolio-image">
										<a href="{{route('car_specifications.show',$car->id)}}">
											<img src="{{asset("images/car/$car->extra")}}" alt="Open Imagination">
											<div class="filter-p-pricing">
												<span class="p-price t700 ls1">${{$car->price}}</span>
												<span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
											</div>
										</a>
									</div>
									<div class="portfolio-desc">
										<h3><a href="#">{{$car->carModel->title}}</a></h3>
										<span>{{$car->short_description}}</span>
									</div>
									<div class="row no-gutters car-p-features font-primary clearfix">
										<div class="col-lg-4 col-6 nopadding"><i class="icon-car-meter"></i><span> {{$car->acceleration}}</span></div>
										<div class="col-lg-4 col-6 nopadding"><i class="icon-car-door"></i><span> {{$car->seat}} Seater</span></div>
										<div class="col-lg-4 col-6 nopadding"><i class="icon-car-fuel2"></i><span>{{$car->power_kw}}</span></div>
										<div class="col-lg-4 col-6 nopadding"><i class="icon-car-signal"></i><span> {{$car->system}}</span></div>
										<div class="col-lg-4 col-6 nopadding"><i class="icon-car-wheel"></i><span> {{$car->length}}Inch</span></div>
										<div class="col-lg-4 col-6 nopadding"><i class="icon-car-care"></i><span>{{$car->min_year}}</span></div>
									</div>
								</article>
							@endforeach


						</div>
					</div>
				</div> <!-- Filter Car lists end -->

				<!-- Video Gallery on Hover
				============================================= -->
				<div class="section nomargin ohidden">
					<div class="heading-block nobottommargin center">
						<h2>Video Gallery</h2>
					</div>
				</div>
				<div class="dark section nopadding nomargin ohidden" style="height: 740px">
					<div class="row" style="height: 100%;">
						<!-- Video 1 -->
						<div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
							<a href="demos/car/car-listing.html">
								<div class="vertical-middle center" style="z-index: 1">
									<div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
									<h2 class="nobottommargin ls1">Mercedes-AMG GT</h2>
								</div>
								<div class="video-wrap">
									<video id="slide-video-1" poster="{{asset('assets/demos/car/images/videos/1.mp4')}}" preload="auto" loop muted>
										<source src='{{asset('assets/demos/car/images/videos/1.mp4')}}' type='video/mp4' />
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
								</div>
							</a>
						</div>
						<!-- Video 2 -->
						<div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
							<a href="demos/car/car-listing.html">
								<div class="vertical-middle center" style="z-index: 1">
									<div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
									<h2 class="nobottommargin ls1">Mercedes-AMG C 63</h2>
								</div>
								<div class="video-wrap">
									<video id="slide-video-2" poster="{{asset('assets/demos/car/images/videos/2.mp4')}}" preload="auto" loop muted>
										<source src='{{asset('assets/demos/car/images/videos/2.mp4')}}' type='video/mp4' />
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
								</div>
							</a>
						</div>
						<!-- Video 3 -->
						<div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
							<a href="demos/car/car-listing.html">
								<div class="vertical-middle center" style="z-index: 1">
									<div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">BMW Auto</div>
									<h2 class="nobottommargin ls1">BMW Z4 Roadster</h2>
								</div>
								<div class="video-wrap">
									<video id="slide-video-3" poster="{{asset('assets/demos/car/images/videos/3.mp4')}}" preload="auto" loop muted>
										<source src='{{asset('assets/demos/car/images/videos/3.mp4')}}' type='video/mp4' />
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
								</div>
							</a>
						</div>
						<!-- Video 4 -->
						<div class="col-md-6 col-12 nopadding half-screen dark videoplay-on-hover">
							<a href="demos/car/car-listing.html">
								<div class="vertical-middle center" style="z-index: 1">
									<div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes Benz</div>
									<h2 class="nobottommargin ls1">Mercedes-COUPÉ GLE 63</h2>
								</div>
								<div class="video-wrap">
									<video id="slide-video-4" poster="{{asset('assets/demos/car/images/videos/4.mp4')}}" preload="auto" loop muted>
										<source src='{{asset('assets/demos/car/images/videos/4.mp4')}}' type='video/mp4' />
									</video>
									<div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
								</div>
							</a>
						</div>
					</div>
				</div> <!-- Video Gallery end -->

				<!-- Counter Area
				============================================= -->
				<div class="section counter-section nomargin dark clearfix">
					<div class="container clearfix align-items-stretch">
						<div class="row">
							<div class="col-lg-3 col-md-6 center">
								<div>
									<i class="i-plain i-large divcenter color icon-car-fulltime"></i>
									<div class="counter"><span data-from="10" data-to="11365" data-refresh-interval="50" data-speed="1000"></span></div>
									<h5>Happy Customers</h5>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 center">
								<div>
									<i class="i-plain i-large divcenter color icon-car-money"></i>
									<div class="counter"><span data-from="10" data-to="145" data-refresh-interval="50" data-speed="700"></span></div>
									<h5>Cars in Stock</h5>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 center">
								<div>
									<i class="i-plain i-large divcenter color icon-car-fan"></i>
									<div class="counter"><span data-from="10" data-to="50" data-refresh-interval="85" data-speed="1200"></span></div>
									<h5>Showrooms</h5>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 center">
								<div>
									<i class="i-plain i-large divcenter color icon-car-fuel2"></i>
									<div class="counter"><span data-from="10" data-to="7664" data-refresh-interval="30" data-speed="900"></span></div>
									<h5>Awwards</h5>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Counter Area end -->

				<!-- Featured Section
				============================================= -->
				<div class="section nomargin clearfix" style="background: #FFF url('{{asset('assets/demos/car/images/features/section-bg.jpg')}}') left bottom no-repeat; background-size: cover; padding: 140px 0">
					<div class="container clearfix">
						<div class="row clearfix">
							<div class="col-lg-6 col-md-9">
								<div class="heading-block">
									<h3 style="font-size: 58px; line-height: 56px; letter-spacing: -2px">Our Fleet<br>Your Fleet</h3>
								</div>
								<p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>

								<div class="row topmargin clearfix">
									<div class="col-md-6">
										<div class="feature-box fbox-plain media-box">
											<div class="fbox-icon" style="position: relative;">
												<a href="#"><i class="icon-car-service2"></i></a>
											</div>
											<div class="fbox-desc" style="margin-top: 25px">
												<h3>Skilled Professionals.</h3>
												<p class="t300" style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</p>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="feature-box fbox-plain media-box">
											<div class="fbox-icon" style="position: relative;">
												<a href="#"><i class="icon-car-crane"></i></a>
											</div>
											<div class="fbox-desc" style="margin-top: 25px">
												<h3>Skilled Professionals.</h3>
												<p class="t300" style="color: #666;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div> <!-- Featured end -->

				<!-- Buy And Sell Section
				============================================= -->
				<div class="section nomargin nopadding clearfix">
					<div class="row align-items-stretch clearfix">
						<!-- Half Section 1 -->
						<div class="col-lg-6 dark bgcolor" style="background: url('{{asset('assets/demos/car/images/5.jpg')}}') center center no-repeat; background-size: cover;">
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
						<div class="col-lg-6 clearfix bgcolor" style="background: url('{{asset('assets/demos/car/images/6.jpg')}}') center center no-repeat; background-size: cover;">
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

				<!-- Before Footer Section
				============================================= -->
				<div class="section nomargin clearfix" style="background: #FFF url('{{asset('assets/demos/car/images/footer-bg.jpg')}}') center bottom no-repeat; background-size: cover; height: 770px">
					<div class="divcenter dark center clearfix" style="max-width: 570px">
						<div class="heading-block dark bottommargin-sm noborder">
							<h2 class="nott t500">Raise Your Heart</h2>
							<p style="color: #DDD; margin-top: 10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ipsa necessitatibus rem facere perspiciatis neque laborum est, illum commodi sunt, nobis voluptas.</p>
						</div>
						<a href="demos/car/car-contact.html" class="uppercase t700 ls2" style="color: #FFF; font-size: 12px; border-bottom: 1px solid #FFF">Request a Quote</a> &rarr;
					</div>
				</div>

			</div>

		</section><!-- #content end -->

@endsection