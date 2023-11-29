<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_issue}}".
 *
 * @property int $id
 * @property int $meeting_id
 * @property string $level
 * @property int $category
 * @property int $topic
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
            [['meeting_id', 'category', 'topic', 'body', 'published', 'created'], 'required'],
            [['meeting_id', 'category', 'topic', 'published', 'created'], 'integer'],
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
            'category' => 'Category',
            'topic' => 'Topic',
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
    public function getCatname() {
        return $this->hasOne(Category::class, ['id' => 'category'])->inverseOf('issues');
    }

    public function getTopicname() {
        return $this->hasOne(Topic::class, ['id' => 'topic'])->inverseOf('issues');
    }

}
