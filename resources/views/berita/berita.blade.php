<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Rumah Sakit Umum Daerah Banyuasin - Berita & Artikel</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_welcome.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <!-- Custom CSS untuk styling khusus halaman berita -->
    <style>
        /* News/Blog Cards Styling */
        .news-item {
            border: 1px solid #eee;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        .news-item:hover {
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transform: translateY(-5px);
            border-color: #f33f3f;
        }

        .news-item .news-content {
            padding: 30px;
            position: relative;
        }

        .news-item .news-meta {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 13px;
            color: #666;
        }

        .news-item .news-meta .meta-icon {
            margin-right: 8px;
            color: #f33f3f;
        }

        .news-item .news-meta .meta-text {
            margin-right: 20px;
        }

        .news-item .news-title {
            font-size: 18px;
            color: #1a6692;
            margin-bottom: 15px;
            font-weight: 600;
            line-height: 1.4;
        }

        .news-item .news-title:hover {
            color: #f33f3f;
        }

        .news-item .news-date {
            font-size: 13px;
            color: #999;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .news-item .news-excerpt {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .news-item .read-more-btn {
            color: #f33f3f;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .news-item .read-more-btn:hover {
            color: #d32f2f;
            text-decoration: none;
        }

        .news-item .read-more-btn:after {
            content: " →";
            margin-left: 5px;
            transition: margin-left 0.3s ease;
        }

        .news-item .read-more-btn:hover:after {
            margin-left: 10px;
        }

        /* News Grid Layout */
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        @media (max-width: 768px) {
            .news-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .news-item .news-content {
                padding: 20px;
            }
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
                        <li class="nav-item"><a class="nav-link" href="dokter">Dokter</a></li>
                        <li class="nav-item"><a class="nav-link" href="layanan">Layanan</a></li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Berita
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
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

    <!-- News/Blog Section -->
    <div class="latest-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Berita & Artikel</h2>
                        <p style="margin-top: 15px; color: #666;">Artikel Terbaru</p>
                    </div>
                </div>
            </div>
            
            <div class="news-grid">
                <!-- Dynamic News Cards dari sistem -->
                @foreach($beritas as $berita)
                <div class="news-item">
                    <div class="news-content">
                        <div class="news-meta">
                            <i class="fas fa-user meta-icon"></i>
                            <span class="meta-text">BY ADMIN</span>
                            <i class="fas fa-calendar-alt meta-icon"></i>
                            <span class="meta-text">{{ \Carbon\Carbon::parse($berita->created_at)->format('d M, Y') }}</span>
                        </div>
                        
                        <h3 class="news-title">
                            <a href="{{ route('berita.show', $berita->id) }}">
                                {{ Str::limit($berita->judul, 60) }}
                            </a>
                        </h3>
                        
                        <div class="news-excerpt">
                            {!! Str::limit(strip_tags($berita->isi), 120, '...') !!}
                        </div>
                        
                        <a href="{{ route('berita.show', $berita->id) }}" class="read-more-btn">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <br>
    <br>
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
                        <li style="margin-bottom: 8px;"><a href="{{ url('kritiksaran') }}" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Kritik dan Saran</a></li>
                        <li style="margin-bottom: 8px;"><a href="{{ route('pengaduan') }}" style="color: #d1d9e0; text-decoration: none; font-size: 14px;">Pengaduan</a></li>
                        <li style="margin-bottom: 8px;"><a href="{{ route('admin.login') }}" style="color: #ffc107; text-decoration: none; font-size: 14px; font-weight: 500;">Kamu Admin ? Login disini</a></li>
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

    <!-- Custom JavaScript untuk halaman berita -->
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