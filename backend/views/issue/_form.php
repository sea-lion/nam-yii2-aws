<?php
/** @var yii\web\View $this */
/** @var app\models\Issue $model */
/** @var yii\widgets\ActiveForm $form */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Category;
use app\models\Topic;


$this->registerJsFile('https://cdn.tiny.cloud/1/iscvnlkyb027ck1xyrsiu2x5oq0yyppvsss8c6azojowcy6w/tinymce/6/tinymce.min.js', ['referrerpolicy' => 'origin','depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs(
    "tinymce.init({
        selector: '#issue-body',
        plugins: 'lists',
        toolbar: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist indent outdent',
        menubar: 'edit insert format'
      });",
      yii\web\View::POS_READY
);


?>

<div class="issue-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->orderBy('name')->all(),'id','name'), ['prompt'=>'Select Category'])->label("Category") ?>

    <?= $form->field($model, 'topic_id')->dropDownList(ArrayHelper::map(Topic::find()->orderBy('name')->all(),'id','name'), ['prompt'=>'Select Topic'])->label("Topic") ?>

    <?= $form->field($model, 'body')->textarea(['rows' => 6,]) ?>

    <?= $form->field($model, 'keywords')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'published')->checkbox(['uncheck' => 0]) ?>

    <?= $form->field($model, 'meeting_id')->textInput()->hiddenInput()->label(false)  ?>
    <?= $form->field($model, 'created')->hiddenInput()->label(false)  ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Cancel',['issue/index', 'IssueSearch[meeting_id]'=>$model->meeting_id], ['class' => 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
