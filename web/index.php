<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../helpers/DotenvLoader.php';
app\helpers\DotenvLoader::load();
defined('YII_DEBUG') or define('YII_DEBUG', env('APP_ENV', 'dev') == 'dev');
defined('YII_ENV') or define('YII_ENV', env('APP_ENV', 'dev'));
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';
(new yii\web\Application($config))->run();

function trace($data, $terminate = false){
    echo '<pre>';
    \yii\helpers\VarDumper::dump($data);
    echo '</pre>';
    if ($terminate){
        echo '<h2>Program terminated</h2>';
        Yii::$app->end();
    }
}
