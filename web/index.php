<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL ^ E_NOTICE);
$SYSTEMCONFIG = parse_ini_file(__DIR__.'/../system/SYSTEM_CONFIG');

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
defined('__ROOT__') or define('__ROOT__', dirname(dirname(__FILE__)));


require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();
