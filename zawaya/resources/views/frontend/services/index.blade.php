@extends('frontend/app')

@section('main-content')

{{-- updatedxx --}}
<div class="content">
    <!--fixed-column-wrap-->
    <div class="fixed-column-wrap">
        <div class="pr-bg"></div>
        <!--fixed-column-wrap-content-->
        <div class="fixed-column-wrap-content">
            <div class="scroll-nav-wrap color-bg">
                <div class="carnival">{{ trans('frontend.scroll_down')}}</div>
                <div class="snw-dec">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>
            <div class="bg" data-bg="{{ URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))}}"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2>{{ trans('frontend.our_service') }}</h2>

            </div>
            <!--fixed-column-wrap_title end-->
            <div class="fixed-column-dec"></div>
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

            @foreach ($services as $service)
            @php
            $title = "";
            $text = "";
            if (trans('frontend.code') =="en") {
            $title= $service->title_en;
            $text= $service->text_en;
            }elseif (trans('frontend.code') == "tr") {
            $title= $service->title_tr;
            $text= $service->text_tr;
            }else {
            $title= $service->title_ar;
            $text= $service->text_ar;

            }
            @endphp
            <section class="small-padding">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <h3> {{ $title }}</h3>

                    </div>
                    <div class="column-wrap-content fl-wrap">

                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                        <img src="{{ URL("uploads/services/".$service->image)}}" class="respimg" alt="{{ $title }}">

                        </div>

                        <div class="serv-text fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="row">
                                <div class="col-md-8">
                                    {!! $text !!}
                                </div>
                                <div class="col-md-4">
                                    <div class="serv-price-wrap dark-bg">
                                        <span>{{ trans('frontend.price') }}</span>{{ $service->price }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>1.
                    </div>
                </div>
            </section>
            <!--section end-->
            <div class="section-separator"></div>
            @endforeach
            <!--section end-->
            <div class="section-separator"></div>
            <div class="clearfix"></div>
            <div class="container">
                <div class="order-wrap dark-bg fl-wrap">
                    <div class="pr-bg pr-bg-white"></div>
                    <h4>{{ trans('frontend.ready_to_oreder_your_project_?')}} </h4>
                    <a href="{{URL('/contact')}}" class="ajax">{{ trans('frontend.get_in_touch') }}<i class="fal fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <!--column-wrap-container end-->
    </div>
    <!--column-wrap end-->
    <div class="limit-box fl-wrap"></div>
</div>
<!--content end -->
<!-- footer -->
@include('frontend.layouts.footer')
<!-- footer  end -->
<!-- share-wrapper-->
<div class="share-wrapper">
    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i>{{ trans('frontend.close') }}</div>
    <div class="share-container fl-wrap  isShare"></div>
</div>
<!-- share-wrapper  end -->
</div>





@endsection
