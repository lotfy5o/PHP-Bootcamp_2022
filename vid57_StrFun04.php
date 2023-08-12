<?php
//string fun part 4
// (1)strpos
// (2)substr_count

var_dump(strpos("hello hello","h")); //int(0)
echo '<br>';

//he will start the search after pos = 3
//and will find the h (the second h) at pos = 6
var_dump(strpos("hello hello","h",3)); //int (6)
echo '<br>';


// H is capital
var_dump(strpos("hello hello","H",3)); //bool(false)
echo '<br>';
echo '<br>';

//after I got to the second h, I counted two index: at (hello hel(l)o)
//that second (L) I didn't find an h so it gave me false
var_dump(strpos("hello hello","h",-2)); //bool(false)
echo '<br>';
var_dump(strpos("hello helho","h",-2)); //int(9)
echo '<br>';
var_dump(strpos("hello hello","h",-2)); //int(9)
echo '<br>';
var_dump(strpos("hello hello","h",-5)); //int(6)
echo '<br>';
var_dump(strpos("hello hello","h",-11)); //int(6)
echo '<br>';
var_dump(strpos("hello hello","h",-strlen("hello hello"))); //int(0)
echo '<br>';
echo '<br>';
var_dump(strrpos("hello hello","h")); //int(6) => searching for the second h
echo '<br>';
var_dump(strrpos("hello hello","h",5)); //int(6) => searching for the second h
echo '<br>';
echo '<br>';
var_dump(stripos("hello hello","H")); //int(0), note that the H is capital
echo '<br>';
echo '<br>';
var_dump(substr_count("hello hello","he")); //2 => the he is found two times
echo '<br>';
var_dump(substr_count("hello hello","he", 1)); //1 
echo '<br>';
var_dump(substr_count("hello hello","he", 1, 7)); //1 
//start at index 1 and stop at inex 7
//note that spaces count as index "ello he"
//in the last string the he is found one time

echo '<br>';
var_dump(substr_count("hello hello","he", 1, 6)); //0
// "ello h" doesn't have a he in it.

echo '<br>';
echo '<br>';
var_dump(substr_count("abcdabcd","abcd")); //2
echo '<br>';
var_dump(substr_count("abcdabcda","abcda")); //1 => overlap string
echo '<br>';
var_dump(substr_count("abcdaabcda","abcda")); //2








