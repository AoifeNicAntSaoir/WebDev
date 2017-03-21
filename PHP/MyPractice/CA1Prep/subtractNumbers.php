<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  
  <?php
  
  $num1 = 5;
  $num2 = 10;
  
  function subtractNumbers($num1,$num2) 
  {
    if($num1>$num2)
      {
      return ($num1-$num2);
      }
    else
      {
      return "Invalid";
      }
  }
  
  echo "The result is ". subtractNumbers($num1,$num2);
  
  ?>

  </body>
</html>