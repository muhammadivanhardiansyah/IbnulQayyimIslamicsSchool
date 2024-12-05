<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{$title}}</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href=" {{ asset('storage/'.$setting->favicon) }} " rel="icon">
  <link href=" {{ asset('storage/'.$setting->favicon) }} " rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
<link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('assets/css/main.css?v.2') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/IQIS_LOGO_BIASA.png" alt="">
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">Facility</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li class="dropdown"><a href="#"><span>PPDB</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="https://sim.iqis.sch.id/tkit/ppdb" target="_blank">PPDB TK</a></li>
              <li><a href="https://sim.iqis.sch.id/sdit/ppdb" target="_blank">PPDB SD</a></li>
              <li><a href="https://sim.iqis.sch.id/smpit/ppdb" target="_blank">PPDB SMP</a></li>
              <li><a href="https://sim.iqis.sch.id/smkit/ppdb" target="_blank">PPDB SMK</a></li>
            </ul>
            
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>


  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section" style="background-image: url('storage/{{$setting->hero_bg}}'); background-repeat:no-repeat; background-size: cover; background-position:top; height: 750px;position: relative;  padding-top: 0; margin-top: -90px;">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" style="margin-top: 50px;">
            <h3 class="text-start mb-3"> {{ $setting->hero_heading }} </h3>
            <p class="text-start"> {{$setting->hero_text}} </p>
            <div class="get-started d-flex mt-3">
              <a href="#about" class="btn-get-started">About Us</a>
              <a href="{{$setting->link_video}}"
                class="glightbox btn-watch-video d-flex align-items-center ms-3"><i
                  class="bi bi-play-circle"></i><span>Watch
                  Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="{{asset('storage/'.$setting->hero_grafis)}}" class="img-hero" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <section id="hero" class="hero section light-background">
      <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
        <div class="container position-relative">
          <div class="row gy-4 mt-5">

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <a href="{{ $service->tkit }}"
                  target="_blank" class="stretched-link">
                  <img src="assets/img/LOGO IQIS TKIT.png" alt="School Logo" width="150" height="150">
                  <h4 class="title">TKIT</h4>
                </a>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <a href="{{ $service->sdit }}"
                  target="_blank" class="stretched-link">
                  <img src="assets/img/LOGO IQIS SDIT.png" alt="School Logo" width="150" height="150">
                  <h4 class="title">SDIT</h4>
                </a>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <a href="{{ $service->smpit }}"
                  target="_blank" class="stretched-link">
                  <img src="assets/img/LOGO IQIS SMPIT.png" alt="School Logo" width="150" height="150">
                  <h4 class="title">SMPIT</h4>
                </a>
              </div>
            </div><!--End Icon Box -->

            <div class="col-xl-3 col-md-6">
              <div class="icon-box">
                <a href="{{ $service->smkit }}"
                  target="_blank" class="stretched-link">
                  <img src="assets/img/LOGO IQIS SMKIT2.png" alt="School Logo" width="150" height="150">
                  <h4 class="title">SMKIT</h4>
                </a>
              </div>
            </div><!--End Icon Box -->

          </div>
        </div>
      </div>
    </section>
    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-sm-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">About</p>
            <h3>Cari Tahu Tentang Kami</h3>
            <p class="fst-italic">
              {!! $about->description !!}
            </p>

          </div>
          <div class="col-sm-6 pt-5">
            <h3 class="fst-italic fw-bold mb-4">
              Visi Dan Misi
            </h3>
            <h4>Visi</h4>
              <p class="text-center"> {!! $visi->description !!} </p>
              <h4>Misi</h4>
              @foreach ($misi as $item)
              <p> {!! $item->description !!} </p>
              @endforeach
          </div>

        </div>
      </div>     
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4 col-12 col-md-6">
            <div class="count-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count_students}}" data-purecounter-duration="2" class="purecounter">
              </span>
              <p>Siswa</p>
            </div>
          </div>

          <div class="col-lg-4 col-12 col-md-6 mt-5 mt-md-0">
            <div class="count-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count_teachers}}" data-purecounter-duration="2" class="purecounter">
              </span>
              <p>Guru Dan Pegawai</p>
            </div>
          </div>

          <div class="col-lg-4 col-12 col-md-6 mt-5 mt-lg-0">
            <div class="count-box" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$count_schools}}" data-purecounter-duration="2" class="purecounter">
              </span>
              <p>Sekolah</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <div><span>Check Our</span> <span class="description-title">Fasilitas</span></div>
        <p>Fasilitas sekolah sangat berperang penting untuk menunjang aktivitas belajar mengajar disekolah.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          @foreach ($facility as $fac)
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                {!! $fac->icon !!}
              </div>
                <h3> {{$fac->title}} </h3>
              </a>
              <p> {{$fac->text}} </p>
            </div>
          </div><!-- End Service Item -->
          @endforeach

        </div>
      </div>

    </section>
    <!-- /Services Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Pertanyaan yang sering</span><strong> diajukan</strong></h3>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            @foreach ($faqs as $faq)
            <div class="faq-container">
              <div class="faq-item @if($loop->iteration == 1)faq-active @endif">
                <h3><span class="num">{{$loop->iteration}}.</span> <span> {{$faq->question}} </span></h3>
                <div class="faq-content">
                  <p>{{$faq->answer}}</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->
              @endforeach

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <div><span class="description-title">Hubungi Kami</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p> {{$setting->address}} </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p> {{$setting->phone}} </p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p> {{$setting->email}} </p>
              </div>
            </div><!-- End Info Item -->
          </div>

          <div class="col-lg-8">

            {!! $setting->maps !!}

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">SIMS-IQIS</strong> <span>All Rights Reserved</span>
        </p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href="{{$setting->telegram}}" target="_blank">
          <i class="bi bi-telegram"></i>
        </a>
        <a href="{{$setting->facebook}}"><i class="bi bi-facebook"></i></a>
        <a href="{{$setting->instagram}}"><i class="bi bi-instagram"></i></a>
        <a href="{{$setting->youtube}}"><i class="bi bi-youtube"></i></a>
      </div>
      <div class="credits">
        Designed by <a href="https://iqis.sch.id/">SIM-IQIS</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
      // Inisialisasi AOS
      AOS.init({
        duration: 1200, // Durasi animasi
        easing: 'ease-in-out', // Jenis easing
        once: true, // Animasi hanya diputar sekali
      });

      const counters = new PureCounter();
    </script>
</body>
</html>