<?php

namespace backend\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class SiteController extends ActiveController
{
    public $modelClass = 'backend\models\Site';

	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['contentNegotiator']['formats'] = [
			 'application/json' => Response::FORMAT_JSON,
			//'application/xml' => Response::FORMAT_XML,
		];

		$behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];

		// comment out this part to use authenticator
		unset($behaviors['authenticator']);

		// comment out this part to enable API rate limiter
		unset($behaviors['rateLimiter']);

		return $behaviors;
	}

}
