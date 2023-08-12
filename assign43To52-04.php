<?php
// Write Function Content Here
function multiply (...$nums) {
    $result = 1;
    foreach ($nums as $n){
        if (gettype ($n) != "string"){
            if (gettype($n) == "double") {

                $n = (int)$n;
                $result *= $n;
            }
            else {
                $result *= $n;
            }
            
        }
    }
    echo '<br>';
    return $result;
}


// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000