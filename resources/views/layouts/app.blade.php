<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} || Yeteda Services</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">

    <!-- plugins styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+2:400,500,600,700,800%7CLato:100,300,400,700,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/oberlin-icons.css') }}">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

</head>

<body>

    <div class="page-wrapper">
       <nav class="main-nav-one main-nav-one__home-two stricky">
            <div class="container-fluid">
                <div class="inner-container">
                    <div class="logo-box">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('images/dark-logo-1-1.png') }}" alt="" width="300">
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
                    </div><!-- /.logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class="main-nav__navigation-box">
                            <li class="{{ ($activePage == 'home') ? 'current' : '' }}"><a href="{{ route('home') }}">Home</a> </li>
                          
                            <li class="{{ ($activePage == 'services') ? 'current' : '' }}"><a href="{{ route('services') }}">Services</a> </li>

                            <li class="{{ ($activePage == 'reviews') ? 'current' : '' }}"><a href="{{ route('reviews') }}">Reviews</a></li>

                            <li class="{{ ($activePage == 'contact') ? 'current' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
                        </ul><!-- /.main-nav__navigation-box -->
                    </div><!-- /.main-nav__main-navigation -->
                    <div class="main-nav__right">
                        <div class="main-nav__social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div><!-- /.main-nav__social -->
                        <a href="tel:437-263-0151" class="main-nav-one__cta">
                            <i class="oberlin-icon-phone"></i>
                            <span>Say Hello </span>
                            <b>437-263-0151</b>
                        </a><!-- /.main-nav-one__cta -->
                    </div><!-- /.main-nav__right -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </nav><!-- /.main-nav-one -->

        @yield('content')
        
        <footer class="site-footer">
            <div class="site-footer__bottom">
                <div class="container">
                    <p>Yeteda Services <i class="far fa-copyright"></i> 2022 All Right Reserved</p>
                    <ul class="list-unstyled site-footer__menu">
                    <li><a href="#">Privacy Policy</a></li>
                        <li>Site by <a href="https://wmatechjunkies.com/" target="_blank">WMA Tech Junkies</a></li>
                    </ul><!-- /.site-footer__menu -->
                </div><!-- /.container -->
            </div><!-- /.site-footer__bottom -->
        </footer><!-- /.site-footer -->
        </footer><!-- /.site-footer -->


    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="{{ url('/') }}" class="side-menu__logo"><img src="{{ asset('images/light-logo-1-1.png') }}" alt=""
                    width="190"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
        <p class="side-menu__block__copy">(c) 2022 <a href="#">Yeteda Services</a> - All rights reserved. | Site by <a href="https://wmatechjunkies.com/" target="_blank">WMA Tech Junkies</a></p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!-- template scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/isotope.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/TweenMax.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/bootstrap4-rating-input.min.js') }}"></script>
    <script src="https://use.fontawesome.com/5ac93d4ca8.js"></script>
</body>

</html>