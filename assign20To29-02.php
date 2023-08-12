<?php

//I got just two methods, search for the third one.
$a = "10";

/* // Needed Ouput
10
"integer"
10
"integer"
10
"integer"

// For The People Who Love Searching
10
"integer"
10
"integer" */
$b = (int) $a;
echo (int) $a;
echo '<br>';

echo $b;
echo '<br>';
var_dump($b);
echo '<br>';
$c = $a + 0;
echo '<br>';
echo $c;
echo '<br>';
var_dump($c);
echo '<br>';

