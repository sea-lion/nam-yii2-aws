<?php

use app\models\Organization;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\OrganizationSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="organization-index">

    <h4>
        <?= Html::encode($this->title) ?>
        &nbsp;&nbsp;&nbsp;&nbsp;<?= Html::a('New Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </h4>
 
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            'name',
            //'active',
            //'nam',
            //'nam_summit_chair',
            //'iaea',
            //'npt',
            //'bwc',
            //'cwc',
            //'ctbt',
            //'g77',
            [
                'class' => ActionColumn::class,
                'template' => '{update} {delete}',
                'urlCreator' => function ($action, Organization $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
