<?php

use app\assets\FrontAsset;
FrontAsset::register($this);

?>

<div class="row">
    <div class="col-md-12 container-blue">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler text-light " type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <a class="navbar-brand" href="#"><img class="logo-escimar" src="img/logo-balnco-transparente.png"></a>
            <div class="collapse navbar-collapse justify-content-between" id="bs-example-navbar-collapse-1">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Institucional</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Académica</a>
                    </li>

                    <!--                    <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Dropdown link</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider">
                                                </div> <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </li>-->
                </ul>

                <ul class="navbar-nav">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text"> 
                        <button class="btn btn-info my-2 my-sm-0" type="submit">
                            Ir
                        </button>
                    </form>
                </ul>
            </div>
        </nav>
    </div>
</div>