@extends('template')
@section('content')

        <!-- /.content -->
        {{-- {{ $category->onEachSide(5)->links() }} --}}



        <div class="container text-center ">
            <p></p>
            <img width="60%" src="../imageusers/{{ $survey->front_page }}" alt=""
                style="border-radius: 30px;">

            <h3 class="pt-4 fs-7"><b>{{ $survey->title }}</b></h3>
        </div>
        <hr>
        <div class="container" style="">
            @php
                echo $survey->description;
            @endphp
            
        </div>
    






        @include('Inscription.inscription_clienttable')

 
 
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                  <h1 class="text-center mb-4">Declaración del Titular sobre el Tratamiento de sus Datos
                     Personales y su Consentimiento</h1>
                 <div class="card shadow-sm">
                     <div class="card-body">
                         <p>
                             Con mi firma manuscrita, mi huella biométrica y/o mi firma electrónica o
                             digital (pudiendo ser esta mediante mi voz, claves, clic en páginas web y/o
                             plataformas digitales y/o cualquier factor de autenticación o combinación
                             que permita dejar constancia de mi aceptación), declaro que he sido
                             informado en forma libre, previa, expresa, informada e inequívoca respecto a
                             que mis datos personales, así como aquellos datos sensibles, que proporcione
                             a LA EMPRESA en este formulario, serán incorporados en su banco de datos
                             personales y serán tratados con todas las medidas de seguridad y
                             confidencialidad establecidas en la Ley, su Reglamento y demás normas
                             complementarias y sustitutorias.
                         </p>
                         <p>
                             LA EMPRESA ha informado previamente al titular de los datos personales en
                             forma detallada, sencilla, expresa e inequívoca de los alcances, que los
                             datos aquí captados serán tratados para contactarse con el titular de los
                             datos y cumplir con los fines detallados en el formulario.
                         </p>
                         <p>
                             Asimismo, con la aceptación del presente formulario declaro conocer y estar
                             de acuerdo con el tratamiento de mis datos personales según lo informado en
                             este formulario y en la Política de Privacidad publicada en la página web,
                             teniendo pleno conocimiento que, para las finalidades descritas en este
                             formulario, inclusive en los supuestos de encargo y transferencia de datos a
                             favor de empresas subsidiarias y/o flujo transfronterizo, no se requiere de
                             mi consentimiento expreso.
                         </p>
                     </div>
                 </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                 
                 </div>
             </div>
         </div>
     </div>
 
@endsection
