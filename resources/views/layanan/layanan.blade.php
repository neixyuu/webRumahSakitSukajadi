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
        <img src="./assets/images/logoRSUD.png" width="140" height="50" alt="RSUD Sukajadi">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="/" class="logo">
            <img src="./assets/images/logoRSUD.png" width="140" height="50" alt="RSUD Sukajadi">
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
            <a href="dokter" class="navbar-link title-md">Dokter</a>
          </li>

          <li class="navbar-item">
            <a href="" class="navbar-link title-md active">Layanan</a>
          </li>

          <li class="navbar-item">
            <a href="berita" class="navbar-link title-md">Berita</a>
          </li>

          <li class="navbar-item">
            <a href="kontak" class="navbar-link title-md">Kontak</a>
          </li>
          <li class="navbar-item">
            <a href="https://rsudsukajadi.web.id/pendaftaran" class="navbar-link title-md">Pendaftaran</a>
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
              Layanan Kesehatan
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
          <div class="text-center mb-5">
            <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Layanan yang Tersedia</p>
            <h2 class="headline-md" data-reveal="left">Pelayanan Kesehatan RSUD Sukajadi</h2>
          </div>

          <div class="service-list" data-reveal="bottom">
            <div class="service-item">
              <h3 class="headline-sm">Instalasi Rawat Jalan (Poliklinik)</h3>
              <p class="text">Melayani pasien rawat jalan setiap hari kerja.</p>
            </div>

            <div class="service-item">
              <h3 class="headline-sm">Instalasi Gawat Darurat (IGD)</h3>
              <p class="text">Melayani pasien gawat darurat selama 24 jam nonstop.</p>
            </div>

            <div class="service-item">
              <h3 class="headline-sm">Pendaftaran Pasien</h3>
              <p class="text">Pendaftaran dapat dilakukan melalui WhatsApp untuk mempermudah proses administrasi.</p>
            </div>

            <div class="service-item">
              <h3 class="headline-sm">Jadwal Poliklinik</h3>
              <p class="text">Informasi jadwal praktik dokter dan poliklinik tersedia secara online.</p>
            </div>

            <div class="service-item">
              <h3 class="headline-sm">Fasilitas Tempat Tidur</h3>
              <p class="text">Kapasitas sebanyak 28 tempat tidur untuk perawatan pasien.</p>
            </div>

            <div class="service-item">
              <h3 class="headline-sm">Pengembangan Layanan</h3>
              <p class="text">RSUD Sukajadi terus meningkatkan kualitas pelayanan dengan menambah fasilitas dan memperkuat tenaga medis.</p>
            </div>
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
            <img src="./assets/images/logoRSUD.png" width="150" height="46" loading="lazy" alt="">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                Main Email : <a href="mailto:rs.sukajadi@gmail.com" class="contact-link">rs.sukajadi@gmail.com</a>
                </p>
                <p>
                  Instagram : @rsud_sukajadi
                </p>
              </div>
            <li class="contact-item">
              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>
                <div>
                  <p>
                    Mobile : <a href="tel:000232439493" class="contact-link">0822 7988 7861</a>
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
            <a href="{{ url('kritiksaran') }}" class="text footer-link">Kritik dan Saran</a>
          </li>

          <li>
            <a href="{{ route('pengaduan') }}" class="text footer-link">Pengaduan</a>
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

  <script>
      document.addEventListener('DOMContentLoaded', function() {
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabPanes = document.querySelectorAll('.tab-pane');
  
        tabBtns.forEach(btn => {
          btn.addEventListener('click', function() {
            // Remove active class from all buttons and panes
            tabBtns.forEach(b => b.classList.remove('active'));
            tabPanes.forEach(p => p.classList.remove('active'));
  
            // Add active class to clicked button and corresponding pane
            this.classList.add('active');
            document.getElementById(this.dataset.tab).classList.add('active');
          });
        });
      });
    </script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>