<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>Kritik & Saran - RSUD Banyuasin</title>
  <!-- Fonts and icons -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand px-4 py-3 m-0" href="#">
        <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">RSUD Banyuasin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('admin.dashboard') }}">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ url('admin/dashboarddokter') }}">
            <i class="material-symbols-rounded opacity-5">people</i>
            <span class="nav-link-text ms-1">Dokter</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ url('admin/dashboardberita') }}">
            <i class="material-symbols-rounded opacity-5">newspaper</i>
            <span class="nav-link-text ms-1">Berita</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="{{ route('admin.dashboardkritiksaran') }}">
            <i class="material-symbols-rounded opacity-5">book</i>
            <span class="nav-link-text ms-1">KritikSaran</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{ route('admin.dashboardpengaduan') }}">
            <i class="material-symbols-rounded opacity-5">book</i>
            <span class="nav-link-text ms-1">Pengaduan</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur">
      <div class="container-fluid py-1 px-3">
      <div class="d-lg-none">
              <button type="button" class="btn btn-text p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-dark"></i>
                  <i class="sidenav-toggler-line bg-dark"></i>
                  <i class="sidenav-toggler-line bg-dark"></i>
                </div>
              </button>
            </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Kritik & Saran</li>
          </ol>
        </nav>
        <ul class="navbar-nav d-flex align-items-center justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <form action="{{ route('admin.logout') }}" method="POST">
              @csrf
              <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3">Logout</button>
            </form>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Daftar Kritik & Saran</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No. Telepon</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pesan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($feedback as $index => $item)
                    <tr>
                      <td class="ps-4">{{ $index + 1 }}</td>
                      <td class="ps-4">{{ substr($item->nama, 0, 2) . str_repeat('*', strlen($item->nama) - 2) }}</td>
                      <td>{{ $item->no_telp }}</td>
                      <td>{{ Str::limit($item->message, 10) }}</td>
                      <td class="align-middle text-center">{{ $item->created_at->format('d/m/Y') }}</td>
                      <td class="align-middle text-center">
                        <a href="{{ route('admin.kritiksaran.show', $item->id) }}" class="btn btn-info btn-sm px-3 py-1 me-2">View</a>
                        <form action="{{ route('admin.kritiksaran.destroy', $item->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm px-3 py-1" onclick="return confirm('Are you sure you want to delete this feedback?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer py-4">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made by
                <a href="#" class="font-weight-bold">M Dzakwan Al Fauzan</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.2.0') }}"></script>
</body>
</html>