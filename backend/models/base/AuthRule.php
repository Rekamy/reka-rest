<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;
use \yii\data\ActiveDataProvider;

class AuthRule extends ActiveRecord
{

    /**
     * @inheritdoc
     * @return array mixed
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                // 'value' => new Expression('CURRENT_TIMESTAMP'),
            ],
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%auth_rule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 64],
            [['data'], 'safe'],
            [['created_at','updated_at'], 'integer'],
        ];
    }

    public function getAuthItems()
    {
        return $this->hasMany(\base\models\AttachmentAccess::className(),['attachment_id' => 'id'],\base\models\AttachmentAccess::className(),['viewable_by' => 'id'],\base\models\AttachmentAccess::className(),['downloadable_by' => 'id'],\base\models\AttachmentMetatag::className(),['attachment_id' => 'id'],\base\models\AttachmentMetatag::className(),['key_id' => 'id'],\base\models\AuthAssignment::className(),['item_name' => 'name'],\base\models\AuthItem::className(),['rule_name' => 'name']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('auth_rule.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'auth_rule.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\AuthRuleQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['auth_rule.deleted_by' => 0]);
    }

    public static function getDataProvider()
    {
        $query = self::find();

        /**
         * uncomment if filter query are using single value to match all attributes
         **/
        if($search = Yii::$app->request->get('search')) {
            foreach ((new self)->getAttributes() as $key => $value) {
                $searchCondition[] = ['like', $key , $search];
            }
            array_unshift($searchCondition, 'or');
            $query->andFilterWhere($searchCondition);
        }
        
        /**
         * uncomment if filter query are segregate by attribute
         **/
        if($filterCondition = Yii::$app->request->get('filter')) {
            foreach ($filterCondition = Yii::$app->request->get('filter') as $key => $value) {
                $query->andFilterWhere(['like', $key, $value]);
            }
        }
        
        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }
}
