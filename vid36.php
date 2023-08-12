<?php
//switch

$day = "sat";

switch ($day) {
    case "sat";
      echo "hello we are open $day from 10:16";
      break;
    
    case "sun";
      echo "hello we are open $day from 12:18";
      break;
      break;
    
    case "mon";
      echo "hello we are open $day from 14:20";
      break;
    
    case "thu";
      echo "hello we are open $day from 14:20";
      break; 
    /* mon and thu have the same dates
    so we can merge them by doing this:

    case "mon";
    case "thu";
      echo "hello we are open $day from 14:20";
      break; */

    default:
     echo "Unkown Day";
}