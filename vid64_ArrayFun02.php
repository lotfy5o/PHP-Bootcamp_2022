<?php
// Array Func part 02
// (1) array_reverse
// (2) array_flip
// (3) in_array
// (4) array_key_exists
$family = ["Lotfy", "Mariam", "Menna", "Ahmed", "Mustafa", ["Rahma", "Hager"]];

echo '<pre>';
print_r ($family);
/* Array
(
    [0] => Array
        (
            [0] => Rahma
            [1] => Hager
        )

    [1] => Mustafa
    [2] => Ahmed
    [3] => Menna
    [4] => Mariam
    [5] => Lotfy
) */
print_r (array_reverse($family));
echo '</pre>'; 

echo '<pre>';
//True reserves the index of the element
// [0] => lotfy will still be the same 
print_r (array_reverse($family, true)); 
echo '</pre>'; 


$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "SY" => "Syria", "USA" => "United States"];

/* Array
(
    [Egypt] => EG
    [Saudi Arabia] => KSA
    [Syria] => SY
    [United States] => USA
) */
echo '<pre>';
print_r (array_flip($countries)); 
echo '</pre>'; 

$counting = [
    "A",
    "B",
    "C",
    [1, 2, 3]
];

echo count($counting). '<br>'; // 4
echo count($counting, 1). '<br>'; // 7 
// 7 = cuz he counted the elements inside the multi array



$search = ["1", 2, 3, 4];
if (in_array("1", $search)){ //if you used int 1 the result still the same
    echo "The Element is found <br>";
}
if (in_array(1, $search, true)){ // the if won't run cuz of the different data type
    echo "The Element is found <br>";
}

$courses = [
    "Js" => 95,
    "PHP" => 100,
    "HTML" => 60,
    "CSS" => 65
];
echo '<br>';

if (array_key_exists("PHP", $courses)){
    echo "The course is found and the price is: " . $courses["PHP"];
}