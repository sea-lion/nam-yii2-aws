<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_forum}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $priority
 */
class Forum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_forum}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'priority'], 'required'],
            [['description'], 'string'],
            [['priority'], 'integer'],
            [['name'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'priority' => 'Priority',
        ];
    }

    public function getMeetings()
    {
        return $this->hasMany(Meeting::class, ['forum_id' => 'id'])->inverseOf('forum');
    }

    public function getReviewCycles() {
        return $this->hasMany(ReviewCycle::class, ['forum_id' => 'id'])->inverseOf('forum');
    }
}
