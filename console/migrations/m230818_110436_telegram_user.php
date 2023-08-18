<?php

use yii\db\Migration;

/**
 * Class m230818_110436_telegram_user
 */
class m230818_110436_telegram_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%telegram_user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'user_id' => $this->integer(),
            'first_name' => $this->string(),
            'username' => $this->string(),
            'language_code' => $this->string(),
            'chat_id' => $this->integer(),
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
        $this->dropTable('telegram_user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230818_110436_telegram_user cannot be reverted.\n";

        return false;
    }
    */
}
