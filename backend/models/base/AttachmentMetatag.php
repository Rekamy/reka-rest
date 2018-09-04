<?php
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;

class AttachmentMetatag extends ActiveRecord
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
        return '{{%attachment_metatag}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','attachment_id','key_id','created_by','updated_by','deleted_by'], 'integer'],
            [['value','remark'], 'string', 'max' => 255],
            [['status'], 'safe'],
            [['created_at','updated_at','deleted_at'], 'safe'],
        ];
    }

    public function getAttachment()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id']);;
    }
    public function getAttachmentMetatagKeylist()
    {
        return $this->hasOne(\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\User::className(),['id' => 'viewable_by'],\base\models\User::className(),['id' => 'downloadable_by'],\base\models\Attachment::className(),['id' => 'attachment_id'],\base\models\AttachmentMetatagKeylist::className(),['id' => 'key_id']);;
    }

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('attachment_metatag.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', 'attachment_metatag.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\AttachmentMetatagQuery(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['attachment_metatag.deleted_by' => 0]);
    }
}
