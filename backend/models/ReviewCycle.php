<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_review_cycle}}".
 *
 * @property int $id
 * @property int $forum_id
 * @property string $title
 * @property int $year
 * @property string $description
 * @property string $created
 */
class ReviewCycle extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_review_cycle}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['forum_id', 'title', 'year', 'description'], 'required'],
            [['forum_id', 'year'], 'integer'],
            [['description'], 'string'],
            [['created'], 'safe'],
            [['title'], 'string', 'max' => 2000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'forum_id' => 'Forum ID',
            'title' => 'Title',
            'year' => 'Year',
            'description' => 'Description',
            'created' => 'Created',
        ];
    }

    /**
     * Declare database relations
     */
    public function getForum() {
        return $this->hasOne(Forum::class, ['id' => 'forum_id'])->inverseOf('reviewCycles');
    }
    public function getMeetings() {
        return $this->hasMany(Meeting::class, ['review_cycle_id' => 'id'])->inverseOf('reviewCycle');
    }

}
