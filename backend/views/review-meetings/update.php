<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycleMeetings $model */

$this->title = 'Update Review Cycle Meetings: ' . $model->cycle_id;
$this->params['breadcrumbs'][] = ['label' => 'Review Cycle Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cycle_id, 'url' => ['view', 'cycle_id' => $model->cycle_id, 'meeting_id' => $model->meeting_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="review-cycle-meetings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
