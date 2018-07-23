<?php

namespace backend\controllers;

use yii\rest\Controller;
use yii\web\Response;

class SiteController extends Controller
{
	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['contentNegotiator']['formats'] = [
			// 'application/json' => Response::FORMAT_JSON,
			'application/xml' => Response::FORMAT_XML,
		];

		// comment out this part to use authenticator
		unset($behaviors['authenticator']);

		// comment out this part to enable API rate limiter
		unset($behaviors['rateLimiter']);

		return $behaviors;
	}
	public function actionIndex()
	{
		$object = [
			'name' => 'Zahrin',
			'company' => 'Rekamy',
		];
		$object = '[
	{"keys": ["ctrl+e"], "command": "reindent", "args": {"single_line": false}},
	{ "keys": ["ctrl+shift+o"], "command": "prompt_open_folder" },
]';
		return $object;
	}
}
