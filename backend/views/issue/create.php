<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Issue $model */

$this->title = 'Meeting (' . $model->meeting->title .'): Create Issue';
$this->params['breadcrumbs'][] = ['label' => 'Issues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="issue-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
