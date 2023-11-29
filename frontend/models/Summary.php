<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%nam_summary}}".
 *
 * @property int $id
 * @property int $summit
 * @property string $title
 * @property string $file_name
 * @property int $published
 * @property int $created
 * @property string $modified
 */
class Summary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_summary}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['summit', 'title', 'file_name', 'published', 'created'], 'required'],
            [['summit', 'published', 'created'], 'integer'],
            [['modified'], 'safe'],
            [['title'], 'string', 'max' => 2000],
            [['file_name'], 'string', 'max' => 5000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'summit' => 'Summit',
            'title' => 'Title',
            'file_name' => 'File Name',
            'published' => 'Published',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }
}
