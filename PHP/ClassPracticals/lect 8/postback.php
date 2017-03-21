<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
   
  <?php
  
if(isset($_POST['submit1'])) {   
   
$username = $_POST['username'];
      
if($username == "letmein")
{
echo "Welcome back, friend";  
}
else
{
      echo "You're not a member of this site";
}
   }
   
  ?>
  
  </head>
  <body>
  <form name="form1" method="post" action="basicForm.php">
  
  <input type="text" value="<?php echo $username;?>" name="username">
  <input type="submit" name="submit1" value="login">
  
  </form>
  </body>
</html>