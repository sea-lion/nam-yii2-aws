<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\OrganizationSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="organization-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'active') ?>

    <?= $form->field($model, 'nam') ?>

    <?= $form->field($model, 'nam_summit_chair') ?>

    <?php // echo $form->field($model, 'iaea') ?>

    <?php // echo $form->field($model, 'npt') ?>

    <?php // echo $form->field($model, 'bwc') ?>

    <?php // echo $form->field($model, 'cwc') ?>

    <?php // echo $form->field($model, 'ctbt') ?>

    <?php // echo $form->field($model, 'g77') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
