@extends('inovator.inovatorLayout.inovator_design')
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
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif
          <div class="col-12">
              <div class="card">
                          <div class="card-body">
                            <h5 class="card-title m-b-0">Data Inovator</h5>
                          </div>
                          <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Revisi</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    @php
                                    $no = 1;
                                    @endphp
                                    @foreach($inovasi as $data)
                                    <th scope="row">{{$no++}}</th>
                                    <td>{{$data->judul}}</td>
                                    <td>{{$data->revisi}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>
                                      <div class="card-title m-b-0">
                                        <a type="" href="{{route('inovasi.edit', $data->id)}}" class="btn btn-warning btn-sm">Revisi</a>
                                        <a href="{{route('inovasi.show', $data->id)}}" class="btn btn-primary btn-sm">Open</a>
                                        {{csrf_field()}}
                                      </div>
                                    </td>
                                  </tr>
                                  @endforeach
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
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{asset('joli/js/plugins/jquery/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('joli/js/plugins/jquery/jquery-ui.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('joli/js/plugins/bootstrap/bootstrap.min.js')}}"></script>
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src="{{asset('joli/js/plugins/icheck/icheck.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('joli/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>

        <script type="text/javascript" src="{{asset('joli/js/demo_tables.js')}}"></script>
        <!-- END THIS PAGE PLUGINS-->

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="{{asset('joli/js/settings.js')}}"></script>

        <script type="text/javascript" src="{{asset('joli/js/plugins.js')}}"></script>
        <script type="text/javascript" src="{{asset('joli/js/actions.js')}}"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

@endsection
