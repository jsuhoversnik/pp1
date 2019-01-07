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
//given an array, return the largest value
function largest($array){
    return max($array);
}
//given an array, return the average value
function average($array){
    return (array_sum($array) / sizeof($array));
}
//given an array, return a list with duplicates removed
function removeDups($array){
    return "[" . implode(", ", array_unique($array)) . "]";

}
//given an array print an associative array with a count of occurrences
function distribution($array){
    $result = array_count_values($array);
    ksort($result);

    $i = 0;
    $string = "[";
    foreach($result as $key => $value ){
        $string .= $key . "=>" . $value;
        if($i != sizeof($result)-1){
            $string .= ", ";
        }
        $i++;
    }
    $string .= "]";

    return $string;
}
