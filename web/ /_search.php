<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EquipoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_equipo') ?>

    <?= $form->field($model, 'nombre_equipo') ?>

    <?= $form->field($model, 'club_id') ?>

    <?= $form->field($model, 'dt_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
