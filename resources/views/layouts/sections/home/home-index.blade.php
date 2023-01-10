@extends('master')
{{--@section('style')--}}
{{--    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="css/jpreloader.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="css/animate.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">--}}
{{--    <link rel="stylesheet" href="css/style.css" type="text/css">--}}

{{--@endsection--}}

@section('content')
    @include('layouts/slider')

    @include('layouts/slider-2')

    <!-- section begin -->
    {{--                section-fun-facts  --}}
    <!-- section close -->


    @include('layouts.sections.home.section-our-story')

    @include('layouts.sections.home.section-over-view')


    <!-- content begin -->
    <div id="content">
        @include('layouts.sections.home.section_services_details')

        {{--        <!-- section over view begin -->--}}
        @include('layouts.sections.home.section-how-we-work')
        <!-- section close -->

        <!-- section begin -->

        @include('layouts.sections.home.section-portfolio')

        <!-- section begin -->
        @include('layouts.sections.home.section-comments')
        {{--        <!-- section close -->--}}

        {{--        <!-- section team begin -->--}}
        @include('layouts.sections.home.section-team')
        {{--        <!-- section close -->--}}


        {{--        <!-- section news begin -->--}}
        @include('layouts.sections.home.section-news')
        {{--        <!-- section close -->--}}
        {{--        <!-- section news begin -->--}}
        @include('layouts.sections.home.section-contact')
    </div>
@endsection

@section('js')
    <script type="text/javascript">

        function truncateText(obj) {
            // console.log(obj);
            if ($(obj).parent().find('p').css('height') == '50px') {
                $(obj).parent().find('p').css('max-height', '245px');
                $(obj).parent().find('p').css('height', '245px');
                $(obj).text('load less');
            } else {
                $(obj).parent().find('p').css('max-height', '50px');
                $(obj).parent().find('p').css('overflow', 'hidden');
                $(obj).text('load more');

            }
        }

        function filter_projects(className) {
            $(document).ready(function () {
                $('#filters li #' + className).click(function (e) {
                    console.log('lllll');

                    e.preventDefault();
                    // var serviceId = $(this).data('filter');
                    $.ajax({
                        url: '/home/filter',
                        data: {service_id: className},
                        success: function (data) {
                            // Clear the existing list of projects
                            $('#gallery').empty();
                            // Loop through the filtered results and add them to the list
                            $.each(data, function (index, project) {
                                $('#gallery').append(
                                    '<div class="item residential isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px); background-size: cover;">' +
                                    '<div class="picframe" style="height: 258px; background-size: cover;">' +
                                    '<a href="/postsOrders/' + project.id + '">' +
                                    '<span class="overlay" style="opacity: 0;">' +
                                    '<span class="pf_text">' +
                                    '<span class="project-name">' + project.title + '</span>' +
                                    '</span>' +
                                    '</span>' +
                                    '</a>' +
                                    '<img src="https://via.placeholder.com/640x480.png/00cc77?text=laboriosam" alt="" style="width: 366px; height: 274px;">' +
                                    // You can use the following line to include the project's main image instead of the placeholder image
                                    // '<img src="' + project.main_image_link + '" alt="" style="width: 366px; height: 274px;">' +
                                    '</div>' +
                                    '</div>'
                                );

                            });
                        }
                    });
                });
            });

            //
            // $('#gallery').empty();
            // $('#gallery').append( $('.'+className));
            // $('.'+className).empty();
            //
            // $('.'+className).before($('.projectMainClass'))
            // title = $(obj).attr('class');
            // $("#gallery ").find(":not(." + title+")").fadeOut();
            //
            // $("#gallery").hide();  // show element with specific class
            // // console.log($("#gallery ").find("." + title));
            // $("#gallery ").find("." + title).fadeIn();
        }

        function serviceBtn(id) {
            // document.getElementById('collapse1').addEventListener('click', function () {
            s1=getComputedStyle( document.getElementById('collapse1')).display;
            s2=getComputedStyle( document.getElementById('collapse2')).display;
            s3=getComputedStyle( document.getElementById('collapse3')).display;
            if (id === 1 && s1==='none') {
                // document.getElementById('collapse1').classList.add('collapse.in');
                // document.getElementById('collapse2').classList.add('collapse');
                // document.getElementById('collapse3').classList.add('collapse');

                // console.log(s1);
                document.getElementById('collapse1').style.display='block';
                document.getElementById('collapse2').style.display='none';
                document.getElementById('collapse3').style.display='none'
                // document.getElementById('img-collapse-main').style.display='none'
                // document.getElementById('img-collapse-second').style.display='block'

            } else if (id === 2&& s2==='none') {
                document.getElementById('collapse1').style.display='none'
                document.getElementById('collapse2').style.display='block'
                document.getElementById('collapse3').style.display='none'

            } else if (id === 3&& s3==='none') {
                document.getElementById('collapse1').style.display='none'
                document.getElementById('collapse3').style.display='block'
                document.getElementById('collapse2').style.display='none'
            } else if(s1==='block'||s2==='block'||s3==='block'){
                document.getElementById('collapse1').style.display='none'
                document.getElementById('collapse3').style.display='none'
                document.getElementById('collapse2').style.display='none'
                // document.getElementById('img-collapse-main').style.display='block'
                // document.getElementById('img-collapse-second').style.display='none'

            }

        }

    </script>

@endsection

