<?php

function myfunction($value){
    if($value % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
  
$value = 10;
myfunction($value)
?>