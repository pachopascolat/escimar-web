<?php

use app\assets\FrontAsset;

$this->params['frontend'] = true;
FrontAsset::register($this);
?>
<div class="calendar-page mb-5">
    <div class="row justify-content-center align-items-center" id="calendario-banner">

        <div class="p-3">
            <h1 class="text-light bg-title-blue p-3 text-center">
                <i class="far fa-calendar-minus-o"></i> 
                Calendario Académico 2020
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="pt-3 pb-3">
            <p>No se realizarán actividades académicas en las fechas estipuladas como Feriados y Asuetos Nacionales. A las mismas deben agregarse las siguientes fechas:</p>
            <ul>
                <li>02 al 31 de Enero (Receso Estival)</li>
                <li>21 de Junio (Año nuevo Mapuche)</li>
                <li>17 de Septiembre (día del Profesor)</li>
                <li>21 de Septiembre (día del Estudiante)</li>
            </ul>
<!--            <hr>-->
        </div>
        <div class="d-flex justify-content-center">
            <table class="table-bordered table-hover ">
                <thead>
                    <tr class="text-light bg-biologia-light">
                        <th><h4 class="text-center"><i class="fal fa-backpack mr-2"></i>Actividades</h4></th>
                        <th><h4 class="text-center"><i class="fal fa-clock-o mr-2"></i>Fecha</h4></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Inscripción e Ingreso 2020 <br></td>
                        <td> 02 al 20 de DICIEMBRE <br> 03 al 28 de FEBRERO <br></td>
                    </tr>
                    <tr>
                        <td>1° Período de reinscripciones <br></td>
                        <td> 17 de FEBRERO al 13 de MARZO <br></td>
                    </tr>
                    <tr>
                        <td> 1° Período Solicitud de Equivalencias internas y externas <br></td>
                        <td> Martes 03-03-2020<br></td>
                    </tr>
                    <tr>
                        <td> Turno de examen <strong>FEBRERO/MARZO</strong> (mínimo 2 llamados) <br></td>
                        <td> 1° llamado: <strong>17 al 21 de FEBRERO</strong> <br> 2° llamado: <strong>09 al 14 de MARZO</strong><br></td>
                    </tr>
                    <tr>
                        <td> Inscripciones para cursar asignaturas del <br> Primer Cuatrimestre <br></td>
                        <td> 26 de FEBRERO al 07 de MARZO<br></td>
                    </tr>
                    <tr>
                        <td> Curso Nivelatorio 1er dictado <br></td>
                        <td> <strong>10 al 28 de FEBRERO</strong><br></td>
                    </tr>
                    <tr>
                        <td> Curso Nivelatorio Intensivo 2do dictado <br></td>
                        <td> <strong>02 al 06 de MARZO</strong> <br></td>
                    </tr>
                    <tr>
                        <td> Inicio de Clases del Primer Cuatrimestre <br></td>
                        <td> <strong>02 de MARZO</strong> <br></td>
                    </tr>
                    <tr>
                        <td> Presentación de programas Primer Cuatrimestre: Fecha límite  <br></td>
                        <td> 13 de MARZO <br></td>
                    </tr>
                    <tr>
                        <td> Turno de Examen Extraordinario <strong>ABRIL</strong> (1 llamado) <br></td>
                        <td> 13 al 18 de ABRIL <br></td>
                    </tr>
                    <tr>
                        <td> 2do Periodo de inscripciones para cursar <br> asignaturas 1° Cuatrimestre <br></td>
                        <td> 20 al 25 de ABRIL <br></td>
                    </tr>
                    <tr>
                        <td> Finalización del Primer Cuatrimestre <br></td>
                        <td> <strong>19 de JUNIO</strong> <br></td>
                    </tr>
                    <tr>
                        <td> 2do Período de inscripción a carreras  <br></td>
                        <td> A determinar <br></td>
                    </tr>
                    <tr>
                        <td> Receso Académico (2 semanas) <br></td>
                        <td> A determinar <br></td>
                    </tr>
                    <tr>
                        <td> Turno de Examen <strong>JULIO/AGOSTO</strong> (mínimo 2 llamados) <br></td>
                        <td> A determinar <br></td>
                    </tr>
                    <tr>
                        <td> 2° Período Solicitud de Equivalencias <br></td>
                        <td> 03 al 21 de AGOSTO <br></td>
                    </tr>
                    <tr>
                        <td> 2° Período de REINSCRIPCIONES  <br></td>
                        <td> 03 al 08 de AGOSTO <br></td>
                    </tr>
                    <tr>
                        <td> Inscripciones para cursar asignaturas del <br> Segundo Cuatrimestre <br></td>
                        <td> 27 de JULIO al 08 de AGOSTO <br></td>
                    </tr>
                    <tr>
                        <td> Inicio de Clases del Segundo Cuatrimestre  <br></td>
                        <td> <strong>03 de AGOSTO</strong> <br></td>
                    </tr>
                    <tr>
                        <td> Presentación de programas Segundo Cuatrimestre: Fecha límite  <br></td>
                        <td> <strong>14 de AGOSTO</strong> <br></td>
                    </tr>
                    <tr>
                        <td> Turno de Examen Extraordinario SEPTIEMBRE (1 llamado)  <br></td>
                        <td> 31 de AGOSTO al 05 de <strong>SEPTIEMBRE</strong> <br></td>
                    </tr>
                    <tr>
                        <td> 2do Período de inscripciones para cursar asignaturas <br> 2do. Cuatrimestre  <br></td>
                        <td> 07 al 12 de SEPTIEMBRE <br></td>
                    </tr>
                    <tr>
                        <td> Finalización del Segundo Cuatrimestre  <br></td>
                        <td> <strong>20 de NOVIEMBRE</strong> <br></td>
                    </tr>
                    <tr>
                        <td> Turno de Examen de DICIEMBRE (mínimo 2 llamados)  <br></td>
                        <td> 1er llamado: <strong>30 de NOVIEMBRE al 05 de DICIEMBRE</strong><br>2do llamado: <strong>14 al 19 de DICIEMBRE <br></td>
                                </tr>
                                <tr>
                                    <td> Preinscripción vía web ingreso 2021  <br></td>
                                    <td> 01 de NOVIEMBRE DE 2020  <br></td>
                                </tr>
                </tbody>
            </table>
            
        </div>
    </div>
</div>

