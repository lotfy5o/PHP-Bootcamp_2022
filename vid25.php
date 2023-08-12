<?php
// logical operators

var_dump (100 > 50 and 100 > 80 and 100 > 90); //true

echo '<br>';
var_dump (100 > 50 and 100 > 80 and 100 < 90); //true
echo '<br>';
echo '<br>';
var_dump (100 > 50 && 100 > 80 && 100 < 90); //true
echo '<br>';
var_dump (100 > 50 || 100 > 80 || 100 < 90); //true
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
var_dump (100 > 50 xor 100 > 80 ); //false
echo '<br>';
echo '<br>';
var_dump (100 > 50 xor 100 > 110 ); //true