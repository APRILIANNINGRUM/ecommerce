<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Customer - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('template2/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('template2/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    @include('layouts.ecommerce.module.menu')
    <div id="wrapper">

        <!-- Sidebar ini sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route ('customer.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" aria-controls="collapseTwo" href="{{route ('customer.profile') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{route ('customer.orders')}}" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-cart-plus"></i>
                    <span>Pesanan</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
        

        </ul>
        <!-- End of Sidebar sampe sini -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #fff;">

            <!-- Main Content -->
            <div id="content">

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                    </div>

                    <!-- Content Row -->
                    
                    <div class="row">
                    

                        
                      
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7" style="margin: 0 auto;">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->

                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
                                    
                    
                                </div>
                                <div class="row">
                                    <!--codingan profile-->
                                    <!-- <p>{{$customer->name}}</p>
                                    @foreach ($provinces as $province)
                                        <p>{{$province->name}}</p>
                                    @endforeach -->
                                    <div class="col-md-12" >
                                    <form action="{{route('customer.update_profile')}}" method="post">
                                    @csrf
                                    <table class="table table-bordered">
                                        <tr>
                                            <td>Nama</td>
                                            <td><input type="text" name="name" value="{{$customer->name}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><input type="text" name="email" value="{{$customer->email}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Telepon</td>
                                            <td><input type="number" name="phone_number" value="{{$customer->phone_number}}" class="form-control"></td>
                                        <tr>
                                            <td>Provinsi</td>
                                           <td>
                                                <select name="province_id" id="province_id" class="form-control" readonly>
                                                    <!--get province by customer-->
                                                    <option value="{{$customer->district->city->province->id}}">{{$customer->district->city->province->name}}</option>

                                                
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kota</td>
                                            
                                            <td>
                                                <select name="city_id" id="city_id" class="form-control" readonly>
                                                    <!--get city by customer-->
                                                    <option value="{{$customer->district->city->id}}">{{$customer->district->city->name}}</option>
                                                  
                                                </select>
                                            </td>
                                        </tr>
                                        <!--district-->
                                        <tr>
                                            <td>Kecamatan</td>
                                            <td>
                                                <select name="district_id" id="district_id" class="form-control">
                                                    @foreach($districts as $district)
                                                    <option value="{{$district->id}}" {{$customer->district_id == $district->id ? 'selected' : ''}}>{{$district->name}}</option>
                                                    @endforeach

                                                    @foreach($alldistricts as $district)
                                                    <option value="{{$district->id}}" {{$customer->district_id == $district->id ? 'selected' : ''}}>{{$district->name}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td><input type="text" name="address" value="{{$customer->address}}" class="form-control"></td>
                                        </tr>
                                        <tr>
                                            <td>Password</td>
                                            <td><input type="password" name="password" class="form-control"></td>
                                        <tr>
                                            <td></td>
                                            <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                                        </tr>
                                        </form>
                                    </table>
                                        

                                    </div>
                                </div>
            
                            </div>
                        </div>

                    </div>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('template2/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('template2/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('template2/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('template2/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template2/vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template2/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('template2/js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>