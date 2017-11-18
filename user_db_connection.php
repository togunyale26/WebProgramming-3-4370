<?php function db_connect($db_name)
{
	$hostname = "localhost:3306";
	$username = "jpham4";
	$password = "jpham4";
	$db_link = mysql_connect($hostname, $username, $password)
		or die("Could not connect to $hostname");
	mysql_select_db($db_name)
		or die("Could not select database $db_name");

	return $db_link;
} ?>