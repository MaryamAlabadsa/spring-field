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
                        <li><a href="#" style="font-weight: bold;" data-filter=".{{$service->id}}">{{$service->title}}</a></li>
                    @endforeach
                    <li class="pull-right"><a href="#" data-filter="*" style="font-weight: bold;font-size: 16px" class="selected">All Projects</a></li>
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
            @foreach($project->project_service_mm as $s)
                @php
                    $s = str_replace(' ', '', trim($s));

                        $string .= $s .' ';
                @endphp
            @endforeach
            <!-- gallery item -->
            <div class="item {{$string}}"
                 style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px); background-size: cover;">
                <div class="picframe" style="height: 258px; background-size: cover;">
                    <a href="/home/{{$project->id}}">
                                <span class="overlay" style="opacity: 0;">
                                    <span class="pf_text">
                                        <span class="project-name"
                                              style="   margin-left: 15px;margin-right: 15px;">{{$project->title}}</span>
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
