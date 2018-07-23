<?php

namespace app\controllers;

use yii\rest\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
    	var_dump(Yii::$app);die;
        return 'Hello World!';
    }
}
