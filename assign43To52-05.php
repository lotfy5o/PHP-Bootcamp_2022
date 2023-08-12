<?php
function check_status($a, $b, $c) {
    $temp = 0;
    if (gettype ($a) == "integer"){
        if (gettype ($b) == "string"){
            $temp = $a;
            $a = $b;
            $b = $temp;
        }
        else {
            $temp = $a;
            $a = $c;
            $c = $temp;
        }
    }
    elseif (gettype($a) == "boolean"){
        if (gettype ($b) == "string"){
            $temp = $a;
            $a = $b;
            $b = $c;
            $c = $temp;
        }
        else {
            $temp = $a;
            $a = $c;
            $c = $temp;
        }
    }
    

    if ($c == 1){
    echo "Hello $a, Your Age is $b and you are available for hire";
    echo '<br>';
    }
    else {
    echo "Hello $a, Your Age is $b and you are (Not) available for hire";
    echo '<br>';

    }
    
    }
    

    
    
   
   
  
  
  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"