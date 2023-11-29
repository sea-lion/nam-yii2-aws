<?php

/** @var yii\web\View $this */
/** @var Exception $exception*/

use yii\helpers\Html;
/*$this->params['breadcrumbs'] = array();
$this->params['breadcrumbs'][] = ['label' => $queryParams['header']];
$this->params['breadcrumbs'][] = ['label' => $queryParams['year']];
$this->params['breadcrumbs'][] = ['label' => $queryParams['cname']];
$this->params['breadcrumbs'][] = ['label' => $queryParams['tname']];
$this->params['breadcrumbs'][] = ['label' => 'Topic Summary'];
*/

?> 
    <?php
        if(empty($queryParams['year'])) {
            echo '<h5 class="text-primary-emphasis">' . $model->meeting->year . '</h5>';
         }
        else {
            if(empty($queryParams['tname'])) {
                echo '<h5 class="text-primary-emphasis">' . $model->topic->name . '</h5>';
            }
        }
    ?> 
    <p><?php 
            echo strip_tags($model->body, ['<br>', '<p>']);
            //echo $model->body;
            
    ?></p>
<hr>





