<?php $__env->startSection('main-content'); ?>


<div class="content dark-bg">
                        <div class="fixed-filter-panel bot-element in-filter_mobpanel">
                            <div class="fixed-filter-panel_title color-bg">
                                <?php echo e(trans('frontend.works_filter')); ?> <i class="fal fa-long-arrow-right"></i>
                            </div>
                            <div class="gallery-filters">
                                <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><?php echo e(trans('frontend.all_works')); ?></a>

                  <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $portfolio->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php

                    $cat = "";



                    if (trans('frontend.code') =="en") {

                    $cat = $portfolio->categories[$category]->name_en;


                    }elseif (trans('frontend.code') == "tr") {

                    $cat = $portfolio->categories[$category]->name_tr;


                    }else {
                    $cat = $portfolio->categories[$category]->name_ar;
                    }
                    ?>

              <a href="#" class="gallery-filter" data-filter=".<?php echo e($cat); ?>"><?php echo e($cat); ?></a>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                            </div>
                            <div class="folio-counter">
                                <div class="num-album"></div>
                                <div class="all-album"></div>
                            </div>


<div class="gallery-filters">
<div class="pagination">
    <div class="container">
        <?php echo e($portfolios->links()); ?>

    </div>
</div>
</div>







                        </div>



                        <!-- portfolio start -->
                        <div class="gallery-items min-pad   four-column fl-wrap ff_panel-conainer">
                           <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php

$title = "";


if (trans('frontend.code') =="en") {
$title= $portfolio->title_en;


}elseif (trans('frontend.code') == "tr") {
$title= $portfolio->title_tr;

}else {
$title= $portfolio->title_ar;

}
?>
<?php $__currentLoopData = $portfolio->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php

$cat = "";



if (trans('frontend.code') =="en") {

$cat = $portfolio->categories[$category]->name_en;


}elseif (trans('frontend.code') == "tr") {

$cat = $portfolio->categories[$category]->name_tr;


}else {
$cat = $portfolio->categories[$category]->name_ar;
}
?>

<div class="gallery-item houses <?php echo e($cat); ?>">



                          <!-- gallery-item-->

                                <div class="grid-item-holder">
                                    <img  src="<?php echo e(URL::to('uploads/portfolio',$portfolio->f_image)); ?>"    alt="">
                                    <div class="grid-det">
                                    <div class="grid-det_category"><a href="#"><?php echo e($cat); ?></a> <a href="#"></a></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="grid-det-item">
                                            <a href="<?php echo e(URL("/portfolios/portfolio/".$portfolio->id)); ?>" class="ajax grid-det_link"><?php echo e($title); ?> <i class="fal fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pr-bg"></div>
                            </div>
                            <!-- gallery-item end-->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <!-- portfolio end -->
                    </div>



<!-- wrapper end -->

</div>
<!-- Main end -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend/app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>