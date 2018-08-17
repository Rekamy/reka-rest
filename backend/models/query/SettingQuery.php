<?php
namespace common\models\query;

use Yii;

/**
 * This is the ActiveQuery class for [[\common\models\query\Setting]].
 *
 * @see \common\models\query\Setting */
class SettingQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        if(!Yii::$app->user->can('Administrator')) {
            $this->andWhere('[[status]]=1');
        }
        return $this;
    }*/

    public function mine()
    {
        $this->andWhere(['Setting.created_by' => Yii::$app->user->id]);
        return $this;
    }

    /**
     * @inheritdoc
     * @return \common\models\query\User[]|array
     */
    public function all($db = null, $bypass = false)
    {
        // uncomment and edit permission rule to view all
        /*if(!Yii::$app->user->can('Administrator')) {
            $this->mine();
        }*/
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\User|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
