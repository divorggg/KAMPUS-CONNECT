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
                  <form class="user" method="post" action="{{ route('cekdaftar') }}">
                     @csrf
                     <div class="">
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <p style="color: red; font-style: italic;font-size : 12px; text-align:center;">{{$error}}</p>
                        @endforeach
                        <!-- ------------------ -->
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
                        <label for="pass">Re-enter Password</label>
                        <input type="password" class="form-control form-control-user ipt-log" placeholder="Konfirmasi Password" name="password_confirmation" id="kpassword">
                     </div>
                     <div class="form-group">
                        <p style="color: red; font-style: italic;font-size : 12px;" id="eror_kpassword"></p>
                        <button type="submit" onclick="return checkPassword()" class="btn btn-primary">Daftar Akun</button>
                     </div>
                  </form>
                  <div class="mt-3">
                     <p>Sudah memiliki akun?. <a href="{{route('login')}}">Login</a></p>
                  </div>
               </div>
            </div>
            <div class="mt-auto">
            </div>
         </div>
      </div>
   </div>
   <script>
      function checkPassword() {
         var password = document.getElementById("password").value;
         var kpassword = document.getElementById("kpassword").value;
         var err = document.getElementById('eror_kpassword');
         if (kpassword === "") {
            err.innerText = "Isi Konfirmasi Password";
            return false;
         }
         err.innerText = "";
         if (password === kpassword) {
            return true;
         } else {
            err.innerText = "Konfirmasi Password tidak sama";
            return false;
         }
      }
   </script>

</body>

</html>