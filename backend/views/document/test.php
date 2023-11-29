<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
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

$sourceDir = Yii::getAlias('@frontend') . '/web/assets/documents';
$targetDir = Yii::getAlias('@frontend') . '/web/assets/images/thumbnails';


?>

<?= $sourceDir ?>
<hr>
<?= $targetDir ?>









