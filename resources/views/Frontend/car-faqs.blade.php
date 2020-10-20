@extends('Frontend.Car.Elemets.master')
@section('content')
	<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('{{asset('images/accessories/page-title.jpg')}}'); background-size: cover; padding: 140px 0;" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">

			<div class="container clearfix">
				<h1>Questions &amp; Answers</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Cars</a></li>
					<li class="breadcrumb-item active" aria-current="page">FAQs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->


		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="heading-block">
								<h2>Some of your Questions:</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum tempore autem distinctio qui iure aspernatur doloribus porro blanditiis perspiciatis alias.</p>
							</div>

							<h4 class="mb-3">Marketplace <small>(4)</small></h4>

							<div class="accordion mb-5 accordion-border clearfix">

								<div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How do I become an author?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

								<div class="acctitle"><i class="acc-closed icon-comments-alt"></i><i class="acc-open icon-comments-alt"></i>Helpful Resources for Authors</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

								<div class="acctitle"><i class="acc-closed icon-lock3"></i><i class="acc-open icon-lock3"></i>How much money can I make?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

								<div class="acctitle"><i class="acc-closed icon-credit"></i><i class="acc-open icon-credit"></i>How do I pay for items on the Marketplaces?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

							</div>


							<h4 class="mb-3">Authors <small>(5)</small></h4>

							<div class="accordion mb-5 accordion-border clearfix" data-state="closed">

								<div class="acctitle"><i class="acc-closed icon-download-alt"></i><i class="acc-open icon-download-alt"></i>Can I offer my items for free on a promotional basis?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

								<div class="acctitle"><i class="acc-closed icon-question-sign"></i><i class="acc-open icon-question-sign"></i>How do I become an author?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

								<div class="acctitle"><i class="acc-closed icon-ok"></i><i class="acc-open icon-ok"></i>An Introduction to the Marketplaces for Authors</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

								<div class="acctitle"><i class="acc-closed icon-credit"></i><i class="acc-open icon-credit"></i>How do I pay for items on the Marketplaces?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

								<div class="acctitle"><i class="acc-closed icon-comments-alt"></i><i class="acc-open icon-comments-alt"></i>Helpful Resources for Authors</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

							</div>
							<h4 class="mb-3">Item Discussion <small>(3)</small></h4>

							<div class="accordion mb-5 accordion-border clearfix" data-state="closed">

								<div class="acctitle"><i class="acc-closed icon-picture"></i><i class="acc-open icon-picture"></i>What Images, Videos, Code Can I Use in my Items?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

								<div class="acctitle"><i class="acc-closed icon-file3"></i><i class="acc-open icon-file3"></i>Can I use trademarked names in my items?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

								<div class="acctitle"><i class="acc-closed icon-phone3"></i><i class="acc-open icon-phone3"></i>How can I get support for an item?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, fugiat iste nisi tempore nesciunt nemo fuga? Nesciunt, delectus laboriosam nisi repudiandae nam fuga saepe animi recusandae. Asperiores, provident, esse, doloremque, adipisci eaque alias dolore molestias assumenda quasi saepe nisi ab illo ex nesciunt nobis laboriosam iusto quia nulla ad voluptatibus iste beatae voluptas corrupti facilis accusamus recusandae sequi debitis reprehenderit quibusdam. Facilis eligendi a exercitationem nisi et placeat excepturi velit!</div>

							</div>


							<h4 class="mb-3">Affiliates <small>(2)</small></h4>

							<div class="accordion mb-5 accordion-border clearfix" data-state="closed">

								<div class="acctitle"><i class="acc-closed icon-money"></i><i class="acc-open icon-money"></i>How does the Tuts+ Premium affiliate program work?</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>

								<div class="acctitle"><i class="acc-closed icon-bar-chart"></i><i class="acc-open icon-bar-chart"></i>Tips for Increasing Your Referral Income</div>
								<div class="acc_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda officiis quasi sapiente suscipit veniam odio voluptatum. Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores, quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias repellat perferendis dolores dolor.</div>

							</div>
						</div>

						<div class="col-lg-4">
							<div class="row">
								<div class="col-md-6 col-lg-12">
									<div class="card bg-dark dark mb-5 pb-2 px-2">
										<div class="card-body">
											<h3 class="mb-3 uppercase ls1">About Us</h3>
											<h3 class="card-title mb-3">Special title treatment</h3>
											<p class="card-text text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab magni saepe, quam dolore, unde commodi fugit voluptatibus excepturi tenetur delectus iusto, aut porro qui earum magnam, doloribus nostrum laborum sed laudantium incidunt. Provident incidunt odio, labore magni, unde quam modi.</p>
											<a href="car-dealers.html" class="button button-3d button-rounded m-0"">Read More</a>
										</div>
									</div>
								</div>

								<div class="col-md-6 col-lg-12">
									<div class="card">
										<img class="card-img-top" src="{{asset('images/call.jpg')}}" alt="Card image cap">
										<div class="card-body">
											<h4 class="mb-1 color">Call Toll Free:</h4>
											<h2 class="card-title mb-2"><i class="icon-phone-sign position-relative mr-1 color" style="top: 4px;"></i> 1800(2345)(6789)</h2>
											<p class="card-text">We are 24/7 available. Our expert staff is standing by to answer your questions. You can also contact by email: <a class="btn-link" href="mailto:noreply@canvas.com">noreply@canvas.com</a></p>
										</div>
									</div>
								</div>

								<div class="col-md-12 col-lg-12  mt-4">
									<h3 class="mb-3">Car Reviews</h3>

									<div id="oc-testi" class="owl-carousel testimonials-carousel carousel-widget" data-margin="0" data-items="1" data-loop="true" data-autoplay="5500" data-pagi="false">

										<div class="oc-item">
											<div class="testimonial noborder noshadow">
												<div class="testi-image">
													<a href="#"><img src="{{asset('assets/images/testimonials/7.jpg')}}" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content border-bottom pb-4">
													<p style="font-style: normal">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
													<div class="mt-2">
														<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i>
													</div>
													<div class="testi-meta">John Doe<span>XYZ Inc.</span></div>
												</div>
											</div>
											<div class="testimonial pt-1 noborder noshadow">
												<div class="testi-image">
													<a href="#"><img src="{{asset('assets/images/testimonials/2.jpg')}}" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content">
													<p style="font-style: normal">Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
													<div class="mt-2">
														<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i>
													</div>
													<div class="testi-meta">
														Collis Ta'eed
														<span>Envato Inc.</span>
													</div>
												</div>
											</div>
										</div>

										<div class="oc-item">
											<div class="testimonial noborder noshadow">
												<div class="testi-image">
													<a href="#"><img src="{{asset('assets/images/testimonials/7.jpg')}}" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content border-bottom pb-4">
													<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
													<div class="mt-2">
														<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i>
													</div>
													<div class="testi-meta">
														Mary Jane
														<span>Google Inc.</span>
													</div>
												</div>
											</div>
											<div class="testimonial pt-1 noborder noshadow">
												<div class="testi-image">
													<a href="#"><img src="{{asset('assets/images/testimonials/3.jpg')}}" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content">
													<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
													<div class="mt-2">
														<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
													</div>
													<div class="testi-meta">
														Steve Jobs
														<span>Apple Inc.</span>
													</div>
												</div>
											</div>
										</div>

										<div class="oc-item">
											<div class="testimonial noborder noshadow">
												<div class="testi-image">
													<a href="#"><img src="{{asset('assets/images/testimonials/4.jpg')}}" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content border-bottom pb-4">
													<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
													<div class="mt-2">
														<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i>
													</div>
													<div class="testi-meta">
														Jamie Morrison
														<span>Adobe Inc.</span>
													</div>
												</div>
											</div>
											<div class="testimonial noborder pt-1 noshadow">
												<div class="testi-image">
													<a href="#"><img src="{{asset('assets/images/testimonials/1.jpg')}}" alt="Customer Testimonails"></a>
												</div>
												<div class="testi-content">
													<p style="font-style: normal">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
													<div class="mt-2">
														<i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i>
													</div>
													<div class="testi-meta">John Doe<span>XYZ Inc.</span></div>
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #content end -->

		@endsection