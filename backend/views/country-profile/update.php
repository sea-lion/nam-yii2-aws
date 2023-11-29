<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CountryProfile $model */

$this->title = 'Update Country Profile: ' . $model->country->name;
$this->params['breadcrumbs'][] = ['label' => 'Country Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->country->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-profile-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
