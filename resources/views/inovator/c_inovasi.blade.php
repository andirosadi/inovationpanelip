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
                        <form id="Buat inovasi" method="post" action="{{route('inovasi.store')}}" class="m-t-40">
                          {{csrf_field()}}
                            <div>
                              <!-- Judul, Dibuat oleh, Abstract, Kata kunci -->
                                <h3></h3>
                                <section>
                                    <label for="judul">Judul</label>
                                    <input id="judul" name="judul" type="text" class="required form-control">
                                    <label for="writer">Dibuat oleh</label>
                                    <input id="writer" name="writer" type="text" class="required form-control">
                                    <label for="abstract">Abstract</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="abstract" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="katakunci">Kata kunci</label>
                                    <input id="katakunci" name="katakunci" type="text" class="required form-control">
                                </section>
                              <!-- Latar Belakang, Maksud dan Tujuan, Ruang Lingkup, Metodelogi -->
                                <h3></h3>
                                <section>
                                    <label for="latarb">Latar Belakang</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="latarb" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="maksud">Maksud dan Tujuan</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="maksud"class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="ruanglingkup">Ruang Lingkup</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="ruanglingkup" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="metodelogi">Metodelogi</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="metodelogi" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="landasant">Landasan Teori</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="landasant" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="rpcs">RPCS Permasalahan</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="rpcs" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="idea">Idea Generation</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="idea" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="tidea">Tabel Idea</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="exampleFormControlFile1" name="tidea"></P>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="tprio">Tabel Prioritas</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="exampleFormControlFile1" name="tprio"></P>
                                        </div>
                                    </div>
                                    <label for="mprio">Matrix Prioritas</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="exampleFormControlFile1" name="mprio"></P>
                                        </div>
                                    </div>
                                    <label for="pelaksanaan">pelaksanaan Projek</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="pelaksanaan" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="manfaatf">Manfaat Finansial</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="manfaatf" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="roi">Return of Invesment</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="roi" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="manfaatn">Manfaat Non-Finansial</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="manfaatn" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="analisar">Analisa Resiko</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="analisar" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="tanalisar">Tabel Analisa Resiko</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <P><input type="file" class="form-control-file" id="exampleFormControlFile1" name="tanalisar"></P>
                                        </div>
                                    </div>
                                </section>
                                <h3></h3>
                                <section>
                                    <label for="kesimpulan">Kesimpulan</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="kesimpulan" class="form-control" style="height: 300px"></textarea>
                                        </div>
                                    </div>
                                    <label for="saran">Saran</label>
                                    <div class="card">
                                        <div class="card-body">
                                            <textarea name="saran" class="form-control" style="height: 300px"></textarea>
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
