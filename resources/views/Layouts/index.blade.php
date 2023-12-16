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
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/aos/aos.css" rel="stylesheet')}}">
    

  <!-- Template Main CSS File -->
  <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>

<body>
    
  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">

    
   
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{route('index')}}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="{{asset('img/logo.png')}}">
        <h1>Taguig City University</h1>
      </a>
            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    <!-- right side of header-->
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
                                <button type="submit" class="btn form-control btn-primary rounded submit px-3">Logout</button>
                            </form>
                        </div>
                    </li>
                    @else
                    <li><a href="{{route('index')}}" class="active">Home</a></li>
                    <li><a href="{{route('Inner')}}">TCU Events</a></li>
                    <li><a class="get-a-quote" href="{{route('login')}}">Login</a></li>
                    <li><a class="get-a-quote" href="{{route('Register')}}">Register</a></li>
                    @endauth
                </ul>
            </nav><!-- .navbar -->

        </div>
  </header><!-- End Header -->


    @if( Session::has('success'))
    
    <div x-data="{show:true}" x-init="setTimeout(() => show = false,5000)" x-show="show"

         class="alert alert-success alert-dissmisable fade show"> {{Session::get( 'success' )}}
    </div>
    @endif
    <x-flashy/>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Crafting Moments, Creating Memories</h2>
          <p data-aos="fade-up" data-aos-delay="100" >Taguig City University has become a driving force in shaping the future of its community and the broader educational landscape, fostering a rich and inclusive learning environment that empowers individuals to achieve their aspirations and contribute to society.</p>



          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="159" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                <p>Current Events</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="153" data-purecounter-duration="1" class="purecounter"></span>
                <p>Events Held</p>
              </div>
            </div><!-- End Stats Item -->



          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="assets/img/hero-img.svg" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    
    &ensp;

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <img src="{{asset('/img/about.jpg')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
            <h3>About Us</h3>
            <p>
              Welcome to our event management website, where your vision becomes reality! We're here to simplify the process of planning and organizing your events, making it stress-free and enjoyable. Trust us to handle the details while you focus on creating unforgettable moments. Welcome to a world of seamless event planning!
            </p>
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>User-Friendly Interface</h5>
                  <p>Our website is designed with simplicity in mind. It's incredibly easy to use, ensuring that anyone, regardless of their technical expertise, can navigate it effortlessly. You'll find everything you need at your fingertips, from event creation to guest management and more.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Comprehensive Tools and Resources</h5>
                  <p>We offer a wide range of event planning tools and resources, from customizable templates to budget calculators. Whether you're organizing a small gathering or a large-scale conference, our platform provides the support and guidance you need to execute a successful event.</p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Trustworthy and Reliable</h5>
                  <p>We pride ourselves on being a trusted platform for event management. Our team is dedicated to providing excellent customer support, ensuring your peace of mind throughout the planning process. With our website, you can rely on our expertise and experience to make your event a resounding success.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Recent Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Services</span> 
          <h2>Services</h2>

        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <div class="card-img">
                <img src="{{asset('img/DmpTestFiles/Sampleimg1.jpg')}}" alt="" class="img-fluid">
              </div>
              <h3><a href="service-details.html" class="stretched-link">Virtual Conference Series</a></h3>
              <p> Join our ongoing virtual conference series, where industry leaders and experts converge to explore the latest trends, share insights, and foster professional connections. With a diverse range of topics and interactive sessions, you can stay ahead of the curve in your field.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <div class="card-img">
                  <img src="{{asset('img/DmpTestFiles/Sampleimg1.jpg')}}" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details.html" class="stretched-link">Exhibition Showcase</a></h3>
              <p>Explore our ongoing exhibition showcase, a digital platform that allows businesses to continually exhibit their products and services to a global audience. Discover innovations, network with industry players, and access the latest offerings from the comfort of your home or office.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <div class="card-img">
                  <img src="{{asset('img/DmpTestFiles/Sampleimg1.jpg')}}" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details.html" class="stretched-link">Weekly Seminar Sessions</a></h3>
              <p>Dive into our weekly seminar sessions, where thought leaders dive deep into niche topics. Keep expanding your knowledge, interact with the best in the business, and take your expertise to new heights, one engaging session at a time.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card">
              <div class="card-img">
                  <img src="{{asset('img/DmpTestFiles/Sampleimg1.jpg')}}" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details.html" class="stretched-link">Interactive Workshops Series</a></h3>
              <p>Our interactive workshop series is a continuous source of skill enhancement. Engage in hands-on learning, led by seasoned instructors, and master new techniques and strategies while growing your professional toolkit at your own pace.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="card">
              <div class="card-img">
                  <img src="{{asset('img/DmpTestFiles/Sampleimg1.jpg')}}" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details.html" class="stretched-link">Monthly Corporate Meetings</a></h3>
              <p>Stay informed and aligned with our monthly corporate meetings, designed to facilitate strategic discussions, review performance metrics, and drive key decisions. As part of our ongoing commitment to transparency and growth, you're always in the loop.</p>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card">
              <div class="card-img">
                  <img src="{{asset('img/DmpTestFiles/Sampleimg1.jpg')}}" alt="" class="img-fluid" />
              </div>
              <h3><a href="service-details.html" class="stretched-link">Product Launch Showcase</a></h3>
              <p>Explore our ongoing product launch showcase to witness the latest innovations in real-time. From cutting-edge tech to game-changing services, you'll be the first to experience the next big thing as we unveil our offerings throughout the year.</p>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End recent Section -->
    
    <!-- ======= Alum ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="slides-1 swiper" data-aos="fade-up">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/DmptestFiles/Sorry1.png')}}" class="testimonial-img" alt="">
                <h3>Jhon Dancerson</h3>
                <h4>Judge | World of Dance</h4>
                
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>   
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End alum item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <img src="{{asset('img/DmptestFiles/Sorry2.png')}}" class="testimonial-img" alt="" />
                <h3>Mug Goodman</h3>
                <h4>Resident | New Bilibid Prison </h4>
                
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End alum item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <img src="{{asset('img/DmptestFiles/Sorry3.png')}}" class="testimonial-img" alt="" />
                <h3>Teemo</h3>
                <h4>????</h4>
               
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                 ????
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End alum item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <img src="{{asset('img/DmptestFiles/Sorry4.png')}}" class="testimonial-img" alt="" />
                <h3>Inday</h3>
                <h4>Inday</h4>
               
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End alum item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <img src="{{asset('img/DmptestFiles/Sorry5.png')}}" class="testimonial-img" alt="" />
                <h3>Yao Grin</h3>
                <h4>Greeter | SM Bicutan</h4>
                
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End alum item -->                

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End alum Section -->

   
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

        

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
              General Santos Ave,  <br />
              Lower Bicutan, Taguig,<br />
              1632 Metro Manila<br /><br />
              <strong>Phone:</strong> +1 5589 55488 55<br />
              <strong>Email:</strong> TcuExamp@gmail.com<br />
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>TCUniversity</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
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
    <script src="//unpkg.com/alpinejs" defer></script>
    
</body>

</html>
