<?php
$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;

echo substr_count($str, $e, $four). "<br>";
echo substr_count($str, strtolower($o), $four + 2). "<br>";

// 1
// 2

// var_dump(substr_count("hello hello","he")); //2 => the he is found two times
// echo '<br>';
// var_dump(substr_count("hello hello","he", 1)); //1 
// echo '<br>';
// var_dump(substr_count("hello hello","he", 1, 7)); //1 
// //start at index 1 and stop at inex 7
// //note that spaces count as index "ello he"
// //in the last string the he is found one time