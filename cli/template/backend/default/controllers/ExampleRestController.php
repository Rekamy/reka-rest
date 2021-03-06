<?= "<?php\n" ?>

namespace backend\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class <?= $g['modelName'] ?>Controller extends ActiveController
{
    public $modelClass = 'backend\models\<?= $g['modelName'] ?>';

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

}
