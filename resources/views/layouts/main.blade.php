<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- BS5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Rangga Arya Gardika</title>
</head>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>

<nav class="navbar navbar-light" style="background-color: #2a3132;">
  <!-- Navbar content -->
  <!-- <a class="navbar-brand" href="#">
    <img src="FTIlogo.png" alt="logo" style="width:40px;">
  </a> -->
<div class="container">
          <a class="navbar-brand" href="#" style="color: #ffffff;">Sistem Penjualan Online</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon" style="color: #ffffff;"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#" style="color: #ffffff;">Home <span class="sr-only"></span></a>
        </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                  Master
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('pelanggan.index') }}">Pelanggan</a></li>
                  <li><a class="dropdown-item" href="{{ route('produk.index') }}">Produk</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                  Transaksi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('entrypenjualan') }}">Penjualan</a></li>
                  <li><a class="dropdown-item" href="{{ route('faktur.index') }}">Faktur</a></li>
                  <li><a class="dropdown-item" href="{{ route('kuitansi.index') }}">Kuitansi</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                  Laporan
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('laporan-tanggal') }}">Per-Tanggal</a></li>
                  <li><a class="dropdown-item" href="{{ route('laporan-pelanggan') }}">Per-Pelanggan</a></li>
                  <li><a class="dropdown-item" href="{{ route('laporan-produk') }}">Per-Produk</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #ffffff;">
                  About Us
                </a>
              </li>

            </ul>
          </div>
        </div>
</nav>




    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
      <p>Rangga Arya Gardika &copy; 2023 <a class="social-media-icon"  href="https://www.instagram.com/ranggaarg_/?hl=id">  Ranggaarg_<span class="fab fa-instagram"></span></a>.</p>
      UAS PWTM.
      <!-- <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div> -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
