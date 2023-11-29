<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Organization $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'active')->textInput() ?>

    <?= $form->field($model, 'nam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nam_summit_chair')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iaea')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'npt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bwc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cwc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ctbt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'g77')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
