<?php

// concatenation

$a = "lotfy";
$b = "muhammad";
$c = "school";

define("lotfy", "1");

echo "$a $b $c";
echo '<br>';
echo "{$a}..{$b}..{$c}";
echo '<br>';
echo $a . " " . $b . " " .  $c; 
echo '<br>';
echo "$a $b $c";
echo '<br>';
echo "{$a}..{$b}..{$c}" ." " .lotfy;
echo '<br>';
echo '<br>';
echo "{$a}..{$b}..{$c} ", lotfy;


echo '<br>';
echo '<br>';
echo '<br>';
$x = "lotfy ";
$x .= "web "; // $x = $x . "web" => lotfy web
$x .= "school";
echo $x;

