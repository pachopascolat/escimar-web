<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Noticias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="noticias-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'titulo_noticia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'body_noticia')->textarea(['rows' => 6]) ?>


    <?php // echo $form->field($model, 'categoria_noticia')->textInput() ?>


    <?= $form->field($model, 'publicado')->checkbox() ?>

    <?= $form->field($model, 'imageFile')->fileInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
