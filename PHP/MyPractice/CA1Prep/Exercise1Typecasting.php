<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  <?php
    function multiply($num1,$num2)
  {
  return $num1 * $num2
  { 
  
  $num1 =(int)$_GET['num1'];    //single quotes ''????
  $num2 =(int)$_GET['num2'];

if ($num1 <=0 or $num2 <=0)
{
  echo "Invalid data try again";
}
else 
{
  echo "You get" . multiply($num1, $num2) . "when you multiply the two numbers together";
}
  

  
  if($num1==0 OR $num2==0)
  ?>
  
  <form name="example" action="Exercise1Typecasting.php" method="get">
  
  Enter number 1: <input type="text" name="num1">
  <br>Enter number 2: <input type="text" name="num2">
  
  <br>
  <input type="submit">
  
  </form>
  <?php
  echo 'The result is '. multiply();
  ?>

  </body>
</html>