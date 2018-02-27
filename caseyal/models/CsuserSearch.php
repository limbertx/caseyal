<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Csuser;

/**
 * CsuserSearch represents the model behind the search form about `app\models\Csuser`.
 */
class CsuserSearch extends Csuser
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pkuser', 'pkteam'], 'integer'],
            [['nickname', 'nombrecom', 'apellidocom', 'password', 'email', 'authkey', 'accesstoken', 'estado'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Csuser::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pkuser' => $this->pkuser,
            'pkteam' => $this->pkteam,
        ]);

        $query->andFilterWhere(['like', 'nickname', $this->nickname])
            ->andFilterWhere(['like', 'nombrecom', $this->nombrecom])
            ->andFilterWhere(['like', 'apellidocom', $this->apellidocom])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'authkey', $this->authkey])
            ->andFilterWhere(['like', 'accesstoken', $this->accesstoken])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
