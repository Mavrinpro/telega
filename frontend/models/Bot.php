<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bot".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $user_id
 * @property string|null $token
 * @property int|null $create_at
 * @property int|null $update_at
 * @property int|null $active
 */
class Bot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'create_at', 'update_at', 'active'], 'integer'],
            [['name', 'token'], 'string', 'max' => 255],
            [['name',], 'unique'],
            [['name',], 'required'],
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
            'token' => 'Token',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'active' => 'Active',
        ];
    }
}