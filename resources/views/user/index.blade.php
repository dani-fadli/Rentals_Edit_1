<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title id="page-title">Morental</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('agency/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Stepper Form -->
  <link rel="stylesheet" type="text/css" href="{{asset('green-stepper/dist/style.css')}}">
  <script src="{{asset('agency/vendor/jquery/jquery.min.js')}}"></script>

  <!-- JQuery and CSS for DatePicker -->
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">

  <!-- Custom fonts for this template -->
  <link href="{{asset('agency/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="{{asset('agency/css/agency.css')}}" rel="stylesheet">


</head>

<body id="page-top">


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    @include('user/navigation')
  </nav>
  

  <!-- Header -->
  <header class="masthead">
    @include('user/header')
  </header>
  
  <!-- Modal Login -->
    <!-- Modal -->
    <div class="modal fade" id="logInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Log In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <section id="login-form">
              <form id="loginForm" action="/login/" name="sentMessage">
                <div class="modal-body">
                  @include('user/login-form')
                  <div>
                    <hr>
                    <p>Belum memiliki akun Morental?</p>
                    <a data-dismiss="modal" data-toggle="modal" href="#signUpModal">Daftar Sekarang</a>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="submit" class="btn login-only">Masuk</button>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  <!-- End Modal Login -->

  <!-- Modal SignUp -->
    <!-- Modal -->
    <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Daftar Sebagai Pengguna</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <section id="signup-form">
            <form id="signUpForm" action="/kaka/" name="sentMessage">
              <div class="modal-body">
                @include('user/signup-form')
                <div>
                  <hr>
                  <p>Sudah memiliki akun Morental?</p>
                  <a data-dismiss="modal" data-toggle="modal" href="#logInModal">Masuk</a>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn login-only">Daftar</button>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  <!-- End Modal SignUp -->

  <!-- Renting Grid -->
  <section class="bg-dark page-section" id="rent">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          @include('user/rent') 
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="page-section" id="services">
    @include('user/service')
  </section>


  <!-- Pembayaran -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('agency/img/logos/envato.jpg')}}" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('agency/img/logos/designmodo.jpg')}}" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('agency/img/logos/themeforest.jpg')}}" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="{{asset('agency/img/logos/creative-market.jpg')}}" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    @include('user/about')
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Morental.com 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('agency/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('agency/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset('agency/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('agency/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('agency/js/agency.min.js')}}"></script>

  <!-- Datepicker -->
  <script src="{{asset('js/datepicker.js')}}"></script>
  

</html>
