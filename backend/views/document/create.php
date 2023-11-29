<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Document $model */

$this->title = 'Create Document';
//$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
