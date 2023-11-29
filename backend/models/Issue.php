<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_issue}}".
 *
 * @property int $id
 * @property int $meeting_id
 * @property string $level
 * @property int $category_id
 * @property int $topic_id
 * @property string $body
 * @property string $keywords
 * @property int $published
 * @property int $created
 * @property string $modified
 */
class Issue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_issue}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meeting_id', 'category_id', 'topic_id', 'body', 'published', 'created'], 'required'],
            [['meeting_id', 'category_id', 'topic_id', 'published', 'created'], 'integer'],
            [['body', 'keywords'], 'string'],
            [['modified'], 'safe'],
         ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meeting_id' => 'Meeting ID',
            'category_id' => 'Category',
            'topic_id' => 'Topic',
            'body' => 'Body',
            'keywords' => 'Keywords',
            'published' => 'Published',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * Database relations
     */
    public function getMeeting() {
        return $this->hasOne(Meeting::class, ['id' => 'meeting_id'])->inverseOf('issues');
       
    }
    public function getCategory() {
        return $this->hasOne(Category::class, ['id' => 'category_id'])->inverseOf('issues');
    }

    public function getTopic() {
        return $this->hasOne(Topic::class, ['id' => 'topic_id'])->inverseOf('issues');
    }

}
