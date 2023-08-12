<?php
// Test Case 1

echo "Test Case 1",'<br>';
$a = 100;
$b = 200;
$c = 300;

if ($a > $b) {
    echo "A is Larger than B",'<br>';
} else {
    if ($a > $c) {
        echo "A is Larger than C", '<br>';
      }
      else {
          echo "A is not Larger than B or C", '<br>';
      }
}
// A Is Not Larger Than B Or C

// Test Case 2
echo "Test Case 2",'<br>';
/* $a = 200;
$b = 100;
$c = 300; */
if ($a > $b) {
    echo "A is Larger than B",'<br>';
} else {
    if ($a > $c) {
        echo "A is Larger than C", '<br>';
      }
      else {
          echo "A is not Larger than B or C", '<br>';
      }
}

// A Is Larger Than B

// Test Case 3
echo "Test Case 3",'<br>';
/* $a = 200;
$b = 200;
$c = 100; */

if ($a > $b) {
    echo "A is Larger than B",'<br>';
} else {
    if ($a > $c) {
        echo "A is Larger than C", '<br>';
      }
      else {
          echo "A is not Larger than B or C", '<br>';
      }
}
// A Is Larger Than c