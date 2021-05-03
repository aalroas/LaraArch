@extends('admin.layouts.app')


@section('main-content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        @include('admin.layouts.pageHead')
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">Blank page</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Users</h3>
            @can ('posts.create', Auth::user())
              <a class="col-lg-offset-5 btn btn-success" href="{{   route('user.create')   }}">Add new user</a>
             @endcan

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <div class="box">
              <div class="box-header">
                @include('includes.messages')
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S. NO</th>
                    <th>Profile Image</th>
                    <th>user Name</th>
                    <th>phone</th>
                    <th>Roles</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td align="center" > <img style="height: 50px;width: 50px;" class="img-circle" src="{{ URL::to('safeer/public'.Storage::disk('local')->url($user->image)) }}"></td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                    @foreach ($user->roles as $role)
                              {{ $role->name }},
                           @endforeach
                            </td>
                            <td>{{ $user->status? 'Active' : 'Not Active' }}</td>
                            <td> <a href="{{   route('user.edit',$user->id) }}" <span class="glyphicon glyphicon-edit"> </span></a></td>
                            <td>
                              <form id="delete-form-{{ $user->id }}" method="post" action="{{ route('user.destroy',$user->id) }}" style="display: none">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                              </form>
                               <a href=""  onclick="if(confirm('Are You sure you want to delete this')){event.preventDefault();document.getElementById('delete-form-{{ $user->id }}').submit();}else{event.preventDefault();}" <span class="glyphicon glyphicon-trash">


                                </span></a>
                               </td>
                          </tr>
                        @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. NO</th>
                    <th>Profile Image</th>
                    <th>user Name</th>
                    <th>phone</th>
                    <th>Roles</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            Footer
          </div>
          <!-- /.box-footer-->
        </div>
        <!-- /.box -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
