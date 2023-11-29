<?php

use app\models\ReviewCycle;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Review Cycles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-cycle-index">

    <h4><?= Html::encode($this->title) ?>
    <?= Html::a('Create Review Cycle', ['create','forum_id'=>$searchModel->forum_id], ['class' => 'btn btn-success']) ?>
</h4>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // 'id',
            //'forum_id',
            'title',
            'year',
            'description:ntext',
            //'created',
            [
                'class' => ActionColumn::class,
                'urlCreator' => function ($action, ReviewCycle $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
