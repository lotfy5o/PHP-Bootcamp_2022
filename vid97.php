<?php

date_default_timezone_set("Africa/Cairo");


$reg = date_create("2022-01-07");

$now = date_create("now");

$diff = date_diff($reg, $now);

/* DateInterval Object
(
    [y] => 1
    [m] => 6
    [d] => 28
    [h] => 23
    [i] => 23
    [s] => 13
    [f] => 0.066172
    [invert] => 0
    [days] => 574
    [from_string] => 
) */
echo "<pre>";
print_r($diff);
echo "</pre>";

echo "you are a member for " . $diff->days . " Days <br>";

echo date("Y-m-d H:i:s", strtotime("next friday")) . '<br>';
echo date("Y-m-d H:i:s", strtotime("+1year")) . '<br>';

echo date("Y-m-d H:i:s", strtotime("tomorrow")) . '<br>';
// 1995-10-06 00:00:00 => the tomorrow of my birthday
echo date("Y-m-d D H:i:s", strtotime("tomorrow", strtotime("1995-10-5"))) . '<br>';
