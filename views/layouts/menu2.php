<?php

use app\assets\FrontAsset;

FrontAsset::register($this);

if(Yii::$app->controller->id == 'site' && Yii::$app->controller->action->id == 'index'){
    $class = 'd-lg-none';
}

?>

<!--<div class="container">-->
<!--<div class="col-md-12 bg-biologia-blue">-->
<nav class="navbar navbar-expand-md navbar-dark sticky-top bg-biologia-blue">
    <div class="container">
        <button class="navbar-toggler text-light " type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <a class="navbar-brand" href="<?= \yii\helpers\Url::base(true) ?>"><img class="logo-escimar" src="<?= \yii\helpers\Url::base(true) ?>/img/logo-blanco-transparente-ok.png"></a>
        <div class="collapse navbar-collapse justify-content-between" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav navbar-escimar">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= yii\helpers\Url::to(['index']) ?>">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= yii\helpers\Url::to(['site/institucional']) ?>">Institucional</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Carreras
                    </a>
                    <div class="dropdown-menu bg-biologia-light" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/biologia']) ?>">Licenciatura en Biología Marina</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/produccion-pesquera']) ?>">Tecnicatura en Producción Pesquera y Maricultura</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ingresantes
                    </a>
                    <div class="dropdown-menu bg-biologia-light" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/preinscripcion']) ?>">Inscribirse</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/nivelacion']) ?>">Curso de Nivelación</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/bienestar']) ?>">Bienestar</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/calendario']) ?>">Calendario</a>

                    </div>
                </li>
                <li class="nav-item dropdown <?= $class??'' ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu bg-biologia-light" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/academica']) ?>">Académica</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/investigacion']) ?>">Investigación</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/extension']) ?>">Extensión</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/posgrado']) ?>">Posgrado</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/alumnos']) ?>">Alumnos</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/novedades']) ?>">Novedades</a>
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/calendario']) ?>">Calendario Académico</a>
                        <!--<a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/docentes']) ?>">Docentes</a>-->
                        <!--<a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/recursos-humanos']) ?>">Recursos Humanos</a>-->
                        <a class="dropdown-item" href="<?= yii\helpers\Url::to(['site/biblioteca']) ?>">Biblioteca</a>
                        <a target="_blank" class="dropdown-item" href="https://pedco.uncoma.edu.ar/">PEDCO</a>
                        <a target="_blank" class="dropdown-item" href="https://ibmp.uncoma.edu.ar/">WebMail</a>

                    </div>
                </li>

            </ul>


            <div class="d-md-none d-lg-block">
                <div class="navbar-nav social-icons">
                    <div class="nav-item">
                        <a target="_blank" href="https://www.facebook.com/Prensa-ESCiMar-UNCo-1773680806179484/"><i class="fa fa-facebook text-light"></i></a>
                        <a target="_blank" href="https://www.instagram.com/estudiantes_escimar/"><i class="fa fa-instagram text-light"></i></a>
                        <a target="_blank" href="https://twitter.com/saounco"><i class="fa fa-twitter text-light"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UC5k1XerLfWFDIVhLbQsYGfQ"><i class="fa fa-youtube text-light"></i></a>
                        <a target="_blank" href="javascript:void();" target="_blank"><i class="fa fa-envelope text-light"></i></a>
                    </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--</div>-->
<!--</div>-->