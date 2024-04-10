<?php

// для теста 

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost:8765;dbname=catalog',
    //'emulatePrepare' => true,
    'username' => 'root',
    'password' => 'toor',
    'charset' => 'utf8',
    //'tablePrefix' => 'gal_',
    'enableProfiling' => (defined('YII_DEBUG') && YII_DEBUG),
    'enableParamLogging' => (defined('YII_DEBUG') && YII_DEBUG),
];