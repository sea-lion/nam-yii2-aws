<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%nam_topic}}".
 *
 * @property int $id
 * @property string $name
 * @property int $category
 * @property string $keywords
 * @property string $description
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_topic}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category', 'keywords', 'description'], 'required'],
            [['category'], 'integer'],
            [['keywords', 'description'], 'string'],
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
            'category_id' => 'Category',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }

    /**
     * Database relations
     */
    public function getIssues() {
        return $this->hasMany(Issue::class, ['topic_id' => 'id'])->inverseOf('topic');
    }

    public function getCategory() {
        return $this->hasOne(Category::class, ['id' => 'category_id'])->inverseOf('topics');
    }

}


