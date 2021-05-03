<?php $__env->startSection('main-content'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.dashboard')); ?></h1>

                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body ">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-indigo text-white rounded-circle"><i class="fa fa-briefcase"></i>
                            </div>
                            <div class="ml-4">
                                <span><?php echo e(trans('backend.posts')); ?></span>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($posts); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-azura text-white rounded-circle"><i class="fa fa-credit-card"></i>
                            </div>
                            <div class="ml-4">
                                <span><?php echo e(trans('backend.portfolio')); ?></span>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($portfolios); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-orange text-white rounded-circle"><i class="fa fa-users"></i>
                            </div>
                            <div class="ml-4">
                                <span><?php echo e(trans('backend.testimonials')); ?></span>
                                <h4 class="mb-0 font-weight-medium"><?php echo e($testimonials); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="body">
                        <div class="d-flex align-items-center">
                            <div class="icon-in-bg bg-pink text-white rounded-circle"><i class="fa fa-life-ring"></i>
                            </div>
                            <div class="ml-4">
                                <span><?php echo e(trans('backend.teams')); ?></span>
                            <h4 class="mb-0 font-weight-medium"><?php echo e($teams); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>