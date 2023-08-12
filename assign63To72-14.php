<?php
$nums = [10, 100, -20, 50, 30];
// array($nums);
// Output
// -20

// it displays nothing
/* function smaller($a, $b){
    if ($a < $b){
        return $a;
    } else {
        return $b;
    }
}

echo array_reduce($nums, "smaller") . "<br>";
 */

function smaller ($num_array){
    $smallest = -1;
    foreach($num_array as $i){
        if ($smallest == -1 || $i < $smallest){
            $smallest = $i;
        }
    
    }
    return $smallest;

 }
$result = smaller($nums);
echo $result;

/* $nums = [10, 100, -20, 50, 30];
$min = 0 ;
foreach($nums as $num){
  if($num <= $min ){
    $min = $num;
  }
}
echo $min; */