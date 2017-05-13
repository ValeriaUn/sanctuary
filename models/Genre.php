<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "discipline".
 *
 * @property integer $id
 * @property string $name
 * @property string $faculty
 *
 * @property Book[] $books
 * @property Faculty $faculty0
 * @property Testbook[] $testbooks
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name'
        ];
    }


}
