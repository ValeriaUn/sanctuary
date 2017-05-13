<?php

namespace app\models;

use Yii;

class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'usersId', 'bookId', 'amount'], 'required'],
            [['id', 'usersId', 'bookId', 'amount'], 'integer'],
            [['usersId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['bookId'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['bookId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usersId' => 'ID of the user',
            'bookId' => 'ID of the book',
            'amount' => 'Amount',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'usersId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'bookId']);
    }

}
