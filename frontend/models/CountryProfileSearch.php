<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CountryProfile;

/**
 * CountryProfileSearch represents the model behind the search form of `app\models\CountryProfile`.
 */
class CountryProfileSearch extends CountryProfile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['published', 'created', 'country_id'], 'integer'],
            [['id', 'body', 'modified'], 'safe'],
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
        $query = CountryProfile::find()->joinWith('country');

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
            //'id' => $this->id,
            'published' => $this->published,
            'created' => $this->created,
            'modified' => $this->modified,
            'country_id' => $this->country_id,
        ]);

        $query->andFilterWhere(['like', 'body', $this->body]);
        $query->andFilterWhere(['like', 'name', $this->id]);

        return $dataProvider;
    }
}
