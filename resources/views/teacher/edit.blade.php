@extends('teacher._parsial._master')

@section('content')
    
<div class="page-wrapper">
    
    
            <!-- ============================================================== -->

            <!-- Bread crumb and right sidebar toggle -->

            <!-- ============================================================== -->

            <div class="row page-titles">

                <div class="col-md-5 align-self-center">

                    <h3 class="text-themecolor">Guru</h3>

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

                                <h4 class="card-title">Input Guru</h4>

                                <form method="POST" action="{{ route('teacher.update', $teacher->id) }}">
                                    <input type="hidden" name="_method" value="PUT">

                                    @csrf
                                    <div class="form-row">

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault01">Nama </label>

                                          <input type="text" class="form-control" id="validationDefault01" name="nama" placeholder="Memet Laksono" value="{{ $teacher->nama }}" required="">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefault02">Nomer Induk Guru</label>

                                          <input type="text" class="form-control" id="validationDefault02" placeholder="123456  " value="{{ $teacher->nig }}" required="" name="nig">

                                        </div>

                                        <div class="col-md-4 mb-3">

                                          <label for="validationDefaultUsername">Tempat Tanggal Lahir</label>

                                         <input type="text" class="form-control" id="validationDefault02" placeholder="24 Juni 1972" value="{{ $teacher->ttl }}" required="" name="ttl">

                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault03">No Telephone</label>

                                          <input type="text" class="form-control" id="validationDefault03" placeholder="0832783438" required="" name="no_tlp" value="{{ $teacher->no_tlp }}">

                                        </div>

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault03">Jabatan</label>

                                          <input type="text" class="form-control" id="validationDefault03" placeholder="Humas" required="" name="jabatan" value="{{ $teacher->jabatan }}">

                                        </div>

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault04">Mata Pelajaran</label>

                                          <input type="text" class="form-control" id="validationDefault04" placeholder="Agama" required="" name="mp" value="{{ $teacher->mp }}">

                                        </div>

                                        <div class="col-md-3 mb-3">

                                          <label for="validationDefault05">Status Guru</label>

                                          <input type="text" class="form-control" id="validationDefault05" placeholder="Honorer" required="" name="status" value="{{ $teacher->status }}">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <div class="form-check">

                                          <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required="">

                                          <label class="form-check-label" for="invalidCheck2">

                                           Setuju simpan perubahan?

                                          </label>

                                        </div>

                                    </div>

                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                    
                                    <a href="{{ route('teacher.index') }}" class="btn btn-info">Cancle</a>
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