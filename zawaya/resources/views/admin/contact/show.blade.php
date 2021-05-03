@extends('admin.layouts.app')
@section('main-content')


<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h1>{{ trans('backend.Contact_forms') }}</h1>
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

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">

                <form role="form" action="" method="post"
                    enctype="multipart/form-data">
                    <div class="row clealfix">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.name') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('name')){{ old('name') }}@else{{ $contact->name }}@endif"
                                        type="text" class="form-control" id="name" name="name">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.subject') }} </h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('subject')){{ old('subject') }}@else{{ $contact->subject }}@endif"
                                        type="text" class="form-control" id="subject" name="subject">

                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="card">
                                <div class="header">
                                    <h2>{{ trans('backend.phone') }}</h2>
                                </div>
                                <div class="body">

                                    <input readonly
                                        value="@if (old('phone')){{ old('phone') }}@else{{ $contact->phone }}@endif"
                                        type="text" class="form-control" id="phone" name="phone">

                                </div>
                            </div>
                        </div>



<div class="col-sm-4">
    <div class="card">
        <div class="header">
            <h2>{{ trans('backend.email') }}</h2>
        </div>
        <div class="body">

            <input readonly value="@if (old('email')){{ old('email') }}@else{{ $contact->email }}@endif" type="text"
                class="form-control" id="email" name="email">

        </div>
    </div>
</div>



                    </div>

                    <div class="col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>{{ trans('backend.message') }}</h2>
                            </div>
                            <div class="body">

                                <textarea  style="width: 100%;"   name="message"  readonly>
                                    {{ $contact->message }}
                                </textarea>

                            </div>
                        </div>
                    </div>





            </div>


            <div class="box-footer">

                <a type="button" class="btn btn-warning"
                    href="{{   route('contact_forms.index')   }}">{{ trans('backend.back') }}</a>
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
