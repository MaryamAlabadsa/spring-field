<section id="section-services" class="text-light" data-bgcolor="#252a50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="wow fadeInUp">Our Services<span class="tiny-border"></span></h2>
            </div>

            <div class="spacer-single"></div>
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
                <div class="u-clearfix u-expanded-width u-gutter-18 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-col">
                            <div class="u-size-30">
                                <div class="u-layout-row">
                                    <div
                                        class=" u-container-style u-layout-cell u-left-cell u-palette-2-base u-shape-rectangle u-size-20 u-layout-cell-1">
                                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                                            <h3 class="u-text u-text-default u-text-3">{{ $services[0]->title }}</h3>
                                            <p class="u-text u-text-4"
                                               style=" height: 320px ;overflow: auto; padding-inline-end:15px;font-size: 14px"
                                            >{{ $services[0]->description }} </p>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-image u-layout-cell u-size-20 u-image-1"
                                         data-image-width="416" data-image-height="626">
                                        <div class="u-container-layout u-container-layout-2">
                                 <img
                                                src="{{ $services[1]->image_link }}"
                                                style="height: 320px"
                                                class="img-responsive" alt="">
                                            {{--                                            </figure>--}}

                                        </div>
                                    </div>
                                    <div
                                        class=" u-container-style u-layout-cell u-palette-1-dark-2 u-right-cell u-size-20 u-layout-cell-3">
                                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                                            <h3 class="u-text u-text-default u-text-5">
                                                {{ $services[2]->title }}
                                            </h3>
                                            <p style=" height: 320px ;overflow: auto;padding-inline-end:15px;font-size: 14px"
                                               class="u-text u-text-6">Our
                                                {{ $services[2]->description }}

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="u-size-30">
                                <div class="u-layout-row">
                                    <div class="u-container-style u-image u-layout-cell u-size-20 u-image-1"
                                         data-image-width="416" data-image-height="626">
                                        <div class="u-container-layout u-container-layout-2">
                                            {{--                                            <figure class="pic-hover hover-scale mb20">--}}
                                            {{--                                                                          <span class="center-xy">--}}
                                            {{--                                    <a class="image-popup" href="{{$services[0]->image_link}}">--}}
                                            {{--                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>--}}
                                            {{--                                              </span>--}}
                                            {{--                                                <span class="bg-overlay"></span>--}}
                                            <img
                                                src="{{ $services[0]->image_link }}"
                                                style="height: 320px"
                                                class="img-responsive" alt="">
                                            {{--                                            </figure>--}}

                                        </div>
                                    </div>
                                    <div
                                        class=" u-container-style u-layout-cell u-palette-1-dark-2 u-right-cell u-size-20 u-layout-cell-3">
                                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                                            <h3 class="u-text u-text-default u-text-5">
                                                {{ $services[1]->title }}
                                            </h3>
                                            <p style=" height: 320px ;overflow: auto;padding-inline-end:15px;font-size: 14px"
                                               class="u-text u-text-6">Our
                                                {{ $services[1]->description }}

                                            </p>
                                        </div>

                                    </div>
                                    <div class="u-container-style u-image u-layout-cell u-size-20 u-image-1"
                                         data-image-width="416" data-image-height="626">
                                        <div class="u-container-layout u-container-layout-2">
                                            {{--                                            <figure class="pic-hover hover-scale mb20">--}}
                                            {{--                                                                          <span class="center-xy">--}}
                                            {{--                                    <a class="image-popup" href="{{$services[2]->image_link}}">--}}
                                            {{--                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>--}}
                                            {{--                                              </span>--}}
                                            {{--                                                <span class="bg-overlay"></span>--}}
                                            <img
                                                src="{{ $services[2]->image_link }}"
                                                style="height: 320px"
                                                class="img-responsive" alt="">
                                            {{--                                            </figure>--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

