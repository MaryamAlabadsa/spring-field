@extends('master')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}" type="text/css">

@endsection
@section('content')

    <section id="section-hero-5" style="
    background: linear-gradient(rgb(37,42,80),rgba(228,207,182,0.7)), url('{{$project->main_image_link}}');
    font-family: 'Fractul' !important ; "
             class="full-height text-light relative " data-stellar-background-ratio=".2">

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

                        <div class="top-content-wrapper" style="text-align: justify; height: 700px">
                            {{$project->description}}
                        </div>

                    </div>
                    {{--                                    project over view begin--}}
                    <div class="col-md-offset-1 col-md-3 col-xs-12">

                        <div class="overview-section" style="background: #252A50">
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
                                    <div class="overview-section-item">
                                        <p class="overview-label">Project Team</p>
                                        @foreach($project->project_team_mm as $team_member)
                                            <p class="overview-val">{{$team_member->name}}</p>
                                        @endforeach
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
