<?php

//Error Control Operator

//variable
$a = 10;
$b = @$a or die("Variable not found");

echo "Test $b";

echo '<br>';

//File
$f = @file("vid28_attachment.txt") or die ("file not found");
echo '<pre>';
print_r($f);
echo '</pre>';

echo '<br>';

//include

(@include ("vid28_att02_1.php")) or die("Include file not found");