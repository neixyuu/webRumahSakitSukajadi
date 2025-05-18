<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>Rumah Sakit Umum Daerah Banyuasin</title>
  <meta name="title" content="Doclab - home">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="/" class="logo">
        <img src="./assets/images/logo.svg" width="136" height="46" alt="Doclab home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="/" class="logo">
            <img src="./assets/images/logo.svg" width="136" height="46" alt="Doclab home">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="/" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="" class="navbar-link title-md">Dokter</a>
          </li>

          <li class="navbar-item">
            <a href="layanan" class="navbar-link title-md">Layanan</a>
          </li>

          <li class="navbar-item">
            <a href="berita" class="navbar-link title-md">Berita</a>
          </li>

          <li class="navbar-item">
            <a href="kontak" class="navbar-link title-md">Kontak</a>
          </li>
        </ul>
      </nav>
           <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
             <ion-icon name="menu-outline"></ion-icon>
          </button>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Rumah Sakit Umum Daerah Banyuasin</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Kontak Kami
            </h1>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>

      <!-- 
        - #LISTING
      -->
      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">
          <p class="section-subtitle text-center">Informasi Kontak</p>
          <h2 class="headline-md section-title text-center">Kontak RSUD Sukajadi</h2>

          <div class="grid-list" style="margin-top: 40px;">
            <div class="service-card">
              <h3 class="card-title">Alamat</h3>
              <p class="card-text">Jl. Palembang–Betung Km. 14,5, Sukajadi, Talang Kelapa, Banyuasin, Sumatera Selatan.</p>
            </div>

            <div class="service-card">
              <h3 class="card-title">Telepon/WhatsApp</h3>
              <p class="card-text">+62 822-7988-7861</p>
            </div>

            <div class="service-card">
              <h3 class="card-title">Media Sosial</h3>
              <p class="card-text">Instagram: @rsud_sukajadi</p>
            </div>

            <div class="service-card">
              <h3 class="card-title">Instalasi Gawat Darurat (IGD)</h3>
              <p class="card-text">24 jam nonstop setiap hari</p>
            </div>

            <div class="service-card">
              <h3 class="card-title">Pendaftaran Pasien</h3>
              <p class="card-text">Pendaftaran dapat dilakukan melalui WhatsApp untuk mempermudah proses administrasi.</p>
            </div>
          </div>

          <!-- Google Maps Embed -->
          <div class="map-container" style="margin-top: 50px;" data-reveal="bottom">
            <h3 class="headline-md text-center" style="margin-bottom: 20px;">Peta Lokasi</h3>
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4436724543224!2d104.74399731475503!3d-2.9691389978397433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75c8da2905c3%3A0x6aa5f4f9c5a1c0a5!2sRSUD%20Sukajadi!5e0!3m2!1sid!2sid!4v1699789051824!5m2!1sid!2sid"
              width="100%" 
              height="450" 
              style="border:0; border-radius: 15px;" 
              allowfullscreen 
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </section>
    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="136" height="46" loading="lazy" alt="Doclab home">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Main Email : <a href="mailto:contact@website.com" class="contact-link">rsud_ba@yahoo.co.id</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Office Telephone : <a href="tel:0029129102320" class="contact-link">0029129102320</a>
                </p>

                <p>
                  Mobile : <a href="tel:000232439493" class="contact-link">0811 7321 881</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Layanan</p>
          </li>

          <li>
            <a href="dokter" class="text footer-link">Dokter</a>
          </li>

          <li>
            <a href="berita" class="text footer-link">Berita</a>
          </li>

          <li>
            <a href="kontak" class="text footer-link">Kontak Kami</a>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Selengkapnya</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Kritik dan Saran</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Pengaduan</a>
          </li>

          <li>
            <a href="{{ route('admin.login') }}" class="text footer-link">Kamu Admin ? Login disini</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; Rumah Sakit Umum Daerah Banyuasin
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>