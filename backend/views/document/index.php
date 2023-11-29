<?php

use app\models\Document;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DocumentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Documents';
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->pagination = false;
?>
<div class="document-index">

    <h3><?= Html::encode($this->title) ?>
    &nbsp;&nbsp;&nbsp;&nbsp;<?= Html::a('Create Document', ['create','meeting_id'=>$searchModel->meeting_id], ['class' => 'btn btn-success']) ?>
</h3>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'id',
            //'document_type',
            [
                'label' => 'Published',
                'attribute' => 'published',
                'value' => function ($model, $index, $widget) {
                    return Html::activeCheckbox($model,'published',['uncheck'=>0, 'label'=>null]);
                },
                'format' => 'raw',
            ],
           [
                'label' => 'Document Type',
                'attribute'=>'document_type',
                'value'=> 'docType.name',
            ],
            'title',
            'tags:ntext',
            'description:ntext',
            //'published',
            //'meeting_id',
            //'created',
            'file_name',
            'modified:datetime',
            [
                'class' => ActionColumn::class,
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, Document $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
