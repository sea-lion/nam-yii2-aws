<?php

/** @var yii\web\View $this */
/** @var array $models */

use yii\helpers\Url;
$this->title = 'Non-Aligned Movement (NAM) Disarmament Database';
$ncols = 3;
$count = 0;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h4 class="display-5"><?= $this->title ?></h4>
        <p> &nbsp;</p>
        <p> &nbsp;</p>
     </div>

    <div class="body-content">
<?php
foreach($forumModels as $forumModel) {
    if($count % $ncols == 0) { 
        print('<div class="row">');
    }
    print('<div class="col-lg-4">');
    echo $this->render('_item',[
        'title' => $forumModel->name,
        'description' => $forumModel->description,
        'meetingsUrl' => Url::to(['meeting/index','MeetingSearch[forum_id]' => $forumModel->id]),
        'topicsUrl' => Url::to(['topic/matrix', 'forum_id' => $forumModel->id])
    ]);
    print('</div>');
    $count++;
    if($count % $ncols == 0) { 
        print('</div>');
    }
}
?>

    </div>

