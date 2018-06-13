<?php
//connect to database from Clickonology
// $link = mysql_connect('hostname', 'username', '*password*', 'database');

$mysqli = mysqli_connect("clickonology.ipagemysql.com", "acclobo", "acc10b0d0tc0m", "acclobodb");

if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
} else {
	printf("Your Clickonology host information: %s\n", mysqli_get_host_info($mysqli));
}
?>
