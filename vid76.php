<?php


echo sqrt(16) . '<br>'; // 4
echo sqrt(25) . '<br>';  // 5
echo sqrt(100) . '<br>'; // 10

echo min (10, 20, -40, -30, 50) . '<br>'; // -40  
echo min ([10, 20, -40, -30, 50]) . '<br>'; // -40


echo '<pre>';
print_r(min([1, 3, 5], [1, 2, 6])); // [1, 2, 6]
// it goes like this => 1 = 1, next element:
// 2 < 3 => then the second array is smaller
echo '</pre>';

echo max (10, 20, -40, -30, 50) . '<br>'; // 50  
echo max ([10, 20, -40, -30, 50]) . '<br>'; // 50


echo '<pre>';
print_r(max([1, 3, 5], [1, 2, 6])); // [1, 3, 5]
echo '</pre>';

