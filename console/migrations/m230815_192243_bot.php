<?php

use yii\db\Migration;

/**
 * Class m230815_192243_bot
 */
class m230815_192243_bot extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bot}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'user_id' => $this->integer(),
            'token' => $this->string(),
            'create_at' => $this->integer(),
            'update_at' => $this->integer(),
            'active' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('bot');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230815_192243_bot cannot be reverted.\n";

        return false;
    }
    */
}
