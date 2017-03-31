<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  <?php
	  $i=0;
	  
	  switch($i)
	  {
		case 1:
		{
			echo "Video cards range from €50 to €500";
			break;
		}
		
		case 2:
		{
			echo "LCD Monitors range from €200 to €400";
			break;
		}
		
		case 3:
		{
			echo "Intel Processors range from €100 to €1000";
			break;
		}
	  
		default:
		{
			 echo "We don't carry this product";
			 break;
		}
	  }
  
  ?>
  </body>
</html>