<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews || Yeteda Services</title>

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
                        <a href="/index.html">
                            <img src="{{ asset('images/dark-logo-1-1.png') }}" alt="" width="300">
                        </a>
                        <a href="#" class="side-menu__toggler"><i class="fa fa-bars"></i></a>
                    </div><!-- /.logo-box -->
                    <div class="main-nav__main-navigation">
                        <ul class="main-nav__navigation-box">
                            <li><a href="https://yetedaservices.com/">Home</a> </li>
                          
                            <li> <a href="https://yetedaservices.com/services.html">Services</a> </li>

                            <li class="current"><a href="https://yetedaservices.com/review">Reviews</a></li>

                            <li><a href="https://yetedaservices.com/contact.html">Contact</a></li>
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

        <section class="page-header" style="background-image: url({{ asset('images/background/page-header-bg-1-1.jpg') }});">
            <div class="container">
                <h2>Customer Reviews</h2>
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="https://yetedaservices.com/">Home</a></li>
                    <li><span>Reviews</span></li>
                </ul><!-- /.list-unstyled -->
            </div>
            <!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-info-one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        @foreach ($reviews as $review)
                            <div class="card shadow mb-3" style="border-left:3px solid #4CB7FF">
                                <div class="card-body">
                                    <em class="small">{{ $review->created_at }}</em>
                                    <p>{{ $review->comment }}</p>
                                    <div class="text-right">
                                        <div class="rating text-warning">{{ $review->rating }}</div>
                                        <div class="small">{{ strtoupper($review->name) }}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="row justify-content-center my-4 pt-4">
                            {{ $reviews->links() }}
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->

        <section class="contact-one" id="reviewFormSection">
            <div class="container">
                <div class="block-title text-center">
                    <p>Write a Review</p>
                    <h3>Share your experience with us</h3>
                </div><!-- /.block-title -->
                @if (count($errors))
                    <div class="alert alert-danger mb-2">
                        <strong>Whoops!</strong> Error validating data.<br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success"><strong>Success!</strong> {{ session('success') }}</div>
                @endif
                <form action="{{ route('review.new') }}" method="POST" class="contact-one__form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}">
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6">
                            <input type="email" placeholder="Email Address" name="email" value="{{ old('email') }}">
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12" style="padding: 0px 30px;">
                            <div class="row bg-white mb-4 p-3" style="border-radius: 50px;">
                                <div class="col-auto">Star Rating</div>
                                <div class="col">
                                    <input type="number" name="rating" id="rating1" class="rating text-warning" data-clearable="remove">
                                </div>
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-12">
                            <textarea name="comment" placeholder="Comment"></textarea>
                        </div><!-- /.col-md-12 -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="thm-btn contact-one__btn">Submit Review</button>
                            <!-- /.thm-btn contact-one__btn -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
					
                </form>
                <div class="result"></div><!-- /.result -->
            </div>
            <!-- /.container -->
        </section><!-- /.contact-one -->

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

            <a href="index.html" class="side-menu__logo"><img src="{{ asset('images/light-logo-1-1.png') }}" alt=""
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