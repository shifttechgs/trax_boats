@extends("layouts.master")
@section("content")

    <!-- page wrapper -->
<div class="page-wrapper" id="page" xmlns="http://www.w3.org/1999/html">


    <!-- page content -->
    <div class="page-content">



        <!-- About Us Start -->
        <section class="about-us-sec-one fadeIn animated animated-slow pbmit-bg-color-">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-5 about-us-one-col-1">
                        <div class="about-us-one-left">
                            <div class="pbmit-ihbox-style-5">
                                <div class="pbmit-ihbox-wrap">
                                    <div class="pbmit-icon-wrap">
                                        <h4 class="pbmit-element-subtitle" style="color: white">
                                            Free Services
                                        </h4>
                                    </div>
                                    <div class="pbmit-contents-wrap">
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-element-title" style="color: white">Free Evaluation Of Your <br>
                                                Boat and Trailers.
                                            </h2>
                                        </div>
                                        <div class="pbmit-ihbox-btn">
                                            <a href="{{ route('contact.index') }}">
                                                <span class="pbmit-button-text">Read More</span>
                                                <span class="pbmit-button-icon-wrapper">
														<span class="pbmit-button-icon">
															<i class="pbmit-base-icon-black-arrow-1"></i>
														</span>
													</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-2 about-us-one-col-2">
                        <div class="fid-style-area pbmit-bg-color-global pbmit-fid-space">
                            <div class="pbminfotech-ele-fid-style-2">
                                <div class="pbmit-fid-content">
                                    <h4 class="pbmit-fid-inner">
                                        <span class="pbmit-fid-before"></span>
                                        <span class="pbmit-number-rotate numinate" data-appear-animation="animateDigits" data-from="0" data-to="10" data-interval="1" data-before="" data-before-style="" data-after="" data-after-style="">10</span>
                                        <span class="pbmit-fid"><span>+</span></span>
                                    </h4>
                                    <div class="pbmit-heading-desc">Professional and Experienced staff ready to help you</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-5 about-us-one-col-3">
                        <div class="about-us-one-rightbox">
                            <div class="pbmit-bg-overlay"></div>
                            <h2 class="pbmit-heading" style="color: white">Easy Booking & Fast <br> Communication</h2>
                            <div class="pbmit-button">
                                <div class="pbmit-btn-wrap">
                                    <a class="pbmit-btn" href="{{ route('contact.index') }}">
											<span class="pbmit-button-content-wrapper">
												<span class="pbmit-button-icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
														<title>black-arrow</title>
														<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
														<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
														<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													</svg>
												</span>
												<span class="pbmit-button-text">Book Now</span>
											</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us end -->

        <!-- Service Start -->
        <section class="service-one-bg section-lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pbmit-heading-subheading animation-style2">
                            <h4 class="pbmit-subtitle">Our Services</h4>
                            <h2 class="pbmit-title">We offer a <span class="pbmit-global-color">wide range</span> <br> of Boats & Trailers services.</h2>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="service-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
                    </div>
                </div>
                <div class="swiper-slider" data-arrows-class="service-swiper-arrow" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="true" data-columns="3" data-margin="40" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slide1 -->
                        <article class="pbmit-service-style-1 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-box-content-wrap">
                                    <div class="pbmit-service-image-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="assets/images/banner-slider-img/boat_repair.svg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-service-btn-wrapper">
                                            <a class="pbmit-service-btn" href="" title="Maintenance">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-angle-right"></i>
													</span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href=""></a>
                                    </div>
                                    <div class="pbmit-content-box">
                                        <div class="pbminfotech-box-number">01</div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Accessories</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="">Boat Repairs & Rebuilds</a>
                                        </h3>
                                        <div class="pbmit-service-description">
                                            <p>From minor fixes to complete overhauls, we restore boats to peak performance and condition.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide2 -->
                        <article class="pbmit-service-style-1 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-box-content-wrap">
                                    <div class="pbmit-service-image-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="assets/images/banner-slider-img/trailer.svg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-service-btn-wrapper">
                                            <a class="pbmit-service-btn" href="" title="Wheels Alignment">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-angle-right"></i>
													</span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href=""></a>
                                    </div>
                                    <div class="pbmit-content-box">
                                        <div class="pbminfotech-box-number">02</div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Maintenance</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="">Trailer Repairs (Boat & Personal)</a>
                                        </h3>
                                        <div class="pbmit-service-description">
                                            <p>We repair and rebuild trailers for safety, strength, and smooth towing, built for the long haul.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide3 -->
                        <article class="pbmit-service-style-1 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-box-content-wrap">
                                    <div class="pbmit-service-image-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="assets/images/banner-slider-img/fabrication.svg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-service-btn-wrapper">
                                            <a class="pbmit-service-btn" href="" title="Trax Boats Service">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-angle-right"></i>
													</span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href=""></a>
                                    </div>
                                    <div class="pbmit-content-box">
                                        <div class="pbminfotech-box-number">03</div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Repair</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="">Custom Trailer Fabrication</a>
                                        </h3>
                                        <div class="pbmit-service-description">
                                            <p>Tailor-made trailers, designed and fabricated to meet your specific load and usage needs.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide4 -->
                        <article class="pbmit-service-style-1 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-box-content-wrap">
                                    <div class="pbmit-service-image-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="assets/images/banner-slider-img/conversions.svg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-service-btn-wrapper">
                                            <a class="pbmit-service-btn" href="" title="Interior Cleaning">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-angle-right"></i>
													</span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href=""></a>
                                    </div>
                                    <div class="pbmit-content-box">
                                        <div class="pbminfotech-box-number">04</div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Filters</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="">Truck to RV Conversions</a>
                                        </h3>
                                        <div class="pbmit-service-description">
                                            <p>Transform your truck into a fully functional, road-ready RV with comfort and precision.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide5 -->
                        <article class="pbmit-service-style-1 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-box-content-wrap">
                                    <div class="pbmit-service-image-wrapper">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="assets/images/banner-slider-img/bespoke.svg" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="pbmit-service-btn-wrapper">
                                            <a class="pbmit-service-btn" href="" title="Break Service">
													<span class="pbmit-button-icon">
														<i class="pbmit-base-icon-angle-right"></i>
													</span>
                                            </a>
                                        </div>
                                        <a class="pbmit-link" href=""></a>
                                    </div>
                                    <div class="pbmit-content-box">
                                        <div class="pbminfotech-box-number">05</div>
                                        <div class="pbmit-serv-cat">
                                            <a href="services.html" rel="tag">Repair</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a href="">Bespoke trailer & fabrication</a>
                                        </h3>
                                        <div class="pbmit-service-description">
                                            <p>Unique trailer builds and custom fabrication solutions, crafted to your exact specifications.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->



        <!-- Marquee Start -->
        <section>
            <div class="container-fluid p-0">
                <div class="swiper-slider marquee">
                    <div class="swiper-wrapper">
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="  Boat repairs">
                                    Boat repairs
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text="Trailer repairs">
                                    Trailer repairs
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text=" Boat Re-design & Re-building">
                                   Boat Re-design & Re-building
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text=" Bespoke trailer fabrication.">
                                    Bespoke trailer fabrication.
                                </h2>
                            </div>
                        </article>
                        <article class="pbmit-marquee-effect-style-1 swiper-slide">
                            <div class="pbmit-tag-wrapper">
                                <h2 class="pbmit-element-title" data-text=" Truck to RV conversions.">
                                    Truck to RV conversions.
                                </h2>
                            </div>
                        </article>

                    </div>
                </div>
            </div>
        </section>
        <!-- Marquee End -->

        <!-- Why Choose Start -->
        <section class="section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xl-4">
                        <div class="pbmit-heading-subheading animation-style2">
                            <h4 class="pbmit-subtitle">Why choose us?</h4>
                            <h2 class="pbmit-title">What makes us <span class="pbmit-global-color">different?</span></h2>
                            <div class="pbmit-heading-desc">
                                We go beyond basic repairs. Whether it's rebuilding a boat, fabricating a custom trailer, or converting a truck into a full RV, we combine expert craftsmanship with a deep understanding of what our clients truly need. Our focus is on delivering durable, tailored solutions with honesty, speed, and precision.
                            </div>
                        </div>
                        <a class="pbmit-btn" href="about-us.html">
								<span class="pbmit-button-content-wrapper">
									<span class="pbmit-button-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
											<title>black-arrow</title>
											<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
											<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
											<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
										</svg>
									</span>
									<span class="pbmit-button-text">Get a Free Quote</span>
								</span>
                        </a>
                        <div class="tween-effect-style-area">
                            <div class="pbmit-tween-effect-style-1">
                                <div class="pbmit-tween-effect" data-x-start="0" data-x-end="10" data-y-start="0" data-y-end="0" data-scale-x-start="1" data-scale-x-end=" 1" data-skew-x-start=" 0deg" data-skew-x-end="0deg" data-skew-y-start=" 0deg" data-skew-y-end=" 0deg" data-rotate-x-start="0" data-rotate-x-end="0">
                                    <img src="assets/images/homepage-1/about-img-02.webp" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="why-choose-one-about-img">
                            <img src="assets/images/banner-slider-img/boat.svg" style=" border-radius: 8px;" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-xl-4">
                        <div class="pbmit-ihbox-style-2">
                            <div class="pbmit-ihbox-headingicon">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                        <i class="pbmit-karsfix-icon pbmit-karsfix-icon-car-lifter"></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-element-title">Specialized Expertise</h2>
                                    <div class="pbmit-heading-desc">We focus on boats, trailers, and conversions — and we do it exceptionally well.</div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 mt-md-2">
                            <div class="pbmit-ihbox-style-2">
                                <div class="pbmit-ihbox-headingicon">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-karsfix-icon pbmit-karsfix-icon-car-lifter"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Custom Solutions</h2>
                                        <div class="pbmit-heading-desc">Every build is personalized to fit your exact requirements.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 mt-md-2">
                            <div class="pbmit-ihbox-style-2">
                                <div class="pbmit-ihbox-headingicon">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-karsfix-icon pbmit-karsfix-icon-car-lifter"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Long-Lasting Craftsmanship</h2>
                                        <div class="pbmit-heading-desc">Quality materials and skilled work for results that endure.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 mt-md-2">
                            <div class="pbmit-ihbox-style-2">
                                <div class="pbmit-ihbox-headingicon">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-karsfix-icon pbmit-karsfix-icon-car-lifter"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Clear, Fast Communication</h2>
                                        <div class="pbmit-heading-desc">No surprises. Just regular updates and honest timelines.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5 mt-md-2">
                            <div class="pbmit-ihbox-style-2">
                                <div class="pbmit-ihbox-headingicon">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                            <i class="pbmit-karsfix-icon pbmit-karsfix-icon-car-lifter"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-element-title">Proven Client Satisfaction</h2>
                                        <div class="pbmit-heading-desc">A track record of successful projects and happy customers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose end -->

        <!-- Appointment Start -->
        <section>
            <div class="container px-xl-3 px-0">
                <div class="appointment-two-bg">
                    <div class="row">
                        <div class="col-md-12 col-xl-8">
                            <div class="pbmit-heading-subheading white-text mb-3 animation-style4">
                                <h4 class="pbmit-subtitle"> Limited Period Offer </h4>
                                <h2 class="pbmit-title">Schedule a Complimentary <br>Boat & Trailer Assessment Now!</h2>
                            </div>
                            <a class="pbmit-btn pbmit-btn-hover-white" href="contact-us.html">
									<span class="pbmit-button-content-wrapper">
										<span class="pbmit-button-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
												<title>black-arrow</title>
												<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
												<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
												<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
											</svg>
										</span>
										<span class="pbmit-button-text">Book Assessment</span>
									</span>
                            </a>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="ihbox-style-area e-transform">
                                <div class="pbmit-ihbox-style-7">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-icon-wrapper">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-icon-type-icon">
                                                    <i class="pbmit-karsfix-icon pbmit-karsfix-icon-telephone"></i>
                                                </div>
                                            </div>
                                            <h2 class="pbmit-element-title">
                                                <a href="tel:+263 772 254 344">
                                                    <span class="pbmit-button-text">+263772254344</span>
                                                    <span class="pbmit-button-icon-wrapper">
															<span class="pbmit-button-icon">
																<i class="pbmit-base-icon-black-arrow-1"></i>
															</span>
														</span>
                                                </a>
                                            </h2>
                                        </div>
                                        <div class="pbmit-content-wrap"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appointment End -->


        <!-- Page Content -->
{{--        <div class="page-content">--}}

            <!-- Portfolio Grid Col 4 -->
            <section class="section-xl pbmit-element-viewtype-masonry">
                <div class="pbmit-heading-subheading text-center animation-style2">
                                        <h4 class="pbmit-subtitle"> Latest Works </h4>
                                        <h2 class="pbmit-title">Our most recent <span class="pbmit-global-color">projects</span></h2>
                                    </div>
                <div class="container-fluid px-4">
                    <div class="row pbmit-element-posts-wrapper">
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/1.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Boats</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Boat Rebuild</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/2.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Boats</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Boat Repairing</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/3.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Boats</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Boat Repairing</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/4.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Boats</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Boat Respraying</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/5.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Boats</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Boat Repairing</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/10.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Trailers</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Custom Trailer </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/9.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Trailers</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Custom Trailer</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="pbmit-portfolio-style-1 col-md-6 col-lg-3">
                            <div class="pbminfotech-post-content">
                                <div class="pbminfotech-image-wapper">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/portfolio/8.svg" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="portfolio-single-style-01.html"></a>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-titlebox">
                                        <div class="pbmit-port-cat">
                                            <a href="portfolio-grid-col-3.html" rel="tag">Trax Trailers</a>
                                        </div>
                                        <h3 class="pbmit-portfolio-title">
                                            <a href="portfolio-single-style-01.html">Custom Trailer</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="pbmit-heading-subheading text-center animation-style2">
                    <a class="pbmit-btn" href="about-us.html">
								<span class="pbmit-button-content-wrapper">
									<span class="pbmit-button-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
											<title>black-arrow</title>
											<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
											<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
											<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
										</svg>
									</span>
									<span class="pbmit-button-text">Explore Projects</span>
								</span>
                    </a>
                </div>
            </section>
            <!-- Portfolio Grid Col 4 End -->

{{--        </div>--}}
        <!-- Page Content End -->

        <!-- Testimonial Start -->
        <section class="section-lg testimonial-one-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="pbmit-heading-subheading animation-style2">
                            <h4 class="pbmit-subtitle">Testimonials</h4>
                            <h2 class="pbmit-title">What our <span class="pbmit-global-color">clients say</span> <br> about us</h2>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="testimonial-swiper-arrow swiper-btn-custom d-inline-flex flex-row-reverse"></div>
                    </div>
                </div>
                <div class="swiper-slider" data-arrows-class="testimonial-swiper-arrow" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="2" data-margin="40" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slide1 -->
                        <article class="pbmit-testimonial-style-2 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>“Absolutely top-notch service. My boat trailer was custom-fitted and ready in no time.
                                            Highly recommend Trax for quality.”</p>
                                    </blockquote>
                                </div>
                                <div class="pbmit-auther-content">
                                    <h3 class="pbminfotech-box-title">Evangeline Lee</h3>
                                    <div class="pbminfotech-testimonial-detail">Satisfied Client</div>
                                </div>
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="assets/images/homepage-1/testimonial/satisfaction.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide2 -->
                        <article class="pbmit-testimonial-style-2 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>“Professional and reliable team.
                                            They helped me upgrade my trailer with zero hassle.
                                            I wouldn’t go anywhere else!”</p>
                                    </blockquote>
                                </div>
                                <div class="pbmit-auther-content">
                                    <h3 class="pbminfotech-box-title">Adeline wood</h3>
                                    <div class="pbminfotech-testimonial-detail">Satisfied Client</div>
                                </div>
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="assets/images/homepage-1/testimonial/satisfaction.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide3 -->
                        <article class="pbmit-testimonial-style-2 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>“Best experience ever, from consultation to delivery, everything was seamless.
                                            Trax truly knows their stuff.”</p>
                                    </blockquote>
                                </div>
                                <div class="pbmit-auther-content">
                                    <h3 class="pbminfotech-box-title">Naomi Violet</h3>
                                    <div class="pbminfotech-testimonial-detail">Satisfied Client</div>
                                </div>
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="assets/images/homepage-1/testimonial/satisfaction.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide4 -->
                        <article class="pbmit-testimonial-style-2 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>“Built tough and to last, the quality of their trailers is unmatched.
                                            My boat rides smoother than ever.”</p>
                                    </blockquote>
                                </div>
                                <div class="pbmit-auther-content">
                                    <h3 class="pbminfotech-box-title">Dylan Wang</h3>
                                    <div class="pbminfotech-testimonial-detail">Ceo & Founder</div>
                                </div>
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="assets/images/homepage-1/testimonial/satisfaction.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide5 -->
                        <article class="pbmit-testimonial-style-2 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>“Friendly staff and excellent workmanship, they went above and beyond to meet my needs."</p>
                                    </blockquote>
                                </div>
                                <div class="pbmit-auther-content">
                                    <h3 class="pbminfotech-box-title">Ariana Green</h3>
                                    <div class="pbminfotech-testimonial-detail">Satisfied Client</div>
                                </div>
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="assets/images/homepage-1/testimonial/satisfaction.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide6 -->
                        <article class="pbmit-testimonial-style-2 swiper-slide">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-box-desc">
                                    <blockquote class="pbminfotech-testimonial-text">
                                        <p>“Value for money, hands down.
                                            Got a durable trailer at a great price.
                                            Support local, support Trax”</p>
                                    </blockquote>
                                </div>
                                <div class="pbmit-auther-content">
                                    <h3 class="pbminfotech-box-title">Parsons William</h3>
                                    <div class="pbminfotech-testimonial-detail">Satisfied Client</div>
                                </div>
                                <div class="pbmit-featured-img-wrapper">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="assets/images/homepage-1/testimonial/satisfaction.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <section class="contact-one-bg">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-12 col-xl-6 bg-blackish">
                        <form>
                            <div class="pbmit-appointment-form-inner pbmit-bg-color-blackish">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-subtitle" style="color: white">Cost Calculator</h4>
                                    <h2 class="pbmit-title">Get your free estimate!</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name" name="your-name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Phone Number" name="tel-649" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="emial-address" class="form-control" placeholder="Email Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option value="Choose a Service">Choose Service</option>
                                            <option value="Boat repairs">Boat repairs</option>
                                            <option value="Boat re-design & re-building">Boat re-design & re-building</option>
                                            <option value="Boat trailer repairs">Boat trailer repairs</option>
                                            <option value="Personal trailer repairs & re-building">Personal trailer repairs & re-building</option>
                                            <option value="Truck to RV conversions">Truck to RV conversions</option>
                                            <option value="Bespoke trailer & fabrication.">Bespoke trailer & fabrication.</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea class="form-control" placeholder="Message"></textarea>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="input-text-group">
                                            <p>Submit this information and we will send you the cost for the service.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="input-button">
                                <button class="pbmit-btn pbmit-btn-white">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
													<title>black-arrow</title>
													<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
												</svg>
											</span>
											<span class="pbmit-button-text">Get Cost Estimate</span>
										</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 col-xl-6"></div>
                </div>
            </div>
        </section>
        <!-- Contact End -->


    </div>
    <!-- page content End -->

    <!-- Client Start -->
    <section>
        <div class="container">
            <div class="border-top section-md">
                <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
                    <div class="swiper-wrapper">
                        <!-- Slide1 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 01</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="assets/images/client/client-global-01.webp" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/client/client-black-01.webp" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide2 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 02</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="assets/images/client/client-global-02.webp" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/client/client-black-02.webp" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide3 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 03</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="assets/images/client/client-global-03.webp" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/client/client-black-03.webp" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide4 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 04</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="assets/images/client/client-global-04.webp" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/client/client-black-04.webp" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide5 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 05</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="assets/images/client/client-global-05.webp" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/client/client-black-05.webp" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- Slide6 -->
                        <article class="pbmit-client-style-1 swiper-slide">
                            <div class="pbmit-border-wrapper">
                                <div class="pbmit-client-wrapper pbmit-client-with-hover-img">
                                    <h4 class="pbmit-hide">Client 06</h4>
                                    <div class="pbmit-client-hover-img">
                                        <img src="assets/images/client/client-global-06.webp" alt="">
                                    </div>
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <img src="assets/images/client/client-black-06.webp" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client End -->


</div>
<!-- page wrapper End -->


@endsection
