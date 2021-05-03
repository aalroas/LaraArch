<?php $__env->startSection('main-content'); ?>


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1><?php echo e(trans('backend.portfolio')); ?></h1>
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

<div class="col-lg-9 col-md-8 col-sm-12">
    <div class="row clearfix">

        <?php $__currentLoopData = $portfolio->portfolio_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio_images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-2">
            <div class="card c_grid c_yellow">
                <div class="body text-center">
                    <img width="200" height="100" class="user-photo"
                        src="<?php echo e(URL::to('uploads/portfolio',$portfolio_images->portfolio_image_path)); ?>" alt="">
                    <button class="deleteimage" data-id="<?php echo e($portfolio_images->id); ?>" data-token="<?php echo e(csrf_token()); ?>" ><?php echo e(trans('backend.delete')); ?></button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <script>

$(".deleteimage").click(function(){
var id = $(this).data("id");
var token = $(this).data("token");
$.ajax(
{
url: "<?php echo url('cpanel/images') ?>/"+id,
type: 'DELETE',
dataType: "JSON",
data: {
"id": id,
"_method": 'DELETE',
"_token": token,
},
success: function ()
{
console.log("it Work");
}
});

});

        </script>
    </div>
</div>

<p><?php echo e(trans('backend.plan_images')); ?></p>
<div class="col-lg-9 col-md-8 col-sm-12">
    <div class="row clearfix">

        <?php $__currentLoopData = $portfolio->plan_images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan_images): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-2">
            <div class="card c_grid c_yellow">
                <div class="body text-center">
                    <img width="200" height="100" class="user-photo"
                        src="<?php echo e(URL::to('uploads/portfolio',$plan_images->plan_image_path)); ?>" alt="">
                    <button class="deleteplanimage" data-id="<?php echo e($plan_images->id); ?>"
                        data-token="<?php echo e(csrf_token()); ?>"><?php echo e(trans('backend.delete')); ?></button>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <script>
            $(".deleteplanimage").click(function(){
var id = $(this).data("id");
var token = $(this).data("token");
$.ajax(
{
url: "<?php echo url('cpanel/planimages') ?>/"+id,
type: 'DELETE',
dataType: "JSON",
data: {
"id": id,
"_method": 'DELETE',
"_token": token,
},
success: function ()
{
console.log("it Work");
}
});

});

        </script>
    </div>
</div>




        <form role="form" action="<?php echo e(route('portfolio.update',$portfolio->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PATCH')); ?>


<div class="row clealfix">
            <div class="col-sm-4">
                <div class="card">
                    <div class="header">
                        <h2><?php echo e(trans('backend.f_image')); ?></h2>
                    </div>
                    <div class="body">
                    <input type="file" class="dropify" data-default-file="<?php echo e(URL::to('uploads/portfolio/'.$portfolio->f_image)); ?>"
                            data-allowed-file-extensions="png jpg jpeg PNG JPG JPEG"  id="f_image" name="f_image" >
                    </div>
                </div>
            </div>
        </div>


            <div class="row clealfix">
                <div class="col-sm-12">
                    <div class="card main-sectionx">
                        <div class="header">
                            <h2><?php echo e(trans('backend.image')); ?></h2>
                        </div>
                        <div class="body">

                            <div class="file-loading">
                                <input id="file-1" type="file" name="portfolio_images[]" multiple class="file"
                                    data-overwrite-initial="false" data-min-file-count="2"  >
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<div class="row clealfix">
                <div class="col-sm-12">
                    <div class="card main-sectionx">
                        <div class="header">
                            <h2><?php echo e(trans('backend.plan_images')); ?></h2>
                        </div>
                        <div class="body">

                            <div class="file-loading">
                                <input id="file-2" type="file" name="plan_images[]" multiple class="file"
                                    data-overwrite-initial="false" data-min-file-count="2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <script >
             $("#file-1").fileinput({
              rtl: true,

            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],

            maxFileSize:2000,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });

        $("#file-2").fileinput({
            rtl: true,

            showUpload: false,
            theme: 'fa',
            uploadUrl: "/image-view",
            uploadExtraData: function() {
            return {
            _token: $("input[name='_token']").val(),
            };
            },
            allowedFileExtensions: ['jpg', 'png', 'gif'],

            maxFileSize:2000,
            maxFilesNum: 20,
            slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
            }
            });


            </script>



            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.title')); ?> AR</h2>
                        </div>
                        <div class="body">

                            <input  value="<?php if(old('title_ar')): ?><?php echo e(old('title_ar')); ?><?php else: ?><?php echo e($portfolio->title_ar); ?><?php endif; ?>" type="text" class="form-control" id="title_ar" name="title_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.title')); ?> EN</h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('title_en')): ?><?php echo e(old('title_en')); ?><?php else: ?><?php echo e($portfolio->title_en); ?><?php endif; ?>" type="text" class="form-control" id="title_en" name="title_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.title')); ?> TR</h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('title_tr')): ?><?php echo e(old('title_tr')); ?><?php else: ?><?php echo e($portfolio->title_tr); ?><?php endif; ?>" type="text" class="form-control" id="title_tr" name="title_tr">

                        </div>
                    </div>
                </div>

            </div>






            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.text')); ?> AR</h2>
                        </div>
                        <div class="body">


                            <textarea id="ckeditor1" type="text" class="form-control" name="text_ar"><?php echo e($portfolio->text_ar); ?></textarea>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.text')); ?> EN</h2>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor2" type="text" class="form-control" name="text_en"><?php echo e($portfolio->text_en); ?></textarea>


                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.text')); ?> TR</h2>
                        </div>
                        <div class="body">

                            <textarea id="ckeditor3" type="text" class="form-control" name="text_tr"><?php echo e($portfolio->text_tr); ?></textarea>


                        </div>
                    </div>
                </div>

            </div>


            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.date')); ?></h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('date')): ?><?php echo e(old('date')); ?><?php else: ?><?php echo e($portfolio->date); ?><?php endif; ?>"   data-provide="datepicker" autocomplete="off" name="date" data-date-autoclose="true"
                                class="form-control">

                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.url')); ?></h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('url')): ?><?php echo e(old('url')); ?><?php else: ?><?php echo e($portfolio->url); ?><?php endif; ?>"  type="text" autocomplete="off" name="url" class="form-control">

                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.status')); ?></h2>
                        </div>
                        <div class="body">
<select id="single-selection" name="status" class="multiselect multiselect-custom">

    <option <?php if($portfolio->status == 1): ?> selected <?php endif; ?>  value="1"><?php echo e(trans('backend.completed')); ?></option>
    <option  <?php if($portfolio->status == 2): ?> selected <?php endif; ?> value="2"><?php echo e(trans('backend.pending')); ?></option>





</select>


                        </div>
                    </div>
                </div>


            </div>

            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.type')); ?></h2>
                        </div>
                        <div class="body">
                     <select id="single-selection" name="categories[]" class="multiselect multiselect-custom">


                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php $__currentLoopData = $portfolio->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $porcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($porcat->id == $category->id): ?>
                            selected
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            > <?php echo e($category->name_ar); ?> </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.location')); ?></h2>
                        </div>
                        <div class="body">

                          <input value="<?php if(old('location')): ?><?php echo e(old('location')); ?><?php else: ?><?php echo e($portfolio->location); ?><?php endif; ?>" type="text" autocomplete="off" name="location" class="form-control">


                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo e(trans('backend.location_url')); ?></h2>
                            </div>
                            <div class="body">

                                <input value="<?php if(old('location_url')): ?><?php echo e(old('location_url')); ?><?php else: ?><?php echo e($portfolio->location_url); ?><?php endif; ?>" type="text"
                                    autocomplete="off" name="location_url" class="form-control">


                            </div>
                        </div>
                    </div>




                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.client')); ?></h2>
                        </div>
                        <div class="body">
                           <input  value="<?php if(old('client')): ?><?php echo e(old('client')); ?><?php else: ?><?php echo e($portfolio->client); ?><?php endif; ?>" type="text" autocomplete="off" name="client" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.video_url')); ?></h2>
                        </div>
                        <div class="body">

                            <input  value="<?php if(old('video_url')): ?><?php echo e(old('video_url')); ?><?php else: ?><?php echo e($portfolio->video_url); ?><?php endif; ?>"  type="text" class="form-control" id="video_url" name="video_url">

                        </div>
                    </div>
                </div>


<div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.video_text')); ?> </h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('video_text_ar')): ?><?php echo e(old('video_text_ar')); ?><?php else: ?><?php echo e($portfolio->video_text_ar); ?><?php endif; ?>"  type="text" class="form-control" id="video_text_ar" name="video_text_ar">

                        </div>
                    </div>
                </div>

<div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.video_text')); ?> EN</h2>
                        </div>
                        <div class="body">

                            <input value="<?php if(old('video_text_en')): ?><?php echo e(old('video_text_en')); ?><?php else: ?><?php echo e($portfolio->video_text_en); ?><?php endif; ?>" type="text" class="form-control" id="video_text_en" name="video_text_en">

                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2><?php echo e(trans('backend.video_text')); ?> TR</h2>
                        </div>
                        <div class="body">

                            <input  value="<?php if(old('video_text')): ?><?php echo e(old('video_text_tr')); ?><?php else: ?><?php echo e($portfolio->video_text_tr); ?><?php endif; ?>"  type="text" class="form-control" id="video_text_tr" name="video_text_tr">

                        </div>
                    </div>
                </div>




            </div>


            <div class="box-footer">
                <button type="submit" class="btn btn-primary"><?php echo e(trans('backend.save')); ?></button>
                <a type="button" class="btn btn-warning"
                    href="<?php echo e(route('portfolio.index')); ?>"><?php echo e(trans('backend.back')); ?></a>
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