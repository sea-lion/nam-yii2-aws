<?php

use frontend\models\Issue;
use frontend\models\Forum;
use frontend\models\Document;
use frontend\models\ReviewCycle;
use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var frontend\models\MeetingSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */
$this->title = Forum::findOne($this->context->request->queryParams['MeetingSearch']['forum_id'])['name'] . ' Meetings';
$this->params['breadcrumbs'][] = $this->title;
$allCycles = ArrayHelper::map(ReviewCycle::find()->orderBy('title DESC')->asArray()->all(),'id','title');
?>
<div class="meeting-index">

    <h2><?= Html::encode($this->title) ?>
    </h2>
   <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'emptyText' => '-',
        'showFooter' => true,
        'filterPosition' => GridView::FILTER_POS_BODY,
        'columns' => [
            //'id',
            [
                'attribute' => 'title',
                'value' => function($row, $index, $widget) {
                    return Html::a($row->title,['view', 'id'=>$row->id]);
                },
                'format' => 'html'
            ],
     /*       [
                'label' => 'Month',
                //'attribute' => 'month',
                'value' => function($row, $index) {
                    return isset($row->month) ? $row->months[$row->month] : '';
                },
                'filter' => Meeting::find()->select('month')->asArray()->all(),
                'filterInputOptions' => ['prompt' => 'Select month', 'class' => 'form-control', 'id' => null]
            ],*/
            //'year',
            //'city_id',
            /*[
                'label' => 'City',
                'attribute' => 'city_id',
                'value' => 'city.name',
                //'filter'=>Html::activeDropDownList($searchModel,'city_id',ArrayHelper::map(Meeting::find()->with('city')->where(['forum_id' => $this->forum_id])->asArray()->all(),'id','name'),['prompt'=>'Select City']),
            ],*/
            [
                'label' => 'Country Chair',
                'attribute' => 'chair_id',
                'value' => 'chair.name',
                //'filter'=>Html::activeDropDownList($searchModel,'chair_id',ArrayHelper::map(Country::find()->asArray()->all(),'id','name'),['prompt'=>'Select Country']),
            ],
            //'forum_id',
            [
                'label' => 'Review Cycle',
                'attribute' => 'review_cycle_id',
                'value' => 'reviewCycle.title',
                'visible' => $reviewCycleVisibility,
                'filter'=>Html::activeDropDownList($searchModel,'review_cycle_id',$allCycles,['prompt'=>'Select Review Cycle']),
            ],
            [
                'label' => 'Documents',
                //'options' => ['class' => 'col-4'],
                /*'value' => function($row, $index, $widget) {
                    return Html::ul(Document::find()->where(['meeting_id' => $row->id])->select('document_type, title, file_name, published')->all(),
                    ['item' => function($item, $index) {
                        return Html::tag(
                            'li',
                            $item->type . ': ' . Html::a($item->title,'http://' . $_SERVER['SERVER_NAME'] . '/assets/documents/' . $item->type . '/' . $item->file_name),
                            ['class' => $item->published = 1 ? 'published' : 'unpublished']
                        );
                    }]);
                },*/
                'value' => function($row) {
                    return Html::a('View All Documents', ['/document/index', 'meeting_id' => $row->id]);
                },
                'format' => 'html'
            ],
            /*[
                'label' => 'Issues',
                //'options' => ['class' => 'col-4'],
                'value' => function($row, $index, $widget){ 
                    return Html::ul(Issue::find()->where(['meeting_id' => $row->id, 'published' => 1])->select('category, topic, body')->all(),
                    ['item' => function($item, $index) {
                        return Html::tag(
                            'li',
                            $item->body,
                            ['class' => $item->published = 1 ? 'published' : 'unpublished']
                        );
                    }]);

                },
                'format' => 'raw'
            ],*/

            ],
            //'created',
            //'modified:date',
        ],
    ); ?>


</div>
