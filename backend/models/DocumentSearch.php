<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Document;

/**
 * DocumentSearch represents the model behind the search form of `app\models\Document`.
 */
class DocumentSearch extends Document
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'document_type', 'published', 'meeting_id', 'created'], 'integer'],
            [['title', 'tags', 'file_name', 'description', 'modified'], 'safe'],
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
        $query = Document::find();

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
            'document_type' => $this->document_type,
            'published' => $this->published,
            'meeting_id' => $this->meeting_id,
            'created' => $this->created,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'tags', $this->tags])
            ->andFilterWhere(['like', 'file_name', $this->file_name])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
