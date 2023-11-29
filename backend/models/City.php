<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_city}}".
 *
 * @property int $id
 * @property string $name
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_city}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 512],
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
        ];
    }

    public function getMeetings()
    {
        return $this->hasMany(Meeting::class, ['city_id' => 'id'])->inverseOf('city');
    }
 
}
