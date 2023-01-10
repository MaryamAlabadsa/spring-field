@extends('master')

@section('style')

    <link rel="stylesheet" href="{{asset('css/style2.css')}}" type="text/css">
@endsection

@section('content')

    <section id="section-hero-5" class="full-height text-light relative" data-stellar-background-ratio=".2">

        <div class="center-y fadeScroll relative" data-scroll-speed="2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="spacer-double"></div>
                        <h1 class="size40 wow fadeInRight" data-wow-delay=".5s">{{$project->title}}<span
                                class="tiny-border"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="contentwrapper" class="contentwrapper" role="main">
        <div class="standard-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-offset-1 col-md-7 col-xs-12 here">
                        <!--skipsearch-->
                        <nav id="breadcrumb">
                            <ul>
                                <li>
                                    <a href="/home">
                    <span class="fa fa-home">
                    	<span class="zeroHeight">Home</span>
                    </span>
                                    </a>
                                </li>

                                <li>
                                    <a href="/#section-portfolio">
                                        Projects
                                    </a>
                                </li>


                                <li class="lastPage">
              <span>
               {{$project->title}}
              </span>
                                </li>


                            </ul>

                        </nav>
                        <!--/skipsearch-->


                        <!--skipsearch-->

                        <div class="top-content-panel">
                            <div class="top-content-item read-time"><i class="fa fa-hourglass-start"
                                                                       aria-hidden="true"></i>
                                3 mins
                            </div>

                            <div class="top-content-item share-list-wrap share"><a class="share-link"
                                                                                   href="javascript:;"><span>
                                  Share</span></a>

                                <nav class="social-media-list">
                                    <a data-title="Share on Facebook" title="Share on Facebook - opens in a new window"
                                       href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2fen%2fprojects%2fisotek-u-233"
                                       target="_blank"
                                       onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"><span
                                            class="icon-facebook"><span class="zeroHeight">Share on Facebook - opens in a new window</span></span></a>
                                    <a data-title="Share on Twitter" title="Share on Twitter - opens in a new window"
                                       href="https://twitter.com/share?url=https://www.snclavalin.com/en/projects/isotek-u-233&amp;text=Isotek U-233 &amp;via=SNC-Lavalin"
                                       target="_blank"
                                       onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;"><span
                                            class="icon-twitter"><span class="zeroHeight">Share on Twitter - opens in a new window</span></span></a>
                                    <a data-title="Share on LinkedIn" title="Share on LinkedIn - opens in a new window"
                                       href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/en/projects/isotek-u-233"
                                       target="_blank"
                                       onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;"><span
                                            class="icon-linkedin"><span class="zeroHeight">Share on LinkedIn - opens in a new window</span></span></a>
                                    <a data-title="Share via Email" title="Share via Email"
                                       href="mailto:?subject=SNC-Lavalin%20%E2%80%93%20Isotek%20U-233%20&amp;body=I%20thought%20this%20page%20might%20interest%20you%3A%20https%3A%2F%2Fwww.snclavalin.com%2Fen%2Fprojects%2Fisotek-u-233"><span
                                            class="icon-email2"><span
                                                class="zeroHeight">Share via Email</span></span></a>
                                </nav>

                            </div>
                        </div>

                        <!--/skipsearch-->

                        <div class="introtext-container"><p>{{$project->Brief_description}}.</p></div>

                        <div class="top-content-wrapper">
                            {{$project->description}}
                        </div>
                        <div class="bottom-links">
                        </div>

                    </div>
                    {{--                project over view begin--}}
                    <div class="col-md-offset-1 col-md-3 col-xs-12">

                        <div class="overview-section">
                            <div class="overview-section-inner">

                                <p class="overview-section-title">Project overview</p>
                                <div class="overview-thumb"><img
                                        src="{{$project->main_image_link}}"
                                        alt="thumbnail photo" width="540" height="540"></div>


                                <p class="tags uppercase">
                                    @foreach($project->project_service as $service)
                                        <a aria-label="Right Panel Head Link one" href="/#{{$service}}">{{$service}}</a>
                                    @endforeach
                                    {{--                                    <a aria-label="Right Panel Head Link one" href="/en/projects/#Nuclear Technology">Nuclear Technology</a>--}}
                                </p>


                                <div class="overview-section-content">
                                    <div class="overview-section-item">
                                        <p class="overview-label">Location</p>
                                        <p class="overview-val">{{$project->location}}</p>
                                    </div>

                                    {{--                                    <div class="overview-section-item">--}}
                                    {{--                                        <p class="overview-label">Client</p>--}}
                                    {{--                                        <p class="overview-val">U.S. Department of Energy (DOE)</p>--}}
                                    {{--                                    </div>--}}


                                    <div class="overview-section-item">
                                        <p class="overview-label">Completion date</p>
                                        <p class="overview-val">{{$project->completed_time}}</p>
                                    </div>
                                </div>


                            </div>

                            <div class="overview-contact-panel">
                                <a aria-label="Close Popup" href="javascript:;" class="closePopup"><span
                                        class="icon-close"><span
                                            class="zeroHeight">Icon Close</span></span></a>
                                <p class="overview-section-title">Contact us</p>


                            </div>


                        </div>
                    </div>
                    {{--                project over view end--}}
                </div>
            </div>
        </div>
        <div class="bottom-documents-area grey">
            <div class="container-fluid">
                <div class="row">
                    <div id="download-documents-section" class="col-md-offset-1 col-md-11 col-xs-12">
                        <!--Download Popup-->
                        <div class="download-popup-area">
                            <a class="download-popup-close" href="javascript:;">
                    <span class="icon-close">
                      <span class="zeroHeight">Icon Close</span>
                    </span>
                            </a>


                            <h2 class="documents-area-title">
                                Downloads
                            </h2>
                            <div class="documents-area-inner">

                                <div class="item"
                                     data-url="/en/media/download-centre/report/digital-twins-for-the-built-environment">
                                    <div class="item-content">
                                        <p class="item-title">
                                            Digital twins for the built environment
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        2.2MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/report/digital-twins-for-built-environment-report.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2freport%2fdigital-twins-for-built-environment-report.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/report/digital-twins-for-built-environment-report.pdf&amp;text=Digital twins for the built environment&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/report/digital-twins-for-built-environment-report.pdf&amp;title=Digital twins for the built environment&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – Digital twins for the built environment&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2freport%2fdigital-twins-for-built-environment-report.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item"
                                     data-url="/en/media/download-centre/brochure/leading-the-digital-utility-transformation-1">
                                    <div class="item-content">
                                        <p class="item-title">
                                            Leading the Digital Utility Transformation
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        2.3MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/inc-general-offer.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2finc-general-offer.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/inc-general-offer.pdf&amp;text=Leading the Digital Utility Transformation&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/inc-general-offer.pdf&amp;title=Leading the Digital Utility Transformation&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – Leading the Digital Utility Transformation&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2finc-general-offer.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item"
                                     data-url="/en/media/download-centre/case-study/the-atkins-designed-dubai-operas-first-performance-by-placido-domingo">
                                    <div class="item-content">
                                        <p class="item-title">
                                            The Atkins-designed Dubai Opera's first performance by Placido...
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        372KB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/case-study/the-atkins-designed-dubai-operas-first-performance-by-placido-doming-.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fcase-study%2fthe-atkins-designed-dubai-operas-first-performance-by-placido-doming-.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/case-study/the-atkins-designed-dubai-operas-first-performance-by-placido-doming-.pdf&amp;text=The Atkins-designed Dubai Opera's first performance by Placido Domingo&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/case-study/the-atkins-designed-dubai-operas-first-performance-by-placido-doming-.pdf&amp;title=The Atkins-designed Dubai Opera's first performance by Placido Domingo&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – The Atkins-designed Dubai Opera's first performance by Placido Domingo&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fcase-study%2fthe-atkins-designed-dubai-operas-first-performance-by-placido-doming-.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item" data-url="/en/media/download-centre/case-study/the-making-of-an-icon">
                                    <div class="item-content">
                                        <p class="item-title">
                                            The making of an Icon
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        200KB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/case-study/the-making-of-an-icon.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fcase-study%2fthe-making-of-an-icon.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/case-study/the-making-of-an-icon.pdf&amp;text=The making of an Icon&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/case-study/the-making-of-an-icon.pdf&amp;title=The making of an Icon&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – The making of an Icon&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fcase-study%2fthe-making-of-an-icon.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item"
                                     data-url="/en/media/download-centre/brochure/ukreiif-thought-leadership">
                                    <div class="item-content">
                                        <p class="item-title">
                                            How buildings can make Britain a better place to live
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        3.2MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/ukreiif-thought-leadership-brochure.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2fukreiif-thought-leadership-brochure.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/ukreiif-thought-leadership-brochure.pdf&amp;text=How buildings can make Britain a better place to live&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/ukreiif-thought-leadership-brochure.pdf&amp;title=How buildings can make Britain a better place to live&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – How buildings can make Britain a better place to live&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2fukreiif-thought-leadership-brochure.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item"
                                     data-url="/en/media/download-centre/report/engineering-net-zero-gcc-report">
                                    <div class="item-content">
                                        <p class="item-title">
                                            Engineering Net Zero: GCC Report
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        4.1MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/report/gcc-report-22.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2freport%2fgcc-report-22.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/report/gcc-report-22.pdf&amp;text=Engineering Net Zero: GCC Report&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/report/gcc-report-22.pdf&amp;title=Engineering Net Zero: GCC Report&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – Engineering Net Zero: GCC Report&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2freport%2fgcc-report-22.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item"
                                     data-url="/en/media/download-centre/technical-journals/volume-4-issue-1">
                                    <div class="item-content">
                                        <p class="item-title">
                                            Technical Journal: Volume 4, Issue 1
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        46.9MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/technical-journals/snc-lavalin-technical-journal-volume-4-Issue1.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2ftechnical-journals%2fsnc-lavalin-technical-journal-volume-4-Issue1.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/technical-journals/snc-lavalin-technical-journal-volume-4-Issue1.pdf&amp;text=Technical Journal: Volume 4, Issue 1&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/technical-journals/snc-lavalin-technical-journal-volume-4-Issue1.pdf&amp;title=Technical Journal: Volume 4, Issue 1&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – Technical Journal: Volume 4, Issue 1&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2ftechnical-journals%2fsnc-lavalin-technical-journal-volume-4-Issue1.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item"
                                     data-url="/en/media/download-centre/brochure/buildings-and-places-architecture-us">
                                    <div class="item-content">
                                        <p class="item-title">
                                            Buildings &amp; Places
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        8.0MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/buildings-and-places_us.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2fbuildings-and-places_us.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/buildings-and-places_us.pdf&amp;text=Buildings &amp; Places&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/buildings-and-places_us.pdf&amp;title=Buildings &amp; Places&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – Buildings &amp; Places&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2fbuildings-and-places_us.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>


                                <div class="item" data-url="/en/media/download-centre/brochure/construction-management">
                                    <div class="item-content">
                                        <p class="item-title">
                                            Construction Management
                                        </p>
                                        <p class="item-meta">

                                            pdf,
                                            <span class="sub-size">
                                        3.3MB
                                      </span>

                                        </p>
                                    </div>

                                    <div class="item-links">

                                        <a class="media-links"
                                           href="/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/construction-management.pdf"
                                           target="_blank" title="Opens in a new window"
                                           data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                          <span class="icon-pdf-new"><span class="zeroHeight">Icon PDF</span>
                                          </span>
                                        </a>
                                        <div class="vShare">
                                            <a href="javascript:;" class="share-link">
                                            <span class="icon-share">
                                              <span class="zeroHeight">Icon Share</span>
                                            </span>
                                            </a>
                                            <nav class="social-media-list">
                                                <a data-title="Share on Facebook"
                                                   title="Share on Facebook - opens in a new window"
                                                   href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2fconstruction-management.pdf"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-facebook">
                                              <span class="zeroHeight">Share on Facebook - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on Twitter"
                                                   title="Share on Twitter - opens in a new window"
                                                   href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/construction-management.pdf&amp;text=Construction Management&amp;via=SNC-Lavalin"
                                                   target="_blank"
                                                   onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                              <span class="icon-twitter">
                                              <span class="zeroHeight">Share on Twitter - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share on LinkedIn"
                                                   title="Share on LinkedIn - opens in a new window"
                                                   href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/brochure/construction-management.pdf&amp;title=Construction Management&amp;summary=&amp;source="
                                                   target="_blank"
                                                   onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                              <span class="icon-linkedin">
                                              <span class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                              </span>
                                                </a>
                                                <a data-title="Share via Email" title="Share via Email"
                                                   href="mailto:?subject=SNC-Lavalin – Construction Management&amp;body=I thought this link might interest you: https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2fbrochure%2fconstruction-management.pdf"
                                                   data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                              <span class="icon-email2">
                                              <span class="zeroHeight">Share via Email</span>
                                              </span>
                                                </a>
                                            </nav>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                        <!--end_of Download Popup-->
                        <div class="bottom-documents-inner-area">

                            <div class="download-area documents-area">
                                <h2 class="documents-area-title">
                                    Downloads
                                </h2>
                                <div class="documents-area-inner pooo">

                                    <div class="item">
                                        <div class="item-content">
                                            <p class="item-title">
                                                Digital twins for the built environment
                                            </p>
                                            <p class="item-meta">
                                                pdf,
                                                <span class="sub-size">
                                              2.2MB
                                            </span>

                                            </p>
                                        </div>

                                        <div class="item-links">

                                            <a class="media-links" href="http://127.0.0.1:8000/public/Image/202301072042sfc logo.pdf" target="_blank"
                                               title="Opens in a new window"
                                               data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                                <span class="icon-pdf-new">
                                                <span class="zeroHeight">Icon PDF</span>
                                                </span>
                                            </a>
                                            <div class="vShare">
                                                <a href="javascript:;" class="share-link">
                                                  <span class="icon-share">
                                                    <span class="zeroHeight">Icon Share</span>
                                                  </span>
                                                </a>
                                                <nav class="social-media-list">
                                                    <a data-title="Share on Facebook"
                                                       title="Share on Facebook - opens in a new window"
                                                       href="http://www.facebook.com/sharer.php?u=https%3a%2f%2fwww.snclavalin.com%2f%7e%2fmedia%2fFiles%2fS%2fSNC-Lavalin%2fdownload-centre%2fen%2freport%2fdigital-twins-for-built-environment-report.pdf"
                                                       target="_blank"
                                                       onclick="window.open(this.href, 'facebookshare', 'width=600,height=600'); return false;"
                                                       data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                                    <span class="icon-facebook">
                                                    <span
                                                        class="zeroHeight">Share on Facebook - opens in a new window</span>
                                                    </span>
                                                    </a>
                                                    <a data-title="Share on Twitter"
                                                       title="Share on Twitter - opens in a new window"
                                                       href="https://twitter.com/share?url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/report/digital-twins-for-built-environment-report.pdf&amp;text=Digital twins for the built environment&amp;via=SNC-Lavalin"
                                                       target="_blank"
                                                       onclick="window.open(this.href, 'twittershare', 'width=600,height=600'); return false;">
                                                    <span class="icon-twitter">
                                                    <span
                                                        class="zeroHeight">Share on Twitter - opens in a new window</span>
                                                    </span>
                                                    </a>
                                                    <a data-title="Share on LinkedIn"
                                                       title="Share on LinkedIn - opens in a new window"
                                                       href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.snclavalin.com/~/media/Files/S/SNC-Lavalin/download-centre/en/report/digital-twins-for-built-environment-report.pdf&amp;title=Digital twins for the built environment&amp;summary=&amp;source="
                                                       target="_blank"
                                                       onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=800');return false;">
                                                    <span class="icon-linkedin">
                                                    <span
                                                        class="zeroHeight">Share on LinkedIn - opens in a new window</span>
                                                    </span>
                                                    </a>
                                                    <a title="Share via Email"
                                                       href="mailto:?subject=SNC-Lavalin – Digital twins for the built environment&amp;body=I thought this link might interest you: http://127.0.0.1:8000/public/Image/202301072042sfc logo.pdf"
                                                       data-lf-fd-inspected-jmvz8gkpmlp82pod="true">
                                                    <span class="icon-email2">
                                                    <span class="zeroHeight">Share via Email</span>
                                                    </span>
                                                    </a>
                                                </nav>
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
    </main>
@endsection
@section('js')

    <script type="text/javascript">
        $j('html').on("click touchstart", "body", function (e) {
            var container1 = $j(".top-content-panel");
            if (!container1.is(e.target) && container1.has(e.target).length === 0) {
                container1.find('.share.hover').removeClass('hover');
            }
            /*hide share if click outside area*/
            var container2 = $j(".vShare");
            if (!container2.is(e.target) && container2.has(e.target).length === 0) {
                container2.removeClass('hover');
            }
            if (!$j(e.target).hasClass('currentTab')) {
                $j('.currentTab.active').click();
            }
        });


        $j(document).on("click", ".share > a.share-link, .vShare > a.share-link", function () {
            $j(".share,.vShare").removeClass('hover');
            $j(this).parent().addClass('hover');
        }).focus(function () {
            $j(this).keypress(function (e) {
                if (e.keyCode === 13) {
                    $j(this).parent().addClass('hover');
                    return false;
                }
            });
        });

        $j(document).on("click", "nav.social-media-list > a", function () {
            $j(".share,.vShare").removeClass('hover');
        });

        if ($j('#contentwrapper > .quarterly-reports').length > 0) {
            $j(".tabs-wrapper.annual-reports-tab .tabs ul li a:contains('" + $j('.tabs-wrapper.annual-reports-tab .currentTab').text().trim() + "')").parent().addClass('active');
        }

    </script>
@endsection
