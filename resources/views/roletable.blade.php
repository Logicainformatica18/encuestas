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
                                    <th></th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Descripción</th>
                                    <th >__Opciones__</th>
                                </thead>
                                <tbody>
                                    @foreach ($role as $roles)
                                        <tr>
                                            <td></td>
                                            <td>{{ $roles->id }}</td>
                                            <td>{{ $roles->name }}</td>
                                            <td>
                                                  <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-warning"
                                                  data-toggle="modal" data-target="#exampleModal2"
                                            onclick="rolePermissionEdit('{{ $roles->id }}'); return false">Permisos</button>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="roleEdit('{{ $roles->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="roleDestroy('{{ $roles->id }}'); return false"></button>
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

