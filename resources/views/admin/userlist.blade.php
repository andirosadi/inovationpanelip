@extends('admin.adminLayout.admin_design')
@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h6 class="text-white">Total</h6>
                            <h6 class="text-white">5</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h6 class="text-white">Admin</h6>
                            <h6 class="text-white">1</h6>
                        </div>
                    </div>
                </div>
                 <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                            <h6 class="text-white">Evaluator</h6>
                            <h6 class="text-white">1</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-white">Inovator</h6>
                            <h6 class="text-white">3</h6>
                        </div>
                    </div>
                </div>
            </div>
    <div class="row">
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif
          <div class="col-12">
              <div class="card">
                          <div class="card-body">
                            <h5 class="card-title m-b-0">Data Pengguna</h5>
                          </div>
                          <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col"><b>NO</b></th>
                                    <th scope="col"><b>ID</b></th>
                                    <th scope="col"><b>Name</b></th>
                                    <th scope="col"><b>Status</b></th>
                                    <th scope="col"><b>Email</b></th>
                                    <th scope="col"><b>Action</b>
                                      <!-- <a href="{{route('admin.create')}}" class="btn btn-primary">Create</a> -->
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @if(count($admin) != 0)
                                   @foreach($admin as $key => $user)
                                  <tr>
                                    <th scope="row"><b>{{$key+1}}</b></th>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->role_id}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <form action="{{url('admin/'.$user->id)}}" method="post">
                                          <a href="{{url('admin/'.$user->id).'/edit'}}"  class="btn btn-warning btn-sm">Edit</a>
                                          <a href="{{url('resetpassword/'.$user->id).'/edit'}}"  class="btn btn-primary btn-sm">Reset Password</a>
                                          {{csrf_field()}}
                                          {{method_field('DELETE')}}
                                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');" >Delete</button>
                                        </form>
                                    </td>
                                  </tr>
                                  @endforeach
                                  @else
                                  <h1>EMPTY</h1>
                                  @endif
                                </tbody>
                          </table>
              </div>
          </div>
      </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

@endsection
