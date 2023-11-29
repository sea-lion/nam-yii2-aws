<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\DocType;

/** @var yii\web\View $this */
/** @var app\models\Document $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="document-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'published')->textInput() ?>
   <?= $form->field($model, 'document_type')->dropDownList(ArrayHelper::map(DocType::find()->orderBy('name')->all(),'id','name'), ['prompt'=>'Select document type'])->label("Document Type") ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tags')->hint('Enter tags separated by commas')->textarea(['rows' => 6])?>


    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'document_file')->fileInput() ?>

    <?= $form->field($model, 'meeting_id')->textInput() ?>

    <?= $form->field($model, 'file_name')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'created')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cancel',['document/index', 'DocumentSearch[meeting_id]'=>$model->meeting_id], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
