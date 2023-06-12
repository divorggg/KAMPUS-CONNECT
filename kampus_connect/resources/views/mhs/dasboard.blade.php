  @extends('mhs\master')

  @section('konten')
  <!-- =================== BODY ========================= -->
  <div class="container-fluid">
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
     </div>
     <div class="row">
        @foreach($perusahaan as $per)
        @foreach($per->pekerjaan as $pekerjaan)
        <!-- == -->
        <div class="col-lg-6 mb-4">
           <div class="card shadow mb-4">
              <div class="card-body">
                 <div class="row">
                    <div class="col-lg-10">
                       <img src=" {{ asset('storage/' . $per->logo) }}" alt="" class="das-logo-per">
                       <div class="das-per-detail mt-4">
                          <p class="das-per-pos">{{$pekerjaan->posisi}}</p>
                          <p class="das-per-per mt-2">{{$per->nama}}</p>
                          <p class="das-per-per">{{$per->lokasi}}</p>
                          <p class="das-per-gaj">Perkiraan Gaji Rp.{{ number_format($pekerjaan->gaji, 0, ',', '.') }}</p>
                          <p class="das-per-wak">{{$pekerjaan->updated_at->diffForHumans()}}</p>
                       </div>
                    </div>
                    <div class="col-lg-2 das-ico-bookmark">
                       <a href=""><i class=" fas fa-fw fa-light fa-bookmark"></i></a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <!-- == -->
        @endforeach
        @endforeach
     </div>
  </div>
  </div>
  @endsection