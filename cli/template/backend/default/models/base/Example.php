<?= "<?php\n" ?>
namespace backend\models\base;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use \yii\db\Expression;

class <?= $g['modelName'] ?> extends ActiveRecord
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
        return '{{%<?= $g['tableName'] ?>}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
<?php foreach ($g['rules'] as $key => $row) : ?>
            <?= $row."\n" ?>
<?php endforeach; ?>
        ];
    }

<?php if ($g['relations']) : ?>
<?php foreach ($g['relations'] as $fk => $rel) : ?>
    public function get<?= $rel['name'] ?>()
    {
        <?= $rel['data'] ?>;
    }
<?php endforeach; ?>
<?php endif; ?>

    public static function arrayList($callback = false)
    {
        $callback = is_array($callback) ? $callback : self::find()->orderBy('<?= $g['tableName'] ?>.id')->asArray()->all();
        return \yii\helpers\ArrayHelper::map($callback, 'id', '<?= $g['tableName'] ?>.name');
    }

    /**
     * @inheritdoc
     * @return \common\models\query\UserQuery the active query used by this AR class.
     */
    public static function find()
    {
        $query = new \backend\models\query\<?= $g['modelName'] ?>Query(get_called_class());
        // uncomment and edit permission rule to view own items only
        /*if(!Yii::$app->user->can('permission')){
           $query->mine();
        } */
        // uncomment and edit permission rule to view deleted items
        /*if(Yii::$app->user->can('see_deleted')){
           return $query;
        } */
        return $query->andWhere(['<?= $g['tableName'] ?>.deleted_by' => 0]);
    }
}
