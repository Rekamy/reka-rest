<?php

namespace backend\controllers;

use yii\rest\Controller;
use yii\web\Response;

class BaseController extends Controller
{

	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['contentNegotiator']['formats'] = [
			 'application/json' => Response::FORMAT_JSON,
			//'application/xml' => Response::FORMAT_XML,
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
			'controller' => "ExampleController",
			'action' => 'index',
		];
		return $object;
	}

	public function actionCreate()
	{
		return 'actionCreate';
	}

	public function actionRead()
	{
		return 'actionRead';

	}

	public function actionUpdate()
	{
		return 'actionUpdate';

	}

	public function actionDelete()
	{
		return 'actionDelete';

	}

}
