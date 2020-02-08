<?php

use app\assets\FrontAsset;

$this->params['frontend'] = true;
FrontAsset::register($this);
?>


<div class="row">
    <div class="col-lg-10 pl-0 pr-0">
        <?= $this->render('_carousel_dinamico', ['carousels' => $carousels]); ?>
    </div>
    <div class="col-lg-2 side-menu p-0 d-none d-lg-block container-black">
        <?= $this->render('/layouts/_side_menu'); ?>
    </div>
</div>
<!--    <div class="col-md-2 side-menu p-0 d-none d-md-block container-black">
        <ul class="nav flex-column">
            <li class="nav-item active">
                <a class="nav-link active" href="#">Investigación</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Extensión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Ingresantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Novedades</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">PEDCO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Biblioteca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">WebMail</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transparencia Activa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Biblioteca</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Calendario Acádemico</a>
            </li>
            <div class="nav-link mt-auto">
                <ul class="list-unstyled list-inline social text-center d-flex justify-content-start pl-2 pr-2 align-items-end">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-youtube"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-whatsapp"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </ul>
    </div>-->
</div>
<?php require_once '_thumbnail.php'; ?>
<?php require_once '_map.php'; ?>

