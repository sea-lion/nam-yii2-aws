<?php

/** @var yii\web\View $this */
/** @var string $title */
/** @var string $description */
/** @var Exception $exception*/

use yii\helpers\Html;


?>
            <h3><?= Html::encode($title) ?></h3>

<p><?= Html::encode($description) ?></p>

<p><a class="btn btn-outline-secondary" href="<?= Html::encode($meetingsUrl) ?>">Meetings &raquo;</a></p>




