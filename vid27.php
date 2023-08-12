<?php
// array operator

$arr1 = [1 => "A", 2 => "B"];
$arr2 = [3 => "C", 4 => "D"];
$arr3 = $arr1 + $arr2;

echo '<pre>';

print_r($arr1 + $arr2);
echo '<br>';

print_r ($arr3);

 
echo '</pre>';

$arr4 = [1 => "10", 2 => "20"];
$arr5 = [2 => 20, 1 => 10];
// must be the same key and the same value
//key is the 1, and the value is "10" 

echo '<br>';
var_dump($arr4 == $arr5);
echo '<br>';
var_dump($arr4 != $arr5);
echo '<br>';
var_dump($arr4 === $arr5);
echo '<br>';

$arr6 = [1 => 100, 2 => 200];
$arr7 = [2 => 200, 1 => 100];
echo '<br>';
$arr8 = [1 => 100, 2 => 200 ];
echo '<br>';
var_dump($arr6 === $arr7);
echo '<br>';
var_dump($arr6 === $arr8);

