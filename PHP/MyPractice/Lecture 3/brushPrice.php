<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  <?php
$brush_price = 5; 
$counter = 10;

while ( $counter <= 100 ) 
{     
echo ($counter);
echo ($brush_price * $counter);        
$counter = $counter + 10;
}

  
  
  
  ?>
  </body>
</html>