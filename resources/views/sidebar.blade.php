<div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="" class="simple-text logo-normal">
          Inventaris Sekolah
        </a></div>

<div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('barang.index') }}">
      <i class="fas fa-box-open"></i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="{{ route('peminjaman.index') }}">
          <i class="fas fa-people-carry"></i>
              <p>Peminjaman</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('barang_keluar.index') }}">
<i class="fas fa-backspace"></i>
              <p>Barang Keluar</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('lokasi.index') }}">
<i class="fas fa-map-marker-alt"></i>
              <p>Lokasi</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
