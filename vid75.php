<?php


echo round(5.99) . '<br>'; // 6 = ceil function
echo round(5.50) . '<br>'; // 6 = ceil function
echo round(5.49) . '<br>'; // 5 = floor function 
echo round(5.10) . '<br>'; // 5 = floor function

echo '<br>';
echo '<br>';

echo round(5.99, 1) . '<br>'; // 6 
echo round(5.94, 1) . '<br>'; // 5.9 
echo round(5.994, 2) . '<br>'; // 5.99 => we need 
//  => 5.99 cuz the precision is 2, then we look at the 4
// its below 5 so we floor it so the answer is 5.99
echo round(5.994, 1) . '<br>'; // 6 

// ROUND_HALF_UP is the default
echo round(5.99, 0, PHP_ROUND_HALF_UP) . '<br>'; // 6
echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . '<br>'; // 5
echo round(5.55, 0, PHP_ROUND_HALF_DOWN) . '<br>'; // 6

// ..._EVEN => will round it to the clothest even number 
echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . '<br>'; // 6
echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . '<br>'; // 4

echo round(5.50, 0, PHP_ROUND_HALF_ODD) . '<br>'; // 5
echo round(4.50, 0, PHP_ROUND_HALF_ODD) . '<br>'; // 5
