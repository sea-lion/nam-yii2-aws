<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var array $models */
$s = ""
?>
<h3>Childless Meetings</h3>

<pre>
    <?php 
        echo implode(',',$childlessMeetings);
    ?>
</pre>

<h3>Childless Categories</h3>
<pre>
    <?php 
        echo implode(',',$childlessCategories);
    ?>
</pre>
