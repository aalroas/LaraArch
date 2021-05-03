<?php $__env->startSection('main-content'); ?>
<div class="content">
    <!--fixed-column-wrap-->
    <div class="fixed-column-wrap">
        <!--fixed-column-wrap-content-->
        <div class="pr-bg"></div>
        <div class="fixed-column-wrap-content">
            <div class="scroll-nav-wrap color-bg">
                <div class="carnival"><?php echo e(trans('frontend.scroll_down')); ?></div>
                <div class="snw-dec">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
            </div>
            <div class="bg" data-bg="<?php echo e(URL('uploads/settings/'. GeneralSiteSettings("site_logo_".trans('frontend.boxCode')))); ?>"></div>
            <div class="overlay"></div>
            <div class="progress-bar-wrap bot-element">
                <div class="progress-bar"></div>
            </div>
            <!--fixed-column-wrap_title-->
            <div class="fixed-column-wrap_title first-tile_load">
                <h2><?php echo e(trans('frontend.our_last_news')); ?></h2>

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
            <section class="small-padding article">
                <div class="container">
                    <div class="split-sceen-content_title fl-wrap">
                        <div class="pr-bg pr-bg-white"></div>
                        <?php

                            $title = "";



                            if (trans('frontend.code') =="en") {
                            $title= $post->title_en;


                            }elseif (trans('frontend.code') == "tr") {
                            $title= $post->title_tr;


                            }else {
                            $title= $post->title_ar;


                            }
                            ?>

                        <h3> <?php echo e($title); ?></h3>
                        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php

                        $cat = "";



                        if (trans('frontend.code') =="en") {

                        $cat = $post->categories[$category]->name_en;


                        }elseif (trans('frontend.code') == "tr") {

                        $cat = $post->categories[$category]->name_tr;


                        }else {
                        $cat = $post->categories[$category]->name_ar;
                        }
                        ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <div class="parallax-header"> <a href="#"><?php echo e($post->date); ?></a><span><?php echo e(trans('frontend.category')); ?> : </span>
                        <?php echo e($cat); ?>

                        </div>
                    </div>
                    <div class="column-wrap-content fl-wrap">
                        <div class="column-wrap-media fl-wrap">
                            <div class="pr-bg pr-bg-white"></div>
                            <div class="single-slider-wrap">
                                <div class="single-slider fl-wrap">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper lightgallery">

                                            <?php $__currentLoopData = $post->post_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="swiper-slide hov_zoom"><img height="300"
                                                    src="<?php echo e(URL::to('uploads/posts',$post->post_images[$image]->post_image_path)); ?>" alt=""><a
                                                    href="<?php echo e(URL::to('uploads/posts',$post->post_images[$image]->post_image_path)); ?>"
                                                    class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                        </div>
                                    </div>
                                </div>
                                <div class="ss-slider-controls">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="ss-slider-pagination"></div>
                                    <div class="ss-slider-cont ss-slider-cont-prev color-bg"><i
                                            class="fal fa-long-arrow-left"></i></div>
                                    <div class="ss-slider-cont ss-slider-cont-next color-bg"><i
                                            class="fal fa-long-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="column-wrap-text">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="pr-bg pr-bg-white"></div>

                                    <?php

                                    $text = "";



                                    if (trans('frontend.code') =="en") {
                                    $text= $post->text_en;


                                    }elseif (trans('frontend.code') == "tr") {
                                    $text= $post->text_tr;


                                    }else {
                                    $text= $post->text_ar;


                                    }
                                    ?>


<?php echo $text; ?>



                                </div>
                            </div>
                        </div>

                        <!--comments end -->

                    </div>
                    <div class="section-number right_sn">
                        <div class="pr-bg pr-bg-white"></div>
                        <span>0</span>1.
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
<!-- footer -->
 <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- footer  end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>