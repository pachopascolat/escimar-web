<?php
use Yii;
//$mediaPath = Yii::getAlias('@app/imagemanager');
$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
//    'title'=>'Escimar',
    'name' => 'ESCIMAR',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'modules' => [
        'imagemanager' => [
		'class' => 'noam148\imagemanager\Module',
		//set accces rules ()
		'canUploadImage' => true,
		'canRemoveImage' => function(){
			return true;
		},
		'deleteOriginalAfterEdit' => false, // false: keep original image after edit. true: delete original image after edit
		// Set if blameable behavior is used, if it is, callable function can also be used
		'setBlameableBehavior' => false,
		//add css files (to use in media manage selector iframe)
		'cssFiles' => [
			'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css',
		],
	],
        'gridview' => [
            'class' => '\kartik\grid\Module'
// enter optional module parameters below - only if you need to  
// use your own export download action or custom translation 
// message source
// 'downloadAction' => 'gridview/export/download',
// 'i18n' => []
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin', 'pacho']
        ],
    ],
    'components' => [
        'imagemanager' => [
		'class' => 'noam148\imagemanager\components\ImageManagerGetPath',
		//set media path (outside the web folder is possible)
		'mediaPath' => '../imagemanager',
        //path relative web folder. In case of multiple environments (frontend, backend) add more paths 
        'cachePath' =>  ['assets/images', '../../frontend/web/assets/images'],
		//use filename (seo friendly) for resized images else use a hash
		'useFilename' => true,
		//show full url (for example in case of a API)
		'absoluteUrl' => false,
		'databaseComponent' => 'db' // The used database component by the image manager, this defaults to the Yii::$app->db component
	],
        'request' => [
// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'b4Cr1zXX_G-DpFLeKcHf-AMppE_FFNvJ',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'user' => [
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,
//        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
// 'useFileTransport' to false and configure a transport
// for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
//            'baseUrl' => '',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<id:\d+>' => '<controller>/news-view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                'admin' => 'noticias/index',
                
            ],
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
