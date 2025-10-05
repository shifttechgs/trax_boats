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
									<a title="" href="#" class="home"><span>Trailer Repairs & Modifications</span></a>
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
                                <h4 class="widget-title">Coming Soon</h4>



                            </div>
                        </div>
                        <div class="col-md-12 col-xl-3 service-right-col sidebar">
                            <aside class="service-sidebar">
                                <aside class="widget post-list">
                                    <h2 class="widget-title">Our Projects</h2>
                                    <div class="all-post-list">
                                        <ul>
                                            <li ><a href="{{ url('/boat_repairs') }}"> Boat Repairs & Modifications</a></li>
                                            <li class="post-active"><a href="{{ url('/trailer_repairs') }}"> Trailer Repairs & Modifications </a></li>
                                            <li ><a href="{{ url('/custom_trailers') }}"> Custom Trailer Manufacturing </a></li>
                                            <li><a href="{{ url('/boat_wraps') }}"> Boat Wraps & Signage </a></li>
                                            <li ><a href="{{ url('/boat_recarpeting') }}"> Boat Carpeting & EVA Foam Decking </a></li>
                                            <li ><a href="{{ url('/conversions') }}"> Truck To RV Conversions </a></li>

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



