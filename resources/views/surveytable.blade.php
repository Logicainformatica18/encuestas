    <!-- Main content -->
   <div class="card p-3">
       <!-- DataTables -->
       <table id="example1" class="table table-bordered table-striped table-responsive">
        <thead>
            <th></th>
            <th class="sorting">ID</th>
            <th class="sorting">Título</th>
            
            <th class="sorting">Detalle</th>
                <th class="sorting">Tipo</th>
            <th class="sorting">Url Client</th>
            <th class="sorting">Url Menú</th>
            <th class="sorting">Reportes</th>
            <th class="sorting">Fecha Inicio</th>
            <th class="sorting">Fecha Fin</th>
            <th class="sorting">Creado por</th>
            <th class="sorting">Confirmación Email</th>
            <th>__Opciones__</th>
        </thead>
        <tbody>
            @foreach ($survey as $surveys)
                <tr>
                    <td></td>
                    <td>{{ $surveys->id }}</td>
                    <td>{{ $surveys->title }}</td>
                    <td>{{ $surveys->detail }}</td>
                      <td>{{ $surveys->type }}</td>
                    <td> 
                        <a target="_blank" href="{{url('encuesta/'.$surveys->id)}}"class="nav-link">
                            Ver Encuesta
                        </a>
                    </td> 
                    <td> 
                       {{$surveys->url}}
                    </td> 
<td> 
                        <a target="_blank" href="{{url('reportes/'.$surveys->id)}}"class="nav-link">
                            Ver Reporte
                        </a>
                    </td> 
                    <td>{{ $surveys->date_start }}</td>
                    <td>{{ $surveys->date_end }}</td>
                    <td>{{ $surveys->created_bys->names  }} {{ $surveys->created_bys->firstname  }}</td>
                    <td>{{ $surveys->created_bys->email  }} </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success note-icon-pencil btn-sm"
                            data-toggle="modal" data-target="#exampleModal"
                            onclick="surveyEdit('{{ $surveys->id }}'); Up();  return false"></button>
                        <!-- <button class="note-icon-pencil" ></button> -->
                        <a class="btn btn-warning note-icon-pencil btn-sm"
                            onclick="SurveyDetail('{{ $surveys->id }}')"></a>
                        <!-- <button class="note-icon-pencil" ></button> -->
                        <button class="btn btn-danger note-icon-trash btn-sm"
                            onclick="surveyDestroy('{{ $surveys->id }}'); return false"></button>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
   </div>

