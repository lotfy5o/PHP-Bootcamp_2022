<?php
$nums = [5, 10, 20, 5, 30, 40];

function add ($n1, $n2) {
    return $n1 + $n2;
}

echo array_reduce($nums, "add", -10);
// Output
// 100