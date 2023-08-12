<?php
//ternary operator

$a = 10;

if ($a > 8) {
    echo "Good";
} else {
    echo "Bad";
}
echo '<br>';

//condition
echo $a > 8 ? "Good" : "Bad";

echo '<br>';

echo "I love PHP cuz its a ".($a > 8 ? "Good" : "Bad"). " Language"; 
/* if ($a > 8) {
    echo "Good";
} else {
    echo "Bad";
}

echo " language";  */

echo "<br>";

$ternary = $a > 5 ? "Good" : "Bad";

echo "I love PHP because its a $ternary Language"; 


