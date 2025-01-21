<form id="deleteAll">
<table id="example1" class=" table table-hover table-bordered table-striped table-responsive">
    <thead>
        <!-- start row -->
        <tr>
            
          <th></th>
            <th class="sort">
          
                <input id="check_massive" type="checkbox"onclick="selectCheckAll();" class="form-check-input" name="" id="">
            </th>
                    <th><img width="20" src="https://cdn-icons-png.flaticon.com/512/6671/6671938.png" alt=""
                        srcset=""></th>
            <th>ID</th>
            <th>Título</th>
            <th>Url</th>
           

            <th>Descripción</th>
            <th>Detalle</th>
            

        </tr>
        <!-- end row -->
    </thead>
   
        @csrf
    <tbody>
        @foreach ($Resource as $Resources)
            <tr>
                <td></td>
                <td>
                    <input type="checkbox"class="form-check-input rowCheckbox" name="deleteAll[]" value="{{$Resources->id}}">
                </td>
                <td>
                  
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success note-icon-pencil"
                            data-toggle="modal" data-target="#exampleModal"
                            onclick="ResourceEdit('{{ $Resources->id }}'); Up();  return false"></button>

                        <!-- <button class="note-icon-pencil" ></button> -->
                        <button class="btn btn-danger note-icon-trash" onclick="ResourceDestroy('{{ $Resources->id }}'); return false"></button>
                  
                    {{-- <div class="dropdown dropstart">
                        <a href="javascript:void(0)" class="text-muted" id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="ti ti-dots-vertical fs-6"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                           
                            @canany(['administrar', 'editar'])
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#success-header-modal" fdprocessedid="cw61t3"
                                    onclick="ResourceEdit('{{ $Resources->id }}'); Up();  return false" 
                                        class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)">
                                        <i class="fs-4 ti ti-edit"></i>Editar
                                    </a>
                                </li>
                            @endcanany
                            @canany(['administrar', 'eliminar'])
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-3" href="javascript:void(0)"
                                onclick="ResourceDestroy('{{ $Resources->id }}'); return false">
                                    <i class="fs-4 ti ti-trash"></i>Delete
                                </a>
                            </li>
                            @endcanany
                        </ul>
                    </div> --}}
    
                </td>

               



                <td>{{ $Resources->id }}</td>
               
                <td>{{ $Resources->title }}</td>
                <td><a target="_blank" href="{{url('resource/'.$Resources->file)}}">{{url('resource/'.$Resources->file)}}
                </a>
                    </td>        
                    
                <td>{{ $Resources->description }}</td>

                <td>{{ $Resources->detail }}</td>
               
             


            </tr>
        @endforeach
    </tbody>

</table>
</form>







    <script>
 
      </script>
    