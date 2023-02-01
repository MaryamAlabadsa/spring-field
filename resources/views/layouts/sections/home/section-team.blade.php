<section id="section-team" data-bgcolor="#f8f8f8">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 class="wow fadeInUp" style="font-weight: bold">Our Team<span class="tiny-border"></span></h2>
            </div>
            @foreach($teams as $team_member)
                <div class="col-md-3">
                    <div class="profile_pic">
                        <figure class="pic-hover hover-scale mb30">
                            <img style="height: 262px;width: 461px" src="{{$team_member->image_link}}"
                                 class="img-responsive" alt="">
                        </figure>

                        <h3 style=" font-size: 1.1rem; font-weight: bold">{{$team_member->name}}</h3>
                        <span style="height: 61px;overflow: hidden;font-size: 0.9rem;" class="subtitle">{{$team_member->job_description}} <br></span>
                        <p class="hide" style="   position: relative;
                            color: #848484;
                            font-size: 16px;
                            line-height: 1.7em;
                            overflow: hidden" id="job_description">{{$team_member->bio}}
                            <br>

                        </p>
                        <button class="read_more "
                                style="border: transparent; background: transparent; color: #252A50; font-size: initial; font-weight: bold;"
                                id="read_more_btn" onclick="truncateText(this)">Load More <i
                                class="fa fa-chevron-right id-color"></i></button>

{{--                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" title="{{$team_member->bio}}">--}}
{{--                            Tooltip on right--}}
{{--                        </button>--}}
                        <span class="tiny-border"></span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

</section>
