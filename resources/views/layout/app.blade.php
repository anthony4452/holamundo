<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pet Sitting - @yield('title', 'Adopciones')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Estilos locales -->
    <link rel="stylesheet" href="{{ asset('pets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('pets/css/style.css') }}">
  </head>
  <body>

    <div class="wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <p class="mb-0 phone pl-md-2">
              <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
              <a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
            </p>
          </div>
          <div class="col-md-6 d-flex justify-content-md-end">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span class="flaticon-pawprint-1 mr-2"></span>Pet Sitting</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('mascotas.index') }}" class="nav-link">Mascotas</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Adopciones</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END NAV -->

    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('pets/images/bg_1.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-11 ftco-animate text-center">
            <h1 class="mb-4">Highest Quality Care For Pets You'll Love</h1>
            <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
      <div class="container">
        @yield('content')
      </div>
    </section>

    <footer class="footer">
      <div class="container">
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <p class="copyright">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
              All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by 
              <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('pets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('pets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('pets/js/popper.min.js') }}"></script>
    <script src="{{ asset('pets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('pets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('pets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('pets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('pets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('pets/js/jquery.timepicker.min.js') }}"></script>
    <script src="{{ asset('pets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('pets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('pets/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('pets/js/google-map.js') }}"></script>
    <script src="{{ asset('pets/js/main.js') }}"></script>
  </body>
</html>
