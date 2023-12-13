<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var array $country */

?>
    <?php 
        echo "var countryArray = ";
        print(json_encode($countries));
        echo ";";
    ?>