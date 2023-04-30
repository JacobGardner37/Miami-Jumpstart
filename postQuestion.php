<?php

session_start();


header('Location: '.'QA.php');


if ($_SESSION["email"] == NULL) { 
 echo 'fuck';
}

if (count($_POST) == 0) die("NO POST DATA FOUND - STOPPING\n");

$FIELDS=array("name", "class", "email", "password");


$host = 'group4sqlserver.mysql.database.azure.com';
$username = 'group4';
$password = 'Password1234';
$db_name = 'projects_201';

$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$question = $_REQUEST['question'];

$query = "INSERT INTO questions (asker, question, date) VALUES (";
$query = $query . "\"" . $_SESSION["name"] . "\", \"" . $question . "\" , CURRENT_TIMESTAMP);";

echo $query;

if (mysqli_query($conn, $query)) {
printf("IT WORKED\n");
} else { 
printf("ERROR");
}

//Close the connection
mysqli_close($conn);
?>



