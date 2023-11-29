<?php

use frontend\models\Document;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\DocumentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = $searchModel->meeting->title . ': Documents';
$this->params['breadcrumbs'][] = ['label' => $searchModel->meeting->forum->name . ' Meetings', 'url' => ['meeting/index','MeetingSearch[forum_id]'=>$searchModel->meeting->forum_id]];
$this->params['breadcrumbs'][] = $this->title;
$dataProvider->pagination = false;
?>
<div class="document-index">

    <h4><?= Html::encode($this->title) ?>
</h4>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //'id',
            //'document_type',
            [
                'label' => 'Title',
                'attribute' => 'title',
                'value'=> function($row, $index, $widget) {
                    return Html::a($row->title,'http://' . $_SERVER['SERVER_NAME'] . '/assets/documents/' . $row->type . '/' . $row->file_name);
                },
                'format' => 'html',
                //'options' => ['class' => 'col col-6']
            ],
            //'title',
            //'tags:ntext',
            'description:ntext',
            //'published',
            //'meeting_id',
            //'created',
            /*[
                'label' => 'Modified on',
                'value' => function($row) {
                    return Yii::$app->formatter->format($row->modified, 'date'); 
                },

                'filter' => false
            ],*/
            //'modified:date',
            //'tags:ntext',
            [
                'label' => 'Document Type',
                'attribute'=>'document_type',
                'value'=> 'docType.name',
            ],
 
        ],
    ]); ?>


</div>
