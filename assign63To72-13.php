<?php
// get the max num of this array
$nums = [10, 100, -20, 50, 30];

// Output
// 100

function big_one($a, $b){
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }

}

echo array_reduce($nums, "big_one") . "<br>";






