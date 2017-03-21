<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>
  
  <?php
 function newSavings(&$save,$interest=0.2)
 {
 $save = ($save *$interest) + $save; //1200
 }
  
 $save =1000;
 newSavings($save,0.2);
 
  echo "Your new savings amount "  .$save; 
  ?>
 
  </body>
</html>