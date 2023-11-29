<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Issue $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Issues', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="issue-view">

    <h4><?= Html::encode($this->title) ?></h4>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'meeting_id',
            'level',
            'category',
            'topic',
            'body:ntext',
            'keywords:ntext',
            'published',
            'created',
            'modified',
        ],
    ]) ?>

</div>
