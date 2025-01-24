<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->


    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}

    <link rel="shortcut icon" type="image/png" href="{{ asset('logo.png') }}" />

    <script src="{{ asset('axios.min.js') }}"></script>
    <script src="{{ asset('category.js') }}"></script>
    <script src="{{ asset('function.js') }}"></script>
    <script src="{{ asset('user.js') }}"></script>
    <script src="{{ asset('role.js') }}"></script>
    <script src="{{ asset('type.js') }}"></script>
    <script src="{{ asset('client.js') }}"></script>
    <script src="{{ asset('survey.js') }}"></script>
    <script src="{{ asset('survey_detail.js') }}"></script>
    <script src="{{ asset('selection.js') }}"></script>
    <script src="{{ asset('selection_detail.js') }}"></script>
    <script src="{{ asset('survey_client.js') }}"></script>
    <script src="{{ asset('schedule.js') }}"></script>
    <script src="{{ asset('registry.js') }}"></script>
    <script src="{{ asset('module.js') }}"></script>
    <script src="{{ asset('associate.js') }}"></script>


    <script src="{{ asset('resource.js') }}"></script>



    <script src="{{ asset('certification.js') }}"></script>

    <script src="{{ asset('registry_detail.js') }}"></script>
    <script src="{{ asset('course.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>


    <!-- Bootstrap 4 -->

    <!-- ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <!-- <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
     <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/template.css') }}" />
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> --}}
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet">

    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand" style="background: linear-gradient(to left, #023039,black);">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="../../#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>


            </ul>

            <div class="row">
                <div class="col col-lg-7">

                    <a class=" navbar-brand text-white" href="{{ url('perfil') }}">
                        {{ Auth::user()->roles[0]->name }}
                    </a>

                </div>
                <div class="col col-lg-1">

                </div>
                {{-- 
                <div class="col col-lg-4" style="justify-content: right; align-items: center; display: flex;">
                    <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="10%">
                    <a href="{{ route('logout') }}" style="color: white;">Cerrar Sesión</a>
                </div> --}}
                <div class="progress">
                    <div class="progress-bar text-bg-danger"id="progress_bar" style="width: 0%; height: 6px"
                        role="progressbar">
                    </div>

                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <aside
            class="main-sidebar sidebar-dark-primary elevation-4"style="background: radial-gradient(circle, #023039,black); color: white">
            <!-- Brand Logo -->
            <a href="../../" class="brand-link">

                <span class="brand-text font-weight-light center">
                    <img src="{{ asset('logo.png') }}" alt="AdminLTE Logo" class="" width="200px"
                        style="filter: brightness(0) invert(1);">
                </span>
                <p></p>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <br>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-1 pb-1 mb-3 d-flex">
                    <div class="image">
                        @if (Auth::user()->photo == '' && Auth::user()->sex == 'M')
                            <img class="img-circle elevation-2" src="{{ asset('male.png') }}" alt="User Avatar"
                                id="blah">
                        @elseif(Auth::user()->photo == '' && Auth::user()->sex == 'F')
                            <img class="img-circle elevation-2" src="{{ asset('female.png') }}"
                                alt="User Avatar"id="blah">
                        @elseif(Auth::user()->google_id != '' && Auth::user()->photo == '')
                            <img src="{{ Auth::user()->photo }}" class="img-circle elevation-2"
                                alt='User Avatar'id="blah">
                        @else
                            <img src="{{ Auth::user()->photo }}" class="img-circle elevation-2"
                                alt='User Avatar'id="blah">
                        @endif


                    </div>
                    <div class="info">
                        <a href="../../#" class="d-block"style="font-size:20px">{{ Auth::user()->names }}</a><br>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        {{-- <li class="nav-item has-treeview menu-open">
                            <a href="../../#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tablero
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                 <li class="nav-item">
                                    <a href="../.././index.html" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v1</p>
                                    </a>
                                </li>
                                 <li class="nav-item">
                                    <a href="../.././index2.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v2</p>
                                    </a>
                                </li>
                               <li class="nav-item">
                                    <a href="../.././index3.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dashboard v3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                 
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Layout Options
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">6</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/layout/top-nav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/layout/top-nav-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Top Navigation + Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/layout/boxed.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Boxed</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/layout/fixed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Sidebar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/layout/fixed-topnav.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Navbar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/layout/fixed-footer.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fixed Footer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/layout/collapsed-sidebar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Collapsed Sidebar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Charts
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>ChartJS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Flot</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inline</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    UI Elements
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/UI/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/icons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Icons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/buttons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Buttons</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/sliders.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sliders</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/modals.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Modals & Alerts</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/navbar.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Navbar & Tabs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/timeline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Timeline</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/UI/ribbons.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Ribbons</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Forms
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/forms/general.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/advanced.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Advanced Elements</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/editors.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Editors</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/forms/validation.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Validation</p>
                                    </a>
                                </li>
                            </ul>
                        </li>  --}}
                        @role('Administrador|Administrador')
                            <li class="nav-item has-treeview menu-open">
                                <a href="../../#" class="nav-link" style="background-color: #00bf6f;color:black">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Módulos
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview ">


                                    <li class="nav-item">
                                        <a href="{{ route('usuarios.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('usuario.png') }}"class="nav-icon" alt=""
                                                srcset="" width="30px">
                                            <p>Usuarios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('encuestas.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('formularioss.png') }}" alt="" srcset=""
                                                width="30px">
                                            <p>Formularios</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('seleccion.index') }}" class="nav-link">
                                            {{-- <i class="far fa-circle nav-icon"></i> --}}
                                            <img src="{{ asset('listas.png') }}" alt="" srcset=""
                                                width="30px">
                                            <p>Listas</p>
                                        </a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="{{ route('tipos.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tipos</p>
                                        </a>
                                    </li> --}}

                                    {{-- <li class="nav-item">
                                        <a href="{{ url('ajustes') }}" class="nav-link">
                                            <img src="{{ asset('categorias.png') }}" alt="" srcset=""
                                                width="30px">
                                            <p>Ajustes</p>
                                        </a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="{{ url('recursos') }}" class="nav-link">
                                            <img src="{{ asset('categorias.png') }}" alt="" srcset=""
                                                width="30px">
                                            <p>Recursos</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endrole


                        @role('Postulante')
                            @php
                                $survey_ = Session::get('survey_');
                                $enumeracion_ = 0;
                            @endphp
                            <li class="nav-item has-treeview menu-open">
                                <a href="../../#" class="nav-link" style="background-color: #00bf6f;color:black">
                                    <i class="nav-icon fas fa-table"></i>
                                    <p>
                                        Personal
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>



                                <ul class="nav nav-treeview ">
                                    @foreach ($survey_ as $item)
                                        @php
                                            $enumeracion_++;
                                        @endphp

                                        <li class="nav-item">
                                            <a href="{{ url('inscripcion/' . $item->id) }}" class="nav-link">
                                                <img src="{{ asset('formularioss.png') }}"class="nav-icon" alt=""
                                                    srcset="" width="30px">
                                                <p> {{ $item->url }}</p>
                                            </a>
                                        </li>
                                        @if ($loop->last && $enumeracion_ == 10)
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <img src="{{ asset('formularioss.png') }}"class="nav-icon"
                                                    alt="" srcset="" width="30px">
                                                <p> #</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                <img src="{{ asset('formularioss.png') }}"class="nav-icon"
                                                    alt="" srcset="" width="30px">
                                                <p> #</p>
                                            </a>
                                        </li>
                                        @else
                                           
                                        @endif
                                    @endforeach


                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                        <a href="{{ route('usuarios.index') }}" class="nav-link">
                                           
                                            <img src="{{ asset('usuario.png') }}"class="nav-icon" alt=""
                                                srcset="" width="30px">
                                            <p>Usuarios</p>
                                        </a>
                                    </li> --}}







                        @endrole



                        {{-- <li class="nav-header">EXAMPLES</li>
                        <li class="nav-item">
                            <a href="../../pages/calendar.html" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Calendar
                                    <span class="badge badge-info right">2</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Mailbox
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/mailbox/mailbox.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inbox</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/mailbox/compose.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Compose</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/mailbox/read-mail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Read</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Pages
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/examples/invoice.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Invoice</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/profile.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Profile</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/e-commerce.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>E-commerce</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/projects.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Projects</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/project-add.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Add</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/project-edit.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Edit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/project-detail.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Project Detail</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/contacts.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Contacts</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon far fa-plus-square"></i>
                                <p>
                                    Extras
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../pages/examples/login.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Login</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/register.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/forgot-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Forgot Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/recover-password.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Recover Password</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/lockscreen.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Lockscreen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/legacy-user-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Legacy User Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/language-menu.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Language Menu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/404.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 404</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/500.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Error 500</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/pace.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pace</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../pages/examples/blank.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Blank Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../../starter.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Starter Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">MISCELLANEOUS</li>
                        <li class="nav-item">
                            <a href="https://adminlte.io/docs/3.0" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Documentation</p>
                            </a>
                        </li>
                        <li class="nav-header">MULTI LEVEL EXAMPLE</li>
                        <li class="nav-item">
                            <a href="../../#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon fas fa-circle"></i>
                                <p>
                                    Level 1
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../../#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="../../#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>
                                            Level 2
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="../../#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../../#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="../../#" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Level 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="../../#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Level 2</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../../#" class="nav-link">
                                <i class="fas fa-circle nav-icon"></i>
                                <p>Level 1</p>
                            </a>
                        </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Important</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li> --}}


                    </ul>
                </nav>





                <!-- /.sidebar-menu -->
                <div class="user-panel pl-6 mt-3 pb-3 mb-3 d-flex">




                </div>

                <div class="user-panel pl-2 mt-3 pb-3 mb-3 d-flex">
                    <a href="{{ route('logout') }}"class="d-block" style="color: white;">
                        <img src="{{ asset('CERRAR-SESION-BLANCO.png') }}" alt="" width="100%">
                        <div class="info">

                            Cerrar Sesión
                    </a>
                </div>




            </div>
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Main content -->
    <section class="content">




        <!-- Main content -->
        <div class="content-wrapper"id="targetDiv">
            <!-- Main content -->
            <section class="content p-3">

                @yield('content')


            </section>
            <!-- /.content -->
        </div>

        <!-- /.content-wrapper -->
        <footer class="main-footer"style="background: linear-gradient(to left, #023039,black); color: white">
            <span
                style="background-image: linear-gradient(45deg, rgb(0, 0, 0), red); -webkit-background-clip: text; color: transparent;">
                <a href="https://anthonycode.com"target="_blank"><b>Copyright © 2025</b> </a></span>
            <div class="float-right d-none d-sm-inline-block">
            </div>
        </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </section>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <!--  USO DE DATATABLE PARA GENERAR PDF - CSV  -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-html5-1.6.4/b-print-1.6.4/sl-1.3.1/datatables.min.css" />

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-colvis-1.6.4/b-html5-1.6.4/b-print-1.6.4/sl-1.3.1/datatables.min.js">
    </script>


    <script>
        $(document).ready(function() {
            // Inicializar el editor Summernote extendido
            $('#my-textarea').summernote({
                height: 400, // Altura del editor

                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript',
                        'subscript', 'clear'
                    ]],
                    ['fontname', ['fontname']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video', 'hr']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                    ['history', ['undo', 'redo']]
                ],
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact',
                    'Tahoma', 'Times New Roman', 'Verdana', 'Manrope', 'Montserrat', 'Montserrat-Bold',
                    'Montserrat-SemiBold', 'Montserrat-Regular'
                ], // Agrega Montserrat aquí
                fontNamesIgnoreCheck: ['Montserrat', 'Montserrat-Regular', 'Montserrat-Bold',
                    'Montserrat-SemiBold'
                ] // Ignora el chequeo para la fuente personalizada


            });
        });
    </script>
    <script>
        function reset_textarea() {

            document.getElementsByClassName('note-editable')[0].innerHTML = "";
        }
    </script>
    <script>
        function datatable_load() {
            $("#example1").DataTable({
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "No se encontró nada, lo siento",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No records available",
                    "infoFiltered": "(filtered from _MAX_ total records)",
                    "search": "Busqueda avanzada : ",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                },
                "info": true,
                "responsive": false,
                "autoWidth": false,
                "paging": true,
                "searching": true,
                "ordering": false,

                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        download: 'open',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    {
                        extend: 'excelHtml5',
                        text: 'Excel',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    }, {

                        extend: 'csvHtml5',
                        text: 'CSV',
                        exportOptions: {
                            modifier: {
                                search: 'none'
                            }
                        }

                    },
                    {
                        extend: 'print',
                        text: 'Imprimir',
                        autoPrint: true
                    },
                    {
                        extend: 'copyHtml5',
                        text: 'Copiar Datos',
                        exportOptions: {
                            modifier: {
                                page: 'current'
                            }
                        }
                    },
                    {
                        extend: 'collection',
                        text: 'Mostrar Campos',
                        buttons: ['columnsVisibility'],
                        visibility: true
                    }


                ],
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'multi',
                    selector: 'td:first-child'
                },
                // order: [
                //     [1, 'asc']
                // ]

            });
        }
        datatable_load();
    </script>


</body>

</html>
