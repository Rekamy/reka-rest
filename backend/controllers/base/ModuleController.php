<?php

namespace backend\controllers\base;

use Yii;
use yii\rest\Controller;
use yii\web\Response;

class ModuleController extends Controller
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

    public function actionIndex() {
        $tables['modules'] = Yii::$app->db->schema->getTableNames();
        return $tables;
    }
}
