<?php

namespace backend\controllers;

use app\models\Meeting;
use app\models\Document;
use app\models\MeetingSearch;
use app\models\Issue;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MeetingController implements the CRUD actions for Meeting model.
 */
class MeetingController extends Controller
{
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
     * Lists all Meeting models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MeetingSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'reviewCycleVisibility' => ($searchModel->forum_id == 3 ? true : false),
        ]);
    }

    /**
     * Displays a single Meeting model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
            'reviewCycleVisibility' => ($model->forum->name == 'NPT' ? true : false),
        ]);
    }

    /**
     * Creates a new Meeting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($forum_id)
    {
        $model = new Meeting();
        $model->forum_id = $forum_id;
        $model->created = time();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['index', 'forum_id' => $model->forum_d]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'reviewCycleVisibility' => ($model->forum->name == 'NPT' ? true : false),
        ]);
    }

    /**
     * Updates an existing Meeting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['index', 'MeetingSearch[forum_id]' => $model->forum_id]);
        }

        return $this->render('update', [
            'model' => $model,
            'reviewCycleVisibility' => ($model->forum->name == 'NPT' ? true : false),
        ]);
    }

    /**
     * Deletes an existing Meeting model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        $this->deleteAllDocumentFiles($model->id);  // Delete this meeting's documents
        $this->deleteIssues($model->id); //Delese all issues related to this meeting
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Delete all documents pertaining to a meeting
     */
    protected function deleteAllDocumentFiles($meeting_id) {
        $models = Document::find()->where(['meeting_id'=>$meeting_id])->select('id')->all();
        foreach($models as $model) {
            $path =  Document::DOCUMENTS_ROOT . $model->type . '/';
            @unlink($path . $model->file_name); // Delete file from /documents
            $model->delete();                   // Delete record from database
        }
    }
    /**
     * Delete all issues pertaining to a meeting
     */
    protected function deleteIssues($meeting_id) {
        $models = Issue::find()->where(['meeting_id'=>$meeting_id])->select('id')->all();
        foreach($models as $model) {
            $model->delete();                   // Delete record from database
        }
    }


    /**
     * Finds the Meeting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Meeting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Meeting::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionTest() {
        return $this->render('test');
    }

    public function actionUpdateMeetingCycle() {
        return $this->render('_review-cycle-meetings',[]);
    }
}
