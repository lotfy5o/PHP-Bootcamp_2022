<?php

echo '<pre>';

print_r(
    [
        "a" =>"ahmed",
        "b" => "basem",
        "mahmoud",
        true => "sayed",
        true =>"lotfy", //only one index of 1 and it will be lotfy
        //cuz you overide it.
        9 => "amera",
        "lotfy",
        "mariam",
        8 => "walaa",
        "names" => [
            "lotfy1", 
            "lotfy2",
            "sayed" => [
            '1',
            '2',
            '3'
            ]
        ]
    
    
    ]
    );

echo '</pre>';
