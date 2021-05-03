@extends('frontend/app')



@section('main-content')
<!--Content -->
<div class="content full-height hidden-item home-half-slider">
    <div class="hero-canvas-wrap">
        <div class="dots gallery__dots" data-dots=""></div>
    </div>
    <!-- option-panel-->
    <div class="option-panel bot-element">
        <a href="{{ URL('about')}}" class="ajax start-btn color-bg"> {{ trans('frontend.start_explore')}}<i class="fal fa-long-arrow-right"></i></a>
        <div class="swiper-counter">
            <div id="current">01</div>
            <div id="total"></div>
        </div>
        <div class="slide-progress-container">
            <div class="slide-progress-warp">
                <div class="slide-progress color-bg"></div>
            </div>
        </div>
    </div>
    <!--option-panel end -->
    <!-- hero-slider-wrap -->
    <div class="hero-slider-wrap fl-wrap full-height">
        <div class="hero-slider fs-gallery-wrap fl-wrap full-height">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- swiper-slide-->
                    @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="half-hero-wrap">
                            <div class="rotate_text">{{ $slider->date}}</div>
                      @php
                        $text = "";
                        $title = "";
                        if (trans('frontend.code') =="en") {
                        $text= $slider->text_en;
                        $title= $slider->title_en;
                        }elseif (trans('frontend.code') == "tr") {
                        $text= $slider->text_tr;
                        $title= $slider->title_tr;
                        }else {
                        $title= $slider->title_ar;
                        $text= $slider->text_ar;
                        }
                        @endphp
                        <h1>{{$title }}</h1>
                        <h4>{{ $text }} </h4>
                            <div class="clearfix"></div>
                       <a href="{{ $slider->url }}" class="half-hero-wrap_link ajax">{{ trans('frontend.view_project') }} <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <!-- swiper-slide end-->
                </div>
            </div>
        </div>
        <div class="hero-slider_control-wrap bot-element">
            <div class="hero-slider_control hero-slider-button-next"><span>Next<i class="fal fa-angle-right"></i></span>
            </div>
            <div class="hero-slider_control hero-slider-button-prev"><span><i class="fal fa-angle-left"></i>Prev </span>
            </div>
        </div>
        <div class="hero-slider-wrap_pagination hlaf-slider-pag"></div>
    </div>
    <!-- hero-slider-wrap  end-->
    <!-- hero-slider-img-->
    <div class="hero-slider-img hero-slider-wrap_halftwo">
        <div class="sec-lines"></div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!-- swiper-slide-->
                @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="bg" data-bg="{{ URL::to('uploads/sliders/')}}/{{ $slider->image }}"></div>
                    <div class="overlay"></div>
                </div>
                @endforeach


                <!-- swiper-slide end-->
            </div>
        </div>
    </div>
    <!-- hero-slider-img  end-->


</div>
<!-- content  end -->
<!-- share-wrapper-->
<div class="share-wrapper">
    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
    <div class="share-container fl-wrap  isShare"></div>
</div>
<!-- share-wrapper  end -->
</div>
<!-- content-holder end -->


@endsection


