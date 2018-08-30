<?php

require __DIR__ . '/../config/routes.php';
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
		'@frontend' => dirname(__DIR__). '/frontend',
		// '@mobile' => dirname(__DIR__). '/mobile',
	],
	'components' => [
		'request' => [
			'parsers' => [
				'application/json' => 'yii\web\JsonParser',
			]
		],
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'backend\models\identity\Identity',
            // 'enableAutoLogin' => true,
            'enableSession' => false,
            'loginUrl' => null,
            // 'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
		'urlManager' => [
			'enablePrettyUrl' => true,
			// 'enableStrictParsing' => true,
			'showScriptName' => false,
			'rules' => $rules,
		],
		// 'db' => [
		// 	'class' => 'yii\db\Connection',
		// 	'dsn' => 'sqlite:@app/db.sqlite',
		// ],
		'db' => [
			'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost:3306;dbname=rekarest_db',
            'username' => 'root',
            'password' => '',
			'charset' => 'utf8',
		],
	],
];
