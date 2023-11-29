<?php

use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CountryProfile $model */

$this->title = $model->country->name;
$this->params['breadcrumbs'][] = ['label' => 'Country Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="country-profile-view">

<h6>Ratification of Treaties & Memberships in International Organizations Related to Disarmament</h6>
<?= GridView::widget([
        'dataProvider' => $membershipProvider,
        //'filterModel' => null,
        'showFooter' => false,
        'layout' => '{items}',
        'caption' => '<div class="container-fluid"><div class="row"><div class="col-2">&nbsp;</div> <div class="col">S = Signatory only</div> <div class="col">N = Not a Signatory or Member State</div></div></div>',
        'columns' => [
            [
                'label' => '',
                'value' => function($row, $index, $widget) {
                    return $row->nameAndFlag;
                },
                'format' => 'html',
            ],
            [
                'label' => 'IAEA',
                'value' => 'iaea',
             ],
             [
                'label' => 'NPT',
                'value' => 'npt',
            ],
            [
                'label' => 'BWC',
                'value' => 'bwc',
            ],
            [
                'label' => 'CWC',
                'value' => 'cwc',
            ],
            [
                'label' => 'CTBT',
                'value' => 'ctbt',
           ],
            [
                'label' => 'G-77',
                'value' => 'g77',
            ],
        ],
    ]); ?>


<?= $model->body ?>

</div>
