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

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="row">

                    <div class="col-12">

                        <div class="card">

                            <div class="card-body">

                                <h4 class="card-title">Data Siswa</h4>

                                <div class="table-responsive">

                                    <table class="table table-striped">

                                        

                                            <thead>

                                                <tr>

                                                    <th>Nama</th>

                                                    <th>NIS</th>

                                                    <th>TTL</th>

                                                    <th>No. Telfon</th>

                                                    <th>Asal Sekolah</th>

                                                    <th>Jurusan</th>

                                                    <th>Status</th>

                                                    <th class="text-nowrap">Action</th>

                                                </tr>

                                            </thead>

                                                @foreach ($students as $student)
                                                    
                                                
                                                    <tbody>

                                                        <tr>
                                                                <td>{{ $student->nama }}</td>
                                                                <td>{{ $student->nis }}</td>
                                                                <td>{{ $student->ttl }}</td>
                                                                <td>{{ $student->no_tlp }}</td>
                                                                <td>{{ $student->asal }}</td>
                                                                <td>{{ $student->jurusan }}</td>
                                                                <td>{{ $student->status }}</td>

                                                            <td class="text-nowrap">

                                                                <form action="{{route('student.destroy', $student->id)}}" method="post">
                                                                <a href="{{ route('student.edit', $student->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                                @csrf
                                                                {{-- <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a> --}}
                                                                {{-- <button class="btn btn-danger btn-sm" type="submit">Delete</button> --}}
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <input type="hidden" value="{{$student->id}}" name="name">
                                                                <input class="btn btn-xs btn-info" type="submit" value="Hapus" onclick="return confirm('Are you sure?')">
                                                                {{-- <a href="#" data-toggle="tooltip" data-original-title="Delete" type="submit" value="Hapus" onclick="return confirm('Are you sure?')"> <i class="fa fa-close text-danger"></i> </a> --}}
                                                                
                                                                <a href="{{ route('student.show', $student->id) }}" data-toggle="tooltip" data-original-title="Detail"> <i class="fa fa-drivers-license"></i> </a>
                                                            </form>


                                                            </td>

                                                        </tr>

                                                    @endforeach
                                                </tbody>
                                            
                                    </table>

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