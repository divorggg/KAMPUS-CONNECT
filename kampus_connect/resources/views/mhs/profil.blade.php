  @extends('mhs\master')

  @section('konten')
  <div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".prof-modal-form">edit</button>
        <!-- <a href="#" class="pl-3 pr-3 btn btn-sm btn-primary shadow-sm">edit</a> -->
     </div>
     <?php
      $pp = asset('storage/' . $mahasiswa->pp);
      if ($mahasiswa->pp === '../img/undraw_profile.svg') {
         $pp = '../img/undraw_profile.svg';
      }
      ?>
     <!-- Content Row -->
     <div class="row">
        <!-- ===================== -->
        <div class="col-lg-12 mb-2">
           @if(session('success'))
           <p style="color: green; font-style: italic;font-size : 12px; text-align:center;">{{ session('success') }}</p>
           @endif
           <div class="card shadow mb-4">
              <div class="card-body prof-card-body text-center">
                 <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 15rem; background-color: #e9ebef; height:15rem; border-radius: 50%; padding: 0px !important;" src="{{$pp}}" alt="...">
                 </div>
                 <p>{{$mahasiswa->nama}}</p>
                 <p>{{$mahasiswa->job}}</p>
                 <p>{{$mahasiswa->email}} | {{$mahasiswa->no_hp}}</p>
              </div>
           </div>
        </div>
        <div class="col-lg-6 mb-4">
           <div class="card shadow mb-4">
              <div class="card-header py-3 prof-card">
                 <h4>
                    <i class="fas fa-fw fa-business-time"></i>
                    <span>Pengalaman Kerja</span>
                 </h4>
                 <h4>
                    <a href="#" onclick="handleClick(event)">
                       <button type="button" style="display: none;" class="btn btn-primary" data-toggle="modal" data-target="#modal1"></button>
                       <i class="fas fa-fw fa-plus"></i>
                    </a>
                 </h4>
              </div>
              <div class="card-body prof-card-body">
                 @foreach($pekerjaan as $item)
                 <div class="mb-2 prof-item">
                    <h5>{{$item->name}}</h5>
                    <p>{{$item->kantor}}</p>
                    <p class="mt-2">{{$item->rentang}}</p>
                    <p>{{$item->detail}}</p>
                 </div>
                 @endforeach
              </div>
           </div>
        </div>
        <div class="col-lg-6 mb-4">
           <div class="card shadow mb-4">
              <div class="card-header py-3 prof-card">
                 <h4>
                    <i class="fas fa-fw fa-graduation-cap"></i>
                    <span>Pendidikan</span>
                 </h4>
                 <h4>
                    <a href="#" onclick="handleClick(event)">
                       <button type="button" style="display: none;" class="btn btn-primary" data-toggle="modal" data-target="#modal2"></button>
                       <i class="fas fa-fw fa-plus"></i>
                    </a>
                 </h4>
              </div>
              <div class="card-body prof-card-body">
                 @foreach($pendidikan as $item)
                 <div class="mb-2 prof-item">
                    <h5>{{$item->name}}</h5>
                    <p>{{$item->kantor}}</p>
                    <p class="mt-2">{{$item->rentang}}</p>
                 </div>
                 @endforeach
              </div>
           </div>
        </div>
        <div class="col-lg-6 mb-4">
           <div class="card shadow mb-4">
              <div class="card-header py-3 prof-card">
                 <h4>
                    <i class="fas fa-fw fa-brain"></i>
                    <span>Kemampuan</span>
                 </h4>
                 <h4>
                    <a href="#" onclick="handleClick(event)">
                       <button type="button" style="display: none;" class="btn btn-primary" data-toggle="modal" data-target="#modal3"></button>
                       <i class="fas fa-fw fa-plus"></i>
                    </a>
                 </h4>
              </div>
              <div class="card-body prof-card-body">
                 @foreach($pengalaman as $item)
                 <div class="mb-2 prof-item">
                    <h5>{{$item->name}}</h5>
                    <p>{{$item->detail}}</p>
                 </div>
                 @endforeach
              </div>
           </div>
        </div>
        <!-- ============================= -->
     </div>

  </div>
  <script>
     function handleClick(event) {
        event.preventDefault(); // Menghentikan tindakan default dari elemen <a>
        event.currentTarget.querySelector('button').click(); // Memicu klik pada elemen button di dalam elemen <a>
     }
  </script>
  <!-- ======================== modal ================================= -->
  <div class="modal fade prof-modal-form" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-xl">
        <div class="modal-content">
           <div class="modal-header prof-modal-bg">
              <h5 class="modal-title" id="exampleModalLabel">Update Profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
           </div>
           <form class="user" method="post" action="{{ route('mhsupprofil') }}" enctype="multipart/form-data">
              <div class="modal-body">
                 @csrf
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">foto Profil:</label>
                    <input type="file" class="form-control" id="recipient-name" value="" name="pp">
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Nama:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$mahasiswa->nama}}" name="nama">
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Alamat:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$mahasiswa->alamat}}" name="alamat">
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$mahasiswa->email}}" name="email" readonly>
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">No Hp:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$mahasiswa->no_hp}}" name="no_hp">
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="recipient-name" value="{{$mahasiswa->job}}" name="job">
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Pengalaman kerja</label>
                    <table class="prof-tabel">
                       <tr>
                          <td>nama</td>
                          <td>kantor</td>
                          <td>rentang</td>
                          <td>aksi</td>
                       </tr>
                       @foreach($pekerjaan as $item)
                       <tr>
                          <td>{{$item->name}}</td>
                          <td>{{$item->kantor}}</td>
                          <td>{{$item->rentang}}</td>
                          <td><a href=" delpengalaman/{{$item->id}}">hapus</a></td>
                       </tr>
                       @endforeach
                    </table>
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Pendidikan</label>
                    <table class="prof-tabel">
                       <tr>
                          <td>nama</td>
                          <td>kantor</td>
                          <td>rentang</td>
                          <td>aksi</td>
                       </tr>
                       @foreach($pendidikan as $item)
                       <tr>
                          <td>{{$item->name}}</td>
                          <td>{{$item->kantor}}</td>
                          <td>{{$item->rentang}}</td>
                          <td><a href="delpendidikan/{{$item->id}}">hapus</a></td>
                       </tr>
                       @endforeach
                    </table>
                 </div>
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">kemampuan</label>
                    <table class="prof-tabel">
                       <tr>
                          <td>nama</td>
                          <td>detail</td>
                          <td>aksi</td>
                       </tr>
                       @foreach($pengalaman as $item)
                       <tr>
                          <td>{{$item->name}}</td>
                          <td>{{$item->detail}}</td>
                          <td><a href="delkemampuan/{{$item->id}}">hapus</a></td>
                       </tr>
                       @endforeach
                    </table>
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Update</button>
              </div>
           </form>
        </div>
     </div>
  </div>
  <!-- ====================== -->
  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header prof-modal-bg">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Pengalaman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
           </div>
           <form class="user" method="post" action="{{ route('mhsuppengalaman') }}">
              <div class="modal-body">
                 @csrf
                 <input type="hidden" name="tipe" value="pekerjaan">
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Pekerjaan:</label>
                    <input type="text" class="form-control" id="recipient-name" name="name">
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Kantor:</label>
                    <input type="text" class="form-control" id="recipient-name" name="kantor">
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Lama Kerja:</label>
                    <input type="text" class="form-control" id="recipient-name" name="rentang">
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Detail:</label>
                    <textarea class="form-control" id="message-text" name="detail"></textarea>
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Tambah Pekrjaan</button>
              </div>
           </form>
        </div>
     </div>
  </div>
  <!-- ====================== -->
  <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header prof-modal-bg">
              <h5 class="modal-title" id="exampleModalLabel">Update Profil</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
           </div>
           <form class="user" method="post" action="{{ route('mhsuppendidikan') }}">
              <div class="modal-body">
                 @csrf
                 <input type="hidden" name="tipe" value="pendidikan">
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">Gelar kelulusan:</label>
                    <input type="text" class="form-control" id="recipient-name" name="name">
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Kampus:</label>
                    <input type="text" class="form-control" id="recipient-name" name="kantor">
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Periode:</label>
                    <input type="text" class="form-control" id="recipient-name" name="rentang">
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Tambah Pendidikan</button>
              </div>
           </form>
        </div>
     </div>
  </div>
  <!-- ====================== -->
  <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
           <div class="modal-header prof-modal-bg">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Kemampuan</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
              </button>
           </div>
           <form class="user" method="post" action="{{ route('mhsupkemampuan') }}">
              <div class="modal-body">
                 @csrf
                 <input type="hidden" name="tipe" value="kemampuan">
                 <div class=" form-group">
                    <label for="recipient-name" class="col-form-label">kemampuan:</label>
                    <input type="text" class="form-control" id="recipient-name" name="name">
                 </div>
                 <div class="form-group">
                    <label for="message-text" class="col-form-label">Detail:</label>
                    <textarea class="form-control" id="message-text" name="detail"></textarea>
                 </div>
              </div>
              <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-primary">Tambah Kemampuan</button>
              </div>
           </form>
        </div>
     </div>
  </div>
  @endsection