<?php
function path ($lastDestination){
    $path = dirname(__FILE__, 1) . "\\$lastDestination";
    return $path;
}
// echo path("Result.txt");

function change_permissions($name){
    if (!is_dir($name)){
        if ((pathinfo(path($name))["extension"]) == "txt"){
            chmod($name, 0700);
            echo "Permission Changed <br>";
        } else {
            echo "File Extension Is Not Txt <br>";
        }
    } else {
        echo "This Is Directory And Only Files Allowed <br>";
    }
    
}


// echo pathinfo(path("Result.txt"))["extension"];






// Test Cases

echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed
