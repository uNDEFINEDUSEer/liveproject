<?php
$host = "sql14.mysqldatabase.com";
$user = "sql9366803";
$password = "yahipasswordhai";
$db_name = "sql12595992";
$clean = mysqli_connect($host, $user, $password, $db_name,);
if (mysqli_connect_errno()) {
	die("Failed to Connect with Mysql" . mysqli_connect_error());
}
?>
