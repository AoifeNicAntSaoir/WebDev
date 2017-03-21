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
$i=0;

echo ("<table border='1'>");
echo ("<tr><th>Quantity</th>");
echo ("<th>Price</th></tr>");
for( $counter=10; $counter<= 100; $counter++ ) {
   echo ("<tr><td>");
   echo ($counter);
   echo ("</td><td>");
   echo ($brush_price * $counter);
   echo ("</td></tr>");
   $counter = $counter + 10;
}
echo ("</table>");  
?>

  </body>
</html>