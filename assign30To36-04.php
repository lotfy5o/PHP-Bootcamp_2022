<?php
$a = 30;
$b = 20;
$c = 10;

if ($a + $b === $c) {

  echo "A + B = C";

} elseif ($a + $c === $b) {

  echo "A + C = B";

} elseif ($b + $c === $a) {

  echo "B + C = A";

} else {

  echo "The End";

}
echo '<br>';
echo ($b + $c === $a) ? "B + C = A" : "The End";

/* Output
"B + C = A" 
*/