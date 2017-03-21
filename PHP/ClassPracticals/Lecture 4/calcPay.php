<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  
  <?php
  
  $worked = 620;
  $rate = 10;
  
  function calcPay($worked,$rate) 
  {
    if($worked>=60)
      {
      return "Your hours are capped to 60 hours. Your wage is: €".($rate*60);
      }
    else
      {
      return "Your wage is €" . ($worked*$rate);
      }
  }
  
  echo calcPay($worked,$rate);
  
  ?>

  </body>
</html>