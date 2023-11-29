<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycleMeetings $model */

$this->title = $model->cycle_id;
$this->params['breadcrumbs'][] = ['label' => 'Review Cycle Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="review-cycle-meetings-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'cycle_id' => $model->cycle_id, 'meeting_id' => $model->meeting_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'cycle_id' => $model->cycle_id, 'meeting_id' => $model->meeting_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cycle_id',
            'meeting_id',
        ],
    ]) ?>

</div>
