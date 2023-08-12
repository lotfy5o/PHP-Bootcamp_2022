<?php

echo '<pre>';

print_r([
    "FrontEnd" => [
        "HTML",
        "Css", 
        "Js" =>["Vuejs" => 
                                [2 => "v2", "v3"],
                                "Reactjs", 
                                "svelte"
                                ] 
    
        
    ]
    ]);


print_r([
    "BackEnd" => [
        "PHP",
        "MySQL",
        "Security" 
    ],
    "Git",
    "GitHub",
    "Testing" => [
        "Unit Testing",
        "End to End",
        "Integration"
    ]
    ]);
echo '</pre>';