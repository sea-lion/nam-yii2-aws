<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ListView;

/** @var yii\web\View $this */
/** @var frontend\models\Issue $model */
/** @var array $issues */
/** @var frontend\models\Issue $model */
/** @var frontend\models\Issue $model */
$this->title = 'Topic Summaries';
$this->params['breadcrumbs'][] = ['label' => $queryParams['header'], 'url' => ['topic/matrix', 'forum_id' => $queryParams['forum_id']]];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<h3>
    <?php
        echo isset($queryParams['year'])? $queryParams['year'] . ' ' : '';
        echo $queryParams['header'] . " for " . $queryParams['cname'];
        if(!empty($queryParams['tname'])) echo ': ' . $queryParams['tname'];
    ?>
</h3>
<p>&nbsp;</p>
<?= ListView::widget([
    'dataProvider' => $dataProvider,
    'layout' => '{items}',
    'itemView' => '_item',
    'viewParams' => [
        'queryParams' => $queryParams,
    ]
]); ?>