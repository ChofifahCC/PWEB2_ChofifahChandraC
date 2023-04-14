@include('layouts.header')

@include('layouts.navbar')

@include('layouts.sidebar')

      <!-- CONTENT START -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-0">
                  <h3 class="font-weight-bold">Selamat Datang<div class="text-primary">{{ Auth::user()->name }}</div></h3>
                  <h5 class="font-weight-normal mb-0">Sistem Pendukung Keputusan Pemilihan Jasa MakeUp Wisuda</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- FORM DATA START -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <a href="{{ route('create-kriteria') }}" class="btn btn-primary mr-2">Tambah Data Kriteria +</a>
                  </div>
                  <h4 class="card-title">Tabel Data Kriteria</h4>
                  <div class="table-responsive ">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Nomor</th>
                          <th>Jenis Kriteria</th>
                          <th>Bobot</th>
                          <th>Aksi</th>
                      </tr>
                      @foreach ($dtKriteria as $item)
                      <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->jeniskriteria }}</td>
                          <td>{{ $item->bobot }}</td>
                          <td>
                            <a href="{{ url('edit-kriteria',$item->id) }}">Edit</a>
                             | 
                            <a href="{{ url('delete-kriteria',$item->id) }}">Hapus</a>
                          </td>
                      </tr>
                      </thead>
                      @endforeach
                    </table>
                  </div>
                </div>
            </div>
          </div>
        <!-- CONTENT ends -->
 @include('layouts.footer')

 
 @include('sweetalert::alert')