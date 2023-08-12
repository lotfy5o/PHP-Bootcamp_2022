<?php
// String Fun part 9
// (1)strstr
// (2)stristr
// (3)number_format

echo strstr("lotfy resturant", "r"). '<br>'; //resturant
echo strstr("lotfy resturant", "f"). '<br>'; //fy resturant

echo strstr("lotfy resturant", "r", true). '<br>'; //lotfy


echo strlen(strstr("lotfy resturant", "r", true)). '<br>'; //6 = lotfy(5) + space (1)

echo strstr("lotfy resturant", "R"). '<br>'; //nothing => use var_dump
var_dump(strstr("lotfy resturant", "R")); //bool(false)
echo '<br>';
echo '<br>';

echo stristr("lotfy resturant", "R"). '<br>'; //resturant
var_dump(stristr("lotfy resturant", "R")); //string(9) "resturant"
echo '<br>';

echo 10_000_000; //one mil, written like this so not to confuse 
//1000000

echo '<br>';
echo '<br>';

echo number_format(100000000.15453); //100,000,000
echo '<br>';
echo number_format(100000000.15453, 3); //100,000,000.155
echo '<br>';
echo number_format(100000000.15453, 3, "@"); //100,000,000@155
echo '<br>';
echo number_format(100000000.15453, 3, "@","#"); //100#000#000@155





