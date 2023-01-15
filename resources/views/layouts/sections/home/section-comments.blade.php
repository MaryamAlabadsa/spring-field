<section id="section-deco-1" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
    <div class="color-overlay pt80">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="wow fadeInUp">What They Says<span class="tiny-border"></span></h2>

                    <ul class="testimonial-list wow fadeIn" data-wow-delay=".25s">
                        @foreach($comments as $comment)
                            <li>      {{$comment->comment_text}}
                                <span>{{$comment->sender_name}}</span>
                            </li>
                        @endforeach
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
