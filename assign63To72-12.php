<?php

$nums = [11, 2, 10, 7, 20, 50];

// Output
// 100




function add_array($a, $b){
   return $a + $b;

}

echo array_reduce($nums, "add_array") . "<br>";

