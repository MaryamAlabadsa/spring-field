<section id="section-services-details" aria-label="section-services-details" class="no-top no-bottom">
    <div class="faq-area default-padding">
        <div class="container">
            <div class="faqs">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="accordion" id="accordionExample">
                            @php
                                $id=0;
                            @endphp
                            @foreach($services as $service)
                                @php
                                    $id+=1;
                                @endphp
                                <div class="card">
                                    <div class="card-header" id="headingOne" onclick="serviceBtn({{$id}})">
                                        <h4 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapse{{$id}}"
                                            aria-expanded="false" aria-controls="collapse{{$id}}">
                                            <span>0{{$service->id}}</span> {{$service->title}}
                                        </h4>
                                    </div>

                                    <div id="collapse{{$id}}" class="collapse"
                                         aria-labelledby="headingOne"
                                         data-parent="#accordionExample" style="">
                                        <div class="card-body">
                                            <p>
                                                {{$service->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img id="img-collapse-main"  style="height: 450px" src="images-slider/wide5.jpg" alt="">
{{--                        <img  id="img-collapse-second" style="height: 450px ;display: block" src="images-slider/wide3.jpg" alt="">--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
