<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="{{asset('logo.png')}}" />
    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
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
    <!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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

<body id="targetDiv">
    <!-- Preloader #f49a1a-->

   
 

    <div class="container-fluid py-1">
        <div id="mycontent" class="p-5">
            @include('postulation.postulation_clienttable')
        </div>
        {{-- <div class="row">
            <!-- Primera Columna -->
            <div class="col-12 col-md-12 col-lg-12 col-xl-12" style="background-color: #ffffff;">
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
                    
                </div>
                <p>&nbsp;</p>
            </div>
 
            <div class="d-none   d-xl-block col-lg-12 col-xl-6  ">
                <div class="sticky-container">
                    <img src="{{ asset('baner.jpg') }}" alt="Imagen" class="img-fluid"
                        style="border-radius: 0px;border-left:solid 5px black">
                </div>
            </div>
            <div class=" d-block d-md-block d-lg-block d-sm-block   col-12   d-xl-none col-lg-12 col-xl-6  ">

                <img src="{{ asset('baner.jpg') }}" style="width:100%">

            </div>
        </div> --}}
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
            max-width: 100%;
            /* Ajusta el ancho máximo al 90% del contenedor */
            height: 100%;
            /* Mantiene la proporción de la imagen */
            object-fit: contain;
            /* Escala la imagen sin distorsión */
            margin-right: -15px;
            margin-top: -6px; 

        }

        .granulated-background {
            border: solid 1px black;
            /* background: linear-gradient(to right, #023039, black); */
            background-size: 5px 5px;
            /* Tamaño del patrón */
        }


    </style>


  







    {{-- <footer class="footer-part pt-4 pb-3 py-2" style="background-color:#000000;">

        <div class="container">
            <div class="justify-content-center">

                <div class="text-center">


                    <p class="mb-0 text-white">
                        <a class="d-none d-sm-none d-sm-block d-md-block d-lg-block  d-xl-block display-1 fs-4 text-white text-hover-primary  border-primary"
                            href="#" target="_blank">
                            Copyright 2025, ComexLat | &nbsp;&nbsp; Todos los Derechos reservados
                        </a>
                        <a class="d-sm-none  display-1 fs-2 text-center text-white text-hover-primary  border-primary"
                            href="#" target="_blank">
                            Copyright 2025, ComexLat - <br> Todos los Derechos reservados
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </footer> --}}
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
                                <h5 class="text-warning text-center" style="font-size: 1.65rem">TRATAMIENTOS DE DATOS PERSONALES</h5>
                                <p></p>
                                <p style="text-align: justify; font-size: 15px;">
                                    Declaro haber sido informado, conforme a Ley N° 29733 - Ley de Protección de Datos Personales
                                    (“la Ley”) y al Decreto Supremo 003-2013/JUS - Reglamento de la Ley (“el Reglamento)”, doy mi
                                    consentimiento libre, previo , informado, expreso e inequívoco para que <strong>AYBAR S.A.C.
                                    </strong> realice el tratamiento de mis datos personales que le proporcione
                                    de manera física o digital , con la finalidad de ejecutar cualquier relación contractual que
                                    mantengo
                                    y/o mantendré con la misma, contactarme y para fines estadísticos y/o analíticos.
                                    <br><br>
                                    Declaro mi derecho de revocar este consentimiento en cualquier momento.
                                    Los datos personales entregados a <strong>AYBAR S.A.C.</strong> serán almacenados mientras dure mi
                                    relación contractual, comercial y/o de cualquier índole con <strong>AYBAR S.A.C.</strong> y hasta
                                    por 10
                                    años de culminada la misma en el banco de datos de su titularidad, con RUC 20603865813 y con
                                    domicilio en Av. Circunvalación del Golf Los Incas N° 134 (Torre B Piso 19) Distrito de Santiago de
                                    Surco, Provincia y Departamento de Lima.
                                    <br><br>
                                    <strong>AYBAR S.A.C.</strong> podrá transferir sus datos personales a nivel nacional y/o
                                    internacional.
                                    sujetándose todos estos a las mismas obligaciones y medidas de seguridad, técnicas y legales
                                    descritas en la Ley y el Reglamento.
                                    <br><br>
                                    De igual modo, la información podrá ser transferida a las autoridades o terceros autorizados
                                    por ley bajo la regulación nacional y/o internacional vigente, incluyendo la Ley No. 29733,
                                    su reglamento y aquellas que las modifiquen o sustituyan, así como las vinculadas a las autoridades
                                    que fiscalizan la labor de <strong>AYBAR S.A.C.</strong><br><br>
                                    Declaro conocer mi derecho a solicitar acceso a mis datos personales y conocer su tratamiento,
                                    así como, solicitar su actualización, inclusión, rectificación, cancelación y supresión, pudiendo
                                    oponerme a su uso o divulgación, pudiendo dirigir mi solicitud de ejercicio de los derechos a través
                                    de la dirección especificada en la página web de <strong>AYBAR S.A.C.</strong>, teniendo a salvo
                                    además el
                                    ejercicio de la tutela de sus derechos ante la Autoridad Nacional de Protección de Datos Personales
                                    en vía de reclamación o ante el Poder Judicial mediante la acción de hábeas data.
                                    <br><br> Los datos personales
                                    recolectados por <strong>AYBAR S.A.C.</strong> son obligatorios, la negativa a suministrarlos
                                    supondrá la imposibilidad de concretar el fin previsto.
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
