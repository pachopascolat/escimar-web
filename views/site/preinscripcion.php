<?php

use app\assets\FrontAsset;

$this->params['frontend'] = true;
FrontAsset::register($this);
?>


<div class="inscripciones-div">
    <div class="row justify-content-center align-items-center" id="img-preinscripcion">
        <div class="bg-title p-3">
            <h1 class="text-light">Inscripciones</h1>
        </div>
    </div>
    <div class="container">
        <div class="bg-info mt-3 p-3">
            <h3 class="text-light"><i class="far fa-clipboard-list-check"></i> Requisitos </h3>
        </div>
        <div class="inscripcion-requisitos mt-3">
            <ul class="pl-0 pl-md-3">
                <li>
                    <h4><i class="fad fa-chevron-double-right mr-1"></i>PREINSCRIPCIÓN</h4>
                    a través de la página:
                    <a target="_blank" href="http://preinscripcion.uncoma.edu.ar">https://preinscripcion.uncoma.edu.ar</a>
                    <p>(Impresa ó en su defecto solo el número de códigos de barras, según lo requiera la Unidad Académica</p>
                </li>
                <li>
                    <h4><i class="fad fa-chevron-double-right mr-1"></i>Finalización de Estudios</h4>
                    <p>Titulo Secundario ó constancia de finalización de estudios (original y dos copias).</p>
                </li>
                <li>
                    <h4><i class="fad fa-chevron-double-right mr-1"></i>DNI</h4>
                    <p>Original y 2 fotocopias (Si es tarjeta de ambos lados. Si es libreta, primera y segunda hoja. La hoja de cambio de domicilio sólo si no esta actualizado).</p>
                </li>
                <li>
                    <h4><i class="fad fa-chevron-double-right mr-1"></i>FOTOS</h4>
                    <p>Dos fotografias de frente de 3x3 cm. Con el nombre y apellido en el dorso </p>
                </li>
            </ul>
        </div>
        <div class="bg-info d-flex p-3 mb-5 align-items-center">
            <div>
<i class="far fa-file-certificate fa-2x text-light"></i>
            </div>
            <div class="w-100">
                <h5 class="text-light p-3">
                    El Departamento de Alumnos autentica las fotocopias sin costo, presentando los originales
                </h5>
            </div>
        </div>
    </div>
</div>