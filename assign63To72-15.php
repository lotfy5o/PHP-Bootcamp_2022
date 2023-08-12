<?php

$chars = ["o", "r", "e", "z", "l", "E"];

function size1($array){
    $size = 0;
foreach($array as $element){
    $size++;
}
return $size;
}

for ($i = size1($chars) - 1; $i >= 0 ; --$i){
    echo $chars[$i];

}

// Output
// "Elzero"

