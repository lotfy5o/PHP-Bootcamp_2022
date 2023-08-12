<?php
$mix = [1, 2, "A", "B", "C", 3, 4];

/* // Output
1
2
3
4
"4 Numbers Printed"
"3 Letters Ignored" */
$num = 0;
$char = 0;

// echo gettype($mix[0]);

/* for ($i = 0; $i <= count($mix); $i++){
    if (gettype($mix [$i]) == "integer"){
        echo $mix [$i]. "<br>";
        $cnt_num++;
    }
    else {
    
        $cnt_ch++;
    }
} */

foreach ($mix as $value){
    if (gettype ($value) == "integer"){
        echo $value . '<br>';
        $num++;
    }
    else {
        $char++;
    }
}

echo "$num printed <br>";
echo "$char printed <br>";