<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;
use \yii\data\ActiveDataProvider;

class OrderItem extends ActiveRecord
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
        return '{{%order_item}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','order_id','item_type_id','quantity','status','created_by','updated_by','deleted_by'], 'integer'],
            [['metavalue','remark'], 'string', 'max' => 255],
            [['created_at','updated_at','deleted_at'], 'safe'],
        ];
    }

    public function getFeServices()
    {
        return $this->hasMany(\base\models\AttachmentAccess::className(),['attachment_id' => 'id'],\base\models\AttachmentAccess::className(),['viewable_by' => 'id'],\base\models\AttachmentAccess::className(),['downloadable_by' => 'id'],\base\models\AttachmentMetatag::className(),['attachment_id' => 'id'],\base\models\AttachmentMetatag::className(),['key_id' => 'id'],\base\models\AuthAssignment::className(),['item_name' => 'name'],\base\models\AuthItem::className(),['rule_name' => 'name'],\base\models\AuthItemChild::className(),['parent' => 'name'],\base\models\AuthItemChild::className(),['child' => 'name'],\base\models\Branch::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['user_id' => 'id'],\base\models\CompanyPic::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['branch_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['company_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['role_id' => 'id'],\base\models\Efies::className(),['fe_status' => 'id'],\base\models\Efies::className(),['company_id' => 'id'],\base\models\Efies::className(),['site_id' => 'id'],\base\models\Efies::className(),['branch_id' => 'id'],\base\models\Efies::className(),['location_id' => 'id'],\base\models\Efies::className(),['fe_type' => 'id'],\base\models\FeService::className(),['reason_id' => 'id'],\base\models\FeService::className(),['service_status_id' => 'id'],\base\models\FeService::className(),['order_item_id' => 'id']);;
    }
    public function getOrder()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id'],\base\models\Efies::className(),['id' => 'efies_id'],\base\models\FeServiceType::className(),['id' => 'type'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Order::className(),['id' => 'order_id']);;
    }
    public function getOrderItemType()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type'],\base\models\ServiceReason::className(),['id' => 'reason_id'],\base\models\FeServiceStatus::className(),['id' => 'service_status_id'],\base\models\OrderItem::className(),['id' => 'order_item_id'],\base\models\Efies::className(),['id' => 'efies_id'],\base\models\FeServiceType::className(),['id' => 'type'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Order::className(),['id' => 'order_id'],\base\models\OrderItemType::className(),['id' => 'item_type_id']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('order_item.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'order_item.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\OrderItemQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['order_item.deleted_by' => 0]);
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
