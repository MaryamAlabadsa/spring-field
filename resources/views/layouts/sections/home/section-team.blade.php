<section id="section-team" data-bgcolor="#f8f8f8">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <h2 class="wow fadeInUp">Our Team<span class="tiny-border"></span></h2>
            </div>
            @foreach($teams as $team_member)
                <div class="col-md-3">
                    <div class="profile_pic">
                        <figure class="pic-hover hover-scale mb30">
                            <img style="height: 262px;width: 461px" src="{{$team_member->image_link}}" class="img-responsive" alt="">
                        </figure>

                        <h3>{{$team_member->name}}</h3>
                        <span style="height: 71px;overflow: hidden" class="subtitle">{{$team_member->job_description}} <br></span>
                        <p style="position: relative; color: #848484; font-size: 16px;
                            line-height: 1.7em; height: 50px ;overflow: hidden" id="job_description">{{$team_member->bio}}
                            <br>
                        </p>
                        <button class="read_more mt10" style="border: transparent;background: transparent;"
                                id="read_more_btn" onclick="truncateText(this)">load more <i
                                class="fa fa-chevron-right id-color"></i></button>


                        <span class="tiny-border"></span>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

</section>
