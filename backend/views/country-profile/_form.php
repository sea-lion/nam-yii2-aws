<?php
/** @var yii\web\View $this */
/** @var app\models\CountryProfile $model */
/** @var yii\widgets\ActiveForm $form */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->registerJsFile('https://cdn.tiny.cloud/1/iscvnlkyb027ck1xyrsiu2x5oq0yyppvsss8c6azojowcy6w/tinymce/6/tinymce.min.js', ['referrerpolicy' => 'origin','depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs(
    "tinymce.init({
        selector: '#countryprofile-body',
        plugins: 'code link lists',
        toolbar: 'undo redo | fontsize bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist indent outdent | link code',
        menubar: 'edit insert format'
      });",
      yii\web\View::POS_READY
);


?>

<div class="country-profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>
    <?= $form->field($model, 'published')->checkbox(['uncheck' => 0, 'label' => ' Published'])->label(false) ?>
    <?= $form->field($model, 'body')->textarea(['rows' => 80]) ?>



    <?= $form->field($model, 'created')->hiddenInput()->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
