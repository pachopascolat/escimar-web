<div class="container pt-0">  
    <div class="novedades-title">
        <!--<hr class="hr-primary">-->
        <h1 class="m-0">Novedades</h1>
        <hr class="bg-biologia-light mt-0">
    </div>
    <!--<p>Use it to your news site, feature a article.</p>-->

    <div class="row">
        <div class="col-lg-6">
            <!-- artigo em destaque -->
            <div class="featured-article mt-3 mb-3">
                <a href="#">
                    <img class="" src="<?= yii\helpers\Url::base(true)."/".$noticias[0]->noticia->image_path??'' ?>" alt="" class="thumb">
                </a>
                <div class="block-title">
                    <h2><?= $noticias[0]->noticia->titulo_noticia ?></h2>
                    <p class="media-text">
                        <?php
                        echo $noticias[0]->noticia->getShortBody(250);
                        ?>
                        ...<a href="<?= \yii\helpers\Url::base(true)."/noticias/news-view?id={$noticias[0]->noticia_id}" ?>">ver mas</a>
                    </p>
                    <p class="by-author"><small>By Pacho</small></p>

                </div>
            </div>
            <!-- /.featured-article -->
        </div>
        <div class="col-lg-6">
            <div class="media-list main-list">
                <?php for ($i = 1; $i < count($noticias); $i++): ?>
                    <div class="media">
                        <div class="row">
                            <a class="col-sm-4" href="#">
                                <img class="media-object w-100" src="<?= yii\helpers\Url::base(true)."/".$noticias[$i]->noticia->image_path?? '' ?>" alt="...">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading"><?= $noticias[$i]->noticia->titulo_noticia?? '' ?></h4>
                                <p class="media-text">
                                    <?= $noticias[$i]->noticia ? $noticias[$i]->noticia->getShortBody(150) : '' ?> ...<a href="<?= \yii\helpers\Url::home(true)."noticias/news-view?id={$noticias[$i]->noticia_id}" ?>">ver mas</a>              
                                </p>
                               
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
                
            </div>
        </div>
    </div>
    <hr class="bg-biologia-light mt-0">

</div>