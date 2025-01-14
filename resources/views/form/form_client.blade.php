<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/jpg" href="{{ asset('ayba/favicon.png') }}" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>AybarCorp</title>
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/libs/aos/dist/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('function.js') }}"></script>
    <script src="{{ asset('survey_client.js') }}"></script>
    <script src="{{ asset('client.js') }}"></script>
    <script src="{{ asset('associate.js') }}"></script>
</head>

<style>
    body {
        font-family: 'Montserrat', sans-serif;
        /* Aplica Montserrat como fuente principal */
        font-size: 16px;
        /* Tamaño base del texto */

        line-height: 1.6;
        /* Altura de línea para mejor legibilidad */
    }
</style>

<body>
    <!-- Preloader #f49a1a-->
    <div class="preloader"><img src="{{ asset('ayba/1.png') }}" alt="loader" class="lds-ripple img-fluid" /></div>
    <div style="background-color: #000000; height: 10px;margin-bottom: -10px;"
        class="container-fluid  ">    
    </div>
    <div id="main-wrapper flex-column">
        <header class="header" >
            <nav class="navbar navbar-expand-lg"style="background-color: #F59C1C;">
                <div class=" ">

                    <a class="text-start position-relative navbar-brand me-0 py-0 m-2 " href="{{ url('/') }}"> <img
                            src="{{asset('logo.png')}}" alt="img-fluid" width="150px"style="margin-left:0%;filter: brightness(0) invert(1);">
                    </a>



                    <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <button class="navbar-toggler border-0 p-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <i class="ti ti-menu-2 fs-9"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="letter-spacing: 1px; ">
                            <li class="nav-item ">
                            
                            </li>
                         
                            
                        </ul>
                    </div>
                </div>
            </nav>
            
        </header>


<div class="row">
    <div class="col-6" style="background-color:#ffffff">
        <div class="container text-center">
            <p></p>
            <img width="80%" 
            src="../imageusers/{{$survey->front_page}}" 
            alt="" 
            style="border-radius:30px; border:solid 2px black; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);">
       
            <h3 class="pt-4 fs-9"><b>{{$survey->title}}</b></h3>
        </div>
        <hr>
        <div class="container"style="padding-left:50px;padding-right:50px">
           
            
            @php
                    echo $survey->description;
            @endphp
            <div id="mycontent"style="margin-top:-30px" class="">

                @include('file_clienttable')
                
            </div>
          
        </div>
        <p>&nbsp </p>
        
    </div>
    <div class="col-6" style="background-color:#1a1a1a;border-top-left-radius:20px">
        www
    </div>
</div>

       

     


        <footer class="footer-part pt-4 pb-3 py-2" style="background-color:#000000;">

            <div class="container">
                <div class="justify-content-center">

                    <div class="text-center">


                        <p class="mb-0 text-white">
                            <a class="d-none d-sm-none d-sm-block d-md-block d-lg-block  d-xl-block display-1 fs-4 text-white text-hover-primary  border-primary"
                                href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, ComexLat&nbsp;&nbsp; | &nbsp;&nbsp; Todos los Derechos reservados
                            </a>
                            <a class="d-sm-none  display-1 fs-2 text-center text-white text-hover-primary  border-primary"
                                href="https://anthonycode.com/" target="_blank">
                                Copyright 2025, ComexLat <br> Todos los Derechos reservados
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </footer>
        <div class="offcanvas offcanvas-start matdash-lp-offcanvas" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header p-4">
                <img src="{{ asset('ayba/1.png') }}" alt="matdash-img" class="img-fluid" width="150" />
            </div>
            <div class="offcanvas-body p-4">
                <ul class="navbar-nav justify-content-end flex-grow-1">
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between fs-3 text-dark"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuarios <i class="ti ti-chevron-down fs-14"></i>
                        </a>
                        <ul class="dropdown-menu ps-2">
                            <li><a class="dropdown-item text-dark" href="{{url('usuarios')}}">Usuarios</a></li>
                            <li><a class="dropdown-item text-dark" href="#">Roles</a></li>
                     
                        </ul>
                    </li> --}}

                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark active" aria-current="page"
                            href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark active" aria-current="page"
                            href="{{ url('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark active" aria-current="page"
                            href="{{ url('proyectos') }}">Proyectos</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a class="nav-link fs-3 text-dark active" aria-current="page"
                            href="{{ url('blog') }}">Blogs</a>
                    </li>
                    {{-- <li class="nav-item mt-3"><a class="nav-link fs-3 text-dark" href="#">Pages</a></li> --}}
                </ul>
                <a href="{{ url('login') }}" class="btn btn-primary w-100 py-2">Administrar</a>
                <br>
                <a href="{{ url('logout') }}" class="btn btn-secondary w-100 py-2">Salir</a>
                {{-- <form class="d-flex mt-3" role="search">
                    <a href="main/authentication-login2.html" class="btn btn-primary w-100 py-2">Login</a>
                </form> --}}
            </div>
        </div>





    



    </div>




 
    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/aos/dist/aos.js') }}"></script>
    <script src="{{ asset('assets/js/landingpage/landingpage.js') }}"></script>

    <script type="module" src="https://cdn.jsdelivr.net/npm/@justinribeiro/lite-youtube@1/lite-youtube.min.js"></script>
</body>

</html>
