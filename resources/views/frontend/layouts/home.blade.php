@extends('frontend.layouts.master')

@section('content')

    <!-- ============================
            Slider
        ============================== -->
    <section class="slider">
        <div class="slick-carousel m-slides-0"
            data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="assets/images/sliders/2.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <h2 class="slide__title">Caring For The Health And Well Being Of Family.</h2>
                                <p class="slide__desc">The health and well-being of our patients and their health care
                                    team will
                                    always be our priority, so we follow the best practices for cleanliness.</p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
                                        <span>Find A Doctor</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <a href="services.html" class="btn btn__white btn__rounded">
                                        <span>Our Services</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
            <div class="slide-item align-v-h">
                <div class="bg-img"><img src="assets/images/sliders/3.jpg" alt="slide img"></div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                            <div class="slide__content">
                                <h2 class="slide__title">All Aspects Of Medical Practice</h2>
                                <p class="slide__desc">The health and well-being of our patients and their health care
                                    team will
                                    always be our priority, so we follow the best practices for cleanliness.</p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
                                        <span>Find A Doctor</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                    <a href="services.html" class="btn btn__white btn__rounded">
                                        <span>Our Services</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div><!-- /.slide-content -->
                        </div><!-- /.col-xl-7 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.slide-item -->
        </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
            About Layout 1
          =========================== -->
    <section class="about-layout1 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="heading-layout2">
                        <h3 class="heading__title mb-40">Improving The Quality Of Your Life Through Better Health.</h3>
                    </div><!-- /heading -->
                </div><!-- /.col-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="about__Text">
                        <p class="mb-30">Our goal is to deliver quality of care in a courteous, respectful, and
                            compassionate
                            manner. We hope you will allow us to care for you and to be the first and best choice for
                            healthcare.
                        </p>
                        <p class="mb-30">We will work with you to develop individualised care plans, including
                            management of
                            chronic diseases. We are committed to being the region’s premier healthcare network providing
                            patient
                            centered care that inspires clinical and service excellence.</p>
                        <div class="d-flex align-items-center mb-30">
                            <a href="doctors-grid.html" class="btn btn__primary btn__outlined btn__rounded mr-30">
                                Meet Our Doctors</a>
                            <img src="assets/images/about/singnture.png" alt="singnture">
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="video-banner">
                        <img src="assets/images/about/1.jpg" alt="about">
                        <a class="video__btn video__btn-white popup-video"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                            <div class="video__player">
                                <i class="fa fa-play"></i>
                            </div>
                        </a>
                    </div><!-- /.video-banner -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.About Layout 1 -->

    <!-- ======================
          Features Layout 1
          ========================= -->
    <section class="features-layout1 pt-130 pb-50 mt--90">
        <div class="bg-img"><img src="assets/images/backgrounds/1.jpg" alt="background"></div>
        <div class="container">
            <div class="row mb-40">
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="heading__layout2">
                        <h3 class="heading__title">Providing Care for The Sickest In Community.</h3>
                    </div>
                </div><!-- /col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
                    <p class="heading__desc font-weight-bold">Medcity has been present in Europe since 1990, offering
                        innovative
                        solutions, specializing in medical services for treatment of medical infrastructure. With over 100
                        professionals actively participates in numerous initiatives aimed at creating sustainable change for
                        patients!
                    </p>
                    <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
                        <a href="appointment.html" class="btn btn__primary btn__rounded mr-30">
                            <span>Make Appointment</span>
                            <i class="icon-arrow-right"></i>
                        </a>
                        <a href="#" class="btn btn__secondary btn__link">
                            <i class="icon-arrow-right icon-filled"></i>
                            <span>Our Core Values</span>
                        </a>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
            <div class="row">
                <!-- Feature item #1 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-heart"></i>
                                <i class="icon-heart feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Medical Advices & Check Ups</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #2 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-doctor"></i>
                                <i class="icon-doctor feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Trusted Medical Treatment </h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #3 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-ambulance"></i>
                                <i class="icon-ambulance feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Emergency Help Available 24/7</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #4 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-drugs"></i>
                                <i class="icon-drugs feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Medical Research Professionals </h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #5 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-first-aid-kit"></i>
                                <i class="icon-first-aid-kit feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Only Qualified Doctors</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #6 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-hospital"></i>
                                <i class="icon-hospital feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Cutting Edge Facility</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #7 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-expenses"></i>
                                <i class="icon-expenses feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Affordable Prices For All Patients</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
                <!-- Feature item #8 -->
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="feature-item">
                        <div class="feature__content">
                            <div class="feature__icon">
                                <i class="icon-bandage"></i>
                                <i class="icon-bandage feature__overlay-icon"></i>
                            </div>
                            <h4 class="feature__title">Quality Care For Every Patient</h4>
                        </div><!-- /.feature__content -->
                        <a href="#" class="btn__link">
                            <i class="icon-arrow-right icon-outlined"></i>
                        </a>
                    </div><!-- /.feature-item -->
                </div><!-- /.col-lg-3 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-6 offset-lg-3 text-center">
                    <p class="font-weight-bold mb-0">Serve the community by improving the quality of life through better
                        health.
                        We have put protocols to protect our patients and staff while continuing to provide medically
                        necessary
                        care.
                        <a href="#" class="color-secondary">
                            <span>Contact Us For More Information</span> <i class="icon-arrow-right"></i>
                        </a>
                    </p>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.Features Layout 1 -->

    <!-- ========================
              Services Layout 2
          =========================== -->
    <section class="services-layout2 services-carousel bg-overlay bg-overlay-primary pt-130">
        <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="background"></div>
        @include('frontend.layouts.depts')
    </section><!-- /.Services Layout 1 -->

    <!-- ======================
            Team
          ========================= -->
    <section class="team-layout1 pb-80">
      @include('frontend.layouts.doctors')
    </section><!-- /.Team -->

    <!-- ========================= 
                Google Map
        =========================  -->
    <section class="google-map py-0">
        <iframe frameborder="0" height="500" width="100%"
            src="https://maps.google.com/maps?q=Suite%20100%20San%20Francisco%2C%20LA%2094107%20United%20States&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe>
    </section><!-- /.GoogleMap -->

    <!-- ==========================
              contact layout 1
          =========================== -->
    <section class="contact-layout1 pt-0 mt--100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-panel d-flex flex-wrap">
                        <form class="contact-panel__form" method="post"
                            action="https://7oroof.com/demos/medcity/assets/php/contact.php" id="contactForm">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="contact-panel__title">How Can We Help? </h4>
                                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly
                                        reception staff
                                        with any general or medical enquiry. Our doctors will receive or return any urgent
                                        calls.
                                    </p>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-user form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name"
                                            name="contact-name" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-email form-group-icon"></i>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email"
                                            name="contact-email" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-phone form-group-icon"></i>
                                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                                            name="contact-phone" required>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <i class="icon-news form-group-icon"></i>
                                        <select class="form-control">
                                            <option value="0">Subject</option>
                                            <option value="1">Subject 1</option>
                                            <option value="2">Subject 1</option>
                                        </select>
                                    </div>
                                </div><!-- /.col-lg-6 -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <i class="icon-alert form-group-icon"></i>
                                        <textarea class="form-control" placeholder="Message" id="contact-message"
                                            name="contact-message"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                                        <span>Submit Request</span> <i class="icon-arrow-right"></i>
                                    </button>
                                    <div class="contact-result"></div>
                                </div><!-- /.col-lg-12 -->
                            </div><!-- /.row -->
                        </form>
                        <div
                            class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                            <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                            <div>
                                <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                                <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to
                                    contact our
                                    friendly staff with any medical enquiry.
                                </p>
                            </div>
                            <div>
                                <ul class="contact__list list-unstyled mb-30">
                                    <li>
                                        <i class="icon-phone"></i><a href="tel:+5565454117">Emergency Line: (002)
                                            01061245741</a>
                                    </li>
                                    <li>
                                        <i class="icon-location"></i><a href="#">Location: Janai, Hooghly, West Bengal</a>
                                    </li>
                                    <li>
                                        <i class="icon-clock"></i><a href="contact-us.html">Mon - Fri: 8:00 am - 7:00
                                            pm</a>
                                    </li>
                                </ul>
                                <a href="#" class="btn btn__white btn__rounded btn__outlined">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
@endsection
