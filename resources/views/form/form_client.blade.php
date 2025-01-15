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
    <title>ComexLat</title>
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
    <nav class="navbar navbar-expand-lg" style="height: 50px">
        <div class="container-fluid" style="background: linear-gradient(95deg, #F9DD6A 5%, #F59C1C 90%); height: 50px; padding: 0;" >
            <a class="text-start position-relative navbar-brand me-0 py-0 m-2" href="{{ url('/') }}">
                <img src="{{ asset('logo.png') }}" alt="img-fluid"
                    width="120px" style="margin-left: 0;  ">
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
                <ul class="navbar-nav align-items-center mb-2 mb-lg-0 mx-auto" style="letter-spacing: 1px;">
                    <li class="nav-item">
                        <!-- Nav items -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="main-wrapper flex-column">
        <header class="header">
          
        </header>
    </div>
    
    <div class="container-fluid">
        <div class="row">
            <!-- Primera Columna -->
            <div class="col-12 col-md-11 col-lg-11 col-xl-6" style="background-color: #ffffff;">
                <div class="container text-center pt-3">
                    <p></p>
                    <img width="60%" src="../imageusers/{{ $survey->front_page }}" alt=""
                        style="border-radius: 30px;">
    
                    <h3 class="pt-4 fs-7"><b>{{ $survey->title }}</b></h3>
                </div>
                <hr>
                <div class="container" style="padding-left: 50px;">
                    @php
                        echo $survey->description;
                    @endphp
                    <div id="mycontent" style="margin-top: -30px;" class="">
                        @include('form.form_clienttable')
                    </div>
                </div>
                <p>&nbsp;</p>
            </div>
    
            <!-- Segunda Columna -->
            <div class="d-none   d-xl-block col-lg-12 col-xl-6  ">
                <div class="sticky-container">
                    <img src="{{ asset('baner.jpg') }}" alt="Imagen" class="img-fluid" style="border-radius: 0px;border-left:solid 5px black" >
                </div>
            </div>
            <div class=" d-block d-md-block d-lg-block d-sm-block   col-12   d-xl-none col-lg-12 col-xl-6  ">
           
                    <img src="{{ asset('baner.jpg') }}"  style="width:100%">
            
            </div>
        </div>
    </div>
    
    <style>
        .sticky-container {
            position: sticky;
            top: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: right;
            justify-content: right;
     
        }
    
        .sticky-container img {
            max-width: 100%; /* Ajusta el ancho máximo al 90% del contenedor */
            height: 100%; /* Mantiene la proporción de la imagen */
            object-fit: contain; /* Escala la imagen sin distorsión */
            margin-right: -15px;
            
            
        }
    
        .granulated-background {
            border: solid 1px black;
            /* background: linear-gradient(to right, #F59C1C, black); */
            background-size: 5px 5px; /* Tamaño del patrón */
        }
    </style>
    


 







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
                    <a class="nav-link fs-3 text-dark active" aria-current="page" href="{{ url('/') }}">Inicio</a>
                </li>
            
               
                {{-- <li class="nav-item mt-3"><a class="nav-link fs-3 text-dark" href="#">Pages</a></li> --}}
            </ul>
           
            <br>
            <a href="{{ url('logout') }}" class="btn btn-secondary w-100 py-2">Salir</a>
            {{-- <form class="d-flex mt-3" role="search">
                    <a href="main/authentication-login2.html" class="btn btn-primary w-100 py-2">Login</a>
                </form> --}}
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
    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <h1 class="text-center mb-4">Política de Privacidad</h1>
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <h2 class="fs-4 mb-3">1. Introducción</h2>
                                        <p>La presente Política de Privacidad tiene por finalidad informarle sobre cómo LA EMPRESA con RUC Nº 20613359550 y con domicilio en Av. Circunvalación Nro. 669 Interior 402, Distrito de Santiago De Surco, Provincia y Departamento de Lima, Lima; realiza el tratamiento de Datos Personales que recopila en forma independiente por medio de los distintos formularios físicos, electrónicos disponibles en el sitio Web, aplicaciones y demás entornos electrónicos que disponga LA EMPRESA incluyendo los consentimientos otorgados vía telefónica u otras formas de comunicación en las que se haga referencia a esta Política de Privacidad.</p>
                    
                                        <h2 class="fs-4 mb-3">2. Objetivo y Finalidad</h2>
                                        <p>En LA EMPRESA sabemos de la importancia y de la elevada consideración que tiene la privacidad de nuestros clientes y de todas aquellas personas que se interesan por nuestros productos y servicios como los potenciales clientes (en adelante “Usuarios”). Siendo consecuentes con esta consideración tenemos el compromiso de respetar su privacidad y proteger la confidencialidad de su información privada y datos personales. Y es por ello que el objetivo de esta política de privacidad es dar a conocer a nuestros Usuarios la manera en que se recogen, se tratan y se protegen los datos personales, definida según la Ley N° 29733 Ley de Protección de Datos Personales. La finalidad del sitio Web es dar a conocer los productos y servicios que comercializa LA EMPRESA y dar información sobre los mismos, así como facilitar otro tipo de información que creamos que puede ser de interés y crear un espacio de comunicación para los Usuarios.</p>
                    
                                        <h2 class="fs-4 mb-3">3. Legislación</h2>
                                        <p>Esta política está regulada por la Legislación peruana y en particular por:</p>
                                        <ul>
                                            <li>Ley N° 29733 - Ley de Protección de Datos Personales.</li>
                                            <li>Decreto Supremo N° 003-2013-JUS, que aprueba el Reglamento de la Ley N° 29733.</li>
                                            <li>Directiva de Seguridad de la Información, aprobada por la Resolución Directoral N° 019-2013-JUS/DGPDP.</li>
                                        </ul>
                    
                                        <h2 class="fs-4 mb-3">4. Uso Autorizado de Datos Personales</h2>
                                        <p>Con la finalidad de brindar productos y servicios, LA EMPRESA informa a los Usuarios que, bajo las normas vigentes (Ley N° 29733 y su reglamento), se encuentra autorizada para tratar aquellos datos personales otorgados de forma física o digital por el Usuario o a los que LA EMPRESA accede de manera legítima sobre su información personal. Esto incluye los datos personales proporcionados a futuro por los Usuarios, o los que sean generados por LA EMPRESA bajo la prestación de los servicios.</p>
                                        <p>En ese sentido, LA EMPRESA requiere del consentimiento libre, previo, expreso, inequívoco e informado del titular de los datos personales para el tratamiento de estos, salvo en los casos de excepción expresamente establecidos por Ley. Por ello, LA EMPRESA no requiere consentimiento para tratar la información del Usuario obtenida de fuentes accesibles al público, gratuitas o no; asimismo, podrá usar sus datos personales de fuentes no públicas, siempre que dichas fuentes cuenten con el consentimiento del Usuario para tratar y transferir dichos datos personales.</p>
                    
                                        <h2 class="fs-4 mb-3">5. Finalidad de los Tratamientos de la Información Personal</h2>
                                        <p>LA EMPRESA tratará la información proporcionada por el Usuario con la finalidad de ejecutar cualquier relación contractual, comercial y/o de cualquier índole, que mantenga y/o mantendrá con el Usuario, para realizar venta de inmuebles y gestión de transacciones comerciales, cobranza y facturación del servicio contratado, atención a través de telemarketing o presencial; así como cumplir con las obligaciones contractuales y legales.</p>
                                        <p>Para el desarrollo de las finalidades mencionadas en el párrafo anterior, LA EMPRESA puede transferir sus datos personales a proveedores a nivel nacional y/o a empresas subsidiaria. En caso no tenga un vínculo contractual con LA EMPRESA, los Datos Personales de los Usuarios serán tratados con la finalidad de gestionar los datos personales de potenciales clientes para fines comerciales.</p>
                    
                                        <h2 class="fs-4 mb-3">6. Finalidades Opcionales</h2>
                                        <p>De manera opcional, sus datos personales podrán ser utilizados por LA EMPRESA para las siguientes finalidades:</p>
                                        <ul>
                                            <li>Ofrecimiento de productos o servicios y promociones por parte de LA EMPRESA.</li>
                                            <li>Ofrecimiento de productos o servicios y promociones de subsidiarias.</li>
                                        </ul>
                                        <p>El Usuario podrá en todo momento revocar el consentimiento otorgado expresamente.</p>
                    
                                        <h2 class="fs-4 mb-3">7. Ejercicio de los Derechos</h2>
                                        <p>Los Usuarios podrán dirigir su solicitud de ejercicio de los derechos en los términos que establece el Reglamento de la Ley N° 29733, enviándonos un correo electrónico a la siguiente dirección: <a href="mailto:administración@comexlat.com">administración@comexlat.com</a> adjuntando los siguientes documentos:</p>
                                        <ul>
                                            <li>Solicitud de derechos ARCO, debidamente completada y firmada.</li>
                                            <li>Copia simple y legible de su Documento Nacional de Identidad.</li>
                                            <li>En caso de actuar mediante un representante, adjuntar Carta poder con firma legalizada notarialmente no mayor a 30 días y copia de Documento Nacional de Identidad del representante.</li>
                                            <li>Otros, en caso considere necesario agregar más información para el sustento de su solicitud.</li>
                                        </ul>
                    
                                        <h2 class="fs-4 mb-3">8. Videovigilancia</h2>
                                        <p>LA EMPRESA cuenta con un sistema de videovigilancia en sus instalaciones a nivel nacional, para la seguridad de estas. La administración de nuestro sistema de videovigilancia cumple con la normativa de protección de datos personales y está regido por las disposiciones de esta Política, en cuanto le sean aplicables. Asimismo, LA EMPRESA ha adoptado los niveles de seguridad y de protección de datos personales legalmente requeridos, y ha instalado todos los medios y medidas técnicas a su alcance.</p>
                                        <p>La información captada mediante nuestros sistemas de videovigilancia se conservará durante un plazo de 30 días y serán gestionadas en el banco de datos de LA EMPRESA, inscrito en el Registro Nacional de Protección de Datos Personales con la denominación “Videovigilancia”.</p>
                    
                                        <h2 class="fs-4 mb-3">9. Vigencia y Modificación de la Presente Política de Privacidad</h2>
                                        <p>La Política de privacidad Web de LA EMPRESA se reserva el derecho a modificar su Política de Privacidad Web en el supuesto de que exista un cambio en la legislación vigente, doctrinal, jurisprudencial o por criterios propios empresariales. Si se introdujera algún cambio en esta Política, el nuevo texto se publicará en este mismo sitio Web, por lo que se recomienda a los Usuarios revisarla periódicamente.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>




    <!-- sample modal content -->
    <div class="modal fade" id="bs-example-modal-xlg2" tabindex="-1" aria-labelledby="bs-example-modal-lg"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-5">
                        <div class="row justify-content-justify">
                            <div class="col-lg-12">
                                <h1 class="text-center mb-4">Declaración del Titular sobre el Tratamiento de sus Datos Personales y su Consentimiento</h1>
                                <div class="card shadow-sm">
                                    <div class="card-body">
                                        <p>
                                            Con mi firma manuscrita, mi huella biométrica y/o mi firma electrónica o digital (pudiendo ser esta mediante mi voz, claves, clic en páginas web y/o plataformas digitales y/o cualquier factor de autenticación o combinación que permita dejar constancia de mi aceptación), declaro que he sido informado en forma libre, previa, expresa, informada e inequívoca respecto a que mis datos personales, así como aquellos datos sensibles, que proporcione a LA EMPRESA en este formulario, serán incorporados en su banco de datos personales y serán tratados con todas las medidas de seguridad y confidencialidad establecidas en la Ley, su Reglamento y demás normas complementarias y sustitutorias.
                                        </p>
                                        <p>
                                            LA EMPRESA ha informado previamente al titular de los datos personales en forma detallada, sencilla, expresa e inequívoca de los alcances, que los datos aquí captados serán tratados para contactarse con el titular de los datos y cumplir con los fines detallados en el formulario.
                                        </p>
                                        <p>
                                            Asimismo, con la aceptación del presente formulario declaro conocer y estar de acuerdo con el tratamiento de mis datos personales según lo informado en este formulario y en la Política de Privacidad publicada en la página web, teniendo pleno conocimiento que, para las finalidades descritas en este formulario, inclusive en los supuestos de encargo y transferencia de datos a favor de empresas subsidiarias y/o flujo transfronterizo, no se requiere de mi consentimiento expreso.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-danger-subtle text-danger  waves-effect text-start"
                        data-bs-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
