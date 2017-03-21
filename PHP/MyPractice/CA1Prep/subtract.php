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
