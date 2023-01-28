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
                                <button style="font-size: 16px;background: none;border: none;font-style: italic;"
                                        onclick="showNews(this)">{{$news->title}}</button>
                                <p class="hide">
                                    {{$news->description}}
                                </p>
                            </div>

                        </div>
                    </li>
                @endforeach

            </ul>

        </div>
    </div>
</section>

