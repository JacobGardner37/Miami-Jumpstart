<?php

header('Location: '.'index.php');
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

if (count($_POST) == 0) die("NO POST DATA FOUND - STOPPING\n");


$FIELDS=array("name", "class", "email", "password");


//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$pass = $_REQUEST['password'];
$mail = $_REQUEST['email'];
$grad = $_REQUEST['class'];
$names = $_REQUEST['name'];

$query = "INSERT INTO user_accounts (email, name, password, class) VALUES (";
$query = $query . "\"" . $mail . "\", \"". $names ."\", \" " . $pass . "\", \"" . $grad . "\" );";

echo $query;
$_SESSION["email"] = $mail;
$_SESSION["name"] = $names;

// Run the create table query
if (mysqli_query($conn, $query)) {
printf("IT WORKED\n");
} else { 
printf("ERROR");
}

//Close the connection
mysqli_close($conn);
?>