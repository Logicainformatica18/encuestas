
 
        <div class="row pl-5 pr-5 pb-5">
        
                    @php
                        $enumeracion = 0;
                    @endphp
                    @foreach ($survey_detail as $survey_details)
                    <div class="col-xl-12">
            
                      
                       
                        @if ($loop->first)
                            <div class="page" style="display: none;">
                      

                                <form action="" name="client" id="client">



                                   <span class=""style="color:red"> {{ $survey_details->survey->detail }}</span><p></p>
                             
                                    @php
                                        $date_now= \Carbon\Carbon::now('America/Lima')->format('Y-m-d H:i:s');
                                    @endphp
                                     @if ($survey_details->survey->date_end <=  $date_now)
                                     <input type="hidden" value="true" name="date_end" id="date_end">          
                                     @endif 

                                   

                              
                           
                                <div class="text-center ">
                                    <button id="next" class="btn  btn-warning granulated-background"
                                    style=" color:rgb(0, 0, 0);font-family:Montserrat-Bold;margin-top:-0px;font-size:25px;"
                                       onclick="clientStore();this.style.display='none';client.front_page.style.display='none'; return false;">POSTULARME 👆💻</button>
                                   @if ($survey_details->survey->state == 'public')
                                     
                                       <input type="hidden" value="public" name="state" id="state">
                                   @endif
                                   <p></p>
                                   <img src="{{asset('portada.jpg')}}"name="front_page" style="width:90%;border-radius:20px"class="py-2" alt="">
                                </form>
                       
                                <p class="text-justify ">Por favor, lea detenidamente las siguientes preguntas antes de responder. Recuerde que los campos marcados con un asterisco (*) son obligatorios. Asegúrese de proporcionar la información completa y correcta antes de enviar el formulario. ¡Gracias!</p>
                            </div>
                        
                        @endif



                        <div class="page" style="display: none;">
                      

                            <form action="" method="post" id="survey_client{{ $enumeracion + 1 }}"
                                name="survey_client">
                                <input type="hidden"class="client_id" name="client_id"id="client_id">
                                <p></p>
                                <input type="hidden" value="{{ $survey_details->id }}" name="survey_detail_id"
                                    id="survey_detail_id">

                                <input type="hidden" value="{{ $survey_details->type }}" name="type"
                                    id="type">
                                    <input type="hidden" value="{{ $survey_details->requerid }}" name="requerid">

                                {{ csrf_field() }}
                                
                                <h6 style="color:#13434d">{{ $enumeracion = $enumeracion + 1}} .
                                
                                    @php
                                    echo $survey_details->question;
                                    if ($survey_details->requerid=="yes") {

                                    echo " <b class='text-danger'style='font-size:20px'>*</b>" ;
                                        
                                    }
                                    else{
                                        echo " <b class='text-primary'style='font-size:14px'> (opcional)</b>" ;
                                    }
                                    @endphp
                                 </h6>
                                  &nbsp; 
                                  @php
                                  echo $survey_details->detail;
                                  @endphp
                                 
                                    
                                    <br>
                                @if ($survey_details->type == 'short_answer')
                               
                                    <input id="answer" name="answer" class="form-control " required>
                                    <div class="invalid-feedback ">
                                        Este campo es obligatorio.
                                    </div>
                              

                                    <p></p>
                                      @elseif($survey_details->type == 'email')
                                    <input type="email" id="answer" name="answer"  class="form-control" required>
                                   
                                    <p></p>
                                    @elseif ($survey_details->type == 'number')
                               
                                    <input id="answer"type="number" name="answer" class="form-control" required>
                                    <div class="invalid-feedback">
                                        Este campo es obligatorio.
                                    </div>
                                    {{-- @error('answer')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror --}}

                                    <p></p>
                                      @elseif($survey_details->type == 'email')
                                    <input type="email" id="answer" name="answer"  class="form-control" required>
                                   
                                    <p></p>
                                @elseif($survey_details->type == 'multiple_option')
                                    <?php
                                    $array = json_decode($survey_details->option);
                                    ?>
                                    @foreach ($array as $item)
                                        <label style="display: flex; align-items: center;">

                                            <input style="" type="radio" name="option"
                                                value="{{ $item }}" id="option"@if ($survey_details->requerid =="yes")
                                                class="is-invalid"                                                    
                                                @endif >&nbsp;
                                            {{ $item }}
                                        </label>
                                    @endforeach
                                    <label style="display: none; align-items: center;">

                                        <input style="" type="radio" name="option" value="no_respondido"
                                            id="option" checked>&nbsp;
                                        No respondido
                                    </label>
                                    <p></p>
                                @elseif($survey_details->type == 'date')
                                    <input type="date" name="date" id="date" class="form-control">

                                    <script>
                                        // Obtener el elemento de entrada de fecha por su ID
                                        var dateInput = document.getElementById("date");

                                        // Crear un objeto de fecha actual
                                        var fechaActual = new Date();

                                        // Formatear la fecha actual en el formato "YYYY-MM-DD"
                                        var fechaFormatted = fechaActual.toISOString().slice(0, 10);

                                        // Asignar la fecha actual al valor del campo de entrada
                                        dateInput.value = fechaFormatted;
                                    </script>


                                    <p></p>
                                    @elseif($survey_details->type == 'file')
                                    <input type="file" name="answer" id="answer_" class="form-control
                                    @if ($survey_details->requerid=='yes')
                                    is-invalid
                                    @endif
                                " required accept=".pdf" onchange="limitFile(this, document.getElementById('fileError'))">
                                <div id="fileError" style="color: red; display: none;">El archivo excede el tamaño máximo de 2 MB.</div>
                                <p></p>
                                
                                @elseif($survey_details->type == 'selection')
                                    @if ($survey_details->selection->state == '0')
                                        <select name="selection_detail_id" id="selection_detail_id"
                                            class="form-control">
                                            <option value="0">- Elija una Opción -</option>
                                            @foreach ($survey_details->selection->selection_detail as $item)
                                                <option value="{{ $item->id . '-' . $item->description }}">
                                                    {{ $item->description }} </option>
                                            @endforeach
                                        </select>
                                    @elseif($survey_details->selection->state == '2')
                                        <div id="mycontent_associate{{ $enumeracion }}">
                                            <select name="selection_detail_id" id="selection_detail_id"
                                                class="form-control"
                                                onchange="associateShow(this.value,'{{ $enumeracion + 1 }}')">
                                                <option value="0">- Elija una Opción -</option>
                                                @foreach ($survey_details->selection->selection_detail as $item)
                                                    <option value="{{ $item->id . '-' . $item->description }}">
                                                        {{ $item->description }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    @else
                                        {{-- Aquí enumeracion es + 1 para imprimir el cambio en la siguiente vuelta  o iteracion donde
                                     aparecerá el div myconten_associate
                                     --}}
                                        <input type="hidden" name="associate"id="associate" value="true">
                                        <select name="selection_detail_id" id="selection_detail_id"
                                            class="form-control"
                                            onchange="associateShow(this.value,'{{ $enumeracion + 1 }}')">
                                            <option value="0">- Elija una Opción -</option>
                                            @foreach ($survey_details->selection->selection_detail as $item)
                                                <option value="{{ $item->id . '-' . $item->description }}">
                                                    {{ $item->description }} </option>
                                            @endforeach
                                        </select>
                                    @endif

                                    <p></p>
                                @endif
                                @if (!$loop->last)
                             
                                    {{-- <button id="prev" class="btn btn-warning btn-lg"
                                        onclick="prevPage()">atras</button> --}}
                                    {{-- <button id="next" class="btn btn-warning btn-lg"
                                        onclick="survey_clientStore('{{ $enumeracion }}'); return false;">Siguiente</button>
                                    <p></p> --}}
                                @endif

                                @if ($loop->last)
                                <input type="hidden" name="survey_id" id="survey_id" value="{{$survey_details->survey->id}}">
                                
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="txtTratamientoDatos1" name="data_aprobed_1" value="true"requerid>
                                    <label class="form-check-label fs-3" for="txtTratamientoDatos1">
                                        <span class="fs-2">Nota: Certifico que la información aquí suministrada es verdadera y podrá ser verificada en cualquier momento por la empresa.
                                            </span>
                                        <a class="text-warning fs-2" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
                                             Así mismo estoy dispuesto a brindar una ampliación de cualquier aspecto de los datos
                                            registrados.
                                        </a>
                                    </label>
                                </div>
                                {{-- <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2" name="data_aprobed_1" value="true"requerid>
                                    <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                        <span class="fs-2">He leído la autorización y acepto el </span><br>
                                        <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer;">
                                            Tratamiento de mis datos personales según lo especificado en la misma.
                                        </a>
                                    </label>
                                </div> --}}
                                <br>
                                    <button class="btn btn-warning granulated-background fs-5" type="button"
                                        onclick="survey_clientStore('{{ $enumeracion }}');return false;">Enviar mis datos</button>
                                @endif
                            </form>
                        </div>
                
                </div>
                    @endforeach
          
        </div>






    <script>
        var currentPage = 0;
        var pages = document.getElementsByClassName('page');

        function showPage(index) {
    // Mostrar todas las páginas si el índice es mayor o igual a 1
    if (index >= 1) {
        for (let i = 1; i < pages.length; i++) {
            pages[i].style.display = 'block'; // Mostrar todas las páginas desde la segunda
        }
    } else {
        // Oculta todas las páginas primero
        for (let i = 0; i < pages.length; i++) {
            pages[i].style.display = 'none';
        }
        // Mostrar solo la primera página
        if (index < pages.length) {
            pages[index].style.display = 'block';
        }
    }
    currentPage = index; // Actualiza la página actual
}

// Muestra la primera página al cargar la página
showPage(0);


        function nextPage() {
            showPage(currentPage + 1);
        }

        function prevPage() {
            showPage(currentPage - 1);
        }

       
    </script>



<script>
// Seleccionar todos los inputs con el atributo 'id' específico (o con una clase)
const inputsTexto = document.querySelectorAll('[id^="answer"]');

// Iterar sobre cada input y agregar el evento 'blur'
inputsTexto.forEach(input => {
    input.addEventListener('blur', function () {
        if (!input.value.trim()) {
            input.classList.add('is-invalid'); // Agregar clase para mostrar el mensaje
        } else {
            input.classList.remove('is-invalid'); // Remover clase si es válido
        }
    });
});



 

        function limitFile(fileInput, fileError) {
            // Verificar si se seleccionó un archivo
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const maxSize = 2 * 1024 * 1024; // 2 MB en bytes

                if (file.size > maxSize) {
                    // Mostrar mensaje de error si el archivo excede 2 MB
                    fileError.style.display = 'block';
                    fileInput.value = ''; // Limpiar el input
                } else {
                    // Ocultar mensaje de error si el archivo es válido
                    fileError.style.display = 'none';
                }
            }
        
        }
</script>


