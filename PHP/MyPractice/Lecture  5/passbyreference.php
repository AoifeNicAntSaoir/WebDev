<?php

    $var1=20;
 $var2=10;
 
 function subtractNumbers(&$var1, &$var2)
 {
 $var1+=10;
 $var2+=10;
 
 return $var1-$var2;
 
 }

 $var1=20;
 $var2=10;
 echo "Before var 1 went through the function var 1 was = " . $var1; //20;
 echo "<br>Before var 2 went through the function var 1 was = " .$var2; //10
 
 echo "<br>After var1 and var2 went throught the function var1-var2 = " . subtractNumbers($var1,$var2);
 





?>