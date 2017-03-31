<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  <?php
	 $num=0;
	
	 echo("<table border='1'");
	 echo("<tr><th>");
	 echo("Number");
	 echo("</th><th>");
	 echo("Squared");
	 echo("</th><th>");
	 echo("Cubed");
	 echo("</th></tr>");
	 
	 while($num<=100)
	 {
		 echo("<tr> <td>");
		 echo($num);
		 echo("</td> <td>");
		 echo($num*$num);
		 echo("</td><td>");
		 echo($num*$num*$num);
		 echo("</td> </tr>");
		 
		 $num++;
	 }
  ?>
  </body>
</html>