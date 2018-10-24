@extends('evaluator.evaluatorLayout.evaluator_design')
@section('content')
<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          <h4 class="card-title">Tambah Revisi</h4>
                          @foreach($inovasi as $inovasis)
                            <form action="{{route('evaluators.update',$inovasis->id)}}" method="post" class="form-horizontal">
                              {{csrf_field()}}
                              {{method_field('PATCH')}}
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="name" class="col-sm-3 text-right control-label col-form-label">Revisi</label>
                                        <div class="col-sm-9">
                                              <textarea name="revisi" class="form-control" style="height: 300px">{{$inovasis->revisi}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-md-9">
                                          <select class="select2 form-control custom-select" id="status" name="status" value="{{$inovasis->status}}" style="width: 100%; height:36px;">
                                            <option>{{$inovasis->status}}</option>
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
