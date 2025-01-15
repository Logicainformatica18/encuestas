<p class="py-3"></p>
<div class="row">
    <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
 
        <div class="row">
            <div class="col-12">
            
                <div class="post">
               
                    @php
                        $enumeracion = 0;
                    @endphp
                    @foreach ($survey_detail as $survey_details)
                        @if ($loop->first)
                            <div class="page" style="display: none;">
                                <p>&nbsp; </p>

                                <form action="" name="client" id="client">



                                    {{ $survey_details->survey->detail }}
                             
                                    @php
                                        $date_now= \Carbon\Carbon::now('America/Lima')->format('Y-m-d H:i:s');
                                    @endphp
                                     @if ($survey_details->survey->date_end <=  $date_now)
                                     <input type="hidden" value="true" name="date_end" id="date_end">          
                                     @endif 

                                    <button id="next" class="btn  btn-warning granulated-background fs-5"
                                     style=" color:rgb(0, 0, 0);font-family:Montserrat-Bold;margin-top:-50px"
                                        onclick="clientStore();this.style.display='none'; return false;">Postularme ></button>
                                    @if ($survey_details->survey->state == 'public')
                                      
                                        <input type="hidden" value="public" name="state" id="state">
                                    @endif

                                </form>
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
                                <h6>
                                    {{ $enumeracion = $enumeracion + 1 }}
                                    {{ '. ' . $survey_details->question }}</h6>
                                <span> {{ $survey_details->detail }}</span>

                                @if ($survey_details->type == 'short_answer')
                               
                                    <input id="answer" name="answer" class="form-control" required>
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
                                                value="{{ $item }}" id="option">&nbsp;
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
                                    <input type="file" name="answer" id="answer" class="form-control
                                    @if ($survey_details->requerid=='yes')
                                    is-invalid
                                    @endif
                                    "requerid accept=".pdf">
                                    <p></p>
                                @elseif($survey_details->type == 'selection')
                                    @if ($survey_details->selection->state == '0')
                                        <select name="selection_detail_id" id="selection_detail_id"
                                            class="form-control">
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

                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="txtTratamientoDatos1" name="data_aprobed_1" value="true"requerid>
                                    <label class="form-check-label fs-3" for="txtTratamientoDatos1">
                                        <span class="fs-2">He leído </span>
                                        <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg" style="cursor: pointer;">
                                             y acepto la Política de Privacidad.
                                        </a>
                                    </label>
                                </div>
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" id="txtTratamientoDatos2" name="data_aprobed_1" value="true"requerid>
                                    <label class="form-check-label fs-3" for="txtTratamientoDatos2">
                                        <span class="fs-2">He leído la autorización y acepto el </span><br>
                                        <a class="text-warning fs-2" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xlg2" style="cursor: pointer;">
                                            Tratamiento de mis datos personales según lo especificado en la misma.
                                        </a>
                                    </label>
                                </div>
                                <br>
                                    <button class="btn btn-warning granulated-background fs-5"
                                        onclick="survey_clientStore('{{ $enumeracion }}');return false;">Enviar mis datos</button>
                                @endif
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>



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


 
</script>
    <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
   
      
    </div>
</div>
