@extends('layouts.app', ['title' => 'Home', 'activePage' => 'home'])

@section('content')
<section class="slider-two__wrapper">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-lg-5 d-flex">
                <div class="my-auto">
                    <div class="slider-two__main">
                        <h3>You're in good hands with our professional team.</h3>
                        <p>We provide peace of mind when caring for you and your loved one. If you or a loved one needs a little help at your home with elderly care, personal care etc. turn to us. We offer innovative services by highly trained caregivers you can trust for personal care needs, post-op needs, and seniors who wish to remain in the comfort of their own homes.</p>
                        <a href="services.html" class="thm-btn slider-two__btn">View Services</a>
                        <!-- /.thm-btn slider-two__btn -->
                        <ul id="slider-two__carousel-dots" class="list-unstyled owl-dots">
                            <li class="owl-dot"></li>
                            <li class="owl-dot"></li>
                            <li class="owl-dot"></li>
                        </ul>
                    </div><!-- /.slider-two__main -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-7 d-flex justify-content-end">
                <div class="slider-two__carousel owl-carousel thm__owl-carousel owl-theme"
                    data-carousel-dots-container="#slider-two__carousel-dots" data-options='{
                    "items": 1, "loop": true, "autoplay": true, "autoplayTimeout": 5000, "autoplayHoverPause": true, "margin": 0, "smartSpeed": 1000, "dotsContainer": &quot;#slider-two__carousel-dots&quot;
                }'>
                    <div class="item">
                        <div class="slider-two__carousel-single">
                            <img src="{{ asset('images/main-slider/main-slider-2-1.jpg') }}" alt="">
                            <div class="slider-two__carousel-content">
                                <h3>Senior Nursing Care <br> & Elder Care</h3>
                                <p>Yeteda services understands you may need help with certain activities and a friend along the way. We recognize that feeling lonely is one of the leading causes of depression in seniors and our goal is to reverse the effects of isolation with companion home care.</p>
                            </div><!-- /.slider-two__carousel-content -->
                        </div><!-- /.slider-two__carousel-single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="slider-two__carousel-single">
                            <img src="{{ asset('images/main-slider/main-slider-2-2.jpg') }}" alt="">
                            <div class="slider-two__carousel-content">
                                <h3>Live-In Care</h3>
                                <p>Our wonderful caregivers live right in your home and become an integral part of the family. </p>
                            </div><!-- /.slider-two__carousel-content -->

                        </div><!-- /.slider-two__carousel-single -->
                    </div><!-- /.item -->
                    <div class="item">
                        <div class="slider-two__carousel-single">
                            <img src="{{ asset('images/main-slider/main-slider-2-3.jpg') }}" alt="">
                            <div class="slider-two__carousel-content">
                                <h3>Personal Care</h3>
                                <p>Our home Caregivers are trained and experienced with the wide variety of personal care needs, whether it is assistance with bathing, using the washroom or incontinence issues.  </p>
                            </div><!-- /.slider-two__carousel-content -->
                        </div><!-- /.slider-two__carousel-single -->
                    </div><!-- /.item -->
                </div><!-- /.slider-two__carousel owl-carousel thm__owl-carousel owl-theme -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /.slider-two__wrapper -->



<section class="about-one about-one__home-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-one__home-two__image">
                    <img src="{{ asset('images/shapes/about-1-dot-1.png') }}" class="about-one__home-two__image-dot"
                        alt="">
                    <img src="{{ asset('images/resources/about-1-3.jpg') }}" class="img-fluid" alt="">
                </div><!-- /.about-one__home-two__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6 d-flex">
                <div class="my-auto">
                    <div class="about-one__content">
                        <div class="block-title text-left">
                            <p class="has-line">02. About Us</p>
                        </div><!-- /.block-title -->
                        <p>Yeteda Services prides itself in the provision of exceptional care services for personal homes and care facilities
Our processes ensure that we hire the most experienced, qualified, passionate, and compassionate healthcare professionals to meet the unique needs of each personal home or care facility.</p>
                        <div class="nav navtabs about-one__tab-title">
                            <a href="#approach" class="nav-link active" data-toggle="tab">Vision</a>
                            <!-- /.nav-link -->
                            <a href="#mission" class="nav-link" data-toggle="tab">Mission</a><!-- /.nav-link -->
                            <a href="#target" class="nav-link" data-toggle="tab">Shared Values</a><!-- /.nav-link -->
                        </div><!-- /.nav navtabs about-one__tab-title -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active animated fadeInUp" id="approach">
                                <p>To be the healthcare personnel provider of first choice in North America</p>
                              
                            </div><!-- /.tab-pane fade show active animated fadeInUp -->

                            <div class="tab-pane fade  animated fadeInUp" id="mission">
                                <p>To always provide high quality, professional and licensed healthcare personnel to personal homes and care facilities in line with budget, scope and timeline</p>
                               
                            </div><!-- /.tab-pane fade  animated fadeInUp -->
                            <div class="tab-pane fade animated fadeInUp" id="target">
                                <p>
                                 <ul class="blog-details__list list-unstyled">
                                        
<li><i class="fa fa-check-circle"></i><strong>Customer centricity</strong>:</li>You are the reason for our existence, and we put you at the center of everything – Our world literally revolves around you!<br>
<li><i class="fa fa-check-circle"></i><strong>Dynamism</strong>:</li>We understand that every customer is unique. This uniqueness brings about different types of needs. We easily spot nuances between the most similar customers and react to them <br>
<li><i class="fa fa-check-circle"></i><strong>Speed</strong>:</li>Due to the nature of your business, we understand that your needs are time sensitive. Consequently, we have built the most efficient system to ensure that we can quickly react to your needs<br>
<li><i class="fa fa-check-circle"></i><strong>Empathy</strong>:</li> We put ourselves in your shoes with every action that we take
</p>
</ul>
                             
                            </div><!-- /.tab-pane fade animated fadeInUp -->
                        </div><!-- /.tab-content -->
                    </div><!-- /.about-one__content -->
                </div><!-- /.my-auto -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.about-one -->

<section class="cta-two">
    <img src="{{ asset('images/shapes/cta-1-1-shape-1.png') }}" class="cta-two__dot-1" alt="">
    <img src="{{ asset('images/shapes/cta-1-1-shape-2.png') }}" class="cta-two__dot-2" alt="">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6 d-flex justify-content-center align-items-center wow fadeInLeft"
                data-wow-duration="1500ms">
                <div class="cta-two__image">
                    <img src="{{ asset('images/resources/cta-1-1.jpg') }}" alt="">
                    <div class="cta-two__image-inner">
                        <div class="cta-two__image-content">
                            <h3><span class="counter">100</span><!-- /.coutner -->%</h3>
                            <p>Success Rate</p>
                        </div><!-- /.cta-two__image-content -->
                    </div><!-- /.cta-two__image-inner -->
                </div><!-- /.cta-two__image -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="cta-two__content">
                    <h3>Book a <br> Service Today!</h3>
                    <p>Please feel free to book any of our services.  If you want to find more information about our services, please browse our website.  We have a lot of useful and insightful information. </p>
                    <a href="contact.html" class="thm-btn cta-two__btn">Book Service</a><!-- /.thm-btn cta-two__btn -->
                </div><!-- /.cta-two__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row no-gutters -->
    </div><!-- /.container -->
</section><!-- /.cta-two -->

<section class="living-option-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="living-option-two__main">
                    <div class="block-title text-left">
                        <p class="has-line">03. Services</p><!-- /.has-line -->
                        <h3>Would you rather stay at home than go into a health care facility or nursing home?</h3>
                    </div><!-- /.block-title text-left -->
                    <p>Yeteda services will provide the following home health care programs at flexible schedules and cost-friendly service rates.</p>
                    <div class="nav navtabs living-option-two__tab-title">
                        <a href="#live" data-toggle="tab" class="nav-link">Live-In Care</a>
                        <!-- /.nav-link -->
                        <a href="#personal" data-toggle="tab" class="nav-link active">Personal Care</a>
                        <!-- /.nav-link -->
                        <a href="#dementia" data-toggle="tab" class="nav-link">Dementia Care</a>
                        <!-- /.nav-link -->
                        <a href="#respite" data-toggle="tab" class="nav-link">Respite Care</a>
                        <!-- /.nav-link -->
                        <a href="#veteran" data-toggle="tab" class="nav-link">Veteran Care</a>
                        <!-- /.nav-link -->
                    </div><!-- /.nav navtabs living-option-two__tab-title -->
                </div><!-- /.living-option-two__main -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="tab-content">
                    <div class="tab-pane fade  animated fadeInRight" id="live">
                        <div class="about-two__image">
                            <img src="{{ asset('images/shapes/living-option-dot-2-1.png') }}"
                                class="about-two__image-dot-1" alt="">
                            <img src="{{ asset('images/shapes/living-option-dot-2-2.png') }}"
                                class="about-two__image-dot-2" alt="">
                            <img src="{{ asset('images/resources/living-option-2-2.jpg') }}" alt="">
                            <div class="about-two__image-content">
                                <h3>Live-In Care</h3>
                                <p>If you’re looking for a comprehensive, cost effective alternative to any type of facility, Yeteda services is the choice for you.</p>
                                
                                <!-- /.thm-btn living-option-two__btn -->
                            </div><!-- /.about-two__image-content -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.tab-pane fade show animated fadeInRight -->

                    <div class="tab-pane fade show active animated fadeInRight" id="personal">
                        <div class="about-two__image">
                            <img src="{{ asset('images/shapes/living-option-dot-2-1.png') }}"
                                class="about-two__image-dot-1" alt="">
                            <img src="{{ asset('images/shapes/living-option-dot-2-2.png') }}"
                                class="about-two__image-dot-2" alt="">
                            <img src="{{ asset('images/resources/living-option-2-1.jpg') }}" alt="">
                            <div class="about-two__image-content">
                                <h3>Personal Care</h3>
                                <p>With our in-home care services, we provide a customized regimen of care that focuses on individual needs and personal environments.</p>
                           
                                <!-- /.thm-btn living-option-two__btn -->
                            </div><!-- /.about-two__image-content -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                    <div class="tab-pane fade  animated fadeInRight" id="dementia">
                        <div class="about-two__image">
                            <img src="{{ asset('images/shapes/living-option-dot-2-1.png') }}"
                                class="about-two__image-dot-1" alt="">
                            <img src="{{ asset('images/shapes/living-option-dot-2-2.png') }}"
                                class="about-two__image-dot-2" alt="">
                            <img src="{{ asset('images/resources/living-option-2-3.jpg') }}" alt="">
                            <div class="about-two__image-content">
                                <h3>Dementia Care</h3>
                                <p>Our memory care program provides the highest quality care for residents living with memory loss.</p>
                               
                                <!-- /.thm-btn living-option-two__btn -->
                            </div><!-- /.about-two__image-content -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                    <div class="tab-pane fade  animated fadeInRight" id="respite">
                        <div class="about-two__image">
                            <img src="{{ asset('images/shapes/living-option-dot-2-1.png') }}"
                                class="about-two__image-dot-1" alt="">
                            <img src="{{ asset('images/shapes/living-option-dot-2-2.png') }}"
                                class="about-two__image-dot-2" alt="">
                            <img src="{{ asset('images/resources/living-option-2-4.jpg') }}" alt="">
                            <div class="about-two__image-content">
                                <h3>Respite Care</h3>
                                <p>With 24/7, around-the-clock care, a caregiver is always watching over your loved one, offering emotional support, reducing fall risk and assisting in all activities of daily living.</p>
                                
                                <!-- /.thm-btn living-option-two__btn -->
                            </div><!-- /.about-two__image-content -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                    <div class="tab-pane fade  animated fadeInRight" id="veteran">
                        <div class="about-two__image">
                            <img src="{{ asset('images/shapes/living-option-dot-2-1.png') }}"
                                class="about-two__image-dot-1" alt="">
                            <img src="{{ asset('images/shapes/living-option-dot-2-2.png') }}"
                                class="about-two__image-dot-2" alt="">
                            <img src="{{ asset('images/resources/living-option-2-5.jpg') }}" alt="">
                            <div class="about-two__image-content">
                                <h3>Veteran Care</h3>
                                <p>At Yeteda services, we provide the highest quality of long term care for our Veterans, their families and the community.</p>
                              
                                <!-- /.thm-btn living-option-two__btn -->
                            </div><!-- /.about-two__image-content -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.tab-pane fade show animated fadeInRight -->
                </div><!-- /.tab-content -->

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.living-option-two -->

  <section class="faq-two">
    <div class="faq-two__image wow fadeInRight" data-wow-duration="1500ms">
        <img src="{{ asset('images/resources/faq-1-1.png') }}" alt="">
    </div><!-- /.faq-two__image -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-one__block">
                    <div class="block-title text-left">
                        <p class="has-line">04. Why Choose US</p>
                        <h3>Why Most People <br> Choose Yeteda Services</h3>
                    </div><!-- /.block-title -->

                   
                    <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4>On call 24/7 availability for client needs</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Around-the-clock care allows your loved one to remain in his or her home with you, while ensuring safety and promoting optimal well-being.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>Flexible, fast and friendly scheduling</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p> We offer a much more personalized plan of care with one-to-one support tailored to the status, conditions, preferences, hobbies and lifestyle of the individual client.</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>State certified and experienced care team staff</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Place holder text for the subject above. Thanks</p>
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.faq-one__block -->

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.faq-two -->




<section class="career-one career-one__home-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="career-one__block">
                    <div class="block-title">
                        <p class="has-line">05. FAQ</p>
                        <h3>Freequently Asked <br> Questions</h3>
                    </div><!-- /.block-title -->
                    <p>Providing the absolute best care to our clients is paramount. We only want to work with and nurture the very best caregivers, whether they are companions, personal support workers or nurses. We allow all of our caregivers a choice of the clients that they would like to help. </p>
                    <p>Do not hesitate to ask us any quetions and we will reply as soon as possible. <a href="contact.html" target="_parent">Click here</a></p>
                </div><!-- /.career-one__block -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
                <div class="career-one__content">
                    <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                        <div class="accrodion ">
                            <div class="accrodion-title">
                                <h4>Does having home care result in loss of independence?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>No. Our belief is that independence is being in control of your decisions. Having in home care services means being in control of your activities and retaining as much independence as each situation allows. Many of our clients just need a little help to continue living a safe and productive life while some might be recovering from a fall or surgery, or other condition. Regardless of your situation, our goal is to enable you the best possible outcome while being in control of your care and daily decisions.</p>
                                   
                                    </ul><!-- /.list-unstyled career-one__content-list -->
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion active">
                            <div class="accrodion-title">
                                <h4>How can i trust a caregiver in my home?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>Just like nurses and doctors, Professional Caregivers have chosen a career in compassionate care of those in need. Before starting their journey with Yeteda Serices, each caregiver has to go through tough screening including comprehensive background check , license check and drug screening. We do all this check using top government approved provider. We rarely advertise for caregivers as most come from word of mouth referral from other happy clients.</p>
                                
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>Do you offer long term contract?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>You can use our services only as long as you’re 100% satisfied.</p>
                                    
                                </div><!-- /.inner -->
                            </div>
                        </div>
                        <div class="accrodion">
                            <div class="accrodion-title">
                                <h4>What is the process of finding a caregiver?</h4>
                            </div>
                            <div class="accrodion-content">
                                <div class="inner">
                                    <p>We make the process of finding a caregiver very simple and prompt using our Placement program. Give us a call and we’ll conduct a brief phone discussion to understand your needs. We then can meet anyone involved in selecting and paying for care at your home for an in-home needs consultation. Within 24 hours of that visit we are usually able to refer a professional caregiver to your home. Our team continuously screens caregivers beyond current demand to give you quick access to the best caregivers in our community.</p>
                                   
                                </div><!-- /.inner -->
                            </div>
                        </div>
                    </div>
                </div><!-- /.career-one__content -->
            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.career-one -->





 <section class="contact-two">
    <img src="{{ asset('images/shapes/contact-2-map-1-1.png') }}" class="contact-two__map-1" alt="">
    <div class="container-fluid">
        <div class="row no-gutters">
            <div class="col-xl-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2894.2556574183986!2d-79.88223908420015!3d43.497001979127006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b6f80d3578fbb%3A0x394dc18e6c9b6b1!2s153%20Farrington%20Crossing%2C%20Milton%2C%20ON%20L9T%200S8%2C%20Canada!5e0!3m2!1sen!2sng!4v1661794430111!5m2!1sen!2sng"
                    class="google-map__home-five" allowfullscreen></iframe>
            </div><!-- /.col-xl-6 -->
            <div class="col-xl-6 d-flex">
                <div class="my-auto">
                    <div class="contact-two__content">
                        <div class="block-title">
                            <p class="has-line">06. Inquiry</p><!-- /.has-line -->
                            <h3>Want to Know More About <br> Yeteda Services?</h3>
                        </div><!-- /.block-title -->
                        <form action="{{ asset('inc/sendemail.php') }}"
                            class="contact-one__form contact-form-validated">
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
                                <div class="col-md-12 text-left">
                                    <button type="submit" class="thm-btn contact-one__btn">Submit Now</button>
                                    <!-- /.thm-btn contact-one__btn -->
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </form>
                        

                    </div><!-- /.contact-two__content -->

                </div><!-- /.my-auto -->
            </div><!-- /.col-xl-6 -->
        </div><!-- /.row no-gutters -->
    </div><!-- /.container-fluid -->
    <div class="result"></div><!-- /.result -->
</section><!-- /.contact-two -->

@endsection