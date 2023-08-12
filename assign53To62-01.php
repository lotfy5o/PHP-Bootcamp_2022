<?php
$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";
// echo str_replace(["%","0"], [$let_two, $let_one],$str);
// Write Your Code Here
echo '<br>';
echo str_replace([$str[(int) $num_two],$str[$num_one]], [$let_two, $let_one],$str);
echo '<br>';
// echo str_replace(["%",strpos($str, $num_one)], [$let_two, $let_one],$str);

// echo $str; // Elzero

echo '<br>';
// echo strpos($str, $num_one);
// echo str_replace("@", "o", "l@tfy l@ng l@bby", $r);
// echo '<br>';