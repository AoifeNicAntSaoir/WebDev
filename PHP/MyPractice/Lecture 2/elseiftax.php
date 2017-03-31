<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  <?php
	  $income = 29600.1;
	  
	  if($income >=0 AND $income<=14800)
	  {
		echo "Tax Rate is 20%";
	  }
	  else if($income>=14800.01 AND $income<=29600)
	  {
		echo "Tax Rate is 42%";
	  }
	  else
	  {
		echo "Tax Rate is 50%";
	  }
  
  ?> 
  </body>
</html>