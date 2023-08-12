<?php
// Write Function Content Here

function calculate ($n1, $n2, $operation = "Addition"){
    if ($operation == "Addition" or $operation == "a"){
        return $n1 + $n2. '<br>';
    }
    elseif ($operation == "substract" or $operation == "s"){
        return $n1 - $n2. '<br>';
    }
    elseif ($operation == "multiply" or $operation == "m"){
        return $n1 * $n2. '<br>';
    }

}
// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200