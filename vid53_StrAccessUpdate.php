<?php
//string access

$str = "Lotfy";

echo "first letters is $str[0] <br>";
echo "first letters is $str[4] <br>";

echo "Numbers of Letters are ". strlen($str)."<br>";

echo "Last letters is $str[-1] <br>";
echo "Last letters is {$str[strlen($str) - 1]} <br>";

echo $str . "<br>";
$str[0] = "A"; 
echo $str . "<br>"; 
$str[5] = "A"; 
echo $str . "<br>"; 