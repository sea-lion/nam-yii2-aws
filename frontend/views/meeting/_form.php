<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\City;
use app\models\Country;
use app\models\Forum;


/** @var yii\web\View $this */
/** @var app\models\Meeting $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="meeting-form">

    <?php $form = ActiveForm::begin([]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'month')->dropDownList($model->months, ['prompt'=>'Select Month']) ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'city_id')->dropDownList(ArrayHelper::map(City::find()->orderBy('name')->all(),'id','name'), ['prompt'=>'Select City'])->label("City") ?>

    <?= $form->field($model, 'forum_id')->dropDownList(ArrayHelper::map(Forum::find()->orderBy('name')->all(),'id','name'), ['prompt'=>'Select Forum'])->label("Forum") ?>

    <?= $form->field($model, 'chair_id')->dropDownList(ArrayHelper::map(Country::find()->orderBy('name')->all(),'id','name'), ['prompt'=>'Select Country'])->label("Chair") ?>

    <?= $form->field($model, 'created')->hiddenInput()->label(false) ?>

 
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cancel',['meeting/index', 'MeetingSearch[forum_id]'=>$model->forum_id], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>
 
</div>
