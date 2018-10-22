@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form action="{{url('resetpassword/'.$user->id)}}" method="post" class="form-horizontal">
                              {{csrf_field()}}
                              {{method_field('PATCH')}}
                                <div class="card-body">
                                    <h4 class="card-title">Reset Password</h4>
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Password Here" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="password_confirmation" class="col-sm-3 text-right control-label col-form-label" required>Confirmation Password</label>
                                      <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmation Password" required>
                                      </div>
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Reset Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


@endsection
