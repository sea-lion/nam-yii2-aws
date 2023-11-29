<?php

namespace frontend\controllers;

use frontend\models\Topic;
use frontend\models\TopicSearch;
use frontend\models\Issue;
use frontend\models\Forum;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\helpers\Url;
use yii\filters\VerbFilter;

/**
 * TopicController implements the CRUD actions for Topic issue.
 */
class TopicController extends Controller
{
    //public $layout = 'blank';
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
     * Lists all Topic issues.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchissue = new TopicSearch();
        $dataProvider = $searchissue->search($this->request->queryParams);
        return $this->render('index', [
            'searchissue' => $searchissue,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Topic issue.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the issue cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'issue' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Topic issue.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $issue = new Topic();

        if ($this->request->isPost) {
            if ($issue->load($this->request->post()) && $issue->save()) {
                return $this->redirect(['index']);
            }
        } else {
            $issue->loadDefaultValues();
        }

        return $this->render('create', [
            'issue' => $issue,
        ]);
    }

    /**
     * Updates an existing Topic issue.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the issue cannot be found
     */
    public function actionUpdate($id)
    {
        $issue = $this->findModel($id);

        if ($this->request->isPost && $issue->load($this->request->post()) && $issue->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'issue' => $issue,
        ]);
    }

    /**
     * Deletes an existing Topic issue.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the issue cannot be found
     */
    public function actionDelete($id)
    {
        $this->findissue($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Topic issue based on its primary key value.
     * If the issue is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Topic the loaded issue
     * @throws NotFoundHttpException if the issue cannot be found
     */
    protected function findModel($id)
    {
        if (($issue = Topic::findOne(['id' => $id])) !== null) {
            return $issue;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionMatrix($forum_id) {
        $forum = Forum::findOne($forum_id);
		$header = $forum->name . " Topics";

		/*$issues = Issue::find()
                    ->with('meeting', 'catname', 'topicname')
                    ->where(['meeting.forum_id' => $forum_id, 'published > 0'])
                    ->orderBy('meeting.year');
         */           
        $data = array();
        $categories = array();
        $firstCategory = '';
        $firstCategoryName = '';
        $topics = array();
        $query = Issue::find()
                    ->select('nam_issue.meeting_id, nam_issue.category_id, nam_issue.topic_id, nam_category.name as category_name, nam_topic.name as topic_name, nam_topic.description as topic_description, nam_meeting.year as year')
                    ->joinWith([
                        'meeting' => function (\yii\db\ActiveQuery $query) use ($forum_id) { $query->andWhere('nam_meeting.forum_id=' . $forum_id);},
                        'category',
                        'topic'
                    ])
                    ->where('nam_issue.published > 0')
                    ->orderBy('nam_meeting.year')
                    ->limit(-1)
                    ;
        $command = $query->createCommand();
        $issues = $command->queryAll();
        foreach($issues as $issue) {
            if(!isset($data[$issue['year']])) $data[$issue['year']] = array();
            if(!isset($categories[$issue['category_id']])) if(isset($issue['category_name'])) $categories[$issue['category_id']] = $issue['category_name'];
            if(!isset($data[$issue['year']][$issue['category_id']])) {
                if(empty($firstCategory)) {
                    $firstCategory = $issue['category_id'];
                    $firstCategoryName = $issue['category_name'];
                }
            }
            if(!isset($topics[$issue['category_id']])) $topics[$issue['category_id']] = array();
            if(isset($issue['topic_name'])) $topics[$issue['category_id']][$issue['topic_id']] = $issue['topic_name'] . '|' . $issue['topic_description'];
            if(!isset($data[$issue['year']][$issue['category_id']][$issue['topic_id']])) $data[$issue['year']][$issue['category_id']][$issue['topic_id']] = $issue['meeting_id'] . "|" . $issue['topic_name'];
            else {
                $data[$issue['year']][$issue['category_id']][$issue['topic_id']] = $issue['meeting_id'] . "," . $data[$issue['year']][$issue['category_id']][$issue['topic_id']];
            }
                    
        }
        foreach($topics as &$cat) {
            asort($cat);
        }		
        return $this->render('topic-matrix',array(
			'forum_id'=>$forum_id,
			'header'=>$header,
			'topics'=>$topics,
			'data'=>$data,
			'categories'=>$categories,
			'firstCategory'=>$firstCategory,
			'firstCategoryName'=>$firstCategoryName,
			'url'=>'/index.php/issue/issue-by'),
            //'issues' => $issues
		);
 
    }
}
