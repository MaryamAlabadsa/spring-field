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

        <!-- section close -->

        <!-- section close -->
        @include('layouts.sections.home.section-how-we-work')
        @include('layouts.sections.home.section_services_details')
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
