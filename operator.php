<?php 
   $a=true ;
   $b=1;
   // Below condition returns true and prints a and b are equal
   if($a==$b){
    echo "a and b are equal";
   }else{
    echo "a and b are not equal";
   }
   //Below condition returns false and prints a and b are not equal because $a and $b are of  different data types.
   if($a===$b){
    echo "a and b are equal";
   }else{
    echo "a and b are not equal";
   }
?> 