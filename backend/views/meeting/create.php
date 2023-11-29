<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */
/** @var reviewCycleVisibility boolean */

$this->title = 'Create Meeting';
$this->params['breadcrumbs'][] = ['label' => 'Meetings', 'url' => ['index','MeetingSearch[forum_id]'=>$model->forum_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meeting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'reviewCycleVisibility' => $reviewCycleVisibility
    ]) ?>

</div>
