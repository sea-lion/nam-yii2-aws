<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception*/

use yii\helpers\Html;
use app\models\Document;
$meeting_id = 2;
$models = Document::find()->where(['meeting_id' => $meeting_id, 'published' => 1])->select('document_type, title, file_name')->asArray()->all();
$ret = [];
echo "<pre>";
/*foreach($models as $model) {
    $ret[] = $model->file_name;
}*/

?>
<div class="site-error">
<pre>
    <?= print_r($models) ?>
</pre>
    <h2>Server Info for <?=$_SERVER['SERVER_ADDR']?></h2>
    <div>
        <?= print_r($_SERVER) ?>
    </div>
</div>
foreach($_SERVER as $s=>$v) {
    print("<p>" . $s . ": " . $v . "</p>");
}
