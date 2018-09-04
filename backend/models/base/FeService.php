<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;

class FeService extends ActiveRecord
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
        return '{{%fe_service}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','order_item_id','efies_id','type','service_status_id','reason_id','created_by','updated_by','deleted_by'], 'integer'],
            [['schedule_date','date_service','return_date','next_date_service'], 'safe'],
            [['prev_weight','prev_pressure','weight','pressure'], 'safe'],
            [['cost'], 'safe'],
            [['remark'], 'string', 'max' => 255],
            [['status'], 'safe'],
            [['created_at','updated_at','deleted_at'], 'safe'],
        ];
    }

    public function getServiceReason()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id']);;
    }
    public function getFeServiceStatus()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id']);;
    }
    public function getOrderItem()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id']);;
    }
    public function getEfies()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id'],\base\models\Efies::className(),['id' => 'efies_id']);;
    }
    public function getFeServiceType()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id'],\base\models\Efies::className(),['id' => 'efies_id'],\base\models\FeServiceType::className(),['id' => 'type']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('fe_service.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'fe_service.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\FeServiceQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['fe_service.deleted_by' => 0]);
    }
}
