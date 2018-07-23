<?php

namespace app\controllers;

use Yii;
// use yii\base\Exception;
// use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
// use yii\db\Expression;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%user}}';
    }
}
