<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{config ('app.name')}}</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet" />
    <link href="{{asset('vendor/aos/aos.css" rel="stylesheet')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Template Main CSS File -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet" />
    @vite(['resources/js/app.js'])
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
                    @auth
                    <li>
                        <span class="font-bold uppercase">Welcome {{auth()->user()->name}}!</span>
                    </li>
                    <li><a href="{{route('index')}}" class="active">Home</a></li>
                    <li><a href="{{route('Inner')}}">TCU Events</a></li>
                    <li>
                        <div class="px-3">
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3 bg-danger">Logout</button>
                            </form>
                        </div>
                    </li>
                    @else
                    <li><a href="{{route('index')}}" class="active">Home</a></li>
                    <li><a href="{{route('Inner')}}">TCU Events</a></li>
                    <li><a class="get-a-quote" href="{{route('login')}}">Login</a></li>
                    @endauth
                </ul>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
    <!-- End Header -->
    <div class="breadcrumbs">
          <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
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
                      <li>Events</li>
                      
                      @auth
                      <li>
                          <a href="{{route('kreeyt')}}">Create an Event</a>
                      </li>
                      @endauth
                  </ol>
              </div>
          </nav>
      </div><!-- End Breadcrumbs -->

    <center>
        <main>
            {{$slot}}
        </main>
    </center>
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
                        A108 Adam Street <br />
                        New York, NY 535022<br />
                        United States <br /><br />
                        <strong>Phone:</strong> +1 5589 55488 55<br />
                        <strong>Email:</strong> info@example.com<br />
                    </p>

                </div>

            </div>
        </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>TCUniversity</span></strong>. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>

    </footer><!-- End Footer -->
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('vendor/aos/aos.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
    <!-- The popping thing after blog creation  -->
    <x-flashy/>
  <!--  <script src="//unpkg.com/alpinejs" defer></script> -->


   

   
</body>

</html>
