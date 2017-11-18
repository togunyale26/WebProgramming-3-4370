<?php require_once ("user_db_connection.php");
$db_link = db_connect("jpham4");
session_start();


$newuser = $_POST["username"];
$newpass = $_POST["password"];
$clearcode = $_POST["code"];

$checked = 0;
$chedcked_B = 0;


$sql = "SELECT id,username, password, clearance FROM login";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
	if($row["username"] == $newuser){
		$checked = 1;
		break;
	}       
}

if($checked == 0){

	$sql = "SELECT * FROM clearancecodes";
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()) {
		if($row["code"] == $clearcode){
			$chedcked_B = $row["code"];
			break;
		}  
	}
	if($chedcked_B == "11111"){
		$chedcked_B = 0;
	}

	else if ($chedcked_B == "22222") {
		$chedcked_B = 1;
	} 
	else{
		$chedcked_B = 2;
	}    
	

	$sql = "INSERT INTO login (username, password, clearance)
	VALUES ('$newuser', '$newpass', '$chedcked_B')";

	if($conn->query($sql) == TRUE){
		$conn->close(); 
		echo "New Record created";
		$_SESSION["username"]=$newuser;
		header("Location:accountCreated.php");
	} else{
		$conn->close(); 
		echo "Error!!";
		
	}

}







?>
