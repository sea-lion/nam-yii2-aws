<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Organization;

/**
 * OrganizationSearch represents the model behind the search form of `app\models\Organization`.
 */
class OrganizationSearch extends Organization
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'active'], 'integer'],
            [['name', 'nam', 'nam_summit_chair', 'iaea', 'npt', 'bwc', 'cwc', 'ctbt', 'g77'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Organization::find();

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
            'id' => $this->id,
            'active' => $this->active,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'nam', $this->nam])
            ->andFilterWhere(['like', 'nam_summit_chair', $this->nam_summit_chair])
            ->andFilterWhere(['like', 'iaea', $this->iaea])
            ->andFilterWhere(['like', 'npt', $this->npt])
            ->andFilterWhere(['like', 'bwc', $this->bwc])
            ->andFilterWhere(['like', 'cwc', $this->cwc])
            ->andFilterWhere(['like', 'ctbt', $this->ctbt])
            ->andFilterWhere(['like', 'g77', $this->g77]);

        return $dataProvider;
    }
}
