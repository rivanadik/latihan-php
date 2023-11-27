<?php 
function addOne(&$num) { 
    $num = $num + 1; 
} 

$number = 5; 
addOne($number); 

echo "Number after addOne function: $number"; 
?>