@extends('template')
@section('content')
    <div class="body-wrapper">
        <div class="">
            <div class="card card-body py-3">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="d-sm-flex align-items-center justify-space-between">
                            <h1 class="text-primary">Recursos</h1>
                            <nav aria-label="breadcrumb" class="ms-auto">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item d-flex align-items-center">
                                        <a class="text-muted text-decoration-none d-flex" href="../main/index.html">
                                            <iconify-icon icon="solar:home-2-line-duotone" class="fs-6"></iconify-icon>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">
                                        <span class="badge fw-medium fs-2 bg-primary-subtle text-primary">
                                            Recursos
                                        </span>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="datatables">

                <!-- start File export -->
                <div class="card">
                    <div class="card-body">

                        <p class="card-subtitle mb-3">
                            <!-- success header modal -->
                            @canany(['administrar', 'agregar'])
                                <button type="button" class="btn mb-1 me-1 btn-success"  data-toggle="modal" data-target="#exampleModal"
                                    onclick="New();$('#Resource')[0].reset();Resource.fotografia.src ='https://placehold.co/150';">
                                    Agregar
                                </button>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                                <button type="button" class="btn mb-1 me-1 btn-danger"
                                    onclick="ResourceDestroyAll();return false">
                                    Eliminar selección
                                </button>
                            @endcanany
                        </p>
                        <div class="mb-2">
                            <h4 class="card-title mb-0">Exportar</h4>
                        </div>
                        <div class="table-responsive"id="mycontent">



                            @include('Resource.Resourcetable')

                        </div>
                    </div>
                </div>


                <!-- end Language file -->

                <!-- end Setting defaults -->


                <!-- end Custom toolbar elements -->
            </div>
        </div>
    </div>

    <div class="button-group">


        <!-- /.modal -->
        <!-- danger header modal -->

        <!-- /.modal -->

        <!-- /.modal -->

        <!-- success Header Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-colored-header bg-success text-white">
                        <h4 class="modal-title text-white" id="success-header-modalLabel">
                            Recursos
                        </h4>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <form action="" method="post" role="form" id="Resource"
                            name="Resource"enctype="multipart/form-data">
                            <input type="hidden" name="id" id="id">
                            {{ csrf_field() }}
                            Título : <input type="text" name="title" id="title" class="form-control">
                            Descripción : <input type="text" name="description" id="description" class="form-control">
                            Detalle : <input type="text" name="detail" id="detail" class="form-control">
                            <div class="container align-content-center">
                                <div class="form-group row">
                                    Fotografía o Archivo
                                    <input class="form-control" type="file" id="imgInp"
                                        name="file"onchange="readImage(this,'#blah');Resource.title.value=this.files[0].name">
                                </div>
                                <div class="size-100" style="background-color: #f0f0f0; padding: 10px;">
                                    <br>
                                    <img id="blah" name="fotografia" src="https://placehold.co/150';"
                                        alt="Tu Resourcen" class="img-bordered" width="100%">
                                </div>

                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" value="Nuevo" class="btn btn-primary"
                            onclick="New();$('#Resource')[0].reset();" name="new">
                        @canany(['administrar', 'agregar'])
                            <input type="button" value="Guardar" class="btn bg-success-subtle text-success "
                                onclick="ResourceStore()" id="create">
                        @endcanany
                        @canany(['administrar', 'actualizar'])
                            <input type="button" value="Modificar" class="btn bg-danger-subtle text-danger"
                                onclick="ResourceUpdate();" id="update">
                        @endcanany
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </form>

                    </div>

                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- /.modal -->
    </div>
@endsection
