<?php
namespace backend\models;

use Yii;
use backend\models\base\AttachmentMetatag as BaseAttachmentMetatag;
use \yii\db\Expression;
use \yii\base\Exception;

class AttachmentMetatag extends BaseAttachmentMetatag{
    /**
     * @inheritdoc
     */
    /* public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        if ($insert) {
            // if new record
        }

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
