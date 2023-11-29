<?php

use frontend\models\CountryProfile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CountryProfileSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Country Profiles';
$this->params['breadcrumbs'][] = $this->title;
$ncols = 6;
$count = 0;
?>
<div class="country-profile-index">
<table class="p-2 border">
   	<tbody>
<?php
/*foreach($models as $model) {
    if($count % $ncols == 0) { 
        if($count > 0) echo "</tr>";
		echo "<tr>";
    }
    echo '<td class="p-2 border-end';
	if(!$model->active) echo ' observer';
	echo ">";
    print(
        Html::a($model->nameAndFlag, Url::to(['country-profile/view', 'id' => $model->id]))
    );
    //print('<a href="/country-profile/view?id=' . $model->id . '">' . $model->nameAndFlag . '</a>');
     echo "</td>";
    $count++;
}
echo "<hr>";*/
foreach($models as $model) {
    if($count % $ncols == 0) { 
        print('<div class=" border-top border-bottom border-end row row-cols-' . $ncols . '  align-items-start p-2">');
    }
    print('<div class=" border-start col-' . 12/$ncols . '">');
    print(
        Html::a($model->nameAndFlag, ['country-profile/view', 'id' => $model->id])
    );
    if($model->active < 1) {print ' <sup>(Observer)</sup>';}
    print('</div>');
    $count++;
    if($count % $ncols == 0) { 
        print('</div>');
    }
}

?>
</tr>
</tbody>
</table>
</div>
