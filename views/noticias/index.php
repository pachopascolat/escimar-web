<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NoticiasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Noticias';
$this->params['breadcrumbs'][] = $this->title;
$js = "
    $('.ranking').on('change', function(){
    var idnoticia = $(this).data('id-noticia')
    var rank = $(this).children('option:selected').val();
    $.post('cambiar-ranking'
            , {id:idnoticia,rank:rank}
            )
    });
";
$this->registerJs($js);
?>


<div class="noticias-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Noticias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'noticias.noticias_principales',
                'format' => 'raw',
                'value' => function($model) {
                    $items = [1 => 'primero', 2 => 'segundo', 3 => 'tercero', 4 => 'cuarto'];
                    return \yii\bootstrap\Html::dropDownList('ranking', null, $items, [
                                'prompt' => 'ranking',
                                'options' => [$model->noticiasPrincipales->ranking??''=>['selected'=>true]],
                                'class' => 'form-control ranking',
                                'data-id-noticia' => $model->id_noticias,
                    ]);
                }
            ],
            'id_noticias',
            'titulo_noticia',
//            'body_noticia:ntext',
            'fecha_noticia',
            'categoria_noticia',
                    [
                        'label' => 'facebook',
                        'format'=> 'html',
                        'value' => function($model){
                            return Html::a('publicar',['publicar-facebook','id'=>$model->id_noticias],['class'=>'btn btn-info']);
                        }
                    ],
            //'author_id',
            //'publicado',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
    ?>


</div>
