@extends('admin.layouts.app')
@section('main-content')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.dashboard') }}</h1>

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
                                <span>{{ trans('backend.posts')}}</span>
                                <h4 class="mb-0 font-weight-medium">{{ $posts }}</h4>
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
                                <span>{{ trans('backend.portfolio')}}</span>
                                <h4 class="mb-0 font-weight-medium">{{ $portfolios }}</h4>
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
                                <span>{{ trans('backend.testimonials') }}</span>
                                <h4 class="mb-0 font-weight-medium">{{ $testimonials }}</h4>
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
                                <span>{{ trans('backend.teams') }}</span>
                            <h4 class="mb-0 font-weight-medium">{{ $teams }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
