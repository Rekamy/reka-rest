<?php
return [
	'id' => 'micro-app-cli',
    // the basePath of the application will be the `micro-app` directory
	'basePath' => dirname(__DIR__),
    // this is where the application will find all controllers
	'controllerNamespace' => 'cli\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
	'aliases' => [
        '@cli' => __DIR__,
        '@app' => dirname(__DIR__),
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'migrate' => [
            'class' => 'cli\controllers\MigrateController',
            // 'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => [
                '@cli/migrations',
                '@yii/log/migrations',
                '@yii/caching/migrations',
                '@yii/rbac/migrations',
            ],
        ],
    ],
    'components' => [
/*      'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:@micro/db.sqlite',
        ],*/
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'cache' => 'cache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                // 'file' => [
                //     'class' => 'yii\log\FileTarget',
                //     'levels' => ['error', 'warning'],
                // ],
                'db' => [
                    'class' => 'yii\log\DbTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\DbCache',
        ],
        'db' => [
         'class' => 'yii\db\Connection',
         'dsn' => 'mysql:host=localhost:3306;dbname=rekarest_db',
         'username' => 'root',
         'password' => '',
         'charset' => 'utf8',
     ],
 ],
];
