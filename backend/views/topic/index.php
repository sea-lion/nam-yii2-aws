<?php

use app\models\Topic;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TopicSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Topics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-index">

    <h3><?= Html::encode($this->title) ?>
        &nbsp;&nbsp;&nbsp;&nbsp;<?= Html::a('Create Topic', ['create'], ['class' => 'btn btn-success']) ?>
    </h3>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'id',
            'name',
            [
                'label' => 'Category',
                'attribute' => 'category_id',
                'value' => 'category.name'
            ],
            'keywords:ntext',
            'description:ntext',
            [
                'class' => ActionColumn::class,
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, Topic $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
