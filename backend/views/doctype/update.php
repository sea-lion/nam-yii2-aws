<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DocType $model */

$this->title = 'Update Document Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Doc Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doc-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
