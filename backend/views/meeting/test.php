<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\City;
use app\models\Country;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */

$this->title = 'Test';
$months = array(
    '1'=>'January',
    '2'=>'February',
    '3'=>'March',
    '4'=>'April',
    '5'=>'May',
    '6'=>'June',
    '7'=>'July',
    '8'=>'August',
    '9'=>'September',
    '10'=>'October',
    '11'=>'November',
    '12'=>'December',
);

$cityModel = new app\models\City();
$models = $cityModel->allCitiesAsArray;
$ret = ArrayHelper::map(City::find()->select(['id', 'name'])->asArray()->all(),'id','name');
//foreach($models as $model)  { $ret[$model->id] = $model->name;}
?>
<pre>
<?= print_r($ret) ?>
<hr>
<?= print_r($months) ?>
</pre>
