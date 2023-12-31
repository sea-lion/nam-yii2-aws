<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ReviewCycleMeetings;

/**
 * ReviewCycleMeetingSearch represents the model behind the search form of `app\models\ReviewCycleMeetings`.
 */
class ReviewCycleMeetingSearch extends ReviewCycleMeetings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cycle_id', 'meeting_id'], 'integer'],
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
        $query = ReviewCycleMeetings::find();

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
            'cycle_id' => $this->cycle_id,
            'meeting_id' => $this->meeting_id,
        ]);

        return $dataProvider;
    }
}
