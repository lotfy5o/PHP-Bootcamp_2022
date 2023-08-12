<?php
$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$odd = [];
foreach($mix as $element){
    function odd_num ($element) {
        if($gettype(element) == 'integer' && ($element % 2) != 0){
            $odd[]= $element;
        }
    } 
}



echo '<pre>';
print_r(array_filter($mix, "odd_num")); 
echo '</pre>';

// Output
/* Array
(
  [0] => 1
  [1] => 3
  [2] => 5
  [3] => 7
)
 */