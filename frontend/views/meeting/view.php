<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\Tabs;

use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Meeting $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $model->forum->name . ' Meetings', 'url' => ['index','MeetingSearch[forum_id]'=>$model->forum_id]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="meeting-view">

    <h4>
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
<?php
    /*Tabs::widget([
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
    ])*/ 
    ?>