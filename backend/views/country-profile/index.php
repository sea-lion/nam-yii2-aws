<?php

use app\models\CountryProfile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CountryProfileSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Country Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-profile-index">

    <h4><?= Html::encode($this->title) ?>
    <?= Html::a('Create Country Profile', ['create'], ['class' => 'btn btn-success']) ?>
</h4>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'label' => 'Country',
                'attribute' => 'id',
                'value' => 'country.name'
            ],
            [
                'label' => 'Published?',
                'value' => function($row, $index) {
                    return $row->published > 0 ? 'Yes' : 'No';
                }
            ],
            'body:html',
            //'created',
            'modified:datetime',
            //'country_id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CountryProfile $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
