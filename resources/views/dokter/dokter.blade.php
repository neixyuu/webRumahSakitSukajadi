<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Rumah Sakit Umum Daerah Banyuasin - List Dokter</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_welcome.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <!-- Custom CSS untuk styling khusus halaman dokter -->
    <style>
        .product-item img {
            height: 250px;
            object-fit: cover;
        }

        .product-item .doctor-photo {
            border-radius: 8px !important; /* Ubah dari 50% menjadi 8px untuk bentuk kotak dengan sudut sedikit melengkung */
            object-fit: cover !important;
            width: 100% !important;
            height: 250px !important;
            border: 4px solid white !important;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) !important;
        }

        .product-item:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
        }

        .product-item .down-content p {
            margin-bottom: 8px;
            font-size: 13px;
            color: #666;
        }

        .product-item .down-content h6 {
            font-weight: 600;
        }
    </style>
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>RSUD<em>Sukajadi</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Dokter
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="layanan">Layanan</a></li>
                        <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="kontak">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://rsudsukajadi.web.id/pendaftaran">Pendaftaran</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
        <div class="owl-banner owl-carousel">
        </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- List Dokter Section -->
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Daftar Dokter Spesialis</h2>
                        <a href="">Lihat Semua <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <!-- Dynamic Doctor Cards dari sistem -->
                @foreach($dokters as $dokter)
                <div class="col-lg-4 col-md-6">
                    <div class="product-item">
                        <a href="#">
                            @if($dokter->foto)
                                <img src="{{ Storage::url($dokter->foto) }}" alt="{{ $dokter->nama }}" class="doctor-photo">
                            @else
                                @switch($dokter->logo)
                                    @case('kandungan')
                                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1191&q=80" alt="Dokter Spesialis Kebidanan dan Kandungan">
                                        @break
                                    @case('penyakit_dalam')
                                        <img src="https://images.unsplash.com/photo-1582560469781-1d8c94d2b9c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Dokter Spesialis Penyakit Dalam">
                                        @break
                                    @case('bedah')
                                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Dokter Spesialis Bedah">
                                        @break
                                    @case('anak')
                                        <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1169&q=80" alt="Dokter Spesialis Anak">
                                        @break
                                    @case('mata')
                                        <img src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="Dokter Spesialis Mata">
                                        @break
                                    @case('gigi')
                                        <img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="Dokter Spesialis Gigi">
                                        @break
                                    @default
                                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1191&q=80" alt="Dokter">
                                @endswitch
                            @endif
                        </a>
                        <div class="down-content">
                            <a href="#">
                                <h4>{{ $dokter->spesialisasi }}</h4>
                            </a>
                            <h6>{{ $dokter->nama }}</h6>
                            <p><strong>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
                                </svg>
                            Hari Praktik:</strong> {{ $dokter->hari }}</p>
                            <p><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                            </svg>
                             Jam Praktik:</strong> {{ $dokter->jam }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #5a6c7d; color: white; padding: 40px 0 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5 style="color: white; font-weight: 600; margin-bottom: 20px;">RSUD SUKAJADI</h5>
                    <p style="color: #d1d9e0; font-size: 14px; line-height: 1.6;">
                        Rumah Sakit Umum Daerah Sukajadi adalah pusat layanan kesehatan publik yang berdedikasi memberikan pelayanan medis terbaik bagi masyarakat Banyuasin dan sekitarnya.
                    </p>
                </div>
                <div class="col-md-3">
                    <h5 style="color: white; font-weight: 600; margin-bottom: 20px;">LAYANAN</h5>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 8px;"><a href="dokter" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Dokter</a></li>
                        <li style="margin-bottom: 8px;"><a href="berita" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Berita</a></li>
                        <li style="margin-bottom: 8px;"><a href="kontak" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 style="color: white; font-weight: 600; margin-bottom: 20px;">SELENGKAPNYA</h5>
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li style="margin-bottom: 8px;"><a href="#" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Kritik dan Saran</a></li>
                        <li style="margin-bottom: 8px;"><a href="#" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Pengaduan</a></li>
                        <li style="margin-bottom: 8px;"><a href="/admin/login" style="color: #ffc107; text-decoration: none; font-size: 14px; font-weight: 500;">Kamu Admin ? Login disini</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5 style="color: white; font-weight: 600; margin-bottom: 20px;">KONTAK</h5>
                    <div style="margin-bottom: 12px;">
                        <i class="fa fa-map-marker" style="color: #ffc107; margin-right: 10px;"></i>
                        <span style="color: #d1d9e0; font-size: 14px;">Jl.Palembang - Betung KM 14</span>
                    </div>
                    <div style="margin-bottom: 12px;">
                        <i class="fa fa-envelope" style="color: #ffc107; margin-right: 10px;"></i>
                        <span style="color: #d1d9e0; font-size: 14px;">rs.sukajadi@gmail.com</span>
                    </div>
                    <div style="margin-bottom: 12px;">
                        <i class="fa fa-phone" style="color: #ffc107; margin-right: 10px;"></i>
                        <span style="color: #d1d9e0; font-size: 14px;">0822 7988 7861</span>
                    </div>
                    <div style="margin-bottom: 12px;">
                        <i class="fa fa-instagram" style="color: #ffc107; margin-right: 10px;"></i>
                        <span style="color: #d1d9e0; font-size: 14px;">@rsud_sukajadi</span>
                    </div>
                </div>
            </div>
            <hr style="border-color: #6c7b8a; margin: 30px 0 20px 0;">
            <div class="row">
                <div class="col-md-6">
                    <p style="color: #d1d9e0; margin: 0; font-size: 14px;">© Rumah Sakit Umum Daerah Banyuasin</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>

    <!-- Custom JavaScript untuk halaman dokter -->
    <script>
        // Fallback untuk preloader jika custom.js tidak load
        setTimeout(function() {
            $('#preloader').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</body>

</html>