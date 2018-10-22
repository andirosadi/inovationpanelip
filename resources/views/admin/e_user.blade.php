@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{url('admin/'.$admin->id)}}" method="post" class="form-horizontal">
                              {{csrf_field()}}
                              {{method_field('PATCH')}}
                                <div class="card-body">
                                    <h4 class="card-title">Edit User</h4>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Full Name Here" value="{{$admin->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Here" value="{{$admin->email}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-md-9">
                                          <select class="select2 form-control custom-select" id="status" name="role_id" value="{{$admin->role_id}}" style="width: 100%; height:36px;">
                                            <option>{{$admin->role_id}}</option>
                                            <optgroup label="Hak Akses">
                                                <option value=1>Admin</option>
                                                <option value=2>Evaluator</option>
                                                <option value=3>Inovator</option>
                                            </optgroup>
                                          </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


@endsection
