<?php

$a = "lotfy";
$b = &$a;

$b = "muhammad";
$a = "lotfy";

echo $a;
echo '<br>';
echo $b;