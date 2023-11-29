<?php

/** @var yii\web\View $this */
/** @var array $models */

use yii\helpers\Url;
$this->title = 'Meetings';
$ncols = 3;
$count = 0;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h2 class="display-4"><?= $this->title ?></h2>
        <p> </p>
     </div>

    <div class="body-content">
<?php
foreach($models as $model) {
    if($count % $ncols == 0) { 
        print('<div class="row">');
    }
    print('<div class="col-lg-4">');
    echo $this->render('_item',[
        'title' => $model->name,
        'description' => $model->description,
        'meetingsUrl' => Url::to(['meeting/index','MeetingSearch[forum_id]' => $model->id])
    ]);
    print('</div>');
    $count++;
    if($count % $ncols == 0) { 
        print('</div>');
    }
}
?>

    </div>

