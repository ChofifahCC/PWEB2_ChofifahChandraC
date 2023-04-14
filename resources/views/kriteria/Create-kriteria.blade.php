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
                  <h5 class="font-weight-normal mb-0">Sistem Pendukung Keputusan Pemilihan Jasa MakeUp</h5>
                </div>
              </div>
            </div>
          </div>

          <!-- FORM DATA START -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Tambah Data Kriteria</h4>
                    <form class="forms-sample" action="{{ route('simpan-kriteria') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label>Nomor Kriteria</label>
                          <input type="text" class="form-control" id="id" name="id" placeholder="Nomor Kriteria Autoincrement" disabled>
                        </div>
                        <div class="form-group">
                          <label>Jenis Kriteria</label>
                          <input type="text" class="form-control" id="jeniskriteria" name="jeniskriteria" placeholder="Masukkan Jenis Kriteria">
                        </div>
                        <div class="form-group">
                          <label>Bobot</label>
                          <input type="text" class="form-control" id="bobot" name="bobot" placeholder="Masukkan Bobot">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        <!-- CONTENT ends -->

 @include('layouts.footer')