<?php
/* 
print $chars = $chars = ["A", "B", "C", "D"];
with 4 different ways 
*/


$chars = ["A", "B", "C"];

// $chars[] = "D";

/* 
echo '<pre>';
print_r(array_pad($chars, 4, "D"));
echo '</pre>'; 
*/

/* echo '<pre>';
print_r(array_push($chars, ["D"]));
echo '</pre>'; */

/* echo '<pre>';
array_splice($chars, 3, 2, ["D"]); //it will replace the elements
print_r($chars);
echo '<pre>'; */

echo '<pre>';
print_r($chars);
echo '</pre>';


// Output
/* Array
(
  [0] => A
  [1] => B
  [2] => C
  [3] => D
) */