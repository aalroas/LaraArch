@extends('frontend/app')

@section('main-content')
<div class="content">
    @php
$contact_name="";
$contact_text = "";
if (trans('frontend.code') =="en") {
$contact_name =$contact->contact_name_en;
$contact_text =$contact->contact_text_en;
        }elseif (trans('frontend.code') == "tr") {
            $page_name =$contact->contact_name_tr;
            $page_text =$contact->contact_text_tr;
        }else {
            $contact_name =$contact->contact_name_ar;
            $contact_text =$contact->contact_text_ar;
         }
        @endphp
    <div class="fixed-column-wrap">
        <div class="pr-bg"></div>
        <div class="fixed-column-wrap-content map-mobile">
            <div class="scroll-nav-wrap color-bg">
                <div class="carnival">{{ trans('frontend.scroll_down') }}</div>
                <div class="snw-dec">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <div class="map-container mc_big">
                <div id="map-single" class="map" data-latlog="[{{$contact->lat}} , {{$contact->long}}]"
                    data-popuptext="{{ GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))}}"></div>
            </div>
        </div>
        <!--fixed-column-wrap-content end-->
    </div>
    <!--fixed-column-wrap end-->
    <!--column-wrap-->
    <div class="column-wrap">
        <!--column-wrap-container -->
        <div class="column-wrap-container fl-wrap">
            <div class="col-wc_dec">
                <div class="pr-bg pr-bg-white"></div>
            </div>
            <div class="col-wc_dec col-wc_dec2">
                <div class="pr-bg pr-bg-white"></div>
            </div>
            <!--section-->
            <section id="sec1" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3> {{ $contact_name }}</h3>
                      {{ $contact_text }}
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <img src="{{URL('uploads/contact/'.$contact->contact_image)}}" class="respimg" alt="">
                            <div class="cont-det-wrap dark-bg">
                                <div class="pr-bg pr-bg-white"></div>
                                <ul>
                                  <li><span>{{ trans('frontend.call') }}:</span><a
                                        href="tel:{{ GeneralSiteSettings("site_phone")}}">{{ GeneralSiteSettings("site_phone")}}</a></li>
                                <li><span>{{ trans('frontend.write') }} :</span><a
                                        href="mailto:{{ GeneralSiteSettings("site_email")}}">{{ GeneralSiteSettings("site_email")}}</a></li>
                                <li><span>{{ trans('frontend.find_us') }} : </span><a
                                        href="#">{{ GeneralSiteSettings("site_address_" .trans('frontend.boxCode'))}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section-number right_sn"><span>0</span>1.</div>
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>
            <!--section-->
            <section id="sec2" class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3>{{ trans('frontend.get_in_touch') }}</h3>

                    </div>
                    <div id="contact-form">
                        <div class="pr-bg pr-bg-white"></div>
                        <div id="contact-form">
                            <div class="pr-bg pr-bg-white"></div>
                            <div id="messagex"></div>
                            <form class="custom-form" action="{{asset('frontend/php/contact.php')}}" name="contactform" id="contactform">
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="name" id="name" placeholder="{{ trans('frontend.name')}}" value=""  required />
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="email" id="email" placeholder="{{ trans('frontend.email')}}" value="" required  />
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" name="phone" id="phone" placeholder="{{ trans('frontend.phone')}}" value=""  required />
                                        </div>
                                        <div class="col-md-6">
                                        <input type="text" name="subject" id="subject" placeholder="{{ trans('frontend.subject')}}" value=""  required />

                                        </div>
                                    </div>
                                    <input type="hidden" name="lang" id="lang"  value="{{ trans('frontend.boxCode')}}"  />
                                <textarea name="message" id="message" cols="40" rows="3"  required placeholder="{{ trans('frontend.your_message')}}"></textarea>

                                    <div class="clearfix"></div>
                                    <button class="btn float-btn flat-btn color-bg" id="submit">{{ trans('frontend.send') }} <i
                                            class="fal fa-long-arrow-right"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    <!-- contact form  end-->
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>2.
                    </div>
                </div>
            </section>
            <!--section end-->
        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->
@include('frontend.layouts.footer')
<!-- footer  end -->
<!-- share-wrapper-->
<div class="share-wrapper">
    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> {{ trans('frontend.close') }}</div>
    <div class="share-container fl-wrap  isShare"></div>
</div>
<!-- share-wrapper  end -->
</div>





@endsection
