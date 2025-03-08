<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => env('APP_DATABASE_DSN'),
    'username' => env('APP_DATABASE_USERNAME'),
    'password' => env('APP_DATABASE_PASSWORD'),
    'enableSchemaCache' => env('APP_DATABASE_ENABLE_SCHEMA_CACHE'),
    'schemaCacheDuration' => env('APP_DATABASE_SCHEMA_CACHE_DURATION'),
    'charset' => 'utf8',
    'schemaCache' => 'cache',
];