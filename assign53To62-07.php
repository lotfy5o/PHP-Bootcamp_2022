<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

// Output
// "Elzero"

// echo ucfirst(strtolower(implode($chars)));
echo substr_replace(ucfirst(strtolower(implode($chars))),"", 2, 2);
// echo substr_replace("oneTwo", 2, 2); //on2
echo '<br>';