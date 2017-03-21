<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    
  </head>
  <body>

<?php
                                   //define variables for radio button status
$male_status = 'unchecked';       //keeps the radio button checked when submit is clicked
$female_status = 'unchecked';


if (isset($_POST['Submit1']))        // if > isset > post
{
$selected_radio = $_POST['gender'];    

  if ($selected_radio == 'male')      //echos out male gender & keeps radio button checked
  {
    echo $selected_radio;
    $male_status = 'checked';
  }
  
  else if ($selected_radio == 'female')   //echos out female gender & keeps radio button checked 
  {
    echo $selected_radio;
    $female_status = 'checked';
  }

}
   
?>
  
  <form name='form1' method='post' action='radioButtons.php'>
 
  <input type ='radio' name='gender' value ='male' <?php echo $male_status; ?> >M   <!-- open php tag & echo out status -->
  <input type ='radio' name='gender' value ='female' <?php echo $female_status; ?> >F
  <input type = 'Submit' Name = 'Submit1' VALUE = 'Submit'>
  
  </form>
  
  </body>
</html>