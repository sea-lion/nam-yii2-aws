<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "{{%nam_document}}".
 *
 * @property int $id
 * @property int $document_type
 * @property string $title
 * @property string $tags
 * @property string $file_name
 * @property string $description
 * @property int $published
 * @property int $meeting_id
 * @property int $created
 * @property string $modified
 */
class Document extends \yii\db\ActiveRecord
{
    const SCENARIO_STRICT = 'strict';
    const DOCUMENTS_ROOT = '/app/frontend/web/assets/documents/';
    public $document_file; //in-memory field to hold the uploaded file.
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%nam_document}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['document_type', 'title', 'tags', 'description', 'published', 'meeting_id', 'created'], 'required'],
            [['document_type', 'published', 'meeting_id', 'created'], 'integer'],
            [['tags', 'description'], 'string'],
            [['modified'], 'safe'],
            [['file_name'], 'safe'],
            [['title'], 'string', 'max' => 2000],
            [['file_name'], 'string', 'max' => 5000],
            [['document_file'], 'file', 'skipOnEmpty' => false, 'on'=>self::SCENARIO_STRICT],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'document_type' => 'Document Type',
            'title' => 'Title',
            'tags' => 'Tags',
            'file_name' => 'File Name',
            'description' => 'Description',
            'published' => 'Published',
            'meeting_id' => 'Meeting ID',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    public function getDocType() {
        return $this->hasOne(DocType::class, ['id' => 'document_type'])->inverseOf('documents');
    }

    public function getType() {
        return DocTypeSearch::findOne($this->document_type)->name;
    }

    public function getPrettyDocuments($meeting_id) {
        $models = Document::find()->where(['meeting_id' => $meeting_id, 'published' => 1])->select('document_type, title, file_name')->asArray()->all();
    }

    public function upload()
    {
        //$type = DocTypeSearch::findOne($this->document_type)->name;
        //$path =  __DIR__ . '/../../frontend/web/documents/' . $type . '/';
        $path =  self::DOCUMENTS_ROOT . $this->type . '/';
       $filename =  $this->document_file->baseName  . '.' . $this->document_file->extension; ;
        if ($this->validate()) {
            $this->file_name = $filename; 
            if($this->document_file->saveAs($path . $filename)) {  
                return 'Success';
            }
            else { return "Failed to save file"; }
        } else {
            return 'Failed validation';
        }
    }

    
}

