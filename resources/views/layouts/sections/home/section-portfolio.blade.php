{{--<section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom"--}}
{{--         style="background-size: cover;">--}}
{{--    <div class="container" style="background-size: cover;">--}}

{{--        <div class="spacer-single" style="background-size: cover;"></div>--}}

{{--        <!-- portfolio filter begin -->--}}
{{--        <div class="row" style="background-size: cover;">--}}
{{--            <div class="col-md-12" style="background-size: cover;">--}}
{{--                <ul id="filters">--}}
{{--                    @foreach($services as $service)--}}
{{--                        @php--}}
{{--                            $title= str_replace(' ', '', trim($service->title))--}}
{{--                        @endphp--}}
{{--                        <li>--}}
{{--                            <btn--}}
{{--                                onclick="filter_projects('{{$title}}')" class="{{$title}}" href=""--}}
{{--                                data-filter="{{$service->id}}"--}}
{{--                            >{{$service->title}}</btn>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                    <li class="pull-right"><a href="" data-filter="*" class="selected">All Projects</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- portfolio filter close -->--}}

{{--    </div>--}}

{{--    <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols gallery_border isotope"--}}
{{--         style="position: relative; overflow: hidden; height: 3215px; background-size: cover;">--}}

{{--        <!-- gallery item -->--}}
{{--        @foreach($projects as $project)--}}
{{--            @php--}}
{{--                $string = '';--}}
{{--            @endphp--}}
{{--            @foreach($project->project_service as $s)--}}
{{--                @php--}}
{{--                    $s = str_replace(' ', '', trim($s));--}}

{{--                        $string .= $s .' ';--}}
{{--                @endphp--}}
{{--            @endforeach--}}

{{--            <div class="item residential isotope-item {{$string}} projectMainClass"--}}
{{--                 style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px); background-size: cover;">--}}
{{--                <div class="picframe" style="height: 258px; background-size: cover;">--}}
{{--                    <a href="/postsOrders/{{$project->id}}">--}}
{{--                                <span class="overlay" style="opacity: 0;">--}}
{{--                                    <span class="pf_text">--}}
{{--                                        <span class="project-name">{{$project->id}}</span>--}}
{{--                                    </span>--}}
{{--                                </span>--}}
{{--                    </a>--}}
{{--                    <img src="https://via.placeholder.com/640x480.png/00cc77?text=laboriosam" alt=""--}}
{{--                         style="width: 366px; height: 274px;">--}}
{{--                    <img src="{{$project->main_image_link}}" alt="" style="width: 366px; height: 274px;">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}

{{--        <!-- close gallery item -->--}}


{{--    </div>--}}

{{--</section>--}}
<section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom"
         style="background-size: cover;">
    <div class="container" style="background-size: cover;">

        <div class="spacer-single" style="background-size: cover;"></div>

        <!-- portfolio filter begin -->
        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <ul id="filters">
                    @foreach($services as $service)
                        @php
                            $title= str_replace(' ', '', trim($service->id))
                        @endphp
                        <li><a href="#" data-filter=".{{$service->id}}">{{$service->title}}</a></li>
                    @endforeach
                    <li class="pull-right"><a href="#" data-filter="*" class="selected">All Projects</a></li>
                </ul>

            </div>
        </div>
        <!-- portfolio filter close -->

    </div>

    <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_4_cols gallery_border isotope"
         style="position: relative; overflow: hidden; height: 3215px; background-size: cover;">
        @foreach($projects as $project)
            @php
                $string = '';
            @endphp
            @foreach($project->project_service as $s)
                @php
                    $s = str_replace(' ', '', trim($s));

                        $string .= $s .' ';
                @endphp
            @endforeach
            <!-- gallery item -->
            <div class="item {{$string}}"
                 style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px); background-size: cover;">
                <div class="picframe" style="height: 258px; background-size: cover;">
                    <a href="/postsOrders/{{$project->id}}">
                                <span class="overlay" style="opacity: 0;">
                                    <span class="pf_text">
                                        <span class="project-name">{{$project->title}}</span>
                                    </span>
                                </span>
                    </a>
                    <img src="{{$project->main_image_link}}" alt="" style="width: 100%; height: auto;">
                </div>
            </div>
        @endforeach
        <!-- close gallery item -->
    </div>

</section>
