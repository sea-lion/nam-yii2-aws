<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ReviewCycleMeetings $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="review-cycle-meetings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cycle_id')->textInput() ?>

    <?= $form->field($model, 'meeting_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
