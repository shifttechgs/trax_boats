@extends("layouts.master")
@section("content")
    <div class="page-wrapper">



        <!-- Title Bar -->
        <div class="pbmit-title-bar-wrapper">
            <div class="container">
                <div class="pbmit-title-bar-content">
                    <div class="pbmit-title-bar-content-inner">
                        <div class="pbmit-tbar">
                            <div class="pbmit-tbar-inner container">
                                <h2 class="pbmit-tbar-title"> Trax Boats & Trailers</h2>
                            </div>
                        </div>
                        <div class="pbmit-breadcrumb">
                            <div class="pbmit-breadcrumb-inner">
								<span>
									<a title="" href="#" class="home"><span>Services</span></a>
								</span>

                                <span class="sep">
									<i class="pbmit-base-icon-angle-right"></i>
								</span>
                                <span>
									<a title="" href="#" class="home"><span> Custom Trailer Manufacturing</span></a>
								</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content" id="page">

            <!-- Service Details -->
            <section class="site-content service-details">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xl-9 service-left-col">
                            <div class="pbmit-element-posts-wrapper row">
                                <article class="pbmit-service-style-1 col-md-6">
                                    <div class="pbminfotech-post-item">
                                        <div class="pbmit-box-content-wrap">
                                            <div class="pbmit-service-image-wrapper">
                                                <div class="pbmit-featured-img-wrapper">
                                                    <div class="pbmit-featured-wrapper">
                                                        <!-- Main image -->
                                                        <img src="assets/images/trailer_manufacturing/6.svg" class="img-fluid" alt="Trailer Manufacturing">
                                                    </div>
                                                </div>

                                                <!-- Icon button overlay to open lightbox -->
                                                <div class="pbmit-service-btn-wrapper">
                                                    <a class="pbmit-service-btn" href="assets/images/trax_projects/trailer/1.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing">
                        <span class="pbmit-button-icon">
                            <i class="pbmit-base-icon-angle-right"></i>
                        </span>
                                                    </a>
                                                </div>

                                                <!-- Hidden images for lightbox gallery -->
                                                <a href="assets/images/trax_projects/trailer/1a.jpeg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/2.jpeg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/3.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/4.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/5.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/6.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/7.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/8.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/9.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/10.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                                <a href="assets/images/trax_projects/trailer/11.jpg" data-lightbox="trailer_manufacturing" data-title="Trailer Manufacturing" style="display:none;"></a>
                                            </div>

                                            <!-- Content below the image -->
                                            <div class="pbmit-content-box">
                                                <div class="pbminfotech-box-number">04</div>
                                                <div class="pbmit-serv-cat">
                                                    <a href="#" rel="tag">Custom Trailer Manufacturing</a>
                                                </div>
                                                <h3 class="pbmit-service-title">
                                                    <a href="#">Trailer Manufacturing</a>
                                                </h3>

                                            </div>
                                        </div>
                                    </div>
                                </article>




                            </div>
                        </div>
                        <div class="col-md-12 col-xl-3 service-right-col sidebar">
                            <aside class="service-sidebar">
                                <aside class="widget post-list">
                                    <h2 class="widget-title">Our Projects</h2>
                                    <div class="all-post-list">
                                        <ul>
                                            <li ><a href="{{ url('/boat_repairs') }}"> Boat Repairs & Modifications</a></li>
                                            <li ><a href="{{ url('/trailer_repairs') }}"> Trailer Repairs & Modifications </a></li>
                                            <li class="post-active"><a href="{{ url('/custom_trailers') }}"> Custom Trailer Manufacturing </a></li>
                                            <li><a href="{{ url('/boat_wraps') }}"> Boat Wraps & Signage </a></li>
                                            <li><a href="{{ url('/boat_recarpeting') }}"> Boat Carpeting & EVA Foam Decking </a></li>
                                            <li><a href="{{ url('/conversions') }}"> Truck To RV Conversions </a></li>

                                        </ul>
                                    </div>
                                </aside>


                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service Details End -->

        </div>
        <!-- Page Content End -->



    </div>
    <!-- Page Wrapper End -->





@endsection
