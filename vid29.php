<?php
// operator precedence

echo 2 + 4 * 5; // 22
echo '<br>';
echo (2 + 4) * 5;
echo '<br>';
echo '<br>';
echo '<br>';

echo 10 || false || 0 || [] || ""; //true

echo '<br>';

var_dump(10 || false || 0 || [] || "");

echo '<br>';
$a = 10 || false; //(10 || false) = $b
echo '<br>';
echo $a; // 1
echo '<br>';
$b = 10 or false; // ($b = 10) or false
echo $b; // 10  