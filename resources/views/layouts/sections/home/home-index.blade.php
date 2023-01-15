@extends('master')

@section('content')
        <!-- section begin -->
        @include('layouts.slider')
        <!-- section close -->

        <!-- section begin -->
        @include('layouts.slider-2');
        <!-- section close -->

        <!-- section begin -->
        @include('layouts.sections.home.section-fun-facts')
        <!-- section begin -->
        @include('layouts.sections.home.section-our-story')
        @include('layouts.sections.home.section-over-view')
        <!-- section close -->


        <!-- content begin -->
        <div id="content">

            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <p class="intro mb30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <div class="timeline">
                            <div class="tl-block">
                                <div class="tl-time">
                                    <h3>2006</h3>
                                </div>
                                <div class="tl-bar">
                                    <div class="tl-line"></div>
                                </div>
                                <div class="tl-message">
                                    <div class="tl-icon">&nbsp;</div>
                                    <div class="tl-main">
                                        <h3>Beginning Our Services
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                </div>
                            </div>

                            <div class="tl-block">
                                <div class="tl-time">
                                    <h3>2008</h3>
                                </div>
                                <div class="tl-bar">
                                    <div class="tl-line"></div>
                                </div>
                                <div class="tl-message">
                                    <div class="tl-icon">&nbsp;</div>
                                    <div class="tl-main">
                                        <h3>Offering More Services
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                </div>
                            </div>

                            <div class="tl-block">
                                <div class="tl-time">
                                    <h3>2009</h3>
                                </div>
                                <div class="tl-bar">
                                    <div class="tl-line"></div>
                                </div>
                                <div class="tl-message">
                                    <div class="tl-icon">&nbsp;</div>
                                    <div class="tl-main">
                                        <h3>Opening Our First Branch Office
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                </div>
                            </div>

                            <div class="tl-block">
                                <div class="tl-time">
                                    <h3>2012</h3>
                                </div>
                                <div class="tl-bar">
                                    <div class="tl-line"></div>
                                </div>
                                <div class="tl-message">
                                    <div class="tl-icon">&nbsp;</div>
                                    <div class="tl-main">
                                        <h3>Expansion and Transformations
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                </div>
                            </div>

                            <div class="tl-block">
                                <div class="tl-time">
                                    <h3>2014</h3>
                                </div>
                                <div class="tl-bar">
                                    <div class="tl-line"></div>
                                </div>
                                <div class="tl-message">
                                    <div class="tl-icon">&nbsp;</div>
                                    <div class="tl-main">
                                        <h3>Offering Franchise Opportunity
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                </div>
                            </div>

                            <div class="tl-block">
                                <div class="tl-time">
                                    <h3>2016</h3>
                                </div>
                                <div class="tl-bar">
                                    <div class="tl-line"></div>
                                </div>
                                <div class="tl-message">
                                    <div class="tl-icon">&nbsp;</div>
                                    <div class="tl-main">
                                        <h3>Consistent Innovation
                                        </h3>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <aside id="sidebar" class="col-md-3">
                        <div class="widget">
                            <ul id="services-list">
                                <li><a href="#section-deco-2">Company Overview</a></li>
                                <li class="#section-team"><a href="about-history.html">Company History</a></li>
                                <li><a href="#section-team">Our Team</a></li>
                            </ul>
                        </div>

                        <div class="widget">
                            <div class="padding30 text-black" data-bgimage="url(images/background/banner-1.jpg)">
                                <h4>Attention!</h4>
                                Looking for best partner for your next construction works? Sed ut perspiciatis unde
                                omnis iste natus error sit voluptatem.
                                <div class="text-center">
                                    <a href="#section-contact" class="btn btn-line-black btn-fx mt20">Hire Us Now</a>
                                </div>
                            </div>
                        </div>


                    </aside>

                </div>
            </div>
            <!-- section close -->

            <!-- section close -->
            <section id="section-services" class="text-light" data-bgcolor="#222222">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="wow fadeInUp">Our Services<span class="tiny-border"></span></h2>
                        </div>

                        <div class="spacer-single"></div>

                        <div class="col-md-4 col-sm-6 mb30">
                            <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                                <span class="bg-overlay"></span>
                                <img src="images/services/pic_1.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>General Constructing</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.

                        </div>

                        <div class="col-md-4 col-sm-6 mb30">
                            <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                                <span class="bg-overlay"></span>
                                <img src="images/services/pic_2.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>House Remodel</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.

                        </div>

                        <div class="col-md-4 col-sm-6 mb30">
                            <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                                <span class="bg-overlay"></span>
                                <img src="images/services/pic_3.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Interior Design
                            </h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.

                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-4 col-sm-6 mb30">
                            <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                                <span class="bg-overlay"></span>
                                <img src="images/services/pic_4.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Floors & Roofs</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.

                        </div>

                        <div class="col-md-4 col-sm-6 mb30">
                            <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                                <span class="bg-overlay"></span>
                                <img src="images/services/pic_5.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Plumbing</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.

                        </div>

                        <div class="col-md-4 col-sm-6 mb30">
                            <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                                <span class="bg-overlay"></span>
                                <img src="images/services/pic_6.jpg" class="img-responsive" alt="">
                            </figure>

                            <h3>Electricity</h3>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.

                        </div>


                    </div>
                </div>
            </section>
            <!-- section begin -->
            @include('layouts.sections.home.section-portfolio')

            <!-- section begin -->
            @include('layouts.sections.home.section-comments')

            <!-- section close -->

            <!-- section begin -->
            @include('layouts.sections.home.section-team')
            <!-- section close -->


            <!-- section begin -->
            @include('layouts.sections.home.section-news')

            @include('layouts.sections.home.section-contact')
@endsection
