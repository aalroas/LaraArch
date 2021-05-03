<?php $__env->startSection('main-content'); ?>
<!--Content -->
<div class="content full-height hidden-item home-half-slider">
    <div class="hero-canvas-wrap">
        <div class="dots gallery__dots" data-dots=""></div>
    </div>
    <!-- option-panel-->
    <div class="option-panel bot-element">
        <a href="<?php echo e(URL('about')); ?>" class="ajax start-btn color-bg"> <?php echo e(trans('frontend.start_explore')); ?><i class="fal fa-long-arrow-right"></i></a>
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
                    <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="half-hero-wrap">
                            <div class="rotate_text"><?php echo e($slider->date); ?></div>
                  <?php
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
                    ?>
                    <h1><?php echo e($title); ?></h1>
                    <h4><?php echo e($text); ?> </h4>
                            <div class="clearfix"></div>
                    <a href="<?php echo e($slider->url); ?>" class="half-hero-wrap_link ajax"><?php echo e(trans('frontend.view_project')); ?> <i
                                class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="bg" data-bg="<?php echo e(URL::to('uploads/sliders/')); ?>/<?php echo e($slider->image); ?>"></div>
                    <div class="overlay"></div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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


<?php $__env->stopSection(); ?>



<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>