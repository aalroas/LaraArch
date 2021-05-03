<?php $__env->startSection('main-content'); ?>
<div class="content">
    <?php
$page_name="";
$page_text = "";
$about_tilte = "";
$about_text="";
$award_tilte = "";
$award_text = "";
$team_tilte="";
$team_text = "";
$testimonials_tilte = "";
$testimonials_text="";
        if (trans('frontend.code') =="en") {
$page_name =$about->page_name_en;
$page_text =$about->page_text_en;
$about_tilte =$about->about_tilte_en;
$about_text =$about->about_text_en;
$award_tilte =$about->award_tilte_en;
$award_text =$about->award_text_en;
$team_tilte =$about->team_tilte_en;
$team_text =$about->team_text_en;
$testimonials_tilte =$about->testimonials_tilte_en;
$testimonials_text =$about->testimonials_text_en;

        }elseif (trans('frontend.code') == "tr") {
            $page_name =$about->page_name_tr;
            $page_text =$about->page_text_tr;
            $about_tilte =$about->about_tilte_tr;
            $about_text =$about->about_text_tr;
            $award_tilte =$about->award_tilte_tr;
            $award_text =$about->award_text_tr;
            $team_tilte =$about->team_tilte_tr;
            $team_text =$about->team_text_tr;
            $testimonials_tilte =$about->testimonials_tilte_tr;
            $testimonials_text =$about->testimonials_text_tr;
        }else {
            $page_name =$about->page_name_ar;
            $page_text =$about->page_text_ar;
            $about_tilte =$about->about_tilte_ar;
            $about_text =$about->about_text_ar;
            $award_tilte =$about->award_tilte_ar;
            $award_text =$about->award_text_ar;
            $team_tilte =$about->team_tilte_ar;
            $team_text =$about->team_text_ar;
            $testimonials_tilte =$about->testimonials_tilte_ar;
            $testimonials_text =$about->testimonials_text_ar;

         }
        ?>


                        <!--fixed-column-wrap-->
                        <div class="fixed-column-wrap">
                            <div class="pr-bg"></div>
                            <!--fixed-column-wrap-content-->
                            <div class="fixed-column-wrap-content">
                                <div class="scroll-nav-wrap color-bg">
                                    <div class="carnival"><?php echo e(trans('frontend.scroll_down')); ?></div>
                                    <div class="snw-dec">
                                        <div class="mousey">
                                            <div class="scroller"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg" data-bg="<?php echo e(URL('uploads/about/'.$about->page_image)); ?>"></div>
                                <div class="overlay"></div>
                                <div class="progress-bar-wrap bot-element">
                                    <div class="progress-bar"></div>
                                </div>
                                <!--fixed-column-wrap_title-->
                                <div class="fixed-column-wrap_title first-tile_load">
                                <h2><?php echo e($page_name); ?></h2>
                                    <p><?php echo e($page_text); ?></p>
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
                                <section id="sec1" class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3> <?php echo e($about_tilte); ?></h3>
                                          <?php echo $about_text; ?>

                                        </div>
                                        <div class="column-wrap-content fl-wrap">
                                            <div class="column-wrap-media fl-wrap">
                                                <div class="pr-bg pr-bg-white"></div>
                                                <img src="<?php echo e(URL('uploads/about/'.$about->about_image)); ?>"  class="respimg" alt="">
                                            <a href="<?php echo e($about->url); ?>" class="column-wrap-media_btn color-bg image-popup">
                                                    <?php echo e(trans('frontend.our_story_video')); ?> <i class="fas fa-play"></i>
                                                    <div class="pr-bg pr-bg-white"></div>
                                                </a>
                                            </div>
                                            <div class="column-wrap-text">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h3 class="pr-subtitle">
                                                            <?php echo e($award_tilte); ?>

                                                            <div class="pr-bg pr-bg-white"></div>
                                                        </h3>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="pr-bg pr-bg-white"></div>

<?php echo $award_text; ?>

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
                                <!--section -->
                                <section   class="no-padding">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="inline-facts-container fl-wrap">
                                                    <div class="pr-bg pr-bg-white"></div>
                                                    <!-- inline-facts -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="<?php echo e($about->projects); ?>">0</div>
                                                                </div>
                                                            </div>
                                                            <h6><?php echo e(trans('frontend.projects')); ?></h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="<?php echo e($about->customers); ?>">0</div>
                                                                </div>
                                                            </div>
                                                            <h6> <?php echo e(trans('frontend.customers')); ?></h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                    <div class="num" data-content="0" data-num="<?php echo e($about->hours); ?>">0</div>
                                                                </div>
                                                            </div>
                                                            <h6>  <?php echo e(trans('frontend.hours')); ?></h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                    <!-- inline-facts  -->
                                                    <div class="inline-facts-wrap">
                                                        <div class="inline-facts">
                                                            <div class="milestone-counter">
                                                                <div class="stats animaper">
                                                                <div class="num" data-content="0" data-num="<?php echo e($about->awards); ?>">0</div>
                                                                </div>
                                                            </div>
                                                            <h6> <?php echo e(trans('frontend.awards')); ?></h6>
                                                        </div>
                                                    </div>
                                                    <!-- inline-facts end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--section end-->
                                <div class="section-separator"></div>
                                <!--section-->
                                <section id="sec2" class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <h3><?php echo e($team_tilte); ?></h3>
                                             <?php echo $team_text; ?>

                                        </div>


                                        <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php

                                                            $name = "";
                                                            $position = "";
                                                            $text = "";
                                                            if (trans('frontend.code') =="en") {
                                                            $name= $team->name_en;
                                                            $position= $team->position_en;
                                                            $text= $team->name_en;
                                                            }elseif (trans('frontend.code') == "tr") {
                                                            $name= $team->name_tr;
                                                            $position= $team->position_tr;
                                                            $text= $team->name_tr;
                                                            }else {
                                                            $name= $team->name_ar;
                                                            $position= $team->position_ar;
                                                            $text= $team->name_ar;
                                                            }
                                                            ?>


                                        <!-- team-box   -->
                                        <div class="team-box">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <div class="team-photo">
                                                <div class="overlay"></div>
                                            <img src="<?php echo e(URL("uploads/teams/".$team->image)); ?>" alt="<?php echo e($name); ?>" class="respimg">
                                                <ul class="team-social">
                                                    <li><a href="<?php echo e($team->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="<?php echo e($team->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="<?php echo e($team->twitter); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="<?php echo e($team->linkedin); ?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                                </ul>
                                            <a href="mailto:<?php echo e($team->e_mail); ?>" class="team-contact_btn color-bg"><i class="fal fa-envelope"></i></a>
                                            </div>
                                            <div class="team-info">
                                            <h3><?php echo e($name); ?></h3>
                                            <h4><?php echo e($position); ?></h4>
                                            <p> <?php echo e($text); ?></p>
                                            </div>
                                        </div>
                                        <!-- team-box end -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        <div class="section-number right_sn">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <span>0</span>2.
                                        </div>
                                    </div>
                                </section>
                                <!--section end-->
                                <div class="section-separator"></div>
                                <!--section-->
                                <section id="sec5" class="small-padding">
                                    <div class="container">
                                        <div class="split-sceen-content_title fl-wrap">
                                            <div class="pr-bg pr-bg-white"></div>
                                        <h3><?php echo e($testimonials_tilte); ?></h3>
                                             <?php echo $testimonials_text; ?>

                                        </div>
                                        <div class="column-wrap-content fl-wrap">
                                            <div class="column-wrap-text">
                                                <div class="testilider fl-wrap" data-effects="slide">
                                                    <div class="pr-bg pr-bg-white"></div>
                                                    <div class="swiper-container">
                                                        <div class="swiper-wrapper">

                                                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php

$title = "";
$text = "";
if (trans('frontend.code') =="en") {
$title= $team->title_en;
$text= $team->title_en;
}elseif (trans('frontend.code') == "tr") {
$title= $team->title_tr;
$text= $team->title_tr;
}else {
$title= $team->title_ar;
$text= $team->title_ar;

}
                                                            ?>

                                                            <!-- swiper-slide -->
                                                            <div class="swiper-slide">
                                                                <div class="testi-item fl-wrap">
                                                                <div class="testi-avatar"><img src="<?php echo e(URL("uploads/testimonials/".$team->image)); ?>" alt="<?php echo e($title); ?>"></div>
                                                                <h3><?php echo e($title); ?></h3>
                                                                    <p>"<?php echo e($text); ?>"</p>

                                                                </div>
                                                            </div>
                                                            <!-- swiper-slide end-->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </div>
                                                        <div class="testilider-controls">
                                                            <div class="tc-pagination"></div>
                                                            <div class="ss-slider-btn ss-slider-prev color-bg"><i class="fal fa-long-arrow-left"></i></div>
                                                            <div class="ss-slider-btn ss-slider-next color-bg"><i class="fal fa-long-arrow-right"></i></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="section-number right_sn">
                                            <div class="pr-bg pr-bg-white"></div>
                                            <span>0</span>3.
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
<!-- footer -->
<?php echo $__env->make('frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- footer  end -->
<!-- share-wrapper-->
<div class="share-wrapper">
    <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i> <?php echo e(trans('frontend.close')); ?></div>
    <div class="share-container fl-wrap  isShare"></div>
</div>
<!-- share-wrapper  end -->
</div>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>