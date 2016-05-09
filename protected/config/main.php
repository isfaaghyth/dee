<?php
$dbConfig = is_file('db.php') ? require 'db.php' : ['dsn' => 'sqlite:@app/runtime/data.sql'];
return[
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => $dbConfig,
    ],
    'showScriptName' => true,
    'imports'=>[
        '@app/models'
    ],
    'params' => [
    ]
];