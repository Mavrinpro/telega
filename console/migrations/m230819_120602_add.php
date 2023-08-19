<?php

use yii\db\Migration;

/**
 * Class m230819_120602_add
 */
class m230819_120602_add extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('bot', 'channel_id', $this->string()->defaultValue(null)->after('name'))->string();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('bot', 'channel_id');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230819_120602_add cannot be reverted.\n";

        return false;
    }
    */
}
