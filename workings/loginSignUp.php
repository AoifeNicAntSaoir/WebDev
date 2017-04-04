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
	<script type="text/javascript">
	
	</script>
  </head>
  <body>
	<?php

		$firstname = trim($_POST['firstname']);
		$surname = trim($_POST['surname']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		
		if($firstname == '' or $surname == '' or $email == '' or $password == '')
		{
			echo('Empty Fields');
			exit();
		}
		$
	?>
  </body>
</html>