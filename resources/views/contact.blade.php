@extends('layouts.app', ['title' => 'Contact Us', 'activePage' => 'contact'])

@section('content')
<section class="page-header" style="background-image: url({{ asset('images/background/page-header-bg-1-1.jpg') }});">
    <div class="container">
        <h2>Contact Us</h2>
        <ul class="list-unstyled thm-breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><span>Contact Us</span></li>
        </ul><!-- /.list-unstyled -->
    </div>
    <!-- /.container -->
</section><!-- /.page-header -->

<section class="contact-info-one">
    <div class="container">
        <div class="block-title text-center">
            <p>Contact Us</p>
            <h3>Get In Touch</h3>
        </div><!-- /.block-title -->
        <div class="row">
            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="contact-info-one__single text-center">
                    <div class="contact-info-one__icon">
                        <i class="oberlin-icon-email"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <h3>Email Address</h3>
                    <p> <a href="mailto:contactus@yetedaservices.com">contactus@yetedaservices.com</a></p>
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 wow fadeInDown" data-wow-duration="1500ms">
                <div class="contact-info-one__single text-center">
                    <div class="contact-info-one__icon">
                        <i class="oberlin-icon-phone"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <h3>Phone Number</h3>
                    <p><a href="tel:647-992-9080">647-992-9080</a> <br> <a
                            href=""></a></p>
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                <div class="contact-info-one__single text-center">
                    <div class="contact-info-one__icon">
                        <i class="oberlin-icon-marker"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <h3>Office Address</h3>
                    <p>153 Farrington Cross, <br> Milton, L9T0S8, CA</p>
                </div><!-- /.contact-info-one__single -->
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.contact-info-one -->

<section class="contact-one">
    <div class="container">
        <div class="block-title text-center">
            <p>Contact Us</p>
            <h3>We are here to help you!</h3>
        </div><!-- /.block-title -->
        <form action="{{ asset('inc/sendemail.php') }}" class="contact-one__form contact-form-validated">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Full Name" name="name">
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <input type="text" placeholder="Email Address" name="email">
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <input type="text" placeholder="Phone Number" name="phone">
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <select name="discussion" class="selectpicker">
                        <option value="Discussion For">Discussion For</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Services Inquiry">Services Inquiry</option>
                    </select><!-- /.selectpicker -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-12">
                    <textarea name="message" placeholder="Message"></textarea>
                </div><!-- /.col-md-12 -->
                <div class="col-md-12 text-center">
                    <button type="submit" class="thm-btn contact-one__btn">Submit Now</button>
                    <!-- /.thm-btn contact-one__btn -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            
        </form>
        <div class="result"></div><!-- /.result -->
    </div>
    <!-- /.container -->
</section><!-- /.contact-one -->
<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2894.2556574183986!2d-79.88223908420015!3d43.497001979127006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b6f80d3578fbb%3A0x394dc18e6c9b6b1!2s153%20Farrington%20Crossing%2C%20Milton%2C%20ON%20L9T%200S8%2C%20Canada!5e0!3m2!1sen!2sng!4v1661794430111!5m2!1sen!2sng"
    class="google-map__contact" allowfullscreen></iframe>
@endsection