<?php

// Filter Function

// Validation process

echo '<pre>';
print_r(filter_list());
echo '</pre>';

echo filter_id("boolean") . '<br>'; // 258

$val = True; // or "yes" or "1" or "one"

if (filter_var($val, FILTER_VALIDATE_BOOL)){
    echo "This Is True <br>";
}
else {
    echo "This Is False <br>";
}

// the same solution using the id above: 258
if (filter_var($val, 258)){
    echo "This Is True <br>";
}
else {
    echo "This Is False <br>";
}





