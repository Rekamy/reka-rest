<?= "<?php\n" ?>
namespace backend\models;

use Yii;
use backend\models\base\<?= $g['modelName'] ?> as Base<?= $g['modelName'] ?>;
use \yii\db\Expression;
use \yii\base\Exception;

class <?= $g['modelName'] ?> extends Base<?= $g['modelName'] ?>
{
    /**
     * @inheritdoc
     */
    /* public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        /* if ($insert) {
            // if new record
        } */

        // ...custom code here...
        return true;
    } */

    /**
     * @inheritdoc
     */
    /* public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);
        // ...custom code here...
    } */

}
