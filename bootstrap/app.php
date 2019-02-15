<?php

/**
 * ECTouch - A Modern E-Commerce Platform
 *
 * @package  ECTouch
 * @homepage https://www.ectouch.cn
 */

if (version_compare(PHP_VERSION, '7.1.3', '<')) {
    die('require PHP > 7.1.3 !');
}

/*
|--------------------------------------------------------------------------
| 应用名称
|--------------------------------------------------------------------------
*/

define('APPNAME', 'ECTouch');

/*
|--------------------------------------------------------------------------
| 应用版本
|--------------------------------------------------------------------------
*/

define('VERSION', 'v3.0.0');

/*
|--------------------------------------------------------------------------
| 发布时间
|--------------------------------------------------------------------------
*/

define('RELEASE', '20181101');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('EC_CHARSET', 'utf-8');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('ADMIN_PATH', 'seller');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('AUTH_KEY', 'this is a key');

/*
|--------------------------------------------------------------------------
| 编码格式
|--------------------------------------------------------------------------
*/

define('OLD_AUTH_KEY', '');

/*
|--------------------------------------------------------------------------
| API时间
|--------------------------------------------------------------------------
*/

define('API_TIME', '2019-02-15 05:44:57');

/*
|--------------------------------------------------------------------------
| Setting Debuger
|--------------------------------------------------------------------------
|
*/

if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_ENV') or define('YII_ENV', 'prod');
} else {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
}

/*
|--------------------------------------------------------------------------
| Loading Kernel
|--------------------------------------------------------------------------
|
*/

require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

/*
|--------------------------------------------------------------------------
| Loading Bootstrap
|--------------------------------------------------------------------------
|
*/

require(__DIR__ . '/../config/bootstrap.php');

/*
|--------------------------------------------------------------------------
| Loading Configuration
|--------------------------------------------------------------------------
|
*/

$config = require(__DIR__ . '/../config/config.php');

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return new yii\web\Application($config);
