@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.posts') }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">{{ trans('backend.dashboard') }}</a></li>

                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 col-sm-12 text-right hidden-xs">

                    @include('includes.messages')

                </div>
            </div>
        </div>
        <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

                <div class="col-sm-12">
                    <div class="card main-sectionx">
                        <div class="header">
                            <h2>{{ trans('backend.image') }}</h2>
                        </div>
                        <div class="body">
                            <div class="file-loading">
                                <input id="file-1" type="file" name="post_images[]" multiple class="file"
                                    data-overwrite-initial="false" data-min-file-count="2">
                            </div>
                        </div>
                    </div>
                </div>




            <script type="text/javascript">
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
            overwriteInitial: false,
            maxFileSize:2000,
            maxFilesNum: 20,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            }
        });
            </script>


            <br>
            <br>
            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} AR</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_ar" name="title_ar">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} EN</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_en" name="title_en">

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.title') }} TR</h2>
                        </div>
                        <div class="body">

                            <input type="text" class="form-control" id="title_tr" name="title_tr">

                        </div>
                    </div>
                </div>

            </div>






            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} AR</h2>
                        </div>
                        <div class="body">


                            <textarea id="ckeditor1" type="text" class="form-control" name="text_ar"></textarea>

                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} EN</h2>
                        </div>
                        <div class="body">
                            <textarea id="ckeditor2" type="text" class="form-control" name="text_en"></textarea>


                        </div>
                    </div>
                </div>


                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.text') }} TR</h2>
                        </div>
                        <div class="body">

                            <textarea id="ckeditor3" type="text" class="form-control" name="text_tr"></textarea>


                        </div>
                    </div>
                </div>

            </div>


            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.date') }}</h2>
                        </div>
                        <div class="body">

                            <input data-provide="datepicker" autocomplete="off" name="date" data-date-autoclose="true"
                                class="form-control">

                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.slug') }}</h2>
                        </div>
                        <div class="body">

                            <input type="text" autocomplete="off" name="slug" class="form-control">

                        </div>
                    </div>
                </div>




            </div>

            <div class="row clealfix">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="header">
                            <h2>{{ trans('backend.category') }}</h2>
                        </div>
                        <div class="body">
                            <div class="multiselect_div">
                                <select id="single-selection" name="categories[]" class="multiselect multiselect-custom">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"> {{ $category->name_ar }} </option>

                                @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>




            </div>



            <div class="box-footer">
                <button type="submit" class="btn btn-primary">{{ trans('backend.save') }}</button>
                <a type="button" class="btn btn-warning"
                    href="{{   route('post.index')   }}">{{ trans('backend.back') }}</a>
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


@endsection
