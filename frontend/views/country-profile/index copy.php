<?php

use frontend\models\CountryProfile;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\CountryProfileSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->registerCss(<<< EOD0
#column_sidebar {
	display: none;
}
#profile-window {
	display:none;
	position: absolute;
	z-index: 100;
	padding: 20px;
	border: 1px solid #cccccc;
	background-color:#ffffff;
}

#profile-buttons {
	margin-bottom:20px;
	margin-right: 20px;
	margin-top: 0;
	padding-top: 0;
	float:right;
	border-bottom: 1px solid #69C;
}

tbody th figure figcaption {
	display: inline;
	padding: 0;
	margin: 0;
}

tbody tr {
	text-align: left;
	background: aliceBlue;
	border: 1px solid #9CF;
	padding: 5px 8px;
	font-weight: normal;
	line-height: 110%;
	color: #444;
}
td {
	cursor: hand;
}


a:hover {
	text-decoration: none;
}

table#nam_members_list tbody th.observer {
	background: #e4f0fd;
}


EOD0

);


$this->title = 'Country Profiles';
$this->params['breadcrumbs'][] = $this->title;
$ncols = 6;
$count = 0;
?>
<div class="country-profile-index">
<table id="nam_members_list">
   	<tbody>
<?php
foreach($models as $model) {
    if($count % $ncols == 0) { 
        print('<div class=" border row row-cols-' . $ncols . '  align-items-start p-2 m-2">');
    }
    print('<div class="border-end col-' . 12/$ncols . '">');
    print(
        Html::a($model->nameAndFlag, ['country-profile/view', 'id' => $model->id])
    );
    print('</div>');
    $count++;
    if($count % $ncols == 0) { 
        print('</div>');
    }
}
?>
</table>
</div>
