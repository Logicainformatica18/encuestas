@extends('template')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listas</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Listas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#selection')[0].reset();">
        Agregar
    </button>
    <p></p>



    <!-- /.content -->
    {{-- {{ $selection->onEachSide(5)->links() }} --}}
    <div id="mycontent">
        @include('selectiontable')
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="selection" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Descripción : <input type="text" name="description" id="description" class="form-control">
                        Elegir Relación
                        <select name="associate_id" id="associate_id" class="form-control">
                            @foreach ($selection as $item)
                                <option value="{{ $item->id }}">{{ $item->description }} </option>
                            @endforeach
                        </select>
                        Estado :
                        <select name="state" id="state" class="form-control">
                            <option value="0">No Asociado</option checked>
                            <option value="1">Padre</option>
                                 <option value="2">Hijo</option>
                       
                        </select>

                        Detalle : <input type="text" name="detail" id="detail" class="form-control">


                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#selection')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success"id="create" onclick="selectionStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger"id="update"
                        onclick="selectionUpdate();" name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gestionar Listas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="selection_detail" name="selection_detail">
                        <input type="hidden" name="id"id="id">
                        <input type="hidden" name="primary"id="primary">
                        {{ csrf_field() }}
                          <input type="button" value="Agregar" class="btn btn-success" onclick="selection_detailStore()"
                            name="create">
                            <p></p>
                            Descripción:
                        <input type="text"name="description"id="description" class="form-control">
                        <p></p>
                 


                        <div id="mycontent_detail">
                            @if (isset($selection->id) == null)
                            @else
                                @include('selection_detailtable')
                            @endif

                        </div>



                </div>
                <div class="modal-footer">
                    {{-- <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#role')[0].reset();"
                        name="new">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
