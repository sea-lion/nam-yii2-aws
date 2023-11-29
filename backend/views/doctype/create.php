<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\DocType $model */

$this->title = 'Create Document Type';
$this->params['breadcrumbs'][] = ['label' => 'Doc Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
