<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\User;

class Billing extends ActiveRecord
{
    public function getBilling()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}