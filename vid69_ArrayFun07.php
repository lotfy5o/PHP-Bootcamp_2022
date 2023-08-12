<?php
// Array Func part 7
// (1) array_slice
// (2) array_splice

/*
 array_slice ($array,
              the index you gona cut at,
              num of element after the the inedex
 */
/* 
array_splice ($array,
              the index you gona cut at,
              num of elements you gona replace,
              the elements you wanna keep
)
 */
$chars = ["A", "B", "C", "D", "E", "F", "G"];
$chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
$chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];
/* Array
(
    [0] => C
    [1] => D
    [2] => E
    [3] => F
    [4] => G
) */
echo '<pre>';
print_r(array_slice($chars, 2));

print_r(array_slice($chars, -4));
print_r(array_slice($chars, 2, 2));
/* Array
(
    [0] => C
    [1] => D
    [2] => E
) */
print_r(array_slice($chars, 2, -2)); // the -2 here represents a forbidden zone
echo '</pre>';

/* Array
(
    [A] => 1
    [B] => 2
) */
echo '<pre>';
print_r(array_slice($chars_with_string_keys, 0, 2));
/* Array
(
    [0] => 1
    [1] => 2
) */
print_r(array_slice($chars_with_numeric_keys, 0, 2)); // it won't reserve the keys: 10, 20
/* Array
(
    [10] => 1
    [20] => 2
) */
print_r(array_slice($chars_with_numeric_keys, 0, 2, true)); // it will reserve the keys 
echo '</pre>';

// the array is still the same 
// the next print_r is to show you this
echo '<pre>';
print_r($chars);
echo '</pre>';



$nums = [10, 20, 30, 40, 50, 60, 70];
echo '<pre>';
// print_r(array_splice($nums, 2, 1)); // array_splice change the actual array
print_r(array_splice($nums, 2, 2, ["one", "two"])); //it will replace the elements
//you removed with the elements in the square brakets
// you can add one elements ["one"];

print_r($nums);

echo '</pre>';
/* echo '<pre>';
print_r(array_splice($nums, 2, -2)); 
echo '</pre>'; */