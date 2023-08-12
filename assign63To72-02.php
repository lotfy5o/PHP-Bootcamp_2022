<?php
$codes = ["H", "C", "J"];
$means = ["HTML", "CSS", "JavaScript"];

// to make the $codes lower case I ran a function
// through the array_map

echo '<pre>';
print_r(array_combine(array_map(fn($f) => strtolower($f), $codes), $means));
echo '</pre>';

// Another solution:
echo "<pre>";
print_r(array_change_key_case(array_combine($codes,$means),CASE_LOWER));
echo "</pre>";

// Output
/* Array
(
  [h] => HTML
  [c] => CSS
  [j] => JavaScript
) */