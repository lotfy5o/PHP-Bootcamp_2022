<?php

// (1) file_get_contents
/* file_get_contents(
    name of the file,
    true => look for the file in (get_include_path()),
    NULL,
    the start of the pointer,
    maximum length to read
) */
/* file_put_contents(
    the name of the file [if it doesn't exitst it will
    be created],
    the text you want to add [it will override any 
    previous text],
    FILE_APPEND [it wont override the previous data]
) */

echo get_include_path() . "<br>";

//this is vid number 91... get_file_contents videos
// echo file_get_contents("lotfy91.txt", true); 

//is vid number 91... get_file_contents videos
// echo file_get_contents("lotfy91.txt", true, NULL, 4) . '<br>'; 

// is vid number 9
// echo file_get_contents("lotfy91.txt", true, NULL, 4, 16) . '<br>'; 

// echo file_get_contents("https://elzero.net");
// print_r(file("https://elzero.net"));

file_put_contents("vid91.txt", "\r\nI addded this again to lotfy91");


// I addded this again to lotfy91
// I addded this again to lotfy91
file_put_contents("vid91.txt", "\r\nI addded this again to lotfy91", FILE_APPEND);

//32 => no. of byts that is written in the file
echo file_put_contents("vid91.txt", "\r\nI addded this again to lotfy91", FILE_APPEND);
