<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>

<?php
 $lower_status = 'unchecked';
 $higher_status = 'unchecked';




?>  
  
  
  
  
  
  
  
<form name='form1' method='post' action='wageForm.php'>
  Wage <input type='text' name='wage' value='<?php echo $wage; ?>' ><br><br>
  Tax Rate: <br>
  <input type ='radio' name='taxrate' value ='lower' <?php echo $lower_status; ?> >22%  > 
  <input type ='radio' name='taxrate' value ='heigher' <?php echo $higher_status; ?> >42%
  <input type = 'Submit' Name = 'Submit1' VALUE = 'Submit'>

</form>
  
  </body>
</html>