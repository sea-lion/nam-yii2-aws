<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycleMeetings $model */

$this->title = 'Create Review Cycle Meetings';
$this->params['breadcrumbs'][] = ['label' => 'Review Cycle Meetings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="review-cycle-meetings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
