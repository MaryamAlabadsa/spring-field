<section id="section-welcome-2" class="no-top" data-bgcolor="#f8f8f8">
    <div class="container">
        <div class="row mt-40">

            @foreach($services as $service)
                <div class="col-md-4">
                    <figure class="pic-hover hover-scale mb20">
                                <span class="center-xy">
                                    <a class="image-popup" href="{{$service->image_link}}">
                                        <i class="fa fa-image btn-action btn-action-hide"></i></a>
                                </span>
                        <span class="bg-overlay"></span>
                        <img src="{{$service->image_link}}" style="width: 360px;height: 240px;" class="img-responsive" alt="">
                    </figure>
                    <h3 style="height: 48px">{{$service->title}}</h3>
                    <p>
                        {{$service->Brief}}
                        <a href="#section-services" data-toggle="collapse"
                           data-target="#collapse{{$service->id}}" class="read_more mt10"
                           style="border: transparent;background: transparent;"
                           id="read_more_btn">read more <i class="fa fa-chevron-right id-color"></i></a>
                    </p>
                </div>
            @endforeach
        </div>
    </div>

</section>

