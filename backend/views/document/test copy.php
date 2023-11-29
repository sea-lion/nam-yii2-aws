<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap5\Tabs;
use yii\bootstrap5\Modal;
use app\models\Document;
use app\models\Category;
use app\models\Topic;
use yii\widgets\Pjax;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Issue;
use app\models\City;

$model = new City();
$models = City::find()->orderBy('name')->all();
Modal::begin([
    'title' => 'Add City',
    'toggleButton' => ['label' => 'click me'],
]);

Pjax::begin([
    // Pjax options
]);
?>
<?php $form = ActiveForm::begin([
    'id' => 'city-form-pjax',
    'options' => ['data' => ['pjax' => true]],
    'clientOptions' => ['method' => 'POST'],
]); ?>

<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

<div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

<?php
Pjax::end();
Modal::end();

?>









