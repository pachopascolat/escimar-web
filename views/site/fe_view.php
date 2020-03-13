<?php

use yii\helpers\Url;

$this->params['frontend'] = true;
?>
<style>
    #news-side-bar{
        background-color: red;
        /*height: 300px;*/
    }
    
    .container-fluid{
        background-color: gainsboro;
        padding-left: 5em;
        padding-rigth: 5em;
        padding-top: 2em;
    }
    
    .news-container{
        
    }
    
</style>


<div class="news-container">
    <div class="row">
        <div class="col-lg-8 pl-5 pr-5 bg-light">
            <div class="p-4">
            <img class="img-fluid" src="<?= Url::home(true) . $noticia->image_path ?>">
            </div>
            <h1><?= $noticia->titulo_noticia ?></h1>
            <p>
                <?= nl2br($noticia->body_noticia) ?>
            </p>


        </div>
        <div id="news-side-bar"  class="col-lg-4 d-none d-lg-block">

        </div>
    </div>
</div>

