<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycle $model */

$this->title = 'Update ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Review Cycles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="review-cycle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
