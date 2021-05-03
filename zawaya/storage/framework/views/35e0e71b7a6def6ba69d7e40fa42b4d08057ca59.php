<?php $__env->startSection('main-content'); ?>

<?php

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
?>

<!--content-->
<div class="content full-height dark-bg">
    <!-- section-->
    <!-- Hero video   -->
    <div class="media-container">
        <div class="video-mask"></div>
        <div class="video-holder">
            <!--=============== add you video id  in data-vim=""  ===============-->

        <div class="bg" data-bg="<?php echo e(URL::to('uploads/portfolio', $portfolio->f_image)); ?>"></div>
        </div>
        <div class="overlay"></div>
        <div class="sec-lines"></div>
    </div>
    <!-- Hero video   end -->
    <div class="hero-title fl-wrap">
        <div class="container">
            <div class="section-title fl-wrap">
                <div class="pr-bg"></div>
            <h2> <?php echo e($title); ?></h2>

                <p>   <?php echo Illuminate\Support\Str::words($text,30, ' ... >>>'); ?> </p>


            </div>
        </div>
    </div>
    <div class="hero-start-link bot-element dark-bg">
        <div class="scroll-down-wrap">
            <div class="mousey">
                <div class="scroller"></div>
            </div>
            <span>Scroll Down to discover</span>
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
                               <?php echo e(trans('frontend.project_details')); ?>

                                <span><?php echo $text; ?></span>
                            </div>
                          <ul class="pr-list dark-bg">
                                <li><span><?php echo e(trans('frontend.date')); ?> :</span> <?php echo e($portfolio->date); ?> </li>
                                <li><span><?php echo e(trans('frontend.client')); ?> :</span> <?php echo e($portfolio->client); ?></li>
                                <li><span><?php echo e(trans('frontend.status')); ?> :</span> <?php if($portfolio->status == 1): ?>
                                    <?php echo e(trans('frontend.completed')); ?> <?php else: ?> <?php echo e(trans('frontend.pending')); ?> <?php endif; ?> </li>
                                <li><span><?php echo e(trans('frontend.location')); ?> : </span> <a href="<?php echo e($portfolio->location_url); ?>"
                                        target="_blank"><?php echo e($portfolio->location); ?>

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
                                <li class="selectedLava"><a href="#tab-1" data-tabnum="1"><span>01.</span><?php echo e(trans('frontend.details')); ?></a></li>
                                <li><a href="#tab-2" data-tabnum="2"><span>02.</span><?php echo e(trans('frontend.video_presentation')); ?></a>
                                </li>
                                <li><a href="#tab-3" data-tabnum="3"><span>03.</span><?php echo e(trans('frontend.plans')); ?></a>
                                </li>
                            </ul>
                            <!-- tab-content-->
                            <div id="tab-1" class="tab-content">

                                <!-- portfolio start -->
                                <div class="gallery-items min-pad  lightgallery three-column fl-wrap">

                                  <?php $__currentLoopData = $portfolio_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="gallery-item   <?php if($key == 1): ?>   gallery-item-second <?php else: ?> web <?php endif; ?>">
                                            <div class="grid-item-holder">
                                                <a href="<?php echo e(URL::to('uploads/portfolio',$image->portfolio_image_path)); ?>" style="width: 100%; height: 100%; line-height: 60px; color: #fff; background: none;" class="fet_pr-carousel-box-media-zoom   popup-image"> </a>
                                                <img src="<?php echo e(URL::to('uploads/portfolio',$image->portfolio_image_path)); ?>" alt="<?php echo e($title); ?>">
                                            </div>
                                        </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>

                            </div>
                            <!-- tab-content end-->
                            <!-- tab-content-->
                            <div id="tab-2" class="tab-content">
                                <h3 class="pr-subtitle"><?php echo e(trans('frontend.project_presentation')); ?></h3>
                                <p><?php echo $video_text; ?></p>


                                <div class="video-box fl-wrap">
                                    <img src="<?php echo e(URL::to('uploads/portfolio',$portfolio->f_image)); ?>" class="respimg" alt="">
                                    <a class="video-box-btn image-popup" href="<?php echo e($portfolio->url); ?>"><i class="fas fa-play"></i></a>
                                </div>


                            </div>
                            <!-- tab-content end-->
                            <!-- tab-content-->
                            <div id="tab-3" class="tab-content">
                                <h3 class="pr-subtitle"><?php echo e(trans('frontend.plan_and_sketches_of_the_project')); ?></h3>
                                <div class="palns-gal fl-wrap lightgallery">

                                    <?php $__currentLoopData = $plan_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                        <div class="plans-gal_item hov_zoom">
                                            <img src="<?php echo e(URL::to('uploads/portfolio',$image->plan_image_path)); ?>" alt="" class="respimg">
                                            <a href="<?php echo e(URL::to('uploads/portfolio',$image->plan_image_path)); ?>" class="box-media-zoom   popup-image"><i
                                                    class="fal fa-search"></i></a>
                                        </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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




<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>