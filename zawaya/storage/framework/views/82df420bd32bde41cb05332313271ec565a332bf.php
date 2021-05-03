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




                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

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

<section class="small-padding article">
    <div class="container">
        <div class="split-sceen-content_title fl-wrap">
            <div class="pr-bg pr-bg-white"></div>
        <h3> <a href="<?php echo e(route('post',$post->slug)); ?> " class="ajax"><?php echo e($title); ?></a></h3>
            <div class="parallax-header"> <a href="#"><?php echo e($post->date); ?></a><span><?php echo e(trans('frontend.category')); ?> :
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


<?php echo e($cat); ?>

          </span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
  <div class="swiper-slide hov_zoom"><img   height="300" src="<?php echo e(URL::to('uploads/posts',$post->post_images[$image]->post_image_path)); ?>" alt=""><a href="<?php echo e(URL::to('uploads/posts',$post->post_images[$image]->post_image_path)); ?>"
                                                                        class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <!--pagination-->
                                <div class="pagination">
                                    <div class="pr-bg pr-bg-white"></div>
                                    <div class="container">

 <?php if($posts->lastPage() > 1): ?>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <?php if($posts->currentPage() != 1 && $posts->lastPage() >= 5): ?>
        <li>
            <a href="<?php echo e($posts->url($posts->url(1))); ?>" aria-label="Previous">
                <span aria-hidden="true">First</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($posts->currentPage() != 1): ?>
        <li>
            <a href="<?php echo e($posts->url($posts->currentPage()-1)); ?>" aria-label="Previous">
                <span aria-hidden="true">&#x3C;</span>
            </a>
        </li>
        <?php endif; ?>
        <?php for($i = max($posts->currentPage()-2, 1); $i <= min(max($posts->currentPage()-2, 1)+4,$posts->lastPage());
            $i++): ?>
            <?php if($posts->currentPage() == $i): ?>
            <li class="active">
                <?php else: ?>
            <li>
                <?php endif; ?>
                <a href="<?php echo e($posts->url($i)); ?>"><?php echo e($i); ?></a>
            </li>
            <?php endfor; ?>
            <?php if($posts->currentPage() != $posts->lastPage()): ?>
            <li>
                <a href="<?php echo e($posts->url($posts->currentPage()+1)); ?>" aria-label="Next">
                    <span aria-hidden="true">&#x3E;</span>
                </a>
            </li>
            <?php endif; ?>
            <?php if($posts->currentPage() != $posts->lastPage() && $posts->lastPage() >= 5): ?>
            <li>
                <a href="<?php echo e($posts->url($posts->lastPage())); ?>" aria-label="Next">
                    <span aria-hidden="true">Last</span>
                </a>
            </li>
            <?php endif; ?>
    </ul>
</nav>
<?php endif; ?>

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
                   <?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- footer  end -->
                    <!-- share-wrapper-->
                    <div class="share-wrapper">
                        <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> Close</div>
                        <div class="share-container fl-wrap  isShare"></div>
                    </div>
                    <!-- share-wrapper  end -->
                </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>