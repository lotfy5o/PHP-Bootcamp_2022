<?php
//Default parameter

function get_data($country = "private", $name = "private", $age = "private", $address = "Private Address"){
   
    $line_one = "You country is $country and your name is $name <br>";
    $line_two = "Your age is $age and you live at $address";
    return $line_one . $line_two;

}
/* 
echo get_data("Egypt", "lotfy", 28); //any default value try and keep it for the last
//cuz if you made at the front the program will think its the $country
 */

echo get_data (address : "salah salem"); //if you didn't provide
//a default values for all the parameters above it will give a fatal Error.
