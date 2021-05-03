@extends('frontend/app')

@section('main-content')
<div class="content">
                        <!--fixed-column-wrap-->
                        <div class="fixed-column-wrap">
                            <!--fixed-column-wrap-content-->
                            <div class="pr-bg"></div>
                            <div class="fixed-column-wrap-content">
                                <div class="scroll-nav-wrap color-bg">
                                    <div class="carnival">{{ trans('frontend.scroll_down') }}</div>
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
                                    <h2>{{ trans('frontend.our_last_news') }}</h2>
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




                                @foreach ($posts as $post)

                                @php

                                $title = "";



                                if (trans('frontend.code') =="en") {
                                $title= $post->title_en;


                                }elseif (trans('frontend.code') == "tr") {
                                $title= $post->title_tr;


                                }else {
                                $title= $post->title_ar;


                                }
                                @endphp

<section class="small-padding article">
    <div class="container">
        <div class="split-sceen-content_title fl-wrap">
            <div class="pr-bg pr-bg-white"></div>
        <h3> <a href="{{ route('post',$post->slug) }} " class="ajax">{{ $title }}</a></h3>
            <div class="parallax-header"> <a href="#">{{ $post->date }}</a><span>{{ trans('frontend.category') }} :
                @foreach ($post->categories as $category => $value)
@php

$cat = "";



if (trans('frontend.code') =="en") {

$cat = $post->categories[$category]->name_en;


}elseif (trans('frontend.code') == "tr") {

$cat = $post->categories[$category]->name_tr;


}else {
    $cat = $post->categories[$category]->name_ar;
}
@endphp


{{ $cat }}
          </span>
        @endforeach

        </div>
        </div>
        <div class="column-wrap-content fl-wrap">
            <div class="column-wrap-media fl-wrap">
                <div class="pr-bg pr-bg-white"></div>
                <div class="single-slider-wrap">
                    <div class="single-slider fl-wrap">
                        <div class="swiper-container">
                            <div class="swiper-wrapper lightgallery">

@foreach ($post->post_images as $image => $value)
  <div class="swiper-slide hov_zoom"><img   height="300" src="{{ URL::to('uploads/posts',$post->post_images[$image]->post_image_path) }}" alt=""><a href="{{ URL::to('uploads/posts',$post->post_images[$image]->post_image_path) }}"
                                                                        class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>

@endforeach



                            </div>
                        </div>
                    </div>
                    <div class="ss-slider-controls">
                        <div class="pr-bg pr-bg-white"></div>
                        <div class="ss-slider-pagination"></div>
                        <div class="ss-slider-cont ss-slider-cont-prev color-bg"><i class="fal fa-long-arrow-left"></i>
                        </div>
                        <div class="ss-slider-cont ss-slider-cont-next color-bg"><i class="fal fa-long-arrow-right"></i>
                        </div>
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

                                <!--pagination-->
                                <div class="pagination">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="container">

 @if ($posts->lastPage() > 1)
<nav aria-label="Page navigation">
    <ul class="pagination">
        @if($posts->currentPage() != 1 && $posts->lastPage() >= 5)
        <li>
            <a href="{{ $posts->url($posts->url(1)) }}" aria-label="Previous">
                <span aria-hidden="true">First</span>
            </a>
        </li>
        @endif
        @if($posts->currentPage() != 1)
        <li>
            <a href="{{ $posts->url($posts->currentPage()-1) }}" aria-label="Previous">
                <span aria-hidden="true">&#x3C;</span>
            </a>
        </li>
        @endif
        @for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage());
            $i++)
            @if($posts->currentPage() == $i)
            <li class="active">
                @else
            <li>
                @endif
                <a href="{{ $posts->url($i) }}">{{ $i }}</a>
            </li>
            @endfor
            @if ($posts->currentPage() != $posts->lastPage())
            <li>
                <a href="{{ $posts->url($posts->currentPage()+1) }}" aria-label="Next">
                    <span aria-hidden="true">&#x3E;</span>
                </a>
            </li>
            @endif
            @if ($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5)
            <li>
                <a href="{{ $posts->url($posts->lastPage()) }}" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                </a>
            </li>
            @endif
    </ul>
</nav>
@endif

                                    </div>
                                </div>
                                <!--pagination end-->
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
                        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
                        <div class="share-container fl-wrap  isShare"></div>
                    </div>
                    <!-- share-wrapper  end -->
                </div>


@endsection
