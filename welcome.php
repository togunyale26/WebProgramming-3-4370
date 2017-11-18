
<?php

session_start();

$host ='localhost';
$user = 'jpham4';
$pass ='jpham4';
$db = 'jpham4';

$center = "center";

$username = $_SESSION['username'];
$level_clear = $_SESSION['clearance'];

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->close(); 

if($level_clear == 'Guest'){
	echo "<h1 align = $center > Welcome, User </h1>";
	echo "<h2 align = $center > Loggen in as $level_clear  </h2>";
}else{
	echo "<h1 align = $center > Welcome, $username </h1>";
	echo "<h2 align = $center > Loggen in as $level_clear  </h2>";
	}


?>