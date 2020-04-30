<?php

use yii\db\Migration;

/**
 * Class m200430_134653_init
 */
class m200430_134653_init extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200430_134653_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200430_134653_init cannot be reverted.\n";

        return false;
    }
    */
}
