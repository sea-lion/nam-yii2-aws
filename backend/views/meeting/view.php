<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\Tabs;

use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Meetings', 'url' => ['index','MeetingSearch[forum_id]'=>$model->forum_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="meeting-view">

    <h4>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::encode($this->title) ?>
    </h4>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'title',
            'month',
            'year',
            [
                'label' => 'City',
                'value' => $model->city->name
            ],

            [
                'label' => 'Forum',
                'value' => $model->forum->name
            ],
            [
                'label' => 'Chair',
                'value' => $model->chair->name
            ],
            [
                'label' => 'Review Cycle',
                'value' => isset($model->reviewCycle->title) ? $model->reviewCycle->title : "",
                'visible' => $reviewCycleVisibility,
            ],
            //'created',
            'modified:datetime',
        ],
    ]) ?>
    </div>
    <hr>
    <?= Tabs::widget([
        'items' => [
            [
                'label' => 'Documents',
                'content' => '<iframe src="' . Url::to(['document/index', 'DocumentSearch[meeting_id]'=>$model->id]) . '" width="100%" height="1200" frameborder="0"></iframe>',
                'active' => true
            ],
            [
                'label' => 'Issues',
                'content' => '<iframe src="' . Url::to(['issue/index', 'IssueSearch[meeting_id]'=>$model->id]) . '" width="100%" height="1200" frameborder="0"></iframe>',
                //'headerOptions' => [],
                //'options' => ['id' => 'myveryownID'],
            ],
        ],
    ]) ?>