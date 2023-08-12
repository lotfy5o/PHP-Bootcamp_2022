<?php
$a = "Elzero";
$b = "Web";
$c = "School";

//search for the fourth one.

// Method One
// $d = ???;
$d = "$a $b $c ";

// Method Two
$d = $a . " " . $b . " " . $c;

// Method Three
$d = "{$a} {$b} {$c}";

// Method Four
// $d = ???;

echo $d; // Elzero Web School