<?php

// String fun part 7
// (1)substr_replace

echo substr_replace("oneTwo", 1, 0); //1
echo '<br>';
echo substr_replace("oneTwo", 1, 3); //one1
echo '<br>';
echo substr_replace("oneTwo", 1, -1); //oneTw1
//negative means counting from the back

echo '<br>';
echo substr_replace("oneTwo", 1, 5); //oneTw1
//the 1 represent the 
echo '<br>';
echo substr_replace("oneTwo", 2, 2); //on2
echo '<br>';
echo substr_replace("oneTwo", 2, 2, 2); //on2wo
echo '<br>';
echo substr_replace("oneTwo", 2, 1, 4); //o2o
echo '<br>';
echo substr_replace("Elzero_web_school", "A", 7, 3); //Elzero_A_school
echo '<br>';
echo substr_replace("Elzero_web_school", "A", 7, -1); //Elzero_Al
echo '<br>';
echo substr_replace("Elzero_web_school", "A", 7, -3); //Elzero_Aool
echo '<br>';
echo substr_replace("Elzero_web_school", "A", 7, -9); //Elzero_Aeb_school
echo '<br>';
echo substr_replace("Elzero_web_school", "A", 7, -10); //Elzero_Aweb_school
echo '<br>';
echo '<br>';
echo substr_replace("Elzero_web_school", "@", 7, 0); //Elzero_@web_school
echo '<br>';
echo '<br>';

echo '<pre>';
print_r(substr_replace(["OneTwo", "ThreeFour"], 1, 1)); 
// [0] => O1
// [1] => T1
echo '</pre>';
