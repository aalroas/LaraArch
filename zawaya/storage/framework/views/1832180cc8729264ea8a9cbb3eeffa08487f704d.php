<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.sliders')); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><?php echo e(trans('backend.dashboard')); ?></a></li>

                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

                    <?php echo $__env->make('includes.messages', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

                <form role="form" action="<?php echo e(route('porcats.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>






                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.name')); ?> AR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="name_ar" name="name_ar">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.name')); ?> EN</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="name_en" name="name_en">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.name')); ?> TR</h2>
                                </div>
                                <div class="body">

                                    <input type="text" class="form-control" id="name_tr" name="name_tr">

                                </div>
                            </div>
                        </div>

                    </div>






                        <div class="col-sm-6">
                            <div class="card">
                                <div class="header">
                                    <h2><?php echo e(trans('backend.slug')); ?></h2>
                                </div>
                                <div class="body">

                                    <input type="text" autocomplete="off" name="slug" class="form-control">

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><?php echo e(trans('backend.save')); ?></button>
                        <a type="button" class="btn btn-warning"
                            href="<?php echo e(route('porcats.index')); ?>"><?php echo e(trans('backend.back')); ?></a>
                    </div>
                </form>

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