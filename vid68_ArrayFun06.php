<?php
// Array Func part 6
// (1) array_shift
// (2) array_pop
// (3) array_push
// (4) array_unshift

$chars = ["A", "B", "C", "D"];

echo '<pre>';
print_r ($chars);
echo '</pre>';

$first = array_shift($chars);

echo "$first <br>"; // A
/* Array
(
    [0] => B
    [1] => C
    [2] => D
) */
echo '<pre>';
print_r ($chars);
echo '</pre>';

$last = array_pop($chars);

echo "$last <br>"; // D

echo '<pre>';
print_r ($chars);
echo '</pre>';

array_push ($chars, "X", "Y", "Z");

echo '<pre>';
print_r ($chars);
echo '</pre>';

// if you want to add just one element 
// there is another better way: 
$chars [] = "1";
echo '<pre>';
print_r ($chars);
echo '</pre>';

// unshift add elements at the end of array
array_unshift($chars, "One", "Two", "Three");
echo '<pre>';
print_r ($chars);
echo '</pre>';
