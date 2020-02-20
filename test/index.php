<?php
    $price= 25;
    function calc($quantity, $barrel='zł'){
        $result = $GLOBALS['price']*$quantity.$barrel;
        return $result;
    }
    echo calc(8);

    foreach($GLOBALS as $key => $test) {
        echo '<li>var_dump($test).'</li';
    }
?>