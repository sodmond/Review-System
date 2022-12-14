@extends('layouts.app', ['title' => 'Services', 'activePage' => 'services'])

@section('content')
<section class="page-header page-header__dark"
style="background-image: url({{ asset('images/background/page-header-living-1.jpg') }});">
<div class="container">
    <h2>Our Services</h2>
    <ul class="list-unstyled thm-breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><span>Services</span></li>
    </ul><!-- /.list-unstyled -->
</div><!-- /.container -->
</section><!-- /.page-header -->

<section class="living-option-one">
<div class="container">
    <div class="block-title text-center">
        <p>Our Services</p>
  
    </div><!-- /.block-title -->

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a href="#livein" data-toggle="tab" class="nav-link active">Live-In Care</a>
        </li><!-- /.nav-item -->
        <li class="nav-item">
            <a href="#personal" data-toggle="tab" class="nav-link">Personal Care</a>
        </li><!-- /.nav-item -->
        <li class="nav-item">
            <a href="#respite" data-toggle="tab" class="nav-link">Respite Care</a>
        </li><!-- /.nav-item -->
        <li class="nav-item">
            <a href="#dementia" data-toggle="tab" class="nav-link">Dementia Care</a>
        </li><!-- /.nav-item -->
        <li class="nav-item">
            <a href="#veteran" data-toggle="tab" class="nav-link">Veteran Care</a>
        </li><!-- /.nav-item -->
    </ul><!-- /.nav-tabs -->

    <div class="tab-content">
        <div class="tab-pane animated fadeInUp fade show active" id="livein">
            <div class="row">
                <div class="col-lg-6">
                    <div class="living-option-one__image">
                        <img src="{{ asset('images/resources/living-option-1-1.jpg') }}" alt="">
                    </div><!-- /.living-option-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="living-option-one__content">
                        <h3>Live-In Care</h3>
                  
                        <ul class="blog-details__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Meal preparation
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Laundry
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Grocery shopping and errands
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Light housekeeping
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Incidental transportation
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Medication reminders
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Grooming guidance
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Arranging appointments
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Assistance with morning wake-up
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Bedtime assistance
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Accompanying to doctor’s visits
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Organizing/mailing bills and letters
                            </li>
                        </ul><!-- /.blog-details__list -->
                      
                        <!-- /.thm-btn living-option-one__btn -->

                    </div><!-- /.living-option-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.tab-pane animated fadeInUp fade -->
        <div class="tab-pane animated fadeInUp fade" id="personal">
            <div class="row">
                <div class="col-lg-6">
                    <div class="living-option-one__image">
                        <img src="{{ asset('images/resources/living-option-1-2.jpg') }}" alt="">
                    </div><!-- /.living-option-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="living-option-one__content">
                        <h3>Personal Care</h3>
                   
                        <ul class="blog-details__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Conversation and companionship
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Medication reminders
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Mobility assistance
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Help with grooming and personal hygiene
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Assistance with transferring and positioning
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Meal Preparation
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Light housekeeping
                            </li>
                        </ul><!-- /.blog-details__list -->
                 
                        <!-- /.thm-btn living-option-one__btn -->

                    </div><!-- /.living-option-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.tab-pane animated fadeInUp fade -->
        <div class="tab-pane animated fadeInUp fade" id="respite">
            <div class="row">
                <div class="col-lg-6">
                    <div class="living-option-one__image">
                        <img src="{{ asset('images/resources/living-option-1-3.jpg') }}" alt="">
                    </div><!-- /.living-option-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="living-option-one__content">
                        <h3>Respite Care</h3>
                      
                        <ul class="blog-details__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Light housekeeping
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Attend to daily living activities
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Home safety supervision
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Personal care
                            </li>
                        </ul><!-- /.blog-details__list -->
                    
                        <!-- /.thm-btn living-option-one__btn -->

                    </div><!-- /.living-option-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.tab-pane animated fadeInUp fade -->
        <div class="tab-pane animated fadeInUp fade" id="dementia">
            <div class="row">
                <div class="col-lg-6">
                    <div class="living-option-one__image">
                        <img src="{{ asset('images/resources/living-option-1-4.jpg') }}" alt="">
                    </div><!-- /.living-option-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="living-option-one__content">
                        <h3>Dementia Care</h3>
                    
                        <ul class="blog-details__list list-unstyled">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Engaging activities for mental stimulation
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Meals and medication reminders on a routine schedule
                            </li>
                             <li>
                                <i class="fa fa-check-circle"></i>
                                Compassionate support for their day-to-day activities
                            </li>
                        </ul><!-- /.blog-details__list -->
                      
                        <!-- /.thm-btn living-option-one__btn -->

                    </div><!-- /.living-option-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.tab-pane animated fadeInUp fade -->
        <div class="tab-pane animated fadeInUp fade" id="veteran">
            <div class="row">
                <div class="col-lg-6">
                    <div class="living-option-one__image">
                        <img src="{{ asset('images/resources/living-option-1-5.jpg') }}" alt="">
                    </div><!-- /.living-option-one__image -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="living-option-one__content">
                        <h3>Veteran Care</h3>
                        <p>At Yeteda services, we provide the highest quality of long term care for our Veterans, their families and the community.</p>
                     
                      
                        <!-- /.thm-btn living-option-one__btn -->

                    </div><!-- /.living-option-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->

        </div><!-- /.tab-pane animated fadeInUp fade -->
    </div><!-- /.tab-content -->

</div><!-- /.container -->
</section><!-- /.living-option-one -->



<section class="contact-one">
<div class="container">
    <div class="block-title text-center">
        <p>Request a Quote</p>
        <h3>We will provide care you need at comfort of your home so you can stay with your loved one instead of health care facility or nursing home</h3>
    </div><!-- /.block-title -->
    <form action="assets/inc/quote.php" class="contact-one__form contact-form-validated">
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
                <select name="services" class="selectpicker">
                    <option value="Request Quote For">Request Quote For</option>
                    <option value="Live-In Care">Live-In Care</option>
                    <option value="Personal Care">Personal Care</option>
                     <option value="Dementia Care">Dementia Care</option>
                      <option value="Respite Care">Respite Care</option>
                       <option value="Veteran Care">Veteran Care</option>
                </select><!-- /.selectpicker -->
            </div><!-- /.col-md-6 -->
              <div class="col-md-6">
                <select name="date" class="selectpicker">
                    <option value="Start Date">Start Date</option>
                    <option value="Immediately">Immediately</option>
                    <option value="Within a Week">Within a Week</option>
                     <option value="Within a Month">Within a Month</option>
                      <option value="Not Sure, Call Me">Not Sure, Call Me</option>
                </select><!-- /.selectpicker -->
            </div><!-- /.col-md-6 -->
              <div class="col-md-6">
                <select name="time" class="selectpicker">
                    <option value="Duration of Service">Duration of Service</option>
                    <option value="1-7 Days">1-7 Days</option>
                    <option value="1-3 Months">1-3 Months</option>
                     <option value="3-6 Months">3-6 Months</option>
                      <option value="Ongoing">Ongoing</option>
                </select><!-- /.selectpicker -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-12">
                <textarea name="message" placeholder="Additional Information"></textarea>
            </div><!-- /.col-md-12 -->
            <div class="col-md-12 text-center">
                <button type="submit" class="thm-btn contact-one__btn">Submit Now</button>
                <!-- /.thm-btn contact-one__btn -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </form>
    <div class="result"></div><!-- /.result -->
</div><!-- /.container -->
</section><!-- /.contact-one -->
@endsection