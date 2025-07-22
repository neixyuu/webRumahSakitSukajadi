<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Rumah Sakit Umum Daerah Banyuasin - Kontak Kami</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_welcome.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <!-- Custom CSS untuk styling khusus halaman kontak -->
    <style>
        /* Contact Cards Styling */
        .contact-cards {
            margin-top: 100px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .contact-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 15px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .contact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-color: #f33f3f;
        }

        .contact-card .contact-icon {
            width: 80px;
            height: 80px;
            background: #f33f3f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .contact-card .contact-icon i {
            color: #fff;
            font-size: 32px;
        }

        .contact-card h3 {
            color: #1a6692;
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .contact-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            font-weight: 500;
        }

        .contact-card .contact-link {
            color: #f33f3f;
            text-decoration: none;
            font-weight: 600;
        }

        .contact-card .contact-link:hover {
            color: #d32f2f;
            text-decoration: none;
        }

        /* Map Section Styling */
        .map-section {
            margin-top: 80px;
            margin-bottom: 80px;
        }

        .map-container {
            text-align: center;
        }

        .map-title {
            color: #1a6692;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .map-frame {
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            margin: 0 auto;
            max-width: 100%;
        }

        .map-frame iframe {
            width: 100%;
            height: 500px;
            border: 0;
        }

        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .contact-card {
                padding: 30px 20px;
            }
            
            .map-frame iframe {
                height: 350px;
            }
            
            .map-title {
                font-size: 1.5rem;
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
                        <li class="nav-item"><a class="nav-link" href="berita">Berita</a></li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Kontak
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
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

    <!-- Contact Cards Section -->
    <div class="contact-cards">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Kontak RSUD Sukajadi</h2>
                        <p style="margin-top: 15px; color: #666;">Informasi Kontak</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Telepon/WhatsApp</h3>
                    <p><a href="tel:+6282279887861" class="contact-link">+62 822-7988-7861</a></p>
                    <p style="color: #999; font-size: 14px; margin-top: 10px;">Layanan informasi dan pendaftaran</p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <h3>Media Sosial</h3>
                    <p><a href="https://instagram.com/rsud_sukajadi" target="_blank" class="contact-link">@rsud_sukajadi</a></p>
                    <p style="color: #999; font-size: 14px; margin-top: 10px;">Follow untuk update terbaru</p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Instalasi Gawat Darurat (IGD)</h3>
                    <p style="color: #f33f3f; font-weight: 600;">24 Jam Nonstop Setiap Hari</p>
                    <p style="color: #999; font-size: 14px; margin-top: 10px;">Siaga untuk kondisi darurat</p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p><a href="mailto:rs.sukajadi@gmail.com" class="contact-link">rs.sukajadi@gmail.com</a></p>
                    <p style="color: #999; font-size: 14px; margin-top: 10px;">Untuk informasi umum</p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Alamat</h3>
                    <p>Jalan Palembang - Betung KM 14<br>Banyuasin, Sumatera Selatan</p>
                    <p style="color: #999; font-size: 14px; margin-top: 10px;">Lokasi rumah sakit</p>
                </div>

                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Jam Operasional</h3>
                    <p>Poliklinik: 08.00 - 16.00 WIB<br>IGD: 24 Jam</p>
                    <p style="color: #999; font-size: 14px; margin-top: 10px;">Senin - Minggu</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="map-section">
        <div class="container">
            <div class="map-container">
                <h3 class="map-title">Peta Lokasi RSUD Sukajadi</h3>
                <div class="map-frame" style="max-width: 900px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.657959722433!2d104.67684612997283!3d-2.9143916674014814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75b9cf7cfee9%3A0x6758de9b4a0a8746!2sRsud%20sukajadi!5e0!3m2!1sen!2sid!4v1748810776082!5m2!1sen!2sid"
                        allowfullscreen 
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div class="best-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Cara Menghubungi Kami</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>Mudah & Cepat Terhubung</h4>
                        <p>RSUD Sukajadi menyediakan berbagai saluran komunikasi untuk memudahkan masyarakat dalam mengakses informasi dan layanan kesehatan. Tim customer service kami siap membantu Anda dengan ramah dan profesional.</p>
                        <p>Untuk informasi umum dan pendaftaran, Anda dapat menghubungi kami melalui WhatsApp atau telepon. Tim kami akan membantu proses pendaftaran online dan memberikan informasi jadwal dokter yang tersedia.</p>
                        <p>Dalam kondisi darurat, IGD kami beroperasi 24 jam dengan tim medis yang siaga. Jangan ragu untuk segera datang atau menghubungi kami jika memerlukan penanganan medis mendesak.</p>
                        <p>Follow media sosial kami untuk mendapatkan update terbaru tentang layanan, jadwal dokter, dan informasi kesehatan yang bermanfaat.</p>
                    </div>
                </div>
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

    <!-- Custom JavaScript untuk halaman kontak -->
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