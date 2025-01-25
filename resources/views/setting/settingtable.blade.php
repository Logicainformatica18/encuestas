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
                                    
                                    <th >__Opciones__</th>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Título</th>
                                    <th class="sorting">Descripción</th>
                                    @for ($i=1;$i<=15;$i++) 
                                    <th class="sorting">Color {{$i}}</th>                                 
                                    @endfor
                                   
                                </thead>
                                <tbody>
                                    @foreach ($setting as $settings)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="settingEdit('{{ $settings->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="settingDestroy('{{ $settings->id }}'); return false"></button>
                                            </td>
                                            <td>{{ $settings->id }}</td>
                                            <td>{{ $settings->title }}</td>
                                            <td>{{ $settings->description }}</td>
                                            @for ($i=1;$i<=15;$i++) 
                                            @php
                                             $property = "color_".$i;   
                                            @endphp
                                            <td  >{{$settings->$property}}</td>
                                            @endfor
                                           

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

