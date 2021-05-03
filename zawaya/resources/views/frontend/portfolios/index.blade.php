@extends('frontend/app')

@section('main-content')


<div class="content dark-bg">
                        <div class="fixed-filter-panel bot-element in-filter_mobpanel">
                            <div class="fixed-filter-panel_title color-bg">
                                {{ trans('frontend.works_filter') }} <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <div class="gallery-filters">
                                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*">{{ trans('frontend.all_works') }}</a>

                  @foreach ($portfolios as $portfolio)
                                @foreach ($portfolio->categories as $category => $value)
                    @php

                    $cat = "";



                    if (trans('frontend.code') =="en") {

                    $cat = $portfolio->categories[$category]->name_en;


                    }elseif (trans('frontend.code') == "tr") {

                    $cat = $portfolio->categories[$category]->name_tr;


                    }else {
                    $cat = $portfolio->categories[$category]->name_ar;
                    }
                    @endphp

              <a href="#" class="gallery-filter" data-filter=".{{ $cat }}">{{ $cat }}</a>

                        @endforeach
@endforeach



                            </div>
                            <div class="folio-counter">
                                <div class="num-album"></div>
                                <div class="all-album"></div>
                            </div>


<div class="gallery-filters">
@if ($$portfolios->lastPage() > 1)
<ul class="pagination">
    <li class="{{ ($$portfolios->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $$portfolios->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $$portfolios->lastPage(); $i++)
        <li class="{{ ($$portfolios->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $$portfolios->url($i) }}">{{ $i }}</a>
        </li>
        @endfor
        <li class="{{ ($$portfolios->currentPage() == $$portfolios->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $$portfolios->url($$portfolios->currentPage()+1) }}">Next</a>
        </li>
</ul>
@endif
</div>







                        </div>



                        <!-- portfolio start -->
                        <div class="gallery-items min-pad   four-column fl-wrap ff_panel-conainer">
                           @foreach ($portfolios as $portfolio)
@php

$title = "";


if (trans('frontend.code') =="en") {
$title= $portfolio->title_en;


}elseif (trans('frontend.code') == "tr") {
$title= $portfolio->title_tr;

}else {
$title= $portfolio->title_ar;

}
@endphp
@foreach ($portfolio->categories as $category => $value)
@php

$cat = "";



if (trans('frontend.code') =="en") {

$cat = $portfolio->categories[$category]->name_en;


}elseif (trans('frontend.code') == "tr") {

$cat = $portfolio->categories[$category]->name_tr;


}else {
$cat = $portfolio->categories[$category]->name_ar;
}
@endphp

<div class="gallery-item houses {{ $cat }}">



                          <!-- gallery-item-->

                                <div class="grid-item-holder">
                                    <img  src="{{ URL::to('uploads/portfolio',$portfolio->f_image) }}"    alt="">
                                    <div class="grid-det">
                                    <div class="grid-det_category"><a href="#">{{ $cat }}</a> <a href="#"></a></div>
                                    @endforeach
                                        <div class="grid-det-item">
                                            <a href="{{ URL("/portfolios/portfolio/".$portfolio->id) }}" class="ajax grid-det_link">{{ $title }} <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            @endforeach
                        </div>
                        <!-- portfolio end -->
                    </div>



<!-- wrapper end -->

</div>
<!-- Main end -->
@endsection

