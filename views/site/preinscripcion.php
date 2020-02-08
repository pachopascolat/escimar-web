<?php

use app\assets\FrontAsset;

$this->params['frontend'] = true;
FrontAsset::register($this);
?>

<style>
    #img-preinscripcion{
        background: url('../img/inscripcion.jpg');
        height: 200px;
        background-size: cover;
        background-position: center;
    }
    /*    .inscripcion-header{
            background-color: #3DA3B9;
        }*/

    .bg-title{
        background-color: black;
        opacity: 0.5;
    }

    .inscripcion-requisitos i{
        color: #3DA3B9;
    }

    .inscripcion-requisitos li{
        list-style-type: none;
    }

</style>
<div class="inscripciones-div">
    <div class="row justify-content-center align-items-center" id="img-preinscripcion">
        <div class="bg-title p-3">
            <h1 class="text-light">Inscripciones</h1>
        </div>
    </div>
    <div class="container">
        <div class="bg-info mt-3 p-3">
            <h3 class="text-light"><i class="fal fa-clipboard-list-check"></i> Requisitos </h3>
        </div>
        <div class="inscripcion-requisitos mt-3">
            <ul>
                <li>
                    <h4><i class="fad fa-chevron-double-right"></i> PREINSCRIPCIÓN</h4>
                    a través de la página:
                    <a href="https://preinscripcion.uncoma.edu.ar">https://preinscripcion.uncoma.edu.ar</a>
                    <p>(Impresa ó en su defecto solo el número de códigos de barras, según lo requiera la Unidad Académica</p>
                </li>
                <li>
                    <h4><i class="fad fa-chevron-double-right"></i>Finalización de Estudios</h4>
                    <p>Titulo Secundario ó constancia de finalización de estudios (original y dos copias).</p>
                </li>
                <li>
                    <h4><i class="fad fa-chevron-double-right"></i>DNI</h4>
                    <p>Original y 2 fotocopias (Si es tarjeta de ambos lados. Si es libreta, primera y segunda hoja. La hoja de cambio de domicilio sólo si no esta actualizado).</p>
                </li>
                <li>
                    <h4><i class="fad fa-chevron-double-right"></i>FOTOS</h4>
                    <p>Dos fotografias de frente de 3x3 cm. Con el nombre y apellido en el dorso </p>
                </li>
            </ul>
        </div>
        <div class="bg-info d-flex p-3 mb-5 align-items-center">
            <div>
<i class="fad fa-certificate fa-2x text-light"></i>
            </div>
            <div class="w-100">
                <h5 class="text-light p-3">
                    El Departamento de Alumnos autentica las fotocopias sin costo, presentando los originales
                </h5>
            </div>
        </div>
    </div>
</div>