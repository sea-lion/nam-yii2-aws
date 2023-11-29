<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_review_cycle_meetings}}".
 *
 * @property int $cycle_id
 * @property int $meeting_id
 */
class ReviewCycleMeetings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_review_cycle_meetings}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cycle_id', 'meeting_id'], 'required'],
            [['cycle_id', 'meeting_id'], 'integer'],
            [['cycle_id', 'meeting_id'], 'unique', 'targetAttribute' => ['cycle_id', 'meeting_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cycle_id' => 'Cycle ID',
            'meeting_id' => 'Meeting ID',
        ];
    }
}
