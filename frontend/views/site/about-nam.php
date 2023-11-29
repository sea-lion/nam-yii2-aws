<?php

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $members */
/** @var yii\data\ActiveDataProvider $observers */
/** @var yii\data\ActiveDataProvider $organizationObservers */
/** @var string $flagTemplate */


use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'About NAM';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-about">
    <h2><?= Html::encode($this->title) ?></h2>
    <p>The Non-Aligned Movement (NAM) is a group of states considering themselves not aligned formally with or against any major power bloc. As of 2011, the movement had 120 members and 17 observer countries. Generally speaking (as of 2011), the Non-Aligned Movement members can be described as all of those countries which belong to the Group of 77 (along with Belarus and Uzbekistan), but which are not observers in Non-Aligned Movement and are not Oceanian (with the exception of Papua New Guinea and Vanuatu).</p>
    <ul>
        <li><a href="/assets/about/NAM-Document-Methodology-Havana-2006.pdf" target="_new">Document on the Methodology of the Non-Aligned Movement, 14<sup>th</sup> Summit</a></li>
        <li><a href="/assets/about/NAM-Document-Methodology-Cartagena-1996.pdf" target="_new">Document on the Methodology of the Non-Aligned Movement, 11<sup>th</sup> Summit</a></li>
    </ul>

    <div>
        <div class="row">
        <div class="col col-6">
            <?= GridView::widget([
                'dataProvider' => $members,
                //'filterModel' => false,
                'caption' => 'NAM Members' . ' (' . $members->getCount() . ')',
                'showFooter' => false,
                'emptyText' => false,
                'layout' => '{items}',
                 'columns' => [
                    [
                            'label' => 'NAM Members' . ' (' . $members->getCount() . ')',
                            //'options' => ['class' => 'col-3'],
                            'value' => function($row, $index, $widget) {
                                return Html::a($row->nameAndFlag, ['country-profile/view', 'id' => $row->id]); // $row = model Country
                            },
                            'format' => 'html'
                        ],
                    [
                        'label' => 'Member Since',
                        'value' => 'nam'
                    ],
                    [
                        'label' => 'Summit Chair',
                        'value' => 'nam_summit_chair'
                    ]
                ]               
            ]) ?>
        </div>
        <div class="col">
            <?= GridView::widget([
                'dataProvider' => $observers,
                'caption' => 'NAM Observers' . '(' . $observers->getCount() . ')',
                'showFooter' => false,
                'emptyText' => false,
                'layout' => '{items}',
                'columns' => [
                    [
                        'label' => 'NAM Observers' . '(' . $observers->getCount() . ')',
                        'value' => function($row, $index, $widget) {
                            return Html::a($row->nameAndFlag, ['country-profile/view', 'id' => $row->id]); // $row = model Country

                        },
                        'format' => 'html'
                ]
                ]
            ]) ?>
        </div>
        <div class="col">
            <?= GridView::widget([
                    'dataProvider' => $organizationObservers,
                    'caption' => 'Observer Organizations' . '(' . $organizationObservers->getCount() . ')',
                    'showFooter' => false,
                    'emptyText' => false,
                    'layout' => '{items}',
                    'columns' => [
                        [
                            'label' => 'NAM Observer Organizations' . '(' . $organizationObservers->getCount() . ')',
                            'value' => function($row, $index, $widget) {
                                return $row->nameAndFlag;
                            },
                            'format' => 'html'
                        ]
                    ]
                ]) ?>

        </div>
    </div>
    <div>
</div>
