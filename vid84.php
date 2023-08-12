<?php

// if I want to change the permissions of the dir

// (1) fileperms
/* 
   (2) chmod(
          file[required],
          mode[required]
        )
*/
// (3)clearstatcache

// mkdir("Y", 0700);

echo fileperms("Y") . '<br>'; //16895
// convert the 16895 into octal pattern
// search for decimal to octal

// 40777:
// 4 = means dir
// 0777 = the default
// this means that the windows ignored the permissions 
// that I assigned to the dir above in line 14

chmod("Y", 0644);
// it is supposed to print a different num than 16895
// but it is printing from the caching
echo fileperms("Y") . '<br>'; // 16895

// so we gona clear the cach
clearstatcache();

