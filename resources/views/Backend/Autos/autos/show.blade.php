<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Shop Single | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu">

						<ul>
							<li><a href="index.html"><div>Home</div></a>

							</li>

						</ul>

						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Shopping Cart</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Blue Round-Neck Tshirt</a>
											<span class="top-cart-item-price">$19.99</span>
											<span class="top-cart-item-quantity">x 2</span>
										</div>
									</div>
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-image">
											<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
										</div>
										<div class="top-cart-item-desc">
											<a href="#">Light Blue Denim Dress</a>
											<span class="top-cart-item-price">$24.99</span>
											<span class="top-cart-item-quantity">x 3</span>
										</div>
									</div>
								</div>
								<div class="top-cart-action clearfix">
									<span class="fleft top-checkout-price">$114.95</span>
									<button class="button button-3d button-small nomargin fright">View Cart</button>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Pink Printed Dress</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Shop</a></li>
					<li class="breadcrumb-item active" aria-current="page">Shop Single</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="single-product">

						<div class="product">

							<div class="col_two_fifth">

								<!-- Product Single - Gallery
								============================================= -->
								<div class="product-image">
									<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
										<div class="flexslider">
											<div class="slider-wrap" data-lightbox="gallery">
												<div class="slide" data-thumb="{{asset("images/$autos->image")}}"><a href="{{asset("images/$autos->image")}}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{asset("images/$autos->image")}}" alt="Pink Printed Dress"></a></div>
												<div class="slide" data-thumb="{{asset("images/$autos->image")}}"><a href="{{asset("images/$autos->image")}}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{asset("images/$autos->image")}}" alt="Pink Printed Dress"></a></div>
												<div class="slide" data-thumb="{{asset("images/$autos->image")}}"><a href="{{asset("images/$autos->image")}}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{asset("images/$autos->image")}}" alt="Pink Printed Dress"></a></div>
											</div>
										</div>
									</div>
									<div class="sale-flash">Sale!</div>
								</div><!-- Product Single - Gallery End -->

							</div>

							<div class="col_two_fifth product-desc">

								<!-- Product Single - Price
								============================================= -->
								<div class="product-price"> <ins>${{$autos->price}}</ins></div><!-- Product Single - Price End -->

								<!-- Product Single - Rating
								============================================= -->
								<div class="product-rating">
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star3"></i>
									<i class="icon-star-half-full"></i>
									<i class="icon-star-empty"></i>
								</div><!-- Product Single - Rating End -->

								<div class="clear"></div>
								<div class="line"></div>

								<!-- Product Single - Quantity & Cart Button
								============================================= -->
								<form  class="cart nobottommargin clearfix" action="{{ route('cart.store') }}" method="POST">
									{{ csrf_field() }}
									<input type="hidden" value="{{ $autos->id }}" id="id" name="id">
									<input type="hidden" value="{{ $autos->name }}" id="name" name="name">
									<input type="hidden" value="{{ $autos->price }}" id="price" name="price">
									{{--<input type="hidden" value="{{ $autos->image_path }}" id="img" name="img">--}}
									<input type="hidden" value="{{ $autos->slug }}" id="slug" name="slug">
									<input type="hidden" value="1" id="quantity" name="quantity">
									<div class="card-footer" style="background-color: white;">
										<div class="row">
											<button class="add-to-cart button nomargin" class="tooltip-test" title="add to cart">
												<i class="fa fa-shopping-cart"></i> add to cart
											</button>
										</div>
									</div>
								</form><!-- Product Single - Quantity & Cart Button End -->

								<div class="clear"></div>
								<div class="line"></div>

								<!-- Product Single - Short Description
								============================================= -->
								<p>{{$autos->details}}</p>
								<p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
								<ul class="iconlist">
									<li><i class="icon-caret-right"></i> Dynamic Color Options</li>
									<li><i class="icon-caret-right"></i> Lots of Size Options</li>
									<li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
								</ul><!-- Product Single - Short Description End -->

								<!-- Product Single - Meta
								============================================= -->
								<div class="card product-meta">
									<div class="card-body">
										<span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
										<span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
										<span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>
									</div>
								</div><!-- Product Single - Meta End -->

								<!-- Product Single - Share
								============================================= -->
								<div class="si-share noborder clearfix">
									<span>Share:</span>
									<div>
										<a href="#" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a>
									</div>
								</div><!-- Product Single - Share End -->

							</div>

							<div class="col_one_fifth col_last">

								<a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="" alt="Brand Logo"></a>

								<div class="divider divider-center"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-thumbs-up2"></i>
									</div>
									<h3>100% Original</h3>
									<p class="notopmargin">We guarantee you the sale of Original Brands.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-credit-cards"></i>
									</div>
									<h3>Payment Options</h3>
									<p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-truck2"></i>
									</div>
									<h3>Free Shipping</h3>
									<p class="notopmargin">Free Delivery to 100+ Locations on orders above $40.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-undo"></i>
									</div>
									<h3>30-Days Returns</h3>
									<p class="notopmargin">Return or exchange items purchased within 30 days.</p>
								</div>

							</div>

							<div class="col_full nobottommargin">

								<div class="tabs clearfix nobottommargin" id="tab-1">

									<ul class="tab-nav clearfix">
										<li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Description</span></a></li>
										<li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> Additional Information</span></a></li>
										{{--<li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Reviews (2)</span></a></li>--}}
									</ul>

									<div class="tab-container">

										<div class="tab-content clearfix" id="tabs-1">
											<p>{{$autos->details}}</p>

										</div>
										<div class="tab-content clearfix" id="tabs-2">
<p>{{$autos->description}}</p>
											{{--<table class="table table-striped table-bordered">--}}
												{{--<tbody>--}}
													{{--<tr>--}}
														{{--<td>Size</td>--}}
														{{--<td>Small, Medium &amp; Large</td>--}}
													{{--</tr>--}}
													{{--<tr>--}}
														{{--<td>Color</td>--}}
														{{--<td>Pink &amp; White</td>--}}
													{{--</tr>--}}
													{{--<tr>--}}
														{{--<td>Waist</td>--}}
														{{--<td>26 cm</td>--}}
													{{--</tr>--}}
													{{--<tr>--}}
														{{--<td>Length</td>--}}
														{{--<td>40 cm</td>--}}
													{{--</tr>--}}
													{{--<tr>--}}
														{{--<td>Chest</td>--}}
														{{--<td>33 inches</td>--}}
													{{--</tr>--}}
													{{--<tr>--}}
														{{--<td>Fabric</td>--}}
														{{--<td>Cotton, Silk &amp; Synthetic</td>--}}
													{{--</tr>--}}
													{{--<tr>--}}
														{{--<td>Warranty</td>--}}
														{{--<td>3 Months</td>--}}
													{{--</tr>--}}
												{{--</tbody>--}}
											{{--</table>--}}

										</div>
										{{--<div class="tab-content clearfix" id="tabs-3">--}}

											{{--<div id="reviews" class="clearfix">--}}

												{{--<ol class="commentlist clearfix">--}}

													{{--<li class="comment even thread-even depth-1" id="li-comment-1">--}}
														{{--<div id="comment-1" class="comment-wrap clearfix">--}}

															{{--<div class="comment-meta">--}}
																{{--<div class="comment-author vcard">--}}
																	{{--<span class="comment-avatar clearfix">--}}
																	{{--<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>--}}
																{{--</div>--}}
															{{--</div>--}}

															{{--<div class="comment-content clearfix">--}}
																{{--<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span></div>--}}
																{{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>--}}
																{{--<div class="review-comment-ratings">--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star-half-full"></i>--}}
																{{--</div>--}}
															{{--</div>--}}

															{{--<div class="clear"></div>--}}

														{{--</div>--}}
													{{--</li>--}}

													{{--<li class="comment even thread-even depth-1" id="li-comment-1">--}}
														{{--<div id="comment-1" class="comment-wrap clearfix">--}}

															{{--<div class="comment-meta">--}}
																{{--<div class="comment-author vcard">--}}
																	{{--<span class="comment-avatar clearfix">--}}
																	{{--<img alt='' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>--}}
																{{--</div>--}}
															{{--</div>--}}

															{{--<div class="comment-content clearfix">--}}
																{{--<div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span></div>--}}
																{{--<p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>--}}
																{{--<div class="review-comment-ratings">--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star3"></i>--}}
																	{{--<i class="icon-star-empty"></i>--}}
																	{{--<i class="icon-star-empty"></i>--}}
																{{--</div>--}}
															{{--</div>--}}

															{{--<div class="clear"></div>--}}

														{{--</div>--}}
													{{--</li>--}}

												{{--</ol>--}}

												{{--<!-- Modal Reviews--}}
												{{--============================================= -->--}}
												{{--<a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>--}}

												{{--<div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">--}}
													{{--<div class="modal-dialog">--}}
														{{--<div class="modal-content">--}}
															{{--<div class="modal-header">--}}
																{{--<h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>--}}
																{{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
															{{--</div>--}}
															{{--<div class="modal-body">--}}
																{{--<form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">--}}

																	{{--<div class="col_half">--}}
																		{{--<label for="template-reviewform-name">Name <small>*</small></label>--}}
																		{{--<div class="input-group">--}}
																			{{--<div class="input-group-prepend">--}}
																				{{--<div class="input-group-text"><i class="icon-user"></i></div>--}}
																			{{--</div>--}}
																			{{--<input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />--}}
																		{{--</div>--}}
																	{{--</div>--}}

																	{{--<div class="col_half col_last">--}}
																		{{--<label for="template-reviewform-email">Email <small>*</small></label>--}}
																		{{--<div class="input-group">--}}
																			{{--<div class="input-group-prepend"><div class="input-group-text">@</div></div>--}}
																			{{--<input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />--}}
																		{{--</div>--}}
																	{{--</div>--}}

																	{{--<div class="clear"></div>--}}

																	{{--<div class="col_full col_last">--}}
																		{{--<label for="template-reviewform-rating">Rating</label>--}}
																		{{--<select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">--}}
																			{{--<option value="">-- Select One --</option>--}}
																			{{--<option value="1">1</option>--}}
																			{{--<option value="2">2</option>--}}
																			{{--<option value="3">3</option>--}}
																			{{--<option value="4">4</option>--}}
																			{{--<option value="5">5</option>--}}
																		{{--</select>--}}
																	{{--</div>--}}

																	{{--<div class="clear"></div>--}}

																	{{--<div class="col_full">--}}
																		{{--<label for="template-reviewform-comment">Comment <small>*</small></label>--}}
																		{{--<textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>--}}
																	{{--</div>--}}

																	{{--<div class="col_full nobottommargin">--}}
																		{{--<button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>--}}
																	{{--</div>--}}

																{{--</form>--}}
															{{--</div>--}}
															{{--<div class="modal-footer">--}}
																{{--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
															{{--</div>--}}
														{{--</div><!-- /.modal-content -->--}}
													{{--</div><!-- /.modal-dialog -->--}}
												{{--</div><!-- /.modal -->--}}
												{{--<!-- Modal Reviews End -->--}}

											{{--</div>--}}

										{{--</div>--}}

									</div>

								</div>

							</div>

						</div>

					</div>

					<div class="clear"></div><div class="line"></div>

					{{--<div class="col_full nobottommargin">--}}

						{{--<h4>Related Products</h4>--}}

						{{--<div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-md="2" data-items-lg="3" data-items-xl="4">--}}

							{{--<div class="oc-item">--}}
								{{--<div class="product iproduct clearfix">--}}
									{{--<div class="product-image">--}}
										{{--<a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>--}}
										{{--<a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>--}}
										{{--<div class="sale-flash">50% Off*</div>--}}
										{{--<div class="product-overlay">--}}
											{{--<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>--}}
											{{--<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="product-desc center">--}}
										{{--<div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>--}}
										{{--<div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>--}}
										{{--<div class="product-rating">--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star-half-full"></i>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="oc-item">--}}
								{{--<div class="product iproduct clearfix">--}}
									{{--<div class="product-image">--}}
										{{--<a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>--}}
										{{--<a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>--}}
										{{--<div class="product-overlay">--}}
											{{--<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>--}}
											{{--<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="product-desc center">--}}
										{{--<div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>--}}
										{{--<div class="product-price">$39.99</div>--}}
										{{--<div class="product-rating">--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star-half-full"></i>--}}
											{{--<i class="icon-star-empty"></i>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="oc-item">--}}
								{{--<div class="product iproduct clearfix">--}}
									{{--<div class="product-image">--}}
										{{--<a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>--}}
										{{--<a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>--}}
										{{--<div class="product-overlay">--}}
											{{--<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>--}}
											{{--<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="product-desc center">--}}
										{{--<div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>--}}
										{{--<div class="product-price">$49</div>--}}
										{{--<div class="product-rating">--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star-empty"></i>--}}
											{{--<i class="icon-star-empty"></i>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="oc-item">--}}
								{{--<div class="product iproduct clearfix">--}}
									{{--<div class="product-image">--}}
										{{--<a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>--}}
										{{--<a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>--}}
										{{--<div class="product-overlay">--}}
											{{--<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>--}}
											{{--<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="product-desc center">--}}
										{{--<div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>--}}
										{{--<div class="product-price">$19.95</div>--}}
										{{--<div class="product-rating">--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star-empty"></i>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="oc-item">--}}
								{{--<div class="product iproduct clearfix">--}}
									{{--<div class="product-image">--}}
										{{--<a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>--}}
										{{--<a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>--}}
										{{--<div class="sale-flash">Sale!</div>--}}
										{{--<div class="product-overlay">--}}
											{{--<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>--}}
											{{--<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="product-desc center">--}}
										{{--<div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>--}}
										{{--<div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>--}}
										{{--<div class="product-rating">--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star3"></i>--}}
											{{--<i class="icon-star-empty"></i>--}}
											{{--<i class="icon-star-empty"></i>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}

						{{--</div>--}}

					{{--</div>--}}

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="images/footer-widget-logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

								<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
									<address>
										<strong>Headquarters:</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>

							</div>

						</div>

						<div class="col_one_third">

							<div class="widget widget_links clearfix">

								<h4>Blogroll</h4>

								<ul>
									<li><a href="https://codex.wordpress.org/">Documentation</a></li>
									<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
									<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
									<li><a href="https://wordpress.org/support/">Support Forums</a></li>
									<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
									<li><a href="https://wordpress.org/news/">WordPress Blog</a></li>
									<li><a href="https://planet.wordpress.org/">WordPress Planet</a></li>
								</ul>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
								<h4>Recent Posts</h4>

								<div id="post-list-footer">
									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Total Downloads</h5>
								</div>

								<div class="col-lg-6 bottommargin-sm">
									<div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
									<h5 class="nobottommargin">Clients</h5>
								</div>

							</div>

						</div>

						<div class="widget subscribe-widget clearfix">
							<h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="nobottommargin">
								<div class="input-group divcenter">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="icon-email2"></i></div>
									</div>
									<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<div class="input-group-append">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</div>
								</div>
							</form>
						</div>

						<div class="widget clearfix" style="margin-bottom: -20px;">

							<div class="row">

								<div class="col-lg-6 clearfix bottommargin-sm">
									<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
								</div>
								<div class="col-lg-6 clearfix">
									<a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
								</div>

							</div>

						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<script src="{{asset('assets/js/jquery.js')}}"></script>
	<script src="{{asset('assets/js/plugins.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>


</body>
</html>