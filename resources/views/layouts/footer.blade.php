<footer>
    <div class="container">
        <div class="row">


            <div class="col-md-4">
                <div class="widget widget_recent_post">
                    <h3>Latest News</h3>
                    <ul>
                        @foreach($allNews as $news)

                        <li style="text-align: justify"><a href="#section-news">{{$news->title}}</a></li>
                        @endforeach
                         </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Contact Us</h3>
                <div class="widget widget-address">
                    <address>
                        <span>128 City Road, London, United Kingdom</span>
                        <span><strong>Phone:</strong>⁦+972 56-689-3020⁩</span>
{{--                        <span><strong>Fax:</strong>(208) 333 9298</span>--}}
                        <span><strong>Email:</strong><a href="mailto:info@example.com">info@example.com</a></span>

                    </address>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/Spring-FIELD-C-LTD-101531909461747"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/springfltd?s=21&t=9tqLU71TmxLYS2KAHUWeJQ"><i class="fa fa-twitter"></i></a>
                        <a href="https://instagram.com/springfltd?igshid=YWJhMjlhZTc="><i class="fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/springfltd/"><i class="fa fa-linkedin"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=972566893020"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <img src="{{asset('/images/sfc-logo.png')}}" style="height: 555px;width: 555px" class="logo-smaller" alt=""><br>

            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    Copyright © 2023. Spring Field C.LTD .
                </div>

            </div>
        </div>
    </div>

</footer>
