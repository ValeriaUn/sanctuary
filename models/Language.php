<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $fac_id
 * @property string $name
 *
 * @property Book[] $books
 * @property Discipline[] $disciplines
 * @property Testbook[] $testbooks
 * @property Users $users
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['language' => 'name']);
    }

    
    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'id']);
    }
}
