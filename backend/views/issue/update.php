<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Issue $model */

$this->title = 'Update Issue: #' . $model->id . ' for meeting: ' . $model->meeting->title;
$this->params['breadcrumbs'][] = ['label' => 'Issues', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="issue-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
