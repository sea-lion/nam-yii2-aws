<?php

use app\models\Issue;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\IssueSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Meeting Issues';
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->pagination = false;

?>
<div class="issue-index">

    <h4>
        <?= Html::encode($this->title) ?>
        &nbsp;&nbsp;&nbsp;&nbsp;<?= Html::a('Create Issue', ['create','meeting_id'=>$searchModel->meeting_id], ['class' => 'btn btn-success']) ?>
   </h4>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'id',
            //'meeting_id',
            //'level',
            [
                'label' => 'Category',
                'attribute' => 'category',
                'value' => 'category.name'
            ],
            [
                'label' => 'Topic',
                'attribute' => 'topic',
                'value' => 'topic.name'

            ],
            [
                'attribute' => 'body',
                'format' => 'html'
            ],
            'keywords:ntext',
            [
                'label' => 'Published',
                'attribute' => 'published',
                'value' => function ($model, $index, $widget) {
                    return Html::activeCheckbox($model,'published',['uncheck'=>0, 'label'=>null]);
                },
                'format' => 'raw',
            ],
            //'published',
            //'created',
            'modified:datetime',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, Issue $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
