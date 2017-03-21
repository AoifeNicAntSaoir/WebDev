<?php

$num1 = (int)$_GET['from'];
$num2 = (int)$_GET['to'];    
  $num=1;

  
 if($num1<0)
 {
 echo "Invalid";
 }
 else 
 { 
 echo("<table border='1'>");
  echo ("<tr> <th>Number</th>");
  echo ("<th>Squared</th>");
  echo ("<th>Cubed</th></tr>");
  
  while($num2>=$num1)
  {
  echo ("<tr><td>");
  echo($num1);
  echo ("</td><td>");
  echo ($num1* $num1);
  echo ("</td><td>");
  echo ($num1* $num1* $num1);
  echo ("</td></tr>");
  $num1++;
  }
}
  
  echo("</table>");
  
  
?>