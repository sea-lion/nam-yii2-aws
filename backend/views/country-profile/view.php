<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CountryProfile $model */

$this->title = $model->country->name;
$this->params['breadcrumbs'][] = ['label' => 'Country Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-profile-view">

    <h4><?= Html::encode($this->title) ?>
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
</h4>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            [
                'label' => 'Published',
                'value' => $model->published > 0 ? 'Yes' : 'No',
            ],
            'body:html',
            'created:datetime',
            'modified:datetime',
        ],
    ]) ?>

</div>
