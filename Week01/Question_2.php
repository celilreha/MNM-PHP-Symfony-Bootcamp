<?php

function findMinValue($array){
    $N=count($array);
    $minValue=$array[0];
    for($i=0;$i<$N;$i++) {
        if($array[$i]<$minValue)
            $minValue=$array[$i];
    }
    echo $minValue;
}
?>