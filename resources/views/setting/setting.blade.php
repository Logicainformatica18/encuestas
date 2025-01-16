@extends('template')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Ajustes</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
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
        onclick="New();$('#setting')[0].reset();setting.fotografia.src='https://placehold.co/300x300';">
        Agregar
    </button>
    <p></p>
  
  <!-- /.content -->
  {{-- {{ $setting->onEachSide(1)->links() }} --}}
    <p></p>
    <div id="mycontent">
        @include("setting.settingtable")
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
                            @for ($i=1; $i <=10;$i++)
                            <div class="col-4 col-sm-4 col-md-3 col-lg-4 col-xl-2 pt-2 text-center">
                               
                                Imágen {{ $i }}
                                    
                                <div class="btn btn-default btn-file col-9 ">
                                    <i class="fas fa-paperclip"></i> Subir
                                    <input type='file' id="imgInp{{$i}}" name="image_{{$i}}" onchange="readImage(this,'blah{{$i}}');">
                                </div> 
                                <div class="size-100 pt-2">
                                    
                                    <img id="blah{{$i}}" name="fotografia" src="https://placehold.co/300x300" alt="Tu imagen"
                                        class="img-bordered" width="100%">
                                </div>
                            </div>
                            @endfor
                            
                           
                        </div>
                        <div class="container row align-content-center">
                        @for ($i=1; $i <=10;$i++)
                        <div class="col-4 col-sm-4 col-md-3 col-lg-4 col-xl-2 pt-2">
                           
                            Color {{ $i }}
                           <input type="text"name="color_{{$i}}"class="form-control">     
                            
                        </div>
                        @endfor
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#setting')[0].reset(); setting.fotografia.src='https://placehold.co/300x300';"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success" onclick="settingStore()" id="create">
                    <input type="button" value="Modificar" class="btn btn-danger" onclick="settingUpdate();" id="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

 

@endsection
