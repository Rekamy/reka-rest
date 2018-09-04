<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;

class CompanyRole extends ActiveRecord
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
        return '{{%company_role}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','created_by','updated_by','deleted_by'], 'integer'],
            [['name','description','remark'], 'string', 'max' => 255],
            [['status'], 'safe'],
            [['created_at','updated_at','deleted_at'], 'safe'],
        ];
    }

    public function getCompanyRoleAssignments()
    {
        return $this->hasMany(\base\models\AttachmentAccess::className(),['attachment_id' => 'id'],\base\models\AttachmentAccess::className(),['viewable_by' => 'id'],\base\models\AttachmentAccess::className(),['downloadable_by' => 'id'],\base\models\AttachmentMetatag::className(),['attachment_id' => 'id'],\base\models\AttachmentMetatag::className(),['key_id' => 'id'],\base\models\AuthAssignment::className(),['item_name' => 'name'],\base\models\AuthItem::className(),['rule_name' => 'name'],\base\models\AuthItemChild::className(),['parent' => 'name'],\base\models\AuthItemChild::className(),['child' => 'name'],\base\models\Branch::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['user_id' => 'id'],\base\models\CompanyPic::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['branch_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['company_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['role_id' => 'id']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('company_role.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'company_role.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\CompanyRoleQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['company_role.deleted_by' => 0]);
    }
}