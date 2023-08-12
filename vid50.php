<?php
//passing by ref
// search for strict mode
function add_five (&$number){
    $number += 5;
    return $number;
}

$n = 15;
echo add_five($n), '<br>';

echo $n , '<br>'; // 15

function calculate ($n1, $n2) : int {
    return $n1 + $n2;
}

echo calculate (10.5, 9.5);
echo '<br>';

echo gettype(calculate(10.5, 9.5));

