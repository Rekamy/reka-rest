<?= "<?php\n" ?>

namespace backend\controllers;

use yii\rest\Controller;
use yii\web\Response;

class <?= $g['modelName'] ?>Controller extends Controller
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
			'Controller' => "<?= $g['modelName'] ?>Controller",
			'action' => 'index',
		];
		return $object;
	}

	public function actionCreate()
	{
		echo 'actionCreate';
	}

	public function actionRead()
	{
		echo 'actionRead';

	}

	public function actionUpdate()
	{
		echo 'actionUpdate';

	}

	public function actionDelete()
	{
		echo 'actionDelete';

	}

}
