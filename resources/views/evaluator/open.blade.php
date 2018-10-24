@extends('evaluator.evaluatorLayout.evaluator_design')
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
                            <style>.page-break
                            {
                              page-break-after: always;
                            }
                            </style>
                            @foreach($inovasi as $inovasis)
                            <h5 class="card-title m-b-0">Inovasi dari <b>{{$inovasis->writer}}</b></h5>
                            <br>
                            <br>
                            <div style="padding:1mm; border:2px solid;" align="center">
                              <h5 style="font-size:24px;">KARYA INOVASI</h5>
                            </div>
                            <h5 style="font-size:24px; text-align:center;" class="card-title m-b-0">{{$inovasis->judul}}</h5>
                            <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><i>Dibuat oleh : {{$inovasis->writer}}</i></h5>
                            <br><br>
                            <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>ABSTRAK</b></h5>
                            <h5 align="justify" style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->abstract}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Kata Kunci</b></h5>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0">{{$inovasis->katakunci}}</h5>
                            <br><br>
                            <div class="page-break"></div>
                            <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>PENDAHULUAN</b></h5>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Latar Belakang</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->latarb}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Maksud dan Tujuan</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->maksud}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Ruang Lingkup</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->ruanglingkup}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Metodologi</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->metodologi}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Landasan Teori</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->landasant}}</h5>
                            <br>
                            <div class="page-break"></div>
                            <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>PEMBAHASAN</b></h5>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>RPCS Permasalahan</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->metodologi}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Idea Generation</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->idea}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Table Idea Generation</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0"><img src="{{$inovasis->tidea}}" alt=""></h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Table Prioritas</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0"><img src="{{$inovasis->tprio}}" alt=""></h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Matrix Prioritas</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0"><img src="{{$inovasis->mprio}}" alt=""></h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Pelaksanaan Project</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->pelaksanaan}}</h5>
                            <br>
                            <div class="page-break"></div>
                            <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>MANFAAT DAN ANALISA RESIKO</b></h5>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Manfaat Finansial</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->manfaatf}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Return of Invesment (ROI)</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->roi}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Manfaat Non-Finansial</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->manfaatn}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Analisa Resiko</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->pelaksanaan}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Matrix Prioritas</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0"><img src="{{$inovasis->tprio}}" alt=""></h5>
                            <br>
                            <div class="page-break"></div>
                            <h5 style="font-size:16px; text-align:center;" class="card-title m-b-0"><b>KESIMPULAN DAN SARAN</b></h5>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Kesimpulan</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->kesimpulan}}</h5>
                            <br>
                            <h5 style="font-size:16px; text-align:left;" class="card-title m-b-0"><b>Saran</b></h5>
                            <h5 style="font-size:16px; text-align:justify; text-justify:inter-word;" class="card-title m-b-0">{{$inovasis->saran}}</h5>
                        </div>
                        <div class="card-body">
                          <a href="{{route('evaluators.edit', $inovasis->id)}}"  class="btn btn-warning btn-sm">Tambah Revisi</a>
                        </div>
                            @endforeach

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
