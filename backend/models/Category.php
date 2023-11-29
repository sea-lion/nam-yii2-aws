<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_category}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_category}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
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
            'description' => 'Description',
        ];
    }

    /**
     * Database relations
     */
    public function getIssues() {
            return $this->hasMany(Issue::class, ['category_id' => 'id'])->inverseOf('category');
        }
    public function getTopics() {
        return $this->hasMany(Topic::class, ['category_id' => 'id'])->inverseOf('category');
    }
}
