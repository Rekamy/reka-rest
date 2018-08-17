<?php

return [
	'id' => 'micro-app',
    // the basePath of the application will be the `micro-app` directory
	'basePath' => dirname(__DIR__),
    // this is where the application will find all controllers
	'controllerNamespace' => 'backend\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
	'aliases' => [
		'@app' => dirname(__DIR__),
		'@backend' => dirname(__DIR__). '/backend',
		// '@frontend' => dirname(__DIR__). '/frontend',
		// '@mobile' => dirname(__DIR__). '/mobile',
	],
	'components' => [
		'request' => [
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			]
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			// 'enableStrictParsing' => true,
			'showScriptName' => false,
			'rules' => [
				// ['class' => 'yii\rest\UrlRule', 'controller' => 'site'],
			],
		],
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'sqlite:@app/db.sqlite',
		],
		/*'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'mysql:localhost:3307/db_name',
			'user' => 'root',
			'password' => '',
			'charset' => 'utf8',
		],*/
	],
];
