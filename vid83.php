<?php

// (1) is_dir

/*  
(2) mkdir(
    path [required], 
    mode [optional] = 0777,
    recursive [optional], 
    context [optional]
    ) 
*/

// (3) rmdir
// (4) file_exists

// octal number, the windows ignores them, but linux doesn't

// 0777 : 
// (0)777 : the number itself
// 0(7)77 : the owner of the directory
// 07(7)7 : user group
// 077(7) : every one else

// search the internet for "File-system permissions" 
// wikipedia for example

// var_dump(is_dir("vid83"));
echo '<br>';
//this is a file not a directory
// var_dump(is_dir("vid82_attach.txt"));
echo '<br>';

// mkdir("test");

echo '<br>';
// in order for this to work you have to have
// a folder named upload inside a folder named test
// mkdir("test/upload/files", 0777);

// if I used true he will create all ot them
// mkdir("test/upload/files", 0777, true);

// it removes empty dir
// rmdir("test");

var_dump(file_exists("test/upload/files")); // bool(true)

// if the above file exist then I won't line: mkdir("test/upload/files", 0777);
// cuz it exists.

