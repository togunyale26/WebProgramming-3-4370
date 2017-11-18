<?php require_once ("user_db_connection.php");
$db_link = db_connect("jpham4");
session_start();

$login_user = $_POST['username'];
$login_pass = $_POST['password'];
$login_clearance;
$eval_clearance;
$logged;

// Get the table 
//$sql = "SELECT id,username, password, clearance FROM login";
$sql = "SELECT username, password FROM login WHERE username = '".$login_user."'  AND  password = '".$login_pass."'";
$result = mysql_query($sql);
//echo $login_user." <br />";
//echo $sql . "<br />";

if( mysql_num_rows($result) > 0 )
{
	$sql =  "SELECT clearance FROM login WHERE username = '".$login_user."'";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	

	$_SESSION['logged']=true;
	$_SESSION['username'] = $login_user;
	$_SESSION['clearance'] = $row["clearance"];
	header("refresh:1;url=project2welcome.php");
	//print "welcome";
}
else
{
	$_SESSION['logged']=false;
	header("Location:NoAccount.php");
	//print "error";
}


?>