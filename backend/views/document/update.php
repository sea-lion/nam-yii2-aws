<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Document $model */

$this->title = 'Update Document: ' . $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index','DocumentSearch[meeting_id]'=>$model->meeting_id]];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="document-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
