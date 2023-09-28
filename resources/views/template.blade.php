<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{  asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  </head>
  <body>
    
    <!-- Header Section Start -->
    <header>
        <div class="container-fluid nav-cont">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid ">
                      <a class="navbar-brand" href="#">
                        <img src="./img/logo.png" alt="" class="img-fluid" height="" width="150px">
                      </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-2">
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Product</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Pricing</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">About-us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{route('registration')}}">Register Company</a>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <button class="btn btn-primary px-4 rounded-pill" ><a href="{{route('login')}}" class="text-light text-decoration-none">Login</a></button>
                        </form>
                      </iv>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Section End  -->

    @yield('homepage')
    @yield('login')
    @yield('register')
    
    <!-- regiestration button section end  -->
    <footer>
        <div class="container-fluid footer-cont ">
            <div class="container">
                <div class="row py-5 ">
                    <div class="col-12 col-sm-12 col-md-3">
                        <div class="foot-cont ">
                            <div class="temp mx-auto" style="max-width: 250px;">
                                <img src="./img/logo.png" alt="" class="img-fluid">
                            <div class="foot-logo">
                                <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                        </svg></a></span>
                                <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path
                                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                        </svg></a></span>
                                <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path
                                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                        </svg></a></span>
                            </div>

                            </div>
                            
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <div class="foot-link">
                            <ul class="mt-3 mt-md-5">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <div class="foot-link">
                            <ul class="mt-3 mt-md-5">
                                <li><a href="#">Sales software</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">API</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2 text-center">
                        <div class="foot-link">
                            <ul class="mt-3 mt-md-5">
                                <li><a href="#">What is CRM</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">Sales pipeline</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 text-center">
                        <div class="footer-search text-center mt-3 mt-md-5">
                            <h5>Subscribe to Our Newsletter</h5>
                            <div>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search"
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary foot-btn" type="button"
                                        id="button-addon2">Search</button>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <hr style="color: #000000; size: 10px;">
                <div class="row">
                    <div class="col-12">
                        <div class="copy-write text-center">
                            <h5>Copyright &copy 2023 Adwocat All right reserved</h5>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </footer>
    


   <script src="{{asset('/js/script.js')}}"></script>
    












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!-- latest jquery file -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script type="text/javascript">
  (function ($) {
    'use strict';
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })

  })(jQuery); 
  </script>
  </body>
</html>