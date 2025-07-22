<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
  <title>Add New Doctor - RSUD Banyuasin</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900" />
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.2.0') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand px-4 py-3 m-0" href="/">
        <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">RSUD Banyuasin</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active bg-gradient-dark text-white" href="{{ route('admin.dashboard') }}">
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
          <a class="nav-link text-dark" href="{{ route('admin.dashboardkritiksaran') }}">
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
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add New Doctor</li>
          </ol>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Add New Doctor</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card-body">
                  <form method="POST" action="{{ route('admin.dokter.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Nama Dokter</label>
                          <input type="text" name="nama" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Spesialisasi</label>
                          <input type="text" name="spesialisasi" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Hari</label>
                          <input type="text" name="hari" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                          <label class="form-label">Jam</label>
                          <input type="text" name="jam" class="form-control" required>
                        </div>
                      </div>
                    </div>

                    <!-- Tambahkan fitur upload dan crop foto -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group mb-3">
                          <label for="foto" class="form-label">Foto Dokter (Akan ditampilkan dalam bentuk lingkaran)</label>
                          <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                          <input type="hidden" name="cropped_foto" id="cropped_foto">
                        </div>
                        <div class="mt-3">
                          <div id="image-preview" style="display: none; max-width: 300px; margin-bottom: 15px;">
                            <img id="preview" src="" style="max-width: 100%;">
                          </div>
                          <div id="image-cropper" style="display: none; max-width: 500px;">
                            <div class="mb-2">Crop Foto (1:1)</div>
                            <div id="cropper-container" style="max-height: 400px;"></div>
                            <button type="button" id="crop-button" class="btn btn-info mt-3">Crop Foto</button>
                          </div>
                          <div id="cropped-image-container" style="display: none; margin-top: 15px;">
                            <div class="mb-2">Hasil Crop:</div>
                            <div style="width: 150px; height: 150px; border-radius: 8px; overflow: hidden; border: 4px solid white; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                              <img id="cropped-image" src="" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                          <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi Dokter"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Save Doctor</button>
                        <a href="{{ route('admin.dashboarddokter') }}" class="btn btn-secondary">Cancel</a>
                      </div>
                    </div>
                  </form>
                </div>
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
  
  <!-- Tambahkan CSS dan JS untuk Cropper.js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const fileInput = document.getElementById('foto');
      const imagePreview = document.getElementById('image-preview');
      const preview = document.getElementById('preview');
      const imageCropper = document.getElementById('image-cropper');
      const cropperContainer = document.getElementById('cropper-container');
      const cropButton = document.getElementById('crop-button');
      const croppedImageContainer = document.getElementById('cropped-image-container');
      const croppedImage = document.getElementById('cropped-image');
      const croppedFotoInput = document.getElementById('cropped_foto');
      
      let cropper;
      
      fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;
        
        const reader = new FileReader();
        reader.onload = function(e) {
          // Tampilkan preview
          preview.src = e.target.result;
          imagePreview.style.display = 'block';
          
          // Reset cropper jika sudah ada
          if (cropper) {
            cropper.destroy();
            cropper = null;
          }
          
          // Siapkan cropper
          const image = document.createElement('img');
          image.src = e.target.result;
          image.style.maxWidth = '100%';
          cropperContainer.innerHTML = '';
          cropperContainer.appendChild(image);
          
          // Inisialisasi cropper
          cropper = new Cropper(image, {
            aspectRatio: 1, // Tetap menggunakan rasio 1:1 untuk bentuk kotak
            viewMode: 1,
            dragMode: 'move',
            autoCropArea: 0.8,
            restore: false,
            guides: true,
            center: true,
            highlight: false,
            cropBoxMovable: true,
            cropBoxResizable: true,
            toggleDragModeOnDblclick: false
          });
          
          imageCropper.style.display = 'block';
          croppedImageContainer.style.display = 'none';
        };
        
        reader.readAsDataURL(file);
      });
      
      cropButton.addEventListener('click', function() {
        if (!cropper) return;
        
        // Dapatkan hasil crop dalam format base64
        const canvas = cropper.getCroppedCanvas({
          width: 300,
          height: 300,
          fillColor: '#fff',
          imageSmoothingEnabled: true,
          imageSmoothingQuality: 'high'
        });
        
        const croppedDataUrl = canvas.toDataURL('image/jpeg', 0.9);
        croppedImage.src = croppedDataUrl;
        croppedFotoInput.value = croppedDataUrl;
        
        croppedImageContainer.style.display = 'block';
      });
    });
  </script>
</body>
</html>