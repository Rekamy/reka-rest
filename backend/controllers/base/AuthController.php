<?php

namespace backend\controllers\base;

use Yii;
// use yii\rest\Controller;
use backend\controllers\base\BaseController as Controller;
use yii\web\Response;
use yii\base\Exception;
use backend\models\identity\Identity;
use yii\data\ActiveDataProvider;
use yii\filters\auth\CompositeAuth;
use yii\filters\auth\HttpBasicAuth;
use yii\filters\auth\HttpBearerAuth;
use yii\filters\auth\QueryParamAuth;

class AuthController extends Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        // comment out this part to use authenticator
        unset($behaviors['authenticator']);
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
                // HttpBasicAuth::className(),
                HttpBearerAuth::className(),
                // QueryParamAuth::className(),
            ],
            // 'except' => ['login','list','register','reset-password'],
            'except' => ['login','index','register','reset-password'],
        ];

        // comment out this part to enable API rate limiter
        unset($behaviors['rateLimiter']);

        return $behaviors;
    }

    public function actionIndex()
    {
        // return HttpBearerAuth::authenticate($user, $request, $response);
        return new ActiveDataProvider([
            'query' => Identity::find(),
        ]);
    }

    public function actionList()
    {
        return new ActiveDataProvider([
            'query' => Identity::find(),
        ]);
    }

    public function actionLogin()
    {
        // Yii::$app->request->post()
        return ['test'];

    }

    public function actionLogout()
    {
        return 'actionCreate';
    }

    public function actionRegister()
    {
        $post = Yii::$app->request->post();
        $dbtransac = Yii::$app->db->beginTransaction();
        try {
            if (!Identity::register($post)) {
                throw new Exception("Error Processing Request", 1);
            }
            $dbtransac->commit();
            return Identity::findByUsername($post['username']);
        } catch (Exception $e) {
            $dbtransac->rollback();
            return $e->getMessage();
        }
    }

    public function actionResetPassword()
    {
        return 'actionCreate';
    }
}
