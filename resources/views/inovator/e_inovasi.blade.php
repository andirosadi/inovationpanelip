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
    <!-- <div class="container-fluid">
      @if (session('message'))
      <div class="alert alert-success">
        {{ session('message') }}
      </div>
      @endif -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <link href="{{asset('matrix/assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
                <link href="{{asset('matrix/assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
                <!-- <link href="../../dist/css/style.min.css" rel="stylesheet"> -->
                <div class="card">
                    <div class="card-body wizard-content">
                        <h4 class="card-title">Buat Inovasi</h4>
                        <h6 class="card-subtitle"></h6>
                        @foreach($inovasi as $inovasis)
                        <form id="Buat inovasi" method="post" action="{{route('inovasi.update', $inovasis->id)}}" class="m-t-40">
                          {{csrf_field()}}
                          {{method_field('PATCH')}}
                            <div>
                              <!-- Judul, Dibuat oleh, Abstract, Kata kunci -->
                                <h3></h3>
                                <section>
                                    <label for="judul">Judul</label>
                                    <input id="judul" name="judul" type="text" class="required form-control" value="{{$inovasis->judul}}">
                                    <label for="writer">Dibuat oleh</label>
                                    <input id="writer" name="writer" type="text" class="required form-control" value="{{$inovasis->writer}}">
                                    <label for="abstract">Abstract</label>
                                    <div class="card">
                                        <div class="card-body" >
                                            <textarea name="abstract" class="form-control" style="height: 300px" >{{$inovasis->abstract}}</textarea>
                                        </div>
                                    </div>
                                    <label for="katakunci">Kata kunci</label>
                                    <input id="katakunci" name="katakunci" type="text" class="required form-control value=" value="{{$inovasis->katakunci}}">
                                </section>
                              <!-- Latar Belakang, Maksud dan Tujuan, Ruang Lingkup, Metodelogi -->
                                <h3></h3>
                                <section>
                                    <label for="latarb">Latar Belakang</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="latarb" class="form-control" style="height: 300px" >{{$inovasis->latarb}}</textarea>
                                        </div>
                                    </div>
                                    <label for="maksud">Maksud dan Tujuan</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="maksud"class="form-control" style="height: 300px" value="">{{$inovasis->maksud}}</textarea>
                                        </div>
                                    </div>
                                    <label for="ruanglingkup">Ruang Lingkup</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="ruanglingkup" class="form-control" style="height: 300px" value="">{{$inovasis->ruanglingkup}}</textarea>
                                        </div>
                                    </div>
                                    <label for="metodelogi">Metodelogi</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="metodelogi" class="form-control" style="height: 300px" value="">{{$inovasis->metodelogi}}</textarea>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="landasant">landasant</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="landasant" class="form-control" style="height: 300px" value="">{{$inovasis->landasant}}</textarea>
                                        </div>
                                    </div>
                                    <label for="rpcs">rpcs</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="rpcs" class="form-control" style="height: 300px" value="">{{$inovasis->rpcs}}</textarea>
                                        </div>
                                    </div>
                                    <label for="idea">idea</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="idea" class="form-control" style="height: 300px" value="">{{$inovasis->idea}}</textarea>
                                        </div>
                                    </div>
                                    <label for="tidea">tidea</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="tidea" name="tidea" value="{{$inovasis->tidea}}" accept=".jpg, .jpeg, .png", multiple>{{$inovasis->tidea}}</P>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="tprio">tprio</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="tprio" name="tprio" accept=".jpg, .jpeg, .png", multiple value="">{{$inovasis->tprio}}</P>
                                        </div>
                                    </div>
                                    <label for="mprio">mprio</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="mprio" name="mprio" accept=".jpg, .jpeg, .png", multiple value="{{$inovasis->mprio}}">{{$inovasis->mprio}}</P>
                                        </div>
                                    </div>
                                    <label for="pelaksanaan">pelaksanaan</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="pelaksanaan" class="form-control" style="height: 300px" value="">{{$inovasis->pelaksanaan}}</textarea>
                                        </div>
                                    </div>
                                    <label for="manfaatf">manfaatf</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="manfaatf" class="form-control" style="height: 300px" value="">{{$inovasis->manfaatf}}</textarea>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="roi">roi</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="roi" class="form-control" style="height: 300px" value="">{{$inovasis->roi}}</textarea>
                                        </div>
                                    </div>
                                    <label for="manfaatn">manfaatn</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="manfaatn" class="form-control" style="height: 300px" value="">{{$inovasis->manfaatn}}</textarea>
                                        </div>
                                    </div>
                                    <label for="analisar">analisar</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="analisar" class="form-control" style="height: 300px" value="">{{$inovasis->analisar}}</textarea>
                                        </div>
                                    </div>
                                    <label for="tanalisar">tanalisar</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="tanalisar" name="tanalisar" accept=".jpg, .jpeg, .png", multiple value="{{$inovasis->tanalisar}}">{{$inovasis->tanalisar}}</P>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="kesimpulan">kesimpulan</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="kesimpulan" class="form-control" style="height: 300px" value="">{{$inovasis->kesimpulan}}</textarea>
                                        </div>
                                    </div>
                                    <label for="saran">saran</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="saran" class="form-control" style="height: 300px" value="">{{$inovasis->saran}}</textarea>
                                        </div>
                                    </div>
                                </section>
                                <div class="card-body">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <!-- <h3></h3>
                                <section>
                                    <ul>
                                        <li>Foo</li>
                                        <li>Bar</li>
                                        <li>Foobar</li>
                                    </ul>
                                </section>
                                <h3></h3>
                                <section>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </section> -->
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('matrix/assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('matrix/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('matrix/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('matrix/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('matrix/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('matrix/dist/js/custom.min.js')}}"></script>
    <!-- this page js -->
    <script src="{{asset('matrix/assets/libs/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('matrix/assets/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <!-- <script>
        // Basic Example with form
    // var form = $("#example-form");
    // form.validate({
    //     errorPlacement: function errorPlacement(error, element) { element.before(error); },
    //     rules: {
    //         confirm: {
    //             equalTo: "#password"
    //         }
    //     }
    // });
    //  form.children("div").steps({
    //     headerTag: "h3",
    //     bodyTag: "section",
    //     transitionEffect: "slideLeft",
    //     onStepChanging: function(event, currentIndex, newIndex) {
    //         form.validate().settings.ignore = ":disabled,:hidden";
    //         return form.valid();
    //     },
    //     onFinishing: function(event, currentIndex) {
    //         form.validate().settings.ignore = ":disabled";
    //         return form.valid();
    //     },
    //     onFinished: function(event, currentIndex) {
    //         alert("Submitted!");
    //     }
    // });
    // </script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->

@endsection
