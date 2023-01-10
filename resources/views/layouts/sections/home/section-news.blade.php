<section id="section-news" style="background-size: cover;">
    <div class="container" style="background-size: cover;">
        <div class="row" style="background-size: cover;">
            <div class="col-md-12" style="background-size: cover;">
                <h2>Latest News<span class="tiny-border"></span></h2>
            </div>


            <ul id="blog-carousel" class="blog-list blog-snippet owl-carousel owl-theme"
                style="opacity: 1; display: block;">
                <div class="owl-wrapper-outer">
                    <div class="owl-wrapper"
                         style="width: 3120px; left: 0px; display: block; transform: translate3d(0px, 0px, 0px); transition: all 800ms ease 0s;">
                        @foreach($allNews as $news)
                        <div class="owl-item" style="width: 390px;">
                            <li class="col-md-6 item">
                                <div class="post-content" style="background-size: cover;">
                                    <div class="date-box" style="background-size: cover;">
                                        <div class="day" style="background-size: cover;">{{$news->day}}</div>
                                        <div class="month" style="background-size: cover;">{{$news->month}}</div>
                                    </div>

                                    <div class="post-text" style="background-size: cover;">
                                        <h3><a href=""> {{$news->title}}</a></h3>
                                        <p>
                                            {{$news->description}}
                                                <br>
                                            <a href="" class="read_more mt10">read more <i
                                                    class="fa fa-chevron-right id-color"></i></a>
                                        </p>
                                    </div>

                                </div>
                            </li>
                        </div>
                        @endforeach
                    </div>
                </div>


                <div class="owl-controls clickable">
                    <div class="owl-pagination">
                        <div class="owl-page active"><span class=""></span></div>
                        <div class="owl-page"><span class=""></span></div>
                    </div>
                </div>
            </ul>

        </div>
    </div>
</section>
