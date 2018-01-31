<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Csdetteam;

/**
 * CsdetteamSearch represents the model behind the search form about `app\models\Csdetteam`.
 */
class CsdetteamSearch extends Csdetteam
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pkdetteam', 'fkteam', 'fkintegrante'], 'integer'],
            [['estado'], 'safe'],            
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implusuarioementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $fkteam)
    {
        $query = Csdetteam::find();

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
            'pkdetteam' => $this->pkdetteam,
            'fkintegrante' => $this->fkintegrante,
            'fkteam' => $fkteam
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
