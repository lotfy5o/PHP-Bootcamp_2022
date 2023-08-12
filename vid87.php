<?php
// [a] for write => pointers at the end + create if not exist 
 
$handle = fopen("vid86.txt", "a");
// echo fread ($handle, 1024);
// if you put "a" instead of "r" it will give an error:
    /* Notice: fread(): Read of 8192 bytes failed 
    with errno=9 Bad file descriptor */ 
// cuz the "a" is for writing and you open for reading
// but if you put "a+" it will work

fwrite($handle, "\r\nI finished video 87");



fwrite($handle, "\r\nThis is a new line", 5); //thi
// \r\n is for adding a new line
// check this line by opening the text file


// if you put "r" instead of "a" above...
// it will give you these errors:

// Notice: fwrite(): Write of 21 bytes failed 
// with errno=9 Bad file descriptor in C:\xampp\htdocs\PHP Bootcamp 2022\vid87.php on line 5

// Notice: fwrite(): Write of 5 bytes failed 
// with errno=9 Bad file descriptor in C:\xampp\htdocs\PHP Bootcamp 2022\vid87.php on line 7

fclose($handle);




