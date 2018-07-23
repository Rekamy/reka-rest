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
            // 'class' => 'cli\controllers\MigrateController',
            'class' => 'yii\console\controllers\MigrateController',
            'migrationPath' => [
                '@cli/migrations',
                // '@yii/log/migrations',
                // '@yii/caching/migrations',
                // '@yii/rbac/migrations',
            ],
        ],
    ],
/*	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'sqlite:@micro/db.sqlite',
		],
	],*/
];
