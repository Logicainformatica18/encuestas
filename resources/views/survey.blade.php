@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header col-2"  >
        <h1 >Formularios</h1>
        {{ session('success') }}
       
    </section>
    <p></p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#survey')[0].reset();reset_textarea()">
        Agregar
    </button>
    <p></p>

    <!-- /.content -->
    {{-- {{ $survey->onEachSide(5)->links() }} --}}
    <div id="mycontent" >
        @include('surveytable')
    </div>


    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <form action="" method="post" role="form" id="survey" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Título : <input type="text" name="title" id="title" class="form-control">
                        Tipo
                        <select name="type" id="type" class="form-control">
                            {{-- <option value="encuesta">Encuesta</option> --}}
                            <option value="ficha">Ficha</option>
                            <option value="postulation">Postulación</option>
                        </select>
                        <p></p>
                        <div class="container align-content-center">
                            <div class="form-group row">
                                <p></p>
                                Portada
                                <div class="col-6">
                                    <div class="btn btn-default btn-file col-9">
                                        <i class="fas fa-paperclip"></i> Subir
                                        <input type='file' id="imgInp" name="front_page" onchange="readImage(this);">
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="size-100 container">
                                        <br>
                                        <img id="blah" name="fotografia" src="https://placehold.co/300x300" alt="Tu imagen"
                                            class="img-bordered" width="100%">
                                    </div>
                                </div>
                             


                            </div>
                            
                        </div>
                        Descripción : 
                        <textarea id="my-textarea"style="height:'900px'" name="description">
                 
                        </textarea>
                     
                         Elija visibilidad
                        <select name="state" id="state" class="form-control">
                            <option value="public">Público</option>
                            <option value="private">Privado</option>
                        </select>
                        Fecha Inicio :
                        <input type="date" name="date_start" id="date_start" class="form-control">
                        Fecha Fin :
                        <input type="date" name="date_end" id="date_end" class="form-control">
                        Hora Inicio :
                        <input type="time" name="hour_start" id="hour_start" class="form-control" value="19:00:00">
                        Hora Fin :
                        <input type="time" name="hour_end" id="hour_end" class="form-control"value="22:00:00">
                        Detalle : <input type="text" name="detail" id="detail" class="form-control">
                        Url Menú : <input type="text" name="url" id="url" class="form-control">
                        <p></p>
                        <div class="form-check">
                            <input type="checkbox" name="visible" id="visible" value="1" class="" checked>
                            <label class="form-check-label" for="visible">Visible</label>
                        </div>
                   
                        <div class="form-check">
                            <input type="checkbox" name="email_confirmation" id="email_confirmation" value="1" class="">
                            <label class="form-check-label" for="email_confirmation">Confirmación por Email</label>
                        </div>
                        
                        
                        <p></p>
                        Contraseña: <input type="password" name="password" id="password" class="form-control">
                        
                       
                        
                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#survey')[0].reset();reset_textarea()"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="surveyStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update" onclick="surveyUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 
@endsection
