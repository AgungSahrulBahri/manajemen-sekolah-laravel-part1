@extends('student._parsial._master')

@section('content')
    
<div class="page-wrapper">
    
    
            <!-- ============================================================== -->

            <!-- Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <div class="row page-titles">

                <div class="col-md-5 align-self-center">

                    <h3 class="text-themecolor">Siswa</h3>

                </div>


                <div>

                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>

                </div>

            </div>

            <!-- ============================================================== -->

            <!-- End Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- Container fluid  -->

            <!-- ============================================================== -->

            <div class="container-fluid">

                <!-- ============================================================== -->

                <!-- Start Page Content -->

                <!-- ============================================================== -->
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Input Siswa</h4>

                                <form method="POST" action="{{ route('student.store') }}">
                                    @csrf
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault01">Nama </label>

                                          <input type="text" class="form-control" id="validationDefault01" name="nama" placeholder="masukan nama" value="{{ old('nama') }}" required="">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nomer Induk Siswa</label>

                                          <input type="text" class="form-control" id="validationDefault02" placeholder="12345  " value="{{ old('nis') }}" required="" name="nis">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefaultUsername">Tempat Tanggal Lahir</label>

                                         <input type="text" class="form-control" id="validationDefault02" placeholder="Brebes, 20 april 1999" value="{{ old('ttl') }}" required="" name="ttl">

                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault03">No Telephone</label>

                                          <input type="text" class="form-control" id="validationDefault03" placeholder="08xxxxxxx" required="" name="no_tlp" value="{{ old('no_tlp') }}">

                                        </div>

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault03">Asal Sekolah</label>

                                          <input type="text" class="form-control" id="validationDefault03" placeholder="smp negeri" required="" name="asal" value="{{ old('asal') }}">

                                        </div>

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault04">Jurusan</label>

                                          <input type="text" class="form-control" id="validationDefault04" placeholder="Pendidikan" required="" name="jurusan" value="{{ old('jurusan') }}">

                                        </div>

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault05">Status Siswa</label>

                                          <input type="text" class="form-control" id="validationDefault05" placeholder="Lajang" required="" name="status" value="{{ old('status') }}">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="form-check">

                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">

                                          <label class="form-check-label" for="invalidCheck2">

                                            Mengisi data dengan benar?

                                          </label>

                                        </div>

                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                    
                                    <a href="{{ route('student.index') }}" class="btn btn-info">Cancel</a>
                                </form>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- ============================================================== -->

                <!-- End PAge Content -->

                <!-- ============================================================== -->

                <!-- ============================================================== -->

                <!-- Right sidebar -->

                <!-- ============================================================== -->

                <!-- .right-sidebar -->

                <div class="right-sidebar">

                    <div class="slimscrollright">

                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>

                        <div class="r-panel-body">

                            <ul id="themecolors" class="m-t-20">

                                <li><b>With Light sidebar</b></li>

                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>

                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>

                                <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>

                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>

                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>

                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>

                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>

                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>

                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>

                                <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>

                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>

                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>

                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>

                            </ul>

                            <ul class="m-t-20 chatonline">

                                <li><b>Chat option</b></li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>

                                </li>

                                <li>

                                    <a href="javascript:void(0)"><img src="/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <!-- ============================================================== -->

                <!-- End Right sidebar -->

                <!-- ============================================================== -->

            </div>

            <!-- ============================================================== -->

            <!-- End Container fluid  -->

            <!-- ============================================================== -->

            <!-- ============================================================== -->

            <!-- footer -->

            <!-- ============================================================== -->

            <footer class="footer">

                © 2019 Admin Press Admin by themedesigner.in

            </footer>

            <!-- ============================================================== -->

            <!-- End footer -->

            <!-- ============================================================== -->

        </div>
@endsection