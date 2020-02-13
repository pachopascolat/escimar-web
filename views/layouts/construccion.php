<?php

use app\assets\FrontAsset;

$this->params['frontend'] = true;
FrontAsset::register($this);
?>
<div class="row">
    <div id="construccion-page" class="w-100 d-flex justify-content-center">
        <div class="">
            <img src="<?= yii\helpers\Url::base(true) . "/img/construccion-2.png" ?>"> 
        </div>
    </div>
</div>