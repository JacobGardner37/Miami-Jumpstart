<?php

session_start();

header('Location: '.'QA.php');

$host = 'group4sqlserver.mysql.database.azure.com';
$username = 'group4';
$password = 'Password1234';
$db_name = 'projects_201';

$conn = mysqli_init();

mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

echo 'it is ' . $_REQUEST['response'];

$query = 'INSERT INTO answers (answerer, question, answer, date) VALUES (';
$query = $query. "\"" . $_SESSION["email"]. "\", \"" . $_REQUEST['response'] . "\", \"". $_REQUEST['answer'] . "\" , CURRENT_TIMESTAMP);";
echo $query;
if (mysqli_query($conn, $query)) {
printf("IT WORKED\n");
} else { 
printf("ERROR");
}

//Close the connection
mysqli_close($conn);
?>
