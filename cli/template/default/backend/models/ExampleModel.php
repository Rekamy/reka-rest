<?php
namespace backend\models;

use Yii;
use backend\models\base\ExampleModel;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;

class ExampleModel extends BaseModel
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
                'value' => new Expression('CURRENT_TIMESTAMP'),
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
        return '{{%ExampleModel}}';
    }

    public static function arrayList()
    {
        return yii\helpers\ArrayHelper::map(self::findAll('1=1'), 'id' , 'name');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'string', 'max' => 255],
            [['status', 'deleted_by', 'created_by', 'updated_by'], 'integer'],
            [['deleted_at', 'created_at', 'updated_at'], 'safe'],
        ];
    }

}
