<?php
namespace cli\controllers;

use Yii;
use yii\helpers\Console;
use yii\console\Controller;

class GenerateController extends Controller
{

    public $options;

    public function options($actionID)
    {
        // $actionId might be used in subclasses to provide options specific to action id
        return ['options'];
    }

	public function actionModel()
	{

		echo 'create model '. $options;

	}

}
