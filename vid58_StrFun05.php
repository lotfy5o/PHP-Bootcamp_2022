<?php
//String Fun part 5
// (1) parse_str
// (2)quotemeta
// (3)str_pad
// (4)strtr

parse_str("name=Lotfy&email=lotfy@gmail.com&os=windows&0=try", $query);
//I added the 0 key index just for fun

echo '<pre>';
print_r($query);
echo '</pre>';

echo $query ["name"]. '<br>';
echo $query ["email"]. '<br>';
echo $query ["os"]. '<br>';
echo $query [0]. '<br>'; //just to try


echo "hello [] ()  * + . <br>";
echo quotemeta("hello [] ()  * + . <br>");
//every char that has a problem will escape it "/"


// echo "12". "<br>";
// echo "321". "<br>";
// echo "1313". "<br>";
// echo "15435". "<br>";
// echo "500432". "<br>";

echo str_pad("12", 8). "<br>"; //to make sure that it has a 8 char
//strlen(str_pad("12", 8)) = 8

echo str_pad("321", 8, 0). "<br>"; //32100000
echo str_pad("1313", 8, 0, STR_PAD_BOTH). "<br>"; //00131300
//1313 is 4 chars and I need 8 chars
//so the remainder is 4, by doing str_pad_both 
//I added two chars in the front and two at the back

echo str_pad("15435", 8, 0, STR_PAD_BOTH). "<br>"; //01543500

echo str_pad("500432", 8, 0, STR_PAD_BOTH). "<br>";// that's the logical one
//all the zeros at the front

echo strtr("@otfy is @over@y and nice", "@", "l");// lotfy is lovely and nice
echo "<br>";

$transArray = ["@" => "l", "#" => "o"];
echo strtr("@#tfy is @#ver@y and nice", $transArray);// lotfy is lovely and nice