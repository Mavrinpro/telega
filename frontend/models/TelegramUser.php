<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telegram_user".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $username
 * @property string|null $language_code
 * @property int|null $chat_id
 * @property int|null $create_at
 * @property int|null $update_at
 * @property int|null $active
 */
class TelegramUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telegram_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'chat_id', 'create_at', 'update_at', 'active'], 'integer'],
            [['name', 'first_name', 'username', 'language_code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'user_id' => 'User ID',
            'first_name' => 'First Name',
            'username' => 'Username',
            'language_code' => 'Language Code',
            'chat_id' => 'Chat ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'active' => 'Active',
        ];
    }
}
