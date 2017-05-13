<?php

namespace app\models;

use Yii;

class Book extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'pages', 'author', 'publisher', 'amountEBook', 'description', 'ampountPaperBook', 'discipline', 'price', 'barCode', 'publicationDate', 'genre', 'language'], 'required'],
            [['id', 'pages', 'amountEBook', 'ampountPaperBook', 'genre', 'language'], 'integer'],
            [['author', 'name', 'publisher', 'description', 'barCode'], 'string'],
            [['writtingDate', 'publicationDate'], 'safe'],
            [['name', 'author', 'publisher', 'city'], 'string', 'max' => 128],
			[['writtingDate', 'publicationDate'], 'date'],
            [['description', 'cover'], 'string', 'max' => 255],
            [['barCode'], 'string', 'max' => 45],
            [['genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre' => 'id']],
            [['language'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'name' => 'Title',
            'publisher' => 'Publisher',
            'writtingDate' => 'Date of the creation',
            'pages' => 'Pages',
            'description' => 'Description',
            'city' => 'City',
            'cover' => 'Cover',
            'amountEBook' => 'Amount of the e-version',
            'amountPaperBook' => 'Amount of the paper-version',
            'price' => 'Price',
            'barCode' => 'Bar-Code',
            'publicationDate' => 'Date of the printing',
            'genre' => 'Genre',
            'language' => 'Language',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGenre()
    {
        return $this->hasOne(Genre::className(), ['id' => 'genre']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language']);
    }

}
