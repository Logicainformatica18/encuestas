@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Ajustes</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Ajustes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#setting')[0].reset();">
        Agregar
    </button>
    <p></p>

    <!-- /.content -->
    {{-- {{ $setting->onEachSide(1)->links() }} --}}
    <p></p>
    <div id="mycontent">
        @include('setting.settingtable')
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="setting" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}

                        Título<input name="title" type="text" class="form-control">
                        Descripción<input name="description" type="text" class="form-control">

                        <br>


                        <div class="container row align-content-center">

                            <h6 >Logotipo</h6>
                   
                            <div class="col-12 col-sm-12 ">
                                <input type='file'  name="image_1" class="form-control">
                            </div>
                          
                            <h6 class="pt-3">Portada  Login(1240*915 aprox)</h6>
                    
                            <div class="col-12 col-sm-12 ">
                                <input type='file'  name="image_2" class="form-control">
                           
                            </div>
                   
                           
                        </div>

                        <h6 class="pt-3">Botón Login</h6>

                        <div class="row align-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Color Fondo
                                <input type="color" name="color_1" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Color Texto
                                <input type="color" name="color_2" class="form-control">
                            </div>
                        </div>
                        <p></p>
                        <h6>Barra Lateral Izquierda (Se elegirá para la marca)</h6>

                        <div class="row align-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo degradado 01
                                <input type="color" name="color_3" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo degradado 02
                                <input type="color" name="color_4" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                Color Texto
                                <input type="color" name="color_5" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo módulo
                                <input type="color" name="color_6" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Color Texto módulo
                                <input type="color" name="color_7" class="form-control">
                            </div>
                        </div>
                        <p></p>
                        <h6>Barra Superior</h6>

                        <div class="row align-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo degradado 01
                                <input type="color" name="color_8" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo degradado 02
                                <input type="color" name="color_9" class="form-control">
                            </div>
                        </div>
                        <p></p>
                        <h6>Barra Inferior</h6>

                        <div class="row align-content-center">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo degradado 01
                                <input type="color" name="color_10" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                Fondo degradado 02
                                <input type="color" name="color_11" class="form-control">
                            </div>
                        </div>
                        <p></p>
                        <h6>Textos</h6>

                        <div class="row align-content-center">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                Texto 1
                                <input type="color" name="color_12" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                Texto 2
                                <input type="color" name="color_13" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                Texto 3
                                <input type="color" name="color_14" class="form-control">
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                Texto 4
                                <input type="color" name="color_15" class="form-control">
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning"
                        onclick="New();$('#setting')[0].reset(); setting.fotografia.src='https://placehold.co/300x300';"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success" onclick="settingStore()"
                        id="create">
                    <input type="button" value="Modificar" class="btn btn-danger" onclick="settingUpdate();"
                        id="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
