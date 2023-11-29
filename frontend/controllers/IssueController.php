<?php

namespace frontend\controllers;

use frontend\models\Issue;
use frontend\models\IssueSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * IssueController implements the CRUD actions for Issue model.
 */
class IssueController extends Controller
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
     * Lists all Issue models.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$this->layout = 'blank';
        $searchModel = new IssueSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Issue model.
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
     * Creates a new Issue model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate($meeting_id)
    {
        $model = new Issue();
        $model->created = time();
        $model->meeting_id = $meeting_id;

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['issue/index', 'IssueSearch[meeting_id]' => $model->meeting_id]);
             }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Issue model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['issue/index', 'IssueSearch[meeting_id]' => $model->meeting_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Issue model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Issue model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Issue the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Issue::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
    
    /*public function actionIssuesByCategory($forum_id,$category_id,$category_name) {
        $issues = array();
        $title = $category_name . ' Topics Summary';
        $query = Issue::find()
                    ->joinWith('meeting', 'topic')
                    ->where(['category_id' => $category_id, 'nam_meeting.forum_id' => $forum_id])
                    ->orderBy('nam_meeting.year')
                    ->limit(-1);
         $models = $query->all();->all();
        foreach($models as $model) {
            if(!isset($issues[$model->meeting_id])) $issues[$model->meeting_id] = array();
			$issues[$model->meeting_id][$model->topic_id] = array(
				'name'=>$model->topic->name,
				'body'=>$model->body,
			);
        }

        return $this->render('issues-by', [
            'issues' => $issues,
            'title' => $title
        ]);
    }*/

    public function actionIssueBy()
    {
        $query = Issue::find()->joinWith(['meeting', 'category','topic']);
        $query->orderBy('nam_meeting.year,nam_category.name, nam_topic.name');
        $model = new Issue();
        // add conditions that should always apply here
        //$model->attributes = \Yii::$app->request->queryParams;
        $model->attributes = $this->request->queryParams;
        //$model->load($this->request->queryParams);
        $query->andFilterWhere([
            'meeting_id' => $model->meeting_id,
            'category_id' => $model->category_id,
            'topic_id' => $model->topic_id,
        ]);
        if(!empty( $this->request->queryParams['year'])) {
            $query->andFilterWhere([
                'nam_meeting.year'  => $this->request->queryParams['year']
            ]);
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('issues-by', [
            'dataProvider' => $dataProvider,
            'model' => $model,
            'queryParams' => $this->request->queryParams
        ]);
    }

 
}
