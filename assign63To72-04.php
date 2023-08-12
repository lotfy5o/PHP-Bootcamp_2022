<?php
$nums = [10, 20, 30];

// once with array_reduce with Anonymous func
// and another different solution

// the first solution:
echo array_reduce($nums, fn($n1, $n2) => $n1 + $n2). '<br>';


// the second solution:
function sum($num1,$num2){
    return $num1 + $num2 ;
  }

echo array_reduce($nums, "sum"). '<br>';





// this a 3rd solution:

function sumArray($nums) {
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    return $sum;
}


$result = sumArray($nums);
echo $result;




// Output
// 60
// 60