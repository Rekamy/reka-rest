<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;

class Location extends ActiveRecord
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
        return '{{%location}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','company_id','branch_id','created_by','updated_by','deleted_by'], 'integer'],
            [['name','remark'], 'string', 'max' => 255],
            [['status'], 'safe'],
            [['created_at','updated_at','deleted_at'], 'safe'],
        ];
    }

    public function getEfies()
    {
        return $this->hasMany(\base\models\AttachmentAccess::className(),['attachment_id' => 'id'],\base\models\AttachmentAccess::className(),['viewable_by' => 'id'],\base\models\AttachmentAccess::className(),['downloadable_by' => 'id'],\base\models\AttachmentMetatag::className(),['attachment_id' => 'id'],\base\models\AttachmentMetatag::className(),['key_id' => 'id'],\base\models\AuthAssignment::className(),['item_name' => 'name'],\base\models\AuthItem::className(),['rule_name' => 'name'],\base\models\AuthItemChild::className(),['parent' => 'name'],\base\models\AuthItemChild::className(),['child' => 'name'],\base\models\Branch::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['user_id' => 'id'],\base\models\CompanyPic::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['branch_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['company_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['role_id' => 'id'],\base\models\Efies::className(),['fe_status' => 'id'],\base\models\Efies::className(),['company_id' => 'id'],\base\models\Efies::className(),['site_id' => 'id'],\base\models\Efies::className(),['branch_id' => 'id'],\base\models\Efies::className(),['location_id' => 'id']);;
    }
    public function getCompany()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id'],\base\models\Efies::className(),['id' => 'efies_id'],\base\models\FeServiceType::className(),['id' => 'type'],\base\models\Company::className(),['id' => 'company_id']);;
    }
    public function getBranch()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id'],\base\models\Efies::className(),['id' => 'efies_id'],\base\models\FeServiceType::className(),['id' => 'type'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('location.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'location.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\LocationQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['location.deleted_by' => 0]);
    }
}