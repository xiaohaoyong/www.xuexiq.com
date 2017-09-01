<?php

$params = require(__DIR__ . '/params.php');
//Yii::$classMap['XywyStorageService'] = '@/usr/local/xywy/php-5.5/lib/php/XywyService/XywyStorageService/XywyStorageService.php';
$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules'   => require(__DIR__ . '/modules.php'),
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'd472241f86daf6ecc9bede4a26dfe3b3',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\rbac\AuthAdminuser',
            'enableAutoLogin' => true,
        ],
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
        'formatter'=>[
            'dateFormat'=>'php:Y-m-d',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'gwy/<area:(beijing|tianjin|hebei|shanxi|neimeng|liaoning|jilin|heilongjiang|shanghai|jiangsu|zhejiang|anhui|fujian|jiangxi|shandong|henan|hubei|hunan|guangdong|guangxi|hainan|chongqing|sichuan|guizhou|yunnan|xizang|shanxi1|gansu|qinghai|ningxia|xinjiang)>/<cat:(new|tiku|xinwen|tongzhi|baoming|zhiwei|kssj|zkzdy|cjcx|kszt|bkfd|tiaojian|feiyong|fushen|mianshi|shiti)>'=>'article/list',
                'gwy/<area:(beijing|tianjin|hebei|shanxi|neimeng|liaoning|jilin|heilongjiang|shanghai|jiangsu|zhejiang|anhui|fujian|jiangxi|shandong|henan|hubei|hunan|guangdong|guangxi|hainan|chongqing|sichuan|guizhou|yunnan|xizang|shanxi1|gansu|qinghai|ningxia|xinjiang)>'=>'article/channel',
                'gwy/<cat:(new|tiku|xinwen|tongzhi|baoming|zhiwei|kssj|zkzdy|cjcx|kszt|bkfd|tiaojian|feiyong|fushen|mianshi|shiti)>'=>'article/list',
                'show/<id:\d+>'=>'article/view',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',

            ],
        ],
        'myhelper' => [
            'class' => 'app\components\helper\MyHelper',
        ]
    ],
    'params' => $params,
];
$db= require(__DIR__ . '/db.php');
$config['components']=$config['components']+$db;

//$redis= require(__DIR__ . '/redis.php');
//$config['components']=$config['components']+$redis;
if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}
$config['language'] = 'zh-CN';
return $config;
