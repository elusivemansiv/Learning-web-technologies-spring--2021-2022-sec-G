<?php

$value_1=15; 
$value_2=22;
$value_3= 18;

if($value_1 >= $value_2 || $value_1 >= $value_3){
    echo 'value_1 is the largest number';
}
elseif($value_2 >= $value_1 || $value_2 >= $value_3){
    echo 'value_2 is the largest number';
}

elseif($value_3 >= $value_1 || $value_3 >= $value_2){
    echo 'value_3 is the largest number';
}

?>