<?php
// Arrau Func part 3
// (1) array_keys
// (2) array_values
// (3) array_pad
// (4) array_product
// (5) array_sum

$friends = ["Lotfy", "Mariam", "Menna", "Ahmed","Lotfy", "Mustafa", 1, "1"];

echo '<pre>';
print_r(array_keys($friends));
echo '</pre>';
/* Array
(
    [0] => 0
    [1] => 4
) */
echo '<pre>';
print_r(array_keys($friends, "Lotfy"));
echo '</pre>';
/* Array
(
    [0] => 6
    [1] => 7
) */
echo '<pre>';
print_r(array_keys($friends, "1"));
echo '</pre>';
/* Array
(
    [0] => 7
) */
echo '<pre>';
print_r(array_keys($friends, "1", true));
echo '</pre>';

$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "SY" => "Syria", "USA" => "United States"];
/* Array
(
    [0] => Egypt
    [1] => Saudi Arabia
    [2] => Syria
    [3] => United States
) */
echo '<pre>';
print_r(array_values($countries));
echo '</pre>';

$pad = ["A", "B", "C", "D"];
/* Array
(
    [0] => A
    [1] => B
    [2] => C
    [3] => D
    [4] => @
    [5] => @
    [6] => @
    [7] => @
    [8] => @
    [9] => @
) */
echo '<pre>';
print_r(array_pad($pad, 10, "@"));
echo '</pre>';
/* Array
(
    [0] => @
    [1] => @
    [2] => @
    [3] => @
    [4] => @
    [5] => @
    [6] => A
    [7] => B
    [8] => C
    [9] => D
) */
echo '<pre>';
print_r(array_pad($pad, -10, "@"));
echo '</pre>';
// if the size you give is less than the array size
// it will still give you the array size.
echo '<pre>';
print_r(array_pad($pad, 2, "@"));
echo '</pre>';

$product = [10, 5, 2, 10];

echo array_product($product). '<br>'; // 1000

echo array_sum ($product); // 27



