<?php
$num = 2;
while ($num < 520) {
  $num = 2 * ($num - 1) + 2;

  if ($num < 520){

    echo $num;
  }
  
  $num++;
  echo '<br>';
} //this code will print the num after the 520
//which isn't needed.

// Needed Output
/* 1
4
10
22
46
94
190
382 */
