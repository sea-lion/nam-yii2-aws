<?php

namespace frontend\controllers;

use app\models\ReviewCycleMeetings;
use app\models\ReviewCycleMeetingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RevmeetingsController implements the CRUD actions for ReviewCycleMeetings model.
 */
class RevmeetingsController extends Controller
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
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all ReviewCycleMeetings models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ReviewCycleMeetingSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ReviewCycleMeetings model.
     * @param int $cycle_id Cycle ID
     * @param int $meeting_id Meeting ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cycle_id, $meeting_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($cycle_id, $meeting_id),
        ]);
    }

    /**
     * Creates a new ReviewCycleMeetings model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new ReviewCycleMeetings();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'cycle_id' => $model->cycle_id, 'meeting_id' => $model->meeting_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ReviewCycleMeetings model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $cycle_id Cycle ID
     * @param int $meeting_id Meeting ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cycle_id, $meeting_id)
    {
        $model = $this->findModel($cycle_id, $meeting_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cycle_id' => $model->cycle_id, 'meeting_id' => $model->meeting_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ReviewCycleMeetings model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $cycle_id Cycle ID
     * @param int $meeting_id Meeting ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cycle_id, $meeting_id)
    {
        $this->findModel($cycle_id, $meeting_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ReviewCycleMeetings model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $cycle_id Cycle ID
     * @param int $meeting_id Meeting ID
     * @return ReviewCycleMeetings the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cycle_id, $meeting_id)
    {
        if (($model = ReviewCycleMeetings::findOne(['cycle_id' => $cycle_id, 'meeting_id' => $meeting_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
