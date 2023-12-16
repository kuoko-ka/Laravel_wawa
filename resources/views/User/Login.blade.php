<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{config ('app.name')}}</title>
 
  <meta content="" name="description">  
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
    
    <!--form-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

</head>

<body>

  <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{route('index')}}" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{asset('img/tculogotr.png')}}" />
                <h1>Taguig City University</h1>
            </a>

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{route('index')}}" class="active">Home</a></li>
                    <li><a href="{{route('Inner')}}">TCU Events</a></li>
            

                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
  <!-- End Header -->

  <main id="main">
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
          <div class="page-header d-flex align-items-center">
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
                      <li>Login</li>
                  </ol>
              </div>
          </nav>
      </div><!-- End Breadcrumbs -->
    <!-- ======= Get a Quote Section ======= -->
      <section class="ftco-section">
          <div class="container">
              <div class="row justify-content-center">
                 
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-6 col-lg-4">
                      <div class="login-wrap py-5">
                          <img class="img d-flex align-items-center justify-content-center  style="background-image" src="{{asset('img/tculogotr.png')}}" />
                         
                          <h3 class="text-center mb-0">Welcome</h3>
                          <p class="text-center">Sign in by entering the information below</p>
                          @if(Session::has('error'))
                          <div class="alert alert-danger" role="alert"> {{ Session::get('error') }}
                          </div>
                          @endif
                          <form action="{{route('loginp')}}" class="login-form" method="post">
                              @csrf
                              <div class="form-group">
                                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                  <input type="text" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" required />
                              </div>
                              <div class="form-group">
                                  <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                  <input type="password" name="password" class="form-control" placeholder="Password" value="{{old('password')}}" required />
                              </div>
                              <div class="
                                      form-group d-md-flex" />
                                  <div class="w-100 text-md-right">
                                      <a href="#">Forgot Password</a>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn form-control btn-primary rounded submit px-3">Sign In</button>
                              </div>
                          </form>
                          <div class="w-100 text-center mt-4 text">
                              <p class="mb-0">Don't have an account?</p>
                              <a href="{{route('Register')}}">Sign Up</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Event Up Time</span>
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
        &copy; Copyright <strong><span>TCUniversity</span></strong>. All Rights Reserved
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
        <!--for form-->
    <script src="{{asset('js/forms/jquery.min.js')}}"></script>
    <script src="{{asset('js/forms/popper.js')}}"></script>
    <script src="{{asset('js/forms/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/forms/main.js')}}"></script>

</body>


</html>

