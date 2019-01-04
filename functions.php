<?php
/**
 * Created by PhpStorm.
 * User: Jake
 * Date: 1/4/2019
 * Time: 10:37 AM
 */

function printer($array){
    for($i = 0; $i < sizeof($array);$i++){
        echo $array[$i];
        if($i != sizeof($array)-1){
            echo ", ";
        }
    }
}
function largest($array){
    return max($array);
}
function average($array){
    return (array_sum($array) / sizeof($array));
}