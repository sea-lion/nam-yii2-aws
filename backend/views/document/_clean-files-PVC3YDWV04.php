<?php

/** @var yii\web\View $this */
/** @var string $filesdir */
/** @var array $documents */
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
use app\models\Meeting;

?>
<div style="width: 100%">
<div class="col col-6" style="float: left">
        <h3>Files not referenced in the DB</h3>
        <ul>
        <?php
        foreach(array_diff($allFiles, $allRecordFiles) as $row)  {
            echo '<li>' . $row . '</li>';
        }
        ?>
        </ul>
</div>

<div class="col col-6"  style="float: left">
    <h3>Missing Files</h3>
    <ul>
    <?php
    foreach($missingFiles as $f) {
        echo '<li>' . $f . '</li>';
    }
    ?>
    </ul>

</div>
</div>














