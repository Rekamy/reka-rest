<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;
use \yii\data\ActiveDataProvider;

class Efies extends ActiveRecord
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
        return '{{%efies}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','company_id','branch_id','location_id','site_id','level_id','total','total_by_level','fe_type','fe_status','status','created_by','updated_by','deleted_by'], 'integer'],
            [['efies_no','remark'], 'string', 'max' => 255],
            [['efies_expired_date','cylinder_expired_date'], 'safe'],
            [['created_at','updated_at','deleted_at'], 'safe'],
        ];
    }

    public function getEfiesStatus()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status']);;
    }
    public function getCompany()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id']);;
    }
    public function getSite()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id']);;
    }
    public function getBranch()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id']);;
    }
    public function getLocation()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id']);;
    }
    public function getFeType()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id'],\base\models\AuthItem::className(),['name' => 'item_name'],\base\models\AuthRule::className(),['name' => 'rule_name'],\base\models\AuthItem::className(),['name' => 'parent'],\base\models\AuthItem::className(),['name' => 'child'],\base\models\Company::className(),['id' => 'company_id'],\base\models\User::className(),['id' => 'user_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Company::className(),['id' => 'company_id'],\base\models\CompanyRole::className(),['id' => 'role_id'],\base\models\EfiesStatus::className(),['id' => 'fe_status'],\base\models\Company::className(),['id' => 'company_id'],\base\models\Site::className(),['id' => 'site_id'],\base\models\Branch::className(),['id' => 'branch_id'],\base\models\Location::className(),['id' => 'location_id'],\base\models\FeType::className(),['id' => 'fe_type']);;
    }
    public function getFeServices()
    {
        return $this->hasMany(\base\models\AttachmentAccess::className(),['attachment_id' => 'id'],\base\models\AttachmentAccess::className(),['viewable_by' => 'id'],\base\models\AttachmentAccess::className(),['downloadable_by' => 'id'],\base\models\AttachmentMetatag::className(),['attachment_id' => 'id'],\base\models\AttachmentMetatag::className(),['key_id' => 'id'],\base\models\AuthAssignment::className(),['item_name' => 'name'],\base\models\AuthItem::className(),['rule_name' => 'name'],\base\models\AuthItemChild::className(),['parent' => 'name'],\base\models\AuthItemChild::className(),['child' => 'name'],\base\models\Branch::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['user_id' => 'id'],\base\models\CompanyPic::className(),['company_id' => 'id'],\base\models\CompanyPic::className(),['branch_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['company_id' => 'id'],\base\models\CompanyRoleAssignment::className(),['role_id' => 'id'],\base\models\Efies::className(),['fe_status' => 'id'],\base\models\Efies::className(),['company_id' => 'id'],\base\models\Efies::className(),['site_id' => 'id'],\base\models\Efies::className(),['branch_id' => 'id'],\base\models\Efies::className(),['location_id' => 'id'],\base\models\Efies::className(),['fe_type' => 'id'],\base\models\FeService::className(),['reason_id' => 'id'],\base\models\FeService::className(),['service_status_id' => 'id'],\base\models\FeService::className(),['order_item_id' => 'id'],\base\models\FeService::className(),['efies_id' => 'id']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('efies.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'efies.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\EfiesQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['efies.deleted_by' => 0]);
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
