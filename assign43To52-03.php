<?php
// Write Function Content Here


function sum_all(...$nums) {
    $result = 0;
    foreach ($nums as $n){
        if ($n != 5 && $n != 10){

            $result += $n;
        }
        elseif ($n == 10){
            $n = 20;
            $result += $n;
        }
    }
    echo '<br>';
    return $result;
}


// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40