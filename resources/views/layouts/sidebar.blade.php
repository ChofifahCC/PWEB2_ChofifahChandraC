<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" aria-expanded="false">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Data Jasa MUA</span>
            </a>
          </li>

          @if (auth()->user()->level=='admin')
          <li class="nav-item">
            <a class="nav-link" href="{{ route('data-kriteria') }}" aria-expanded="false">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Data Kriteria</span>
            </a>
          </li>
          @endif
          
          <li class="nav-item">
            <a class="nav-link" href="" aria-expanded="false">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Data Penilaian</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" aria-expanded="false">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Hasil Analisa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="" aria-expanded="false">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Data Pengguna</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->