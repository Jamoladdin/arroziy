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
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'baseUrl' => '',
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
            'errorAction' => 'basicmuallima/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'pattern'=>'',
                    'route' => 'basicmuallima/index',
                    'suffix' => '',
                ],
                [
                    'pattern'=>'gii',
                    'route' => 'gii',
                    'suffix' => '',
                ],

                'tuzilma/<slug:[a-z0-9_\-]+>' => 'basicmuallima/tuzilma',
                'talabalarga/<slug:[a-z0-9_\-]+>' => 'basicmuallima/talabalarga',
                'abiturientlarga/<slug:[a-z0-9_\-]+>' => 'basicmuallima/abiturientlarga',

                'media/audio' => 'basicmuallima/audio',
                'media/foto' => 'basicmuallima/foto',
                'media/video' => 'basicmuallima/video',

                'ilm/<slug:[a-z0-9_\-]+>' => 'basicmuallima/ilm',
                'ilm/<ilm:[a-z0-9_\-]+>/<year:\d+>/<month:\d+>/<day:\d+>/<slug:[a-z0-9_\-]+>' => 'basicmuallima/ilm-view',

                'mutolaa/<slug:[a-z0-9_\-]+>' => 'basicmuallima/mutolaa',
                'mutolaa/<mutolaa:[a-z0-9_\-]+>/<year:\d+>/<month:\d+>/<day:\d+>/<slug:[a-z0-9_\-]+>' => 'basicmuallima/mutolaa-view',
            ],
        ],
        'assetManager' => [
            'basePath' => '@webroot/assets',
            'baseUrl' => '@web/assets'
        ],
//        'i18n' => [
//            'translations' => [
//                'app*' => [
//                    'class' => 'yii\i18n\PhpMessageSource',
//                    'basePath' => '@app/messages',
//                    //'sourceLanguage' => 'en-US',
//                    'fileMap' => [
//                        'app' => 'app.php',
//                        'app/error' => 'error.php',
//                    ],
//                ],
//            ],
//        ],
    ],
    'params' => $params,
];
