@extends('admin.adminLayout.admin_design')
@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          <h4 class="card-title">Tambah Revisi</h4>
                          @foreach($evaluator as $evaluasi)
                            <form action="{{route('evaluators.update',$evaluasi->id)}}" method="post" class="form-horizontal">
                              {{csrf_field()}}
                              {{method_field('PUT')}}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Revisi</label>
                                        <div class="col-sm-9">
                                              <textarea name="abstract" class="form-control" style="height: 300px">{{$evaluasi->revisi}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-md-9">
                                          <select class="select2 form-control custom-select" id="status" name="role_id" value="{{$evaluasi->status}}" style="width: 100%; height:36px;">
                                            <option>{{$evaluasi->status}}</option>
                                            <optgroup label="Status">
                                                <option value="Revisi">Revisi</option>
                                                <option value="Approved">Approved</option>
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
                            @endforeach
                        </div>
                    </div>
                </div>
@endsection
