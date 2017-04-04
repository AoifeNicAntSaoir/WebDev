<?php
$config = parse_ini_file("../config.ini");

$port = $config['port'];
$username = $config['user'];
$database = $config['db'];

$dbcnx = mysqli_connect($port, $username, "", $database); 
//checkconnection
if (mysqli_connect_errno($dbcnx ))
{
echo "Failed to connect to MySQL: " .mysqli_connect_error();
exit();
}
else
{
	echo "success";
	exit();
}

?>