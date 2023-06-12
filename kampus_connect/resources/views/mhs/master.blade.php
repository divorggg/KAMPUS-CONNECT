<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Kampus Connect</title>

   <!-- Custom fonts for this template-->
   <link href="../vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="../css/sb-admin-2.min.css" rel="stylesheet">
   <link href="../css/mhs.css" rel="stylesheet">

</head>

<body id="page-top">
   <?php
   $pp = asset('storage/' . $mahasiswa->pp);
   if ($mahasiswa->pp === '../img/undraw_profile.svg') {
      $pp = '../img/undraw_profile.svg';
   }
   ?>

   <!-- Page Wrapper -->
   <div id="wrapper">
      <!-- ============================= -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
               <i class="fas fa-city"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Kampus Connect</div>
         </a>
         <hr class="sidebar-divider my-0">
         <li class="nav-item active">
            <a class="nav-link" href="{{route('mhsdasboard')}}">
               <i class="fas fa-fw fa-house-damage"></i>
               <span>Beranda</span></a>
         </li>
         <hr class="sidebar-divider">
         <div class="sidebar-heading">
            Menu Utama
         </div>
         <li class="nav-item">
            <a class="nav-link" href="{{route('mhsprofil')}}">
            <!-- <a class="nav-link" href="mhs/profil"> -->
               <i class="fas fa-fw fa-solid fa-user"></i>
               <span>Profil</span></a>
         </li>
         <!-- <li class="nav-item">
            <a class="nav-link" href="{{route('mhsbookmark')}}">
               <i class="fas fa-fw fa-chart-area"></i>
               <span>Bookmark Saya</span></a>
         </li> -->
         <hr class="sidebar-divider">
         <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>
      </ul>
      <!-- ================ BODY & NAVBAR=================== -->
      <div id="content-wrapper" class="d-flex flex-column">
         <div id="content">
            <!-- ================== NAVBAR ===================== -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
               <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
               </button>
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown no-arrow">
                     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{$mahasiswa->nama}}</span>
                        <img class="img-profile rounded-circle" src="{{$pp}}" style="background-image: url('../img/undraw_profile.svg');">
                     </a>
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('mhsprofil')}}">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>


            @yield('konten')
            <!-- ============ FOOTER =============== -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Kampus Connect 2023</span>
                  </div>
               </div>
            </footer>
            <!-- ====================================== -->
         </div>
      </div>
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Apakah anda yakin akan keluar dari sesion.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
               </div>
            </div>
         </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="../vendor/jquery/jquery.min.js"></script>
      <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>