<!DOCTYPE html>
<html lang='en'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content=''>
    <meta name='robots' content='all'>
	
	<style type="text/css">

	</style>
	
	<script>
		function hello(){
			var firstname = document.loginForm.fname;
			alert(firstname);
		}
	

	</script>
  </head>
  <body onload= "document.getElementById('showForms').style.visibility = 'hidden';">

		<form id="showForms" name="loginfrm" id="loginForm" action="loginSignUp.php" method="post">
			First Name: <input type="text" name="fname"><br> 
			Surname: <input type="text" name="sname"><br>
			E-mail: <input type="text" name="email"><br>
			Password: <input type="text" name="password"><br>
			Verify Password: <input type="text" name="verpassword">
			<input onclick="hello()" type="submit" name="signupsubmit" >
		</form>
	
		
  </body>
</html>