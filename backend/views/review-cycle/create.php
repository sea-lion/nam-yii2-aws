<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycle $model */

$this->title = 'Create Review Cycle';
$this->params['breadcrumbs'][] = ['label' => 'Review Cycles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-cycle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
