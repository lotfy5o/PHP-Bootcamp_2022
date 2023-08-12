<?php
// str_replace and str_ireplace

echo str_replace("@", "o", "l@tfy l@ng l@bby", $r);
echo '<br>';

echo "replaces count is $r";
echo '<br>';
echo str_replace(["@", "#"], ["o", "l"], "#@tfy #@ng #@bby");
echo '<br>';
echo '<br>';
echo str_replace(["@", "#"], ["A"], "#@tfy #@ng #@bby");
echo '<br>';
echo '<br>';

echo '<pre>';
print_r(str_replace("one", 1, ["one", "two", "three", "one", "one"]));

echo '</pre>';

echo '<pre>';
print_r(str_replace(["one", "two"], [1, 2], ["one", "two", "three", "one", "one"]));
echo '</pre>';

echo '<pre>';
//empty string for the three
print_r(str_replace(["one", "two", "three"], [1, 2], ["one", "two", "three", "one", "one"]));
echo '</pre>';

echo '<pre>';
//case sensetive
print_r(str_replace(["One", "Two"], [1, 2], ["one", "two", "three", "one", "one"]));
echo '</pre>';

echo '<pre>';
//Not case sensetive
print_r(str_ireplace(["One", "Two"], [1, 2], ["one", "two", "three", "one", "one"]));
echo '</pre>';


