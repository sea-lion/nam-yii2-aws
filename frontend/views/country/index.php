<?php

use app\models\Country;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\CountrySearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Memberships';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="country-index">

    <h4><?= Html::encode($this->title) ?>
</h4>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => null,
        'showFooter' => true,
        'layout' => '{items}',
        'caption' => '<div class="container-fluid"><div class="row"><div class="col-5">Notes: Former Member States to NAM are not listed</div> <div class="col">S = Signatory only</div> <div class="col">N = Not a Signatory or Member State</div></div></div>',
        'columns' => [
            [
                'label' => 'NAM Members and Observers',
                'value' => function($row, $index, $widget) {
                    return Html::a($row->nameAndFlag, ['country-profile/view', 'id' => $row->id]); // $row = model Country
                },
                'format' => 'html',
                'footer' => '<h4>Totals</h4>' . $totalNamMembers . ' NAM Members and ' .  $totalNamObservers . ' Observers'
            ],
            [
                'label' => 'IAEA',
                'value' => 'iaea',
                'footer' => $totalIaeaMembers . ' Members<br>' . $totalIaeaNonMembers . ' Non-Members'
            ],
             [
                'label' => 'NPT',
                'value' => 'npt',
                'footer' => $totalNptMembers . ' Members<br>' . $totalNptNonMembers . ' Non-Members'
            ],
            [
                'label' => 'BWC',
                'value' => 'bwc',
                'footer' => $totalBwcMembers . ' Members<br>' . $totalBwcSignatories . ' Signator' . ($totalBwcSignatories >1 ? 'ies<br>' : 'y<br>') . $totalBwcNonMembers . ' Non-Members'
            ],
            [
                'label' => 'CWC',
                'value' => 'cwc',
                'footer' => $totalCwcMembers . ' Members<br>' . $totalCwcSignatories . ' Signator' . ($totalCwcSignatories > 1 ? 'ies<br>' : 'y<br>') . $totalCwcNonMembers . ' Non-Members'
            ],
            [
                'label' => 'CTBT',
                'value' => 'ctbt',
                'footer' => $totalCtbtMembers . ' Members<br>' . $totalCtbtSignatories . ' Signator' . ($totalCtbtSignatories > 1 ? 'ies<br>' : 'y<br>') . $totalCtbtNonMembers . ' Non-Members'
           ],
            [
                'label' => 'G-77',
                'value' => 'g77',
                'footer' => $totalG77Members . ' Members<br>' . $totalG77NonMembers . ' Non-Members'
            ],
        ],
    ]); ?>


</div>
