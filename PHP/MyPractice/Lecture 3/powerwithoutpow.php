<!DOCTYPE html>
<html lang='en'>
  <head>
    <title>Power</title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  <?php
  $counter=0;
  $num=1;
  
 
  
  while($num<=1000)
  {
  
  $num =$num*2;
   $counter++;
   
  }
  echo( '2 to the power of'.$counter. '=' . $num .'<br>')
  ?>

  </body>
</html>