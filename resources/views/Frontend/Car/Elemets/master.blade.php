<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Mukta+Vaani:300,400,500,600,700|Open+Sans:300,400,600,700,800,900" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/dark.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/swiper.css')}}" type="text/css" />
    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/bs-select.css')}}" type="text/css" />

    <!-- Bootstrap Switch CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/components/bs-switches.css')}}" type="text/css" />



    <!-- car Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/demos/car/car.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/demos/car/css/car-icons/style.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/demos/car/css/fonts.css')}}" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('assets/css/font-icons.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css" />

    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('assets/css/colors.php?color=c85e51')}}" type="text/css" />
    <!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/include/rs-plugin/css/navigation.css')}}">


    <!-- Document Title
    ============================================= -->
    <title>Automotive | Canvas</title>

   @include('Frontend.Car.Elemets.index_style')

</head>

<body class="stretched side-push-panel" data-loader-html="<div><img src='{{asset('assets/demos/car/images/page-loader.gif')}}'  alt='Loader'></div>">

<!-- Side Panel Overlay -->
<div class="body-overlay"></div>

<!-- Side Panel -->
<div id="side-panel">

    <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon-line-cross"></i></a></div>

    <div class="side-panel-wrap">

        <div class="widget clearfix">

            <a href="index.html"><img src="demos/car/images/logo@2x.png" alt="Canvas Logo" height="50"></a>

            <p>It has always been, and will always be, about quality. We're passionate about ethically sourcing the finest coffee beans, roasting them with great care. We'd like to hear your message!</p>

            <div class="widget quick-contact-widget form-widget noborder notoppadding clearfix">

                <h4>Quick Contact</h4>
                <div class="form-result"></div>
                <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form nobottommargin">
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
                    <a href="demo-car.html" class="standard-logo"><img src="{{asset('assets/demos/car/images/logo.png')}}" alt="Canvas Logo"></a>
                    <a href="demo-car.html" class="retina-logo"><img src="demos/car/images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="with-arrows clearfix">
                    <ul>
                        <li class="current"><a href="#"><div>Home</div></a></li>
                        <!-- Mega Menu -->
                        {{--<li class="mega-menu"><a href="demos/car/car-single.html"><div>Models</div></a>--}}
                            {{--<div class="mega-menu-content style-2 clearfix">--}}
                                {{--<ul class="mega-menu-column col-lg-12">--}}
                                    {{--<li>--}}
                                        {{--<div class="widget center clearfix">--}}

                                            {{--<h3 class="nobottommargin">Featured Models</h3>--}}
                                            {{--<a href="#" class="button button-small button-rounded button-border button-dark button-black font-primary" style="margin: 10px 0 40px">Show all Cars</a>--}}

                                            {{--<!-- Mega Menu Cars Carousel -->--}}
                                            {{--<div class="owl-carousel customjs image-carousel carousel-widget" data-margin="20" data-nav="false" data-pagi="true" data-items-xs="1" data-items-sm="2" data-items-md="4" data-items-lg="6" data-items-xl="6">--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/1.png" alt="Car">BMW 1 Series ActiveE</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/4.png" alt="Car">Mercedes-Benz S-Class</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/5.png" alt="Car">Gran Turismo</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/6.png" alt="Car">Mclaren 675LT SPIDER</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/7.png" alt="Car">Honda City</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/8.png" alt="Car">Toyota Qualis</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/9.png" alt="Car">Honda WR-V</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/10.png" alt="Car">Suzuki Breeza</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/2.png" alt="Car">Chevrolet Spark</a></div>--}}
                                                {{--<div class="oc-item center"><a href="demos/car/car-single.html"><img src="demos/car/images/mega-menu/3.png" alt="Car">Honda JaZZ</a></div>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        <li><a href="/car_list"><div>Car Listing</div></a></li>
                        <li><a href="demos/car/car-dealers.html"><div>Dealers</div></a></li>
                        <li><a href="/autoLists"><div>Accessories</div></a></li>
                        {{--<li><a href="demos/car/car-interiors.html"><div>Interiors</div></a></li>--}}
                        <li><a href="/faq"><div>FAQs</div></a></li>
                        <li><a href="{{route('jobLists')}}"><div>Jobs</div></a></li>
                        {{--<li><a href="demos/car/car-blog.html"><div>Blog</div></a></li>--}}
                        <li><a href="{{route('car_contacts.create')}}"><div>Contacts</div></a></li>
                    </ul>
                </nav><!-- #primary-menu end -->
            </div>

        </div>

        <div id="header-trigger"><i class="icon-line-menu"></i><i class="icon-line-cross"></i></div>

    </header><!-- #header end -->
    @yield('content')
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

                        <img src="{{asset('assets/demos/car/images/logo-footer.png')}}" alt="" height="50" style="margin-top: ">
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
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/demos/car/js/360rotator.js')}}"></script>

<!-- Bootstrap Select Plugin -->
<script src="{{asset('assets/js/components/bs-select.js')}}"></script>

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script src="{{asset('assets/include/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/include/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{asset('assets/js/functions.js')}}"></script>

@include('Frontend.Car.Elemets.index_js')

</body>
</html>