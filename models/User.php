<?php

namespace app\models;

use yii\db\ActiveRecord;
use app\models\Billing;

class User extends ActiveRecord
{
    public function getBilling()
    {
        return $this->hasMany(Billing::className(), ['user_id' => 'id']);
    }
}
