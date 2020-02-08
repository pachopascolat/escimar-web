<?php


use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use app\assets\AppAsset;

AppAsset::register($this);

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-inverse navbar-fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'items' => [
        ['label' => 'Carousels', 'url' => ['/inicio-carousel/index']],
        ['label' => 'Noticias', 'url' => ['/noticias/index']],
        ['label' => 'Users', 'url' => ['/user/admin']],
        Yii::$app->user->isGuest ?
                ['label' => 'Sign in', 'url' => ['/user/security/login']] :
                ['label' => 'Sign out (' . Yii::$app->user->identity->username . ')',
            'url' => ['/user/security/logout'],
            'linkOptions' => ['data-method' => 'post']],
        ['label' => 'Register', 'url' => ['/user/registration/register'], 'visible' => Yii::$app->user->isGuest]
    ],
]);
NavBar::end();
?>