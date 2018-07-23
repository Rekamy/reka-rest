<?php

// var_dump(dirname(__DIR__) . '/components');die;
return [
	'id' => 'micro-app',
    // the basePath of the application will be the `micro-app` directory
	'basePath' => dirname(__DIR__),
    // this is where the application will find all controllers
	'controllerNamespace' => '@app\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
	'aliases' => [
		'@app' => dirname(__DIR__),
		// '@components' => dirname(__DIR__) . '/components',
        // '@bower' => '@vendor/bower-asset',
        // '@npm'   => '@vendor/npm-asset',
	],
	'components' => [
		'db' => [
			'class' => 'yii\db\Connection',
			'dsn' => 'sqlite:@app/db.sqlite',
		],
	],
];
