<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [

    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'layout'=>'hyper',
    'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',

    ],
    'components' => [
        'ffmpeg' => ['class' => '\rbtphp\ffmpeg\Ffmpeg', 'path' => '/usr/bin/ffmpeg' ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@backend/views/src/views'
                ],
            ],
        ],
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],

        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'maxSourceLines' => 10,
            'errorAction' => 'site/error',
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //'suffix' => '.html',
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'user'],
                '' => 'site/index',
                'about' => 'site/about',
                'services' => 'site/services',
                'contact' => 'site/contact',
                'dynamics' => 'site/dynamics',

                '<controller:(bot|doctors|review|tasks|branch|page|signup|layouts-mail|user|tracking|site|confirm|protocol)>/<action:(index|update|delete|view|create|change-password|userscore|dynamics)>/<id:\d+>' =>
                    '<controller>/<action>',
                //'<controller:\w+>/<bot:\d+>' => '<controller>/index',
            ],

        ],

        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets'
        ],

    ],
    'params' => $params,


];
