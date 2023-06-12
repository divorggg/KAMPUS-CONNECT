<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">

   <title>Kampus Connect - Login</title>

   <!-- Custom styles for this template-->
   <link href="../css/st-login-1.css" rel="stylesheet">
   <link href="../css/bootstrap.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

   <div class="container">
      <div class="body d-md-flex align-items-center justify-content-between">
         <div class="box-1 mt-md-0">
            <img src="../img/10088 1.png" class="" alt="">
         </div>
         <div class=" box-2 d-flex flex-column h-100 p-4">
            <div class="mt-2">
               <p class="mb-1 h-1">Login</p>
               <div class="d-flex flex-column ">
                  <form class="user" method="post" action="{{ route('ceklogin') }}">
                     @csrf
                     <div class="">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <p style="color: red; font-style: italic;font-size : 12px; text-align:center;">{{$error}}</p>
                        @endforeach
                        @endif
                        @if(session('pesan'))
                        <p style="color: green; font-style: italic;font-size : 12px; text-align:center;">{{ session('pesan') }}</p>
                        @endif
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="emails" id="email" class="form-control form-control-user ipt-log" name="email" placeholder="Masukkan Email...">
                     </div>
                     <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" id="pass" class="form-control form-control-user ipt-log" placeholder="Password" name="password">
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <p class="get-pass mt-2"><a href="">Forget Password</a></p>
                     </div>
                  </form>
                  <div class="mt-3">
                     <p>Belum memiliki akun?. <a href="{{route('daftar')}}">Buat akun</a></p>
                  </div>
               </div>
            </div>
            <div class="mt-auto">
            </div>
         </div>
      </div>
   </div>

</body>

</html>