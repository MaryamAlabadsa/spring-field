<section id="section-news">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Latest News<span class="tiny-border"></span></h2>
            </div>


            <ul id="blog-carousel" class="blog-list blog-snippet">
                @foreach($allNews as $news)
                    <li class="col-md-6 item">
                        <div class="post-content">
                            <div class="date-box">
                                <div class="day">{{$news->day}}</div>
                                <div class="month">{{$news->month}}</div>
                            </div>

                            <div class="post-text">
                                <h3><a href="css/#">{{$news->title}}</a></h3>
                                <p>
                                    {{$news->description}}
                                    <br>
                                    {{--                                    <a href="#" class="read_more mt10">read more <i--}}
                                    {{--                                            class="fa fa-chevron-right id-color"></i></a>--}}
                                </p>
                            </div>

                        </div>
                    </li>
                @endforeach

            </ul>

        </div>
    </div>
</section>

