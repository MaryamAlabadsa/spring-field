<section id="section-deco-1" class="no-top no-bottom text-light" data-stellar-background-ratio=".2"
         style="background-size: cover; background-position: 50% 7.32002px;">
    <div class="color-overlay pt80" style="background-size: cover;">
        <div class="container" style="background-size: cover;">
            <div class="row" style="background-size: cover;">
                <div class="col-md-6" style="background-size: cover;">
                    <h2 class="wow fadeInUp">What They Says<span class="tiny-border"></span></h2>

                    <ul class="testimonial-list wow fadeIn owl-carousel owl-theme animated" data-wow-delay=".25s"
                        style="visibility: visible; animation-delay: 0.25s; animation-name: fadeIn; opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper"
                                 style="width: 2100px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-525px, 0px, 0px);">
                                @foreach($comments as $comment)
                                <div class="owl-item" style="width: 525px;">
                                    <li>
                                        {{$comment->comment_text}}
                                        <span>{{$comment->sender_name}}</span>
                                    </li>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="owl-controls clickable">
                            <div class="owl-pagination">
                                <div class="owl-page"><span class="owl-item"></span></div>
                                <div class="owl-page"><span class="owl-item"></span></div>
                                <div class="owl-page active"><span class="owl-item"></span></div>
                            </div>
                        </div>
                    </ul>

                </div>

                <div class="col-md-6">
                    <img src="images/misc/team-1.png" class="img-responsive mt-20" alt="">
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
