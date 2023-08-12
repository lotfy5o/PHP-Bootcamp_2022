<?php
//break, continue



foreach (["EG", "SA", "QA", "SY", "USA","Qatar"] as $country) {
    
    if ($country == "USA"){
        break;
    }
    echo $country . "<br>";

    }

echo "###########. <br>";
foreach (["EG", "SA", "QA", "SY", "USA","Qatar"] as $country) {
    
    if ($country == "USA"){
        continue;
    }
    echo $country . "<br>";

    }

echo "###########. <br>";