<?php
//ForEach

$countries = ["EG", "SA", "QA", "SY"];

echo '<pre>';
print_r($countries);
echo '</pre>';

$countries_with_dis = ["EG" => 50, "SA" =>30, "QA" => 20, "SY" => 70];

echo '<pre>';
print_r($countries_with_dis);
echo '</pre>';

echo '<br>';

foreach ($countries as $country) {
    echo $country . "<br>";
}
foreach ($countries_with_dis as $country => $discount) {
    echo "Country Name is $country And Discount is $discount <br>";
}