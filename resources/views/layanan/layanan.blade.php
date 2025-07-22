<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Rumah Sakit Umum Daerah Banyuasin - Layanan Kesehatan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style_welcome.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    
    <!-- Custom CSS untuk styling khusus halaman layanan -->
    <style>
        /* Service Cards Styling */
        .service-cards {
            margin-top: 100px;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .service-card {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-color: #f33f3f;
        }

        .service-card h3 {
            color: #1a6692;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .service-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        .service-card .service-icon {
            width: 60px;
            height: 60px;
            background: #f33f3f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .service-card .service-icon i {
            color: #fff;
            font-size: 24px;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            animation: fadeIn 0.3s ease;
        }

        .modal.active {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            position: relative;
            animation: slideIn 0.3s ease;
        }

        .close-button {
            position: absolute;
            top: 15px;
            right: 20px;
            background: none;
            border: none;
            font-size: 30px;
            cursor: pointer;
            color: #666;
        }

        .close-button:hover {
            color: #f33f3f;
        }

        .poli-list {
            columns: 2;
            column-gap: 30px;
            list-style-type: none;
            padding: 0;
        }

        .poli-list li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            margin-bottom: 8px;
            break-inside: avoid;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @media (max-width: 768px) {
            .service-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .service-card {
                padding: 20px;
            }
            
            .modal-content {
                padding: 25px;
                margin: 20px;
            }
            
            .poli-list {
                columns: 1;
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
                        <li class="nav-item active">
                            <a class="nav-link" href="">Layanan
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
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

    <!-- Service Cards Section -->
    <div class="service-cards">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Pelayanan Kesehatan RSUD Sukajadi</h2>
                        <p style="margin-top: 15px; color: #666;">Layanan yang Tersedia</p>
                    </div>
                </div>
            </div>
            
            <div class="service-grid">
                <div class="service-card" onclick="openModal('Instalasi Rawat Jalan (Poliklinik)', '', 'poliklinik')">
                    <div class="service-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h3>Instalasi Rawat Jalan (Poliklinik)</h3>
                    <p>Melayani pasien rawat jalan setiap hari kerja dengan berbagai spesialisasi dokter.</p>
                </div>

                <div class="service-card" onclick="openModal('Instalasi Gawat Darurat (IGD)', 'Melayani pasien gawat darurat selama 24 jam nonstop dengan tenaga medis siaga dan peralatan lengkap untuk penanganan kasus darurat.')">
                    <div class="service-icon">
                        <i class="fas fa-ambulance"></i>
                    </div>
                    <h3>Instalasi Gawat Darurat (IGD)</h3>
                    <p>Melayani pasien gawat darurat selama 24 jam nonstop.</p>
                </div>

                <div class="service-card" onclick="openModal('Pendaftaran Pasien', 'Pendaftaran dapat dilakukan melalui WhatsApp untuk mempermudah proses administrasi. Sistem pendaftaran online memudahkan pasien untuk membuat janji temu dengan dokter.')">
                    <div class="service-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Pendaftaran Pasien</h3>
                    <p>Pendaftaran dapat dilakukan melalui WhatsApp untuk mempermudah proses administrasi.</p>
                </div>

                <div class="service-card" onclick="openModal('Jadwal Poliklinik', 'Informasi jadwal praktik dokter dan poliklinik tersedia secara online. Pasien dapat melihat jadwal dokter dan memilih waktu kunjungan yang sesuai.')">
                    <div class="service-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h3>Jadwal Poliklinik</h3>
                    <p>Informasi jadwal praktik dokter dan poliklinik tersedia secara online.</p>
                </div>

                <div class="service-card" onclick="openModal('Fasilitas Tempat Tidur', 'Kapasitas sebanyak 50 tempat tidur untuk perawatan pasien dengan berbagai kelas perawatan. Fasilitas rawat inap yang nyaman dengan perawat profesional.')">
                    <div class="service-icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <h3>Fasilitas Tempat Tidur</h3>
                    <p>Kapasitas sebanyak 50 tempat tidur untuk perawatan pasien.</p>
                </div>

                <div class="service-card" onclick="openModal('Pengembangan Layanan', 'RSUD Sukajadi terus meningkatkan kualitas pelayanan dengan menambah fasilitas dan memperkuat tenaga medis. Komitmen kami adalah memberikan pelayanan kesehatan terbaik.')">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Pengembangan Layanan</h3>
                    <p>RSUD Sukajadi terus meningkatkan kualitas pelayanan dengan menambah fasilitas dan memperkuat tenaga medis.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="serviceModal" class="modal">
        <div class="modal-content">
            <button class="close-button" onclick="closeModal()">&times;</button>
            <h2 id="modalTitle" class="headline-sm"></h2>
            <p id="modalDescription"></p>
        </div>
    </div>

    <!-- Footer -->
     <br>
     <br>
     <br>
     <br>
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

    <!-- Custom JavaScript untuk halaman layanan -->
    <script>
        // Fallback untuk preloader jika custom.js tidak load
        setTimeout(function() {
            $('#preloader').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000);

        // Modal JavaScript dari file asli
        function openModal(title, description, type = 'default') {
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            modalTitle.textContent = title;
            
            if (type === 'poliklinik') {
                modalDescription.innerHTML = `
                    <ul class="poli-list">
                        <li>Poli Umum</li>
                        <li>Poli Kandungan</li>
                        <li>Poli Gigi</li>
                        <li>Poli Penyakit Dalam</li>
                        <li>Poli Anak</li>
                        <li>Poli Bedah</li>
                        <li>Poli Mata</li>
                    </ul>
                `;
            } else {
                modalDescription.textContent = description;
            }
            
            document.getElementById('serviceModal').classList.add('active');
            document.body.style.overflow = 'hidden'; // Mencegah scrolling
        }

        function closeModal() {
            document.getElementById('serviceModal').classList.remove('active');
            document.body.style.overflow = ''; // Mengembalikan scrolling
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('serviceModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>

</html>