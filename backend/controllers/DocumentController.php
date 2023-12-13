<?php

namespace backend\controllers;

use Yii;
use app\models\Document;
use app\models\DocumentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\web\Request;

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class DocumentController extends Controller
{
    public $layout = 'blank';
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::class,
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Configure /documents as a folder for static pages
     */

    /**
     * Lists all Document models.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$this->layout = 'blank';
        $searchModel = new DocumentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Document model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Document model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($meeting_id)
    {
        $model = new Document();
        $model->created = time();
        $model->meeting_id = $meeting_id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->document_file = UploadedFile::getInstance($model, 'document_file');
                $ret = $model->upload();
                if($ret == 'Success' && $model->save()) {
                    return $this->redirect(['document/index','DocumentSearch[meeting_id]'=>$model->meeting_id]);
                }
                return $this->render('info',['model'=>$model->document_file, 'ret'=>$ret]);                    
            }
            else {
                $ret = 'Error getting values from form';
                return $this->render('info',['model'=>$model, 'ret'=>$ret]);
            }
            
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Document model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost) {
            $previous_file = $model->file_name;
    		$prevDocumentType = $model->document_type;
            $prevDocumentTypeName = $model->type;
            if($model->load($this->request->post())) { //load new values from form
                $model->document_file = UploadedFile::getInstance($model, 'document_file');
                $ret = '';
                $pathPreviousDocument =  Document::DOCUMENTS_ROOT . $prevDocumentTypeName . '/';
                if($model->document_file) { // uploading a new file. First, we need to delete the old one
                    @unlink($pathPreviousDocument . $previous_file);
                    $ret = $model->upload(); // Then, upload the new one
                }
                else {
                    if($prevDocumentType != $model->document_type) // Not uploading a new file but changing its type
                    {
                        $prevFile = $pathPreviousDocument . $previous_file;
                        $newFile = Document::DOCUMENTS_ROOT . $model->type . '/' . $model->file_name;
                        //return $this->render('info',['model'=>$model->attributes, 'ret' => $prevFile . ' | ' . $newFile]);
                        if(rename($prevFile, $newFile)) $ret = 'Success'; // move file to another folder
                        else $ret = 'Failed to move document from' . $prevFile . ' to ' . $newFile;
                    }
                }
                if($ret == 'Success' && $model->save()) {
                    return $this->redirect(['document/index','DocumentSearch[meeting_id]'=>$model->meeting_id]);
                }
                else {
                    return $this->render('info',['model'=>$model->attributes,'ret'=>$ret]);
                }

            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Document model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $path =  Document::DOCUMENTS_ROOT . $model->type . '/';
        @unlink($path . $model->file_name); // Delete file from /documents
        $model->delete();
        return $this->redirect(['document/index','DocumentSearch[meeting_id]'=>$model->meeting_id]);
    }


    /**
     * Finds the Document model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Document the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Document::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionTest() {
       return $this->render('test',[]);
    }

    public function actionCleanFiles() {
        $documents = Document::find()->select('id, document_type, file_name')->all();
        $allFiles = [];
        $allRecordFiles = [];
        $missingFiles = [];
        foreach($documents as $document) {
            $docFullPath = Document::DOCUMENTS_ROOT . $document->type . '/' . $document->file_name;
            $allRecordFiles[] = $document->type . '/' . $document->file_name;
            if(!file_exists($docFullPath)) {
                $missingFiles[] = $docFullPath;
            }
        }
        $sDir = '/Users/efujii@middlebury.edu/Library/CloudStorage/OneDrive-MiddleburyCollege/CNS/Sites/docker/nam-yii2/frontend/web/assets/documents/*';
        $dirs = array_filter(glob('../../frontend/web/assets/documents/*'), 'is_dir');
        foreach($dirs as $dir) {
            $files = glob('../../frontend/web/assets/documents/' . basename($dir) . '/*');
            foreach($files as $file) {
                $pathParts = pathinfo($file);
                $allFiles[] = basename($pathParts['dirname']) . '/' . $pathParts['basename'];
            }

        }

        return $this->render('_clean-files', [
            'documents' => $documents,
            'missingFiles' => $missingFiles,
            'dirs' => $dirs,
            'allFiles' => $allFiles,
            'allRecordFiles' => $allRecordFiles
        ]);
    }
}
