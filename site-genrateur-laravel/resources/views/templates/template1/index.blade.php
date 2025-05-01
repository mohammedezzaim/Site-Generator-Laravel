<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Append Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href=" {{ asset('template1/assets/img/favicon.png') }}" rel="icon">
  <link href=" {{ asset('template1/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template1/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template1/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('template1/assets/css/main.css') }} " rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">



  <header id="header" class="header d-flex align-items-center fixed-top" 
        style="@if($navShadow)box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);@endif 
        background-color: {{ hex2rgba($navColor, (float)$navOpacity / 100) }};">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" id="logo_id" class="logo d-flex align-items-center me-auto me-xl-0">
        @if($srcLogo)
          <img src="{{ $srcLogo }}" alt="" 
               style="width: {{ $logoSize }}; {{ $logoRound ? 'border-radius: 15px;' : '' }}">
        @else
          <h1 class="sitename">{{ $sitename ?? 'Append' }}</h1><span>.</span>
        @endif
      </a>

      <nav id="navmenu" class="navmenu" >
        <ul>
          @foreach ($dataNav as $item)
          <li>
            <a href="index.html#{{ Str::slug($item) }}"  
               style="color: {{ $fontColor }} !important; 
                      font-weight: 500;
                      text-transform: capitalize;
                      letter-spacing: 0.5px;font-family: {{ $fontFamily }}; font-size: {{ $fontSize }};">
              {{ $item }}
            </a>
          </li>
          @endforeach
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" id="getstarted" href="index.html#about" 
         style="background-color: {{ $btnColor }};
                color: {{ $btnTextColor }};
                padding: 10px 25px;
                border-radius: 4px;
                font-weight: 600;">
         {{ $btnNav }}
      </a>

    </div>
</header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="{{ $image1  }}" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <h2 data-aos="fade-up" id="hero-title" style="color:{{ $DescColor }}" data-aos-delay="100">{{ $DescTitle }}</h2>
            <p data-aos="fade-up" id="hero-description" style="color:{{ $DescColor }}" data-aos-delay="200">{{ $Desceription }}</p>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/newsletter.php" method="post" id="formular_hero" class="php-email-form">
              <div class="sign-up-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /Hero Section -->

   

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content" id="about-div">
            <h2 style="color:{{ $AboutColor1 }}">{{ $TitleAbout }}</h2>
            <p style="color:{{ $AboutColor }}" id="about-description">{{ $DescriptionAbout }}</p>
            <a href="#" class="read-more" id="about-icons"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>
            

          <div class="col-xl-7" id="about-carde">
            <div class="row gy-4 icon-boxes" id="about-carde">

              <div class="col-md-6" data-aos="fade-up" id="about-carde" data-aos-delay="200">
                <div class="icon-box">
                  <i class=" {{ $IconBox1 }} "></i>
                  <h3> {{ $TitreBox1 }} </h3>
                  <p> {{ $DescBox1 }} </p>
                </div>
              </div> 
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" id="about-carde" data-aos-delay="300">
                <div class="icon-box">
                  <i class="{{ $IconBox2 }}"></i>
                  <h3> {{ $TitreBox2 }} </h3>
                  <p> {{ $DescBox2 }} </p>
                </div>
              </div> 
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" id="about-carde" data-aos-delay="400">
                <div class="icon-box">
                  <i class="{{ $IconBox3 }}"></i>
                  <h3> {{ $TitreBox3 }} </h3>
                  <p> {{ $DescBox3 }} </p>
                </div>
              </div> 
              <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" id="about-carde" data-aos-delay="500">
                <div class="icon-box">
                  <i class="{{ $IconBox4 }}"></i>
                  <h3> {{ $TitreBox4 }} </h3>
                  <p> {{ $DescBox4 }} </p>
                </div>
              </div> 
              <!-- End Icon Box -->

            </div>
          </div>

        </div>
      </div>

    </section>
    <!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background" >
      

      <img src="{{ asset('template1/assets/img/stats-bg.jpg') }} "  alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100" >
        

        <div class="row gy-4">          
          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section>
    <!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>{{ $TitleServices }}</h2>
        <p>{{ $DescServices }}</p>
      </div>
      <!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
              <div>
                <h4 class="title"><a href="{{ route('services-details') }}" class="stretched-link">{{ $TitreBox5_1 }}</a></h4>
                <p class="description">{{ $DescBox5_1 }}</p>
              </div>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $TitreBox5_2 }}</a></h4>
                <p class="description">{{ $DescBox5_2 }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $TitreBox5_3 }}</a></h4>
                <p class="description">{{ $DescBox5_3 }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $TitreBox5_4 }}</a></h4>
                <p class="description">{{ $DescBox5_4 }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $TitreBox5_5 }}</a></h4>
                <p class="description">{{ $DescBox5_5 }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">{{ $TitreBox5_6 }}</a></h4>
                <p class="description">{{ $DescBox5_6 }}</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Services Section -->


  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about" id="footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">{{ $TitleAppend }}</span>
          </a>
          <p>{{ $DescAppend }}</p>
          <div class="social-links d-flex mt-4" >
            <a href="{{ $LienTwitter }}"><i class="bi bi-twitter-x"></i></a>
            <a href="{{ $LienFacebook }}"><i class="bi bi-facebook"></i></a>
            <a href="{{ $LienInstagram }}"><i class="bi bi-instagram"></i></a>
            <a href="{{ $LienLinkedin }}"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-12 footer-links" id="footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

       

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" id="footer-contact">
          <h4>Contact Us</h4>
          <p> {{ $ContactAdresse }} </p>
          <p> {{ $ContactVille }} </p>
          <p> {{ $ContactPays }} </p>
          <p class="mt-4"><strong>Phone:</strong> <span> {{ $ContactTelephone }} </span></p>
          <p><strong>Email:</strong> <span> {{ $ContactEmail }} </span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="sitename">Append</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
 

  <script src="{{ asset('template1/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src=" {{ asset('template1/assets/vendor/php-email-form/validate.js') }}"></script>


  <script src=" {{ asset('template1/assets/vendor/aos/aos.js') }} "></script>
  <script src= " {{ asset('template1/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
  <script src=" {{ asset('template1/assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
  <script src="{{ asset('template1/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }} "></script>
  <script src=" {{ asset('template1/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>
  <script src=" {{ asset('template1/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>

  <!-- Main JS File -->
  <script src="{{ asset('template1/assets/js/main.js') }} "></script>

</body>

</html>


