@extends('master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" type="text/css">
@endsection
@section('content')

    <section id="section-hero-5" style="background-image: url('{{$project->main_image_link}}')  "
             class="full-height text-light relative" data-stellar-background-ratio=".2">

        <div class="center-y fadeScroll relative" data-scroll-speed="2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="spacer-double"></div>
                        <h1 class="size40 wow fadeInRight" data-wow-delay=".5s">{{$project->title}}<span
                                class="tiny-border"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="contentwrapper" class="contentwrapper" role="main">
        <div class="standard-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-1 col-md-7 col-xs-12 here">
                        <!--skipsearch-->
                        <nav id="breadcrumb">
                            <ul>
                                <li>
                                    <a href="/">
                    <span class="fa fa-home">
                    	<span class="zeroHeight">Home</span>
                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/#section-portfolio">
                                        Projects
                                    </a>
                                </li>


                                <li class="lastPage">
              <span>
               {{$project->title}}
              </span>
                                </li>

                            </ul>

                        </nav>

                        <div class="introtext-container"><p>{{$project->Brief_description}}.</p></div>

                        <div class="top-content-wrapper">
                            {{$project->description}}
                        </div>
                     @include('layouts.sections.projects.team')
                    </div>
                    {{--                                    project over view begin--}}
                    <div class="col-md-offset-1 col-md-3 col-xs-12">

                        <div class="overview-section">
                            <div class="overview-section-inner">

                                <p class="overview-section-title">Project overview</p>
                                <div class="overview-thumb"><img
                                        src="{{$project->main_image_link}}"
                                        alt="thumbnail photo" width="540" height="540"></div>


                                <p class="tags uppercase">
                                    @foreach($project->project_service as $service)
                                        <a aria-label="Right Panel Head Link one"
                                           href="/#section-portfolio">{{$service}}</a>
                                    @endforeach
{{--                                                                        <a aria-label="Right Panel Head Link one" href="/en/projects/#Nuclear Technology">Nuclear--}}
{{--                                                                            Technology</a>--}}
                                </p>

                                <div class="overview-section-content">
                                    <div class="overview-section-item">
                                        <p class="overview-label">Location</p>
                                        <p class="overview-val">{{$project->location}}</p>
                                    </div>
                                    <div class="overview-section-item">
                                        <p class="overview-label">Completion date</p>
                                        <p class="overview-val">{{$project->completed_time}}</p>
                                    </div>
                                </div>


                            </div>
{{--                            <div class="text-center">--}}
{{--                                <a href="/#section-contact" class="text-center btn btn-line-black btn-fx mt20"--}}
{{--                                style="width: 270px; height: 50px"--}}
{{--                                >Hire Us Now</a>--}}
{{--                            </div>--}}

{{--                            <div class="overview-contact-panel">--}}
{{--                                <a aria-label="Close Popup" href="javascript:;" class="closePopup"><span--}}
{{--                                        class="icon-close"><span--}}
{{--                                            class="zeroHeight">Icon Close</span></span></a>--}}
{{--                                <p class="overview-section-title">Contact us</p>--}}
{{--                            </div>--}}

                        </div>

                    </div>
                    {{--                                    project over view end--}}
                </div>
            </div>
        </div>
        {{--        <div class="bottom-documents-area grey">--}}
        {{--            <div class="container-fluid">--}}
        {{--                <div class="row">--}}
        {{--                        <div class="bottom-documents-inner-area">--}}

        {{--                            <div class="download-area documents-area">--}}
        {{--                                <h2 class="documents-area-title">--}}
        {{--                                    Downloads--}}
        {{--                                </h2>--}}
        {{--                                <div class="documents-area-inner pooo">--}}

        {{--                                    <div class="item">--}}
        {{--                                        <div class="item-content">--}}
        {{--                                            <p class="item-title">--}}
        {{--                                                Digital twins for the built environment--}}
        {{--                                            </p>--}}
        {{--                                            <p class="item-meta">--}}
        {{--                                                pdf,--}}
        {{--                                                <span class="sub-size">--}}
        {{--                                              2.2MB--}}
        {{--                                            </span>--}}

        {{--                                            </p>--}}
        {{--                                        </div>--}}

        {{--                                        <div class="item-links">--}}

        {{--                                            <a class="media-links"--}}
        {{--                                               href="http://127.0.0.1:8000/public/Image/202301072042sfc logo.pdf"--}}
        {{--                                               target="_blank"--}}
        {{--                                               title="Opens in a new window"--}}
        {{--                                               data-lf-fd-inspected-jmvz8gkpmlp82pod="true">--}}
        {{--                                                <span class="icon-pdf-new">--}}
        {{--                                                <span class="zeroHeight">Icon PDF</span>--}}
        {{--                                                </span>--}}
        {{--                                            </a>--}}

        {{--                                        </div>--}}

        {{--                                    </div>--}}

        {{--                                </div>--}}
        {{--                            </div>--}}

        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </main>
@endsection
@section('js')

    <script type="text/javascript">

        function shareProject(obj) {

        }


        $j('html').on("click touchstart", "body", function (e) {
            var container1 = $j(".top-content-panel");
            if (!container1.is(e.target) && container1.has(e.target).length === 0) {
                container1.find('.share.hover').removeClass('hover');
            }
            /*hide share if click outside area*/
            var container2 = $j(".vShare");
            if (!container2.is(e.target) && container2.has(e.target).length === 0) {
                container2.removeClass('hover');
            }
            if (!$j(e.target).hasClass('currentTab')) {
                $j('.currentTab.active').click();
            }
        });


        $j(document).on("click", ".share > a.share-link, .vShare > a.share-link", function () {
            $j(".share,.vShare").removeClass('hover');
            $j(this).parent().addClass('hover');
        }).focus(function () {
            $j(this).keypress(function (e) {
                if (e.keyCode === 13) {
                    $j(this).parent().addClass('hover');
                    return false;
                }
            });
        });

        $j(document).on("click", "nav.social-media-list > a", function () {
            $j(".share,.vShare").removeClass('hover');
        });

        if ($j('#contentwrapper > .quarterly-reports').length > 0) {
            $j(".tabs-wrapper.annual-reports-tab .tabs ul li a:contains('" + $j('.tabs-wrapper.annual-reports-tab .currentTab').text().trim() + "')").parent().addClass('active');
        }

    </script>
@endsection
