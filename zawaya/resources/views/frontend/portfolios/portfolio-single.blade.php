@extends('frontend/app')

@section('main-content')

@php

$title = "";
$text = "";
$video_text = "";

if (trans('cpanel.code') =="en") {
$title= $portfolio->title_en;
$text= $portfolio->text_en;
$video_text= $portfolio->video_text_en;

}elseif (trans('cpanel.code') == "tr") {
$title= $portfolio->title_tr;
$text= $portfolio->text_tr;
$video_text= $portfolio->video_text_tr;
}else {
$title= $portfolio->title_ar;
$text= $portfolio->text_ar;
$video_text= $portfolio->video_text_ar;
}
@endphp

<!--content-->
<div class="content full-height dark-bg">
    <!-- section-->
    <!-- Hero video   -->
    <div class="media-container">
        <div class="video-mask"></div>
        <div class="video-holder">
            <!--=============== add you video id  in data-vim=""  ===============-->

        <div class="bg" data-bg="{{ URL::to('uploads/portfolio', $portfolio->f_image)}}"></div>
        </div>
        <div class="overlay"></div>
        <div class="sec-lines"></div>
    </div>
    <!-- Hero video   end -->
    <div class="hero-title fl-wrap">
        <div class="container">
            <div class="section-title fl-wrap">
                <div class="pr-bg"></div>
            <h2> {{ $title }}</h2>

                <p>   {!!   Illuminate\Support\Str::words($text,30, ' ... >>>') !!} </p>


            </div>
        </div>
    </div>
    <div class="hero-start-link bot-element dark-bg">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>

        </div>
        <a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-long-arrow-down"></i></a>
    </div>
</div>
<!--content  end-->
<!--content-->
<div class="content">
    <!-- section-->
    <section class="no-padding-bottom" id="sec1">
        <!-- container-->
        <div class="container">
            <!-- det-wrap-->
            <div class="fl-wrap det-wrap">
                <div class="row">
                    <div class="col-md-4">
                        <div class="fixed-column fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="pr-title">
                               {{ trans('frontend.project_details') }}
                                <span>{!! $text !!}</span>
                            </div>
                          <ul class="pr-list dark-bg">
                                <li><span>{{ trans('frontend.date') }} :</span> {{ $portfolio->date }} </li>
                                <li><span>{{ trans('frontend.client') }} :</span> {{ $portfolio->client }}</li>
                                <li><span>{{ trans('frontend.status') }} :</span> @if($portfolio->status == 1)
                                    {{ trans('frontend.completed') }} @else {{ trans('frontend.pending') }} @endif </li>
                                <li><span>{{ trans('frontend.location') }} : </span> <a href="{{ $portfolio->location_url }}"
                                        target="_blank">{{ $portfolio->location }}
                                    </a></li>
                            </ul>
                            <div class="fixed-column-top"><i class="fal fa-long-arrow-up"></i></div>
                        </div>
                    </div>
                    <div class="col-md-8 first-tile_load">
                        <!-- tabs-container-->
                        <div id="tabs-container">
                            <div class="tabs-counter">
                                <span>0</span>
                                <div class="tc_item">1</div>
                            </div>
                           <ul class="tabs-menu fl-wrap">
                                <li class="selectedLava"><a href="#tab-1" data-tabnum="1"><span>01.</span>{{ trans('frontend.details') }}</a></li>
                                <li><a href="#tab-2" data-tabnum="2"><span>02.</span>{{ trans('frontend.video_presentation') }}</a>
                                </li>
                                <li><a href="#tab-3" data-tabnum="3"><span>03.</span>{{ trans('frontend.plans') }}</a>
                                </li>
                            </ul>
                            <!-- tab-content-->
                            <div id="tab-1" class="tab-content">

                                <!-- portfolio start -->
                                <div class="gallery-items min-pad  lightgallery three-column fl-wrap">

                                  @foreach ($portfolio_images as $key => $image)
                                        <div class="gallery-item   @if($key == 1)   gallery-item-second @else web @endif">
                                            <div class="grid-item-holder">
                                                <a href="{{ URL::to('uploads/portfolio',$image->portfolio_image_path) }}" style="width: 100%; height: 100%; line-height: 60px; color: #fff; background: none;" class="fet_pr-carousel-box-media-zoom   popup-image"> </a>
                                                <img src="{{ URL::to('uploads/portfolio',$image->portfolio_image_path) }}" alt="{{ $title }}">
                                            </div>
                                        </div>
                                        @endforeach
                                </div>

                            </div>
                            <!-- tab-content end-->
                            <!-- tab-content-->
                            <div id="tab-2" class="tab-content">
                                <h3 class="pr-subtitle">{{ trans('frontend.project_presentation') }}</h3>
                                <p>{!! $video_text !!}</p>


                                <div class="video-box fl-wrap">
                                    <img src="{{ URL::to('uploads/portfolio',$portfolio->f_image) }}" class="respimg" alt="">
                                    <a class="video-box-btn image-popup" href="{{ $portfolio->url }}"><i class="fas fa-play"></i></a>
                                </div>


                            </div>
                            <!-- tab-content end-->
                            <!-- tab-content-->
                            <div id="tab-3" class="tab-content">
                                <h3 class="pr-subtitle">{{ trans('frontend.plan_and_sketches_of_the_project') }}</h3>
                                <div class="palns-gal fl-wrap lightgallery">

                                    @foreach ($plan_images as $image)


                                        <div class="plans-gal_item hov_zoom">
                                            <img src="{{ URL::to('uploads/portfolio',$image->plan_image_path) }}" alt="" class="respimg">
                                            <a href="{{ URL::to('uploads/portfolio',$image->plan_image_path) }}" class="box-media-zoom   popup-image"><i
                                                    class="fal fa-search"></i></a>
                                        </div>

                                        @endforeach
                                </div>
                            </div>
                            <!-- tab-content end-->
                        </div>
                        <!-- tabs-container end-->
                        <div class="clearfix"></div>
                        <span class="dec-border fl-wrap"></span>

                    </div>
                </div>
            </div>
            <!-- det-wrap end-->
        </div>
        <!-- container end -->
        <div class="clearfix"></div>
        <div class="limit-box fl-wrap"></div>

    </section>
    <!-- section end-->
</div>
<!-- content end -->




@include('frontend.layouts.footer')
</div>

@endsection
