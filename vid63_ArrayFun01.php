<?php
// Array Func part 01 
// (1) array_chunk
// (2) array_change_key_case
// (3) array_combine
// (4) array_count_values

$friends = ["lotfy", "mariam", "menna", "ahmed", "mustafa"];



echo '<pre>';
print_r(array_chunk($friends, 2));
echo '</pre>';

$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "SY" => "Syria", "USA" => "United States"];
/* Array
(
    [0] => Array
        (
            [0] => Egypt
            [1] => Saudi Arabia
        )

    [1] => Array
        (
            [0] => Syria
            [1] => United States
        )

) */
echo '<pre>';
print_r(array_chunk($countries, 2, false)); // the default is false by the way
echo '</pre>';
/* Array
(
    [0] => Array
        (
            [EG] => Egypt
            [KSA] => Saudi Arabia
        )

    [1] => Array
        (
            [SY] => Syria
            [USA] => United States
        )

) */
echo '<pre>';
print_r(array_chunk($countries, 2, true));
echo '</pre>';
/* Array
(
    [eg] => Egypt
    [ksa] => Saudi Arabia
    [sy] => Syria
    [usa] => United States
) */
echo '<pre>';
print_r(array_change_key_case($countries));
echo '</pre>';
/* Array
(
    [EG] => Egypt
    [KSA] => Saudi Arabia
    [SY] => Syria
    [USA] => United States
) */
echo '<pre>';
print_r(array_change_key_case($countries, CASE_UPPER));
echo '</pre>';

$keys = ["L", "M", "A"];
$values = ["Lotfy", "Mariam", "Ahmed"];
/* Array
(
    [L] => Lotfy
    [M] => Mariam
    [A] => Ahmed
) */
echo '<pre>';
print_r(array_combine($keys, $values));
echo '</pre>';
/* Array
(
    [A] => 2
    [B] => 2
    [C] => 1
) */
$counting = ["A", "A", "B", "B", "C"];
echo '<pre>';
print_r(array_count_values($counting));
echo '</pre>';