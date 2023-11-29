<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Issue;

/**
 * IssueSearch represents the model behind the search form of `app\models\Issue`.
 */
class IssueSearch extends Issue
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'meeting_id', 'published', 'created'], 'integer'],
            [['level', 'body', 'keywords', 'modified', 'category_id', 'topic_id'], 'safe'],
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
        $query = Issue::find()->joinWith(['category','topic'])->orderBy('nam_category.name, nam_topic.name');

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
            'meeting_id' => $this->meeting_id,
            //'category' => $this->category,
            //'topic' => $this->topic,
            'published' => $this->published,
            'created' => $this->created,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'body', $this->body]);
        $query->andFilterWhere(['like', 'keywords', $this->keywords]);
        $query->andFilterWhere(['like', 'nam_category.name', $this->category_id]);
        $query->andFilterWhere(['like', 'nam_topic.name', $this->topic_id]);
    
        return $dataProvider;
    }
}
