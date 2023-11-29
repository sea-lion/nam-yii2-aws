<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\Tabs;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */
/** @var reviewCycleVisibility boolean */

$this->title = 'Update Meeting: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Meetings', 'url' => ['index','MeetingSearch[forum_id]'=>$model->forum_id]];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="meeting-update">

    <h2><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
        'reviewCycleVisibility' => $reviewCycleVisibility
    ]) ?>

