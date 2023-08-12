<?php

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"

echo round(disk_total_space("C:") / 1024 / 1024 / 1024 / 1024, 2),
" Terabyte<br>" ;

echo round(disk_total_space("D:") / 1024 / 1024 / 1024 / 1024, 2),
" Terabyte<br>";
