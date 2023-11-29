<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Meeting;

/**
 * MeetingSearch represents the model behind the search form of `app\models\Meeting`.
 */
class MeetingSearch extends Meeting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'month', 'year', 'city_id', 'review_cycle_id', 'created'], 'integer'],
            [['title', 'forum_id', 'chair_id', 'modified'], 'safe'],
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
        $query = Meeting::find()
            -> joinWith(['city','chair'])
         ;

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'year' => SORT_DESC
                ]
            ],
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
            'month' => $this->month,
            'year' => $this->year,
            //'city_id' => $this->city_id,
            'forum_id' => $this->forum_id,
            //'chair_id' => $this->chair_id,
            'created' => $this->created,
            'modified' => $this->modified,
            'review_cycle_id' => $this->review_cycle_id
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);
        $query->andFilterWhere(['like', 'nam_city.name', $this->city_id]);
        $query->andFilterWhere(['like', 'nam_country.name', $this->chair_id]);
 
        $dataProvider->sort->attributes['city_id'] = [
            'asc' => ['nam_city.name' => SORT_ASC],
            'desc' => ['nam_city.name' => SORT_DESC],
        ];
        $dataProvider->sort->attributes['chair_id'] = [
            'asc' => ['nam_country.name' => SORT_ASC],
            'desc' => ['nam_country.name' => SORT_DESC],
        ];


        return $dataProvider;
    }
}
