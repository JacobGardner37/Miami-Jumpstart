<?php

session_start();

$host = 'group4sqlserver.mysql.database.azure.com';
$username = 'group4';
$password = 'Password1234';
$db_name = 'projects_201';

$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$query = 'SELECT * FROM dorm_reviews order by date';

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    	print '<p> Review by ' . $row["user"] . '</p>';
	print '<h1>' . $row["review"] . '</h1>';
	print '<h1>' .$row["rating"] . " stars" .  '</h1>';

}
} else {
  echo "this is bad";
}

mysqli_close($conn);
?>