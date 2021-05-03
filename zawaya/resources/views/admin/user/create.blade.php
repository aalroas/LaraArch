@extends('admin.layouts.app')





@section('main-content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <section class="content-header">
    <h1>
      Text Editors
      <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Forms</a></li>
      <li class="active">Editors</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">


        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Quick Example</h3>
          </div>

          @include('includes.messages')

          <!-- /.box-header -->
          <!-- form start -->
              <form role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
            <div class="box-body">
              <div class="col-lg-6">

                <div calss="form-group">
                <div class="box-body box-profile">
               <img  id="proimage" class="profile-user-img img-responsive img-circle" src="">
                </div>
                    <label for="Profile Image">Select Image</label>
                  <input  onchange="PreviewImage();" type="file" name="image" id="image">
                </div>
                {{-- this for PreviewImage befor setting it --}}
                <script type="text/javascript">
      function PreviewImage() {
          var oFReader = new FileReader();
          oFReader.readAsDataURL(document.getElementById("image").files[0]);

          oFReader.onload = function (oFREvent) {
              document.getElementById("proimage").src = oFREvent.target.result;
          };
      };

  </script>


                <div class="form-group">
                  <label for="name"> Name</label>
                  <input type="text" class="form-control" id="name"  name="name" placeholder="  name" value="{{ old('name') }}" >
                </div>
                <div class="form-group">
                    <label for="email"> Email</label>
                  <input type="text"  class="form-control" id="email"  name="email" placeholder="  email" value="{{ old('email') }}"  >
                </div>


                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text"  class="form-control" id="phone"  name="phone"   placeholder=" phone" value="{{ old('phone') }}"  >
                </div>


                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password"  class="form-control" id="password"  name="password"   placeholder=" password"  >
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                 <input  class="form-control" placeholder="confirm password" id="password_confirmation" type="password"   name="password_confirmation"  >
                </div>



                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">
                      <label ><input type="checkbox" name="status" @if (old('status') == 1)
                        checked
                      @endif value="1" checked >Status</label>
                    </div>
               </div>

                <div class="form-group ">

                  <label>Assign Role</label>
                  <div class="row">
                    @foreach ($roles as $role)
                        <div class="col-lg-3">
                          <div class="checkbox">
                            <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"> {{ $role->name }}</label>
                          </div>
                        </div>
                    @endforeach
                  </div>



              </div>


            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a  type="button"  class="btn btn-warning" href="{{   route('user.index')   }}">Back</a>
            </div>
          </form>
        </div>
          </div>

        <!-- /.box -->


      </div>
      <!-- /.col-->
    </div>
    <!-- ./row -->
  </section>
  <!-- /.content -->
</div>
@endsection
