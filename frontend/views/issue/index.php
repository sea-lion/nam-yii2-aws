<?php

use frontend\models\Issue;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\IssueSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

//$this->title = $searchModel->meeting->title . ': Issues';
$this->title = 'Issues';
//$this->params['breadcrumbs'][] = ['label' => $searchModel->meeting->forum->name . ' Meetings', 'url' => ['meeting/index','MeetingSearch[forum_id]'=>$searchModel->meeting->forum_id]];
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->pagination = false;

?>
<div class="issue-index">

    <h4>
        <?= Html::encode($this->title) ?>
   </h4>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
                'label' => 'Category',
                'attribute' => 'category_id',
                'value' => 'category.name'
            ],
            [
                'label' => 'Topic',
                'attribute' => 'topic_id',
                'value' => 'topic.name'

            ],
            [
                'label' => 'Issue',
                'attribute' => 'body',
                'format' => 'html'
            ],
            //'keywords:ntext',
            [
                'label' => 'Modified on',
                'value' => function($row) {
                    return Yii::$app->formatter->format($row->modified, 'date'); 
                },
                'filter' => false
            ],
            //'modified:datetime',
        ],
    ]); ?>


</div>
