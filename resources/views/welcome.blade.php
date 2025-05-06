<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
            <a href="" class="navbar-link title-md active">Home</a>
          </li>

          <li class="navbar-item">
            <a href="dokter" class="navbar-link title-md">Dokter</a>
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

            <p class="hero-subtitle has-before" data-reveal="left">Selamat Datang di</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Rumah Sakit Umum Daerah Banyuasin
            </h1>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" aria-label="service">
        <div class="container">

          <ul class="service-list">

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/location.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Alamat</a>
                </h3>

                <p class="card-text">
                Jalan Palembang - Betung KM 14
                </p>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/telephone.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Hubungi Kami</a>
                </h3>

                <p class="card-text">
                Office Telephone : 0029129102320
                Mobile : 0811 7321 881
                </p>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/hospital.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Jam Kunjungan</a>
                </h3>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing
                </p>

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/mail.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Email</a>
                </h3>

                <p class="card-text">
                  Main Email : rsud_ba@yahoo.co.id
                </p>

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left">Tentang Kami</p>

            <h2 class="headline-md" data-reveal="left">Rumah Sakit Umum Daerah Sukajadi</h2>

            <p class="section-text" data-reveal="left">
            adalah Rumah Sakit Umum Daerah milik Pemerintah Kabupaten Banyuasin, 
          berlokasi di KM 14, Jalan Palembang Betung. Kami hadir untuk memberikan layanan kesehatan yang terjangkau, profesional, dan 
          merata bagi masyarakat Banyuasin dan sekitarnya.
            </p>

            <ul class="tab-list" data-reveal="left">

              <li>
                <button class="tab-btn active" data-tab="vision">Vision</button>
              </li>

              <li>
                <button class="tab-btn" data-tab="mission">Mission</button>
              </li>

              <li>
                <button class="tab-btn" data-tab="strategy">Strategy</button>
              </li>
            </ul>

            <div class="tab-content" data-reveal="left">
              <div class="tab-pane active" id="vision">
                <p class="tab-text">
                  Menjadi Rumah Sakit terdepan dalam pelayanan kesehatan yang berkualitas dan terpercaya di Kabupaten Banyuasin.
                </p>
              </div>

              <div class="tab-pane" id="mission">
                <p class="tab-text">
                  1. Memberikan pelayanan kesehatan yang profesional dan bermutu tinggi<br>
                  2. Mengembangkan SDM yang kompeten dan berdedikasi<br>
                  3. Menyediakan fasilitas kesehatan yang modern dan terjangkau
                </p>
              </div>

              <div class="tab-pane" id="strategy">
                <p class="tab-text">
                  1. Peningkatan kualitas layanan berkelanjutan<br>
                  2. Pengembangan infrastruktur modern<br>
                  3. Optimalisasi sistem manajemen rumah sakit
                </p>
              </div>
            </div>

            <!-- <p class="tab-text" data-reveal="left">
              Aliquam faucibus, odio nec commodo aliquam, neque felis placerat dui, a porta ante lectus dapibus est.
              Aliquam a bibendum mi, sed condimentum
            </p> -->

            <!-- <div class="wrapper">

              <ul class="about-list">

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Sonsectetur adipisicing elit</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Exercitation ullamco laboris</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Eiusmod tempor incididunt</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Aolore magna aliqua</span>
                </li>

              </ul>

            </div> -->

          </div>

          <figure class="about-banner" data-reveal="right">
            <img src="./assets/images/about-banner.png" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

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
            <a href="#" class="text footer-link">Dokter</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Berita</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Kontak Kami</a>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Selengkapnya</p>
          </li>

          <li>
            <a href="#" class="text footer-link">Conditions</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Terms of Use</a>
          </li>

          <li>
            <a href="#" class="text footer-link">Our Services</a>
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