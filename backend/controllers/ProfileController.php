<?php

namespace backend\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class ProfileController extends ActiveController
{
    public $modelClass = 'backend\models\Profile';

	public function behaviors()
	{
		$behaviors = parent::behaviors();
		$behaviors['contentNegotiator']['formats'] = [
			 'application/json' => Response::FORMAT_JSON,
			//'application/xml' => Response::FORMAT_XML,
		];

		$behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
			'cors' => [
				'Origin' => ['*'],
				'Access-Control-Expose-Headers' => ['*'],
			]

        ];


		// comment out this part to use authenticator
		unset($behaviors['authenticator']);

		// comment out this part to enable API rate limiter
		unset($behaviors['rateLimiter']);

		return $behaviors;
	}

	public function actions()
	{
	    $actions = parent::actions();
	    // refer https://github.com/yiisoft/yii2/issues/4479
	    $actions['index']['prepareDataProvider'] = function($action) 
	    {
	    	return $this->modelClass::getDataProvider();
	    };
	    return $actions;
	}
}
