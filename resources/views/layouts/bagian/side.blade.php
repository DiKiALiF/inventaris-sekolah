<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset ('assets/dist/img/inventory.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Inventaris Sekolah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('assets/dist/img/assalaam.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="https://smkassalaambandung.sch.id/" class="d-block">SMK Assalaam Bandung</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('barang.index') }}" class="nav-link">
              <i class="fas fa-box-open"></i>
              <p>
                &nbsp;Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('peminjaman.index') }}" class="nav-link">
              <i class="fas fa-people-carry"></i>
              <p>
                &nbsp;Peminjaman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('barang_keluar.index') }}" class="nav-link">
              <i class="fas fa-backspace"></i>
              <p>
                &nbsp;Barang Keluar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('lokasi.index') }}" class="nav-link">
              <i class="fas fa-map-marker-alt"></i>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;Lokasi
              </p>
            </a>
          </li>
                  </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
