    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                    <th ></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Descripción</th>
                                    <th class="sorting">Tipo</th>
                                       <th class="sorting">Carpeta Certificado</th>
                                    <th class="sorting">Detalle</th>
                                    <th >__Opciones__</th>
                                </thead>
                                <tbody>
                                    @foreach ($course as $courses)
                                        <tr>
                                            <td></td>
                                            <td>{{ $courses->id }}</td>
                                            <td>{{ $courses->description }}</td>
                                            <td>{{ $courses->type->description }}</td>
                                            <td>{{ $courses->folder_certification }}</td>
                                            <td>{{ $courses->detail }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="courseEdit('{{ $courses->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="courseDestroy('{{ $courses->id }}'); return false"></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

