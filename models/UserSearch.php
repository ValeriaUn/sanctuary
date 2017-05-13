<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

class UserSearch extends User
{
    public function rules()
    {
        return [
            [['id', 'access'], 'integer'],
            [['name', 'eMail', 'password'], 'safe']
            ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }


    public function search($params)
    {
        $query = User::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {

            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'name' => $this->name,
            'eMail' => $this->eMail,
            'access' => $this->access
        ]);

        $query->andFilterWhere(['like', 'id', $this->id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'eMail', $this->eMail])
            ->andFilterWhere(['like', 'access', $this->access]);
            
        return $dataProvider;
    }
}
