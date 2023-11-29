<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "{{%nam_document_type}}".
 *
 * @property int $id
 * @property string $name
 * @property string $header
 * @property string $description
 */
class DocType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_document_type}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'header', 'description'], 'required'],
            [['description'], 'string'],
            [['name', 'header'], 'string', 'max' => 2012],
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
            'header' => 'Header',
            'description' => 'Description',
        ];
    }

    public function getDocuments() {
        return $this->hasMany(Document::class, ['document_type' => 'id'])->inverseOf('doc-type');
    }
        
}
