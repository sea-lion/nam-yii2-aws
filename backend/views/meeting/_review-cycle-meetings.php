<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\ReviewCycleMeetings;
use app\models\Meeting;

use function PHPUnit\Framework\isNull;

/** @var yii\web\View $this */
/** @var app\models\Meeting $model */
$cycle_meetings = ReviewCycleMeetings::find()->all();
$ret = [];
echo '<pre>';
foreach($cycle_meetings as $cycle_meeting) {
    $cycle_id = $cycle_meeting->cycle_id;
    $meeting_id = $cycle_meeting->meeting_id;
    $meetingModel = Meeting::findOne($meeting_id);
    //Cleaning up inconsistencies.
    if($meetingModel) {
           $meetingModel->review_cycle_id = $cycle_id;
           if($meetingModel->save()) {
                $ret[] = $cycle_id . ' = ' . $meeting_id . ' --> SAVED';
           }
    }
 }

 echo '</pre>';

?>
<pre>
    <?= print_r($ret) ?>
</pre>
