<?php

use app\models\ReviewCycleMeetings;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycleMeetingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Review Cycle Meetings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-cycle-meetings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Review Cycle Meetings', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cycle_id',
            'meeting_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ReviewCycleMeetings $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'cycle_id' => $model->cycle_id, 'meeting_id' => $model->meeting_id]);
                 }
            ],
        ],
    ]); ?>


</div>
