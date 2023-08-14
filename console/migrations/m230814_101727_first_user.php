<?php

use common\models\User;
use yii\db\Migration;

/**
 * Class m230814_101727_first_user
 */
class m230814_101727_first_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $transaction = $this->getDb()->beginTransaction();
        $user = \Yii::createObject([
            'class'    => User::class,
            'scenario' => 'create',
            'email'    => 'admin',
            'username' => 'mavrin79@mail.ru',
            'password' => '12345678',
        ]);
        if (!$user->insert(false)) {
            $transaction->rollBack();
            return false;
        }
        $user->confirm();
        $transaction->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230814_101727_first_user cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230814_101727_first_user cannot be reverted.\n";

        return false;
    }
    */
}
