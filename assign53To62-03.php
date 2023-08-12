<?php
$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here

// aaa_aaa_aaa_

// echo str_repeat(strtolower($str), 3);
// echo '<br>';
//lot@fy @is @nic@e@
// echo chunk_split ("lotfy is nice", 3, "@");
echo chunk_split (str_repeat(strtolower($str), 3), 3, $char);
// echo "<br>";



// lotfy lotfy lotfy
// echo str_repeat("lotfy ", 3);