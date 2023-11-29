<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Summary $model */

$this->title = 'Create Summary';
$this->params['breadcrumbs'][] = ['label' => 'Summaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="summary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
