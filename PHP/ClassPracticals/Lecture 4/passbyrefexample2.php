<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  
<?php 

function subtractNumbers (&$arg1, &$arg2)
{ 
$arg1 += 10;        
$arg2 += 10;        
return $arg1 - $arg2;
} 

$var1 = 20;
$var2 = 10; 
echo "Before var1 = $var1, var2 = $var2 <br />";

subtractNumbers ($var1, $var2);
echo "After var1 = $var1, var2 = $var2 <br />";
?>


  </body>
</html>