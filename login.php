<?php

session_start();

function getVar($name) {
	if (!isset($_REQUEST[$name])) {
		return "";
	}
	else return htmlspecialchars($_REQUEST[$name]);
}



$host = 'group4sqlserver.mysql.database.azure.com';
$username = 'group4';
$password = 'Password1234';
$db_name = 'projects_201';

$FIELDS=array("email", "password");

$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$pass = $_REQUEST['password'];
$mail = $_REQUEST['email'];

$query = 'SELECT * FROM user_accounts WHERE email LIKE "%'.$mail.'" and password LIKE "%'.$pass.'"';
echo $query;

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    	$_SESSION["email"] = $row["email"];
	$_SESSION["name"] = $row["name"];
  	echo $row["email"]."DID IT";
}
} else {
  echo "INCORRECT USERNAME OR PASSWORD";
}

mysqli_close($conn);

if ($_SESSION["email"] != NULL) { 
header('Location: '.'index.php');
} else {
header('Location: '.'loginError.html');
}


?>
