<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%nam_country_profile}}".
 *
 * @property int $id This is the country id
 * @property string $body
 * @property int $published
 * @property int $created
 * @property string $modified
 * @property int $country_id
 */
class CountryProfile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_country_profile}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'body', 'published', 'created', 'country_id'], 'required'],
            [['id', 'published', 'created', 'country_id'], 'integer'],
            [['body'], 'string'],
            [['modified'], 'safe'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'body' => 'Body',
            'published' => 'Published',
            'created' => 'Created',
            'modified' => 'Modified',
            'country_id' => 'Country ID',
        ];
    }

    /**
     * Database relations
     */
    public function getCountry() {
        return $this->hasOne(Country::class, ['id' => 'id'])->inverseOf('profile');
    }
}