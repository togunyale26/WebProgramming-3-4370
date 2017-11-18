<?php

session_start();

$username = $_SESSION['username'];
echo "<h1 align = $center>Account $username was successfully created!!!!</h1>";
echo "<h2 align = $center>Directing to login page...</h2>";

header("refresh:5;url=project2_loginpage.php");
?>