<?php

namespace app\models;

use Yii;

class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'eMail', 'password'], 'required'],
            [['id', 'access'], 'integer'],
            [['name', 'eMail', 'password'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Your name',
            'password' => 'Your paasword',
            'eMail' => 'Your e-mail',
        ];
    }

}
