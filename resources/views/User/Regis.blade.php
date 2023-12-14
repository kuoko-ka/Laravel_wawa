<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TCUniversity</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/aos/aos.css" rel="stylesheet')}}" />

    <!-- Template Main CSS File -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
</head>

<body>

  <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{route('index')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{asset('img/logo.png')}}" />
                <h1>Taguig City University</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{route('index')}}" class="active">Home</a></li>
                    <li><a href="{{route('Inner')}}">TCU Events</a></li>
                    <li><a class="get-a-quote" href="{{route('login')}}">Login</a></li>

                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
          <div class="page-header d-flex align-items-center"    >
              <div class="container position-relative">
                  <div class="row d-flex justify-content-center">
                      <div class="col-lg-6 text-center">
                          <h2></h2>
                          <p></p>
                      </div>
                  </div>
              </div>
          </div>
          <nav>
              <div class="container">
                  <ol>
                      <li><a href="{{route('index')}}">Home</a></li>
                      <li>Register</li>
                  </ol>
              </div>
          </nav>
      </div><!-- End Breadcrumbs -->

   
    <section id="get-a-quote" class="get-a-quote">
      <div class="container" data-aos="fade-up">

        <div class="row g-0">

            <center>
                <div class="col-lg-7">
                    <form action="{{route('registers')}}" method="POST" >
                        @csrf
                        <h3>Register</h3>
                        <p>Please properly fill out the credentials required.</p>
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="{{old('name')}}" />
                                @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}" />
                                @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>


                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{old('password')}}" />
                                @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" />
                                @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="col-md-12 text-center">


                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Register</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Quote Form -->
            </center>
        </div>

      </div>
    </section><!-- End Get a Quote Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>TCU University</span>
          </a>
          <p>Crafting Moments, Creating Memories</p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
              General Santos Ave,  <br />
              Lower Bicutan, Taguig,<br />
              1632 Metro Manila<br /><br /> 
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> TcuExamp@gmail.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Event Up Time</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
      
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>

    
</body>

</html>
