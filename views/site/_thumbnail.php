<div class="container">  
    <div class="novedades-title">
        <!--<hr class="hr-primary">-->
        <h1 class="m-0">Novedades</h1>
        <hr class="hr-primary mt-0">
    </div>
    <!--<p>Use it to your news site, feature a article.</p>-->

    <div class="row">
        <div class="col-lg-6">
            <!-- artigo em destaque -->
            <div class="featured-article">
                <a href="#">
                    <img class="w-100" src="<?= $noticias[0]->noticia->image_path ?>" alt="" class="thumb">
                </a>
                <div class="block-title">
                    <h2><?= $noticias[0]->noticia->titulo_noticia ?></h2>
                    <p class="media-text">
                        <?php
                        echo $noticias[0]->noticia->getShortBody(250);
                        ?>
                        ...<a href="<?= \yii\helpers\Url::home(true)."noticias/news-view?id={$noticias[0]->noticia_id}" ?>">ver mas</a>
                    </p>
                    <p class="by-author"><small>By Pacho</small></p>

                </div>
            </div>
            <!-- /.featured-article -->
        </div>
        <div class="col-lg-6">
            <ul class="media-list main-list p-0">
                <?php for ($i = 1; $i < count($noticias); $i++): ?>
                    <li class="media m-0 pb-2">
                        <div class="row">
                            <a class="col-sm-4" href="#">
                                <img class="media-object" src="<?= $noticias[$i]->noticia->image_path ?? '' ?>" alt="...">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?= $noticias[$i]->noticia->titulo_noticia ?? '' ?></h4>
                                <p class="media-text">
                                    <?= $noticias[$i]->noticia ? $noticias[$i]->noticia->getShortBody(150) : '' ?> ...<a href="<?= \yii\helpers\Url::home(true)."noticias/news-view?id={$noticias[$i]->noticia_id}" ?>">ver mas</a>              
                                </p>
                               
                            </div>
                        </div>
                    </li>
                <?php endfor; ?>
                <!--                <li class="media">
                                    <div class="row">
                                        <a class="col-sm-4" href="#">
                                            <img class="media-object" src="img/dsc-0047-2000x1330-40.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                                            <p class="media-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p class="by-author">By Jhon Doe</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="row">
                
                                        <a class="col-sm-4" href="#">
                                            <img class="media-object" src="img/barco-viernes-santo-0123-2000x1330-97.jpg" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                                            <p class="media-text">
                                                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                            </p>
                                            <p class="by-author">By Jhon Doe</p>
                                        </div>
                                    </div>
                                </li>-->

            </ul>
        </div>
    </div>
    <hr class="hr-primary mt-0">

</div>