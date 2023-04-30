<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - Q&A</title>
    <link rel="stylesheet" type="text/css" href="QA.css">
</head>
<body>
    <header>
        <div class ="logo">
        <a href = "index.php" style="text-decoration: none; color : #cf2424"> <h1>Miami Jumpstart</h1> </a>
    </div>
        <div class="title">
            <h1> Q & A</h1>
        </div>
    <div>
	<?php
		$email = $_SESSION["email"];
		if (isset($email)) {
			print('<a href="logout.php" style="color: white; text-decoration: none; text-align : right"> <h2>Log out <h2></a>');
		} else {
			print('<a href="createaccount.html" style="color: white; text-decoration: none; text-align : right"> <h2>Login</h2> </a>');
		}

	?>
	</div>
    </header>
    <div class="container" style="text-align : left">
        <nav>
            <ul>
		<?php 
		if (isset($email)) {
		print('
		<li><a href = "question.html">Leave a Question</a></li>
		');}
		?>
            </ul>
        </nav>
        <div>
	      <?php

$host = 'group4sqlserver.mysql.database.azure.com';
$username = 'group4';
$password = 'Password1234';
$db_name = 'projects_201';

$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$query = 'SELECT * FROM questions ORDER BY date ASC';

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
    	print '<div id = "question"><p> Asked by ' . $row["asker"] . ' on ' . $row["date"] .  '</p>';
	print '<h2 class = "questions">' . $row["question"] . '</h2>';
	if (isset($_SESSION["name"])) {
	print '<form method="POST" action="postAnswer.php" id="stripe-login">';
	print '<input type="hidden" id="response" name="response" value="' . $row["question"] . '">';
	print '<textarea rows="4" cols="50" placeholder="Want to answer this question? Type here!" name="answer" id="answer" required></textarea>';
	print '<br>';
	print '<input type="submit" name="submit" value="Submit Answer" class="submit">';
	print '</form>';
	}
	$conn2 = mysqli_init();
	mysqli_real_connect($conn2, $host, $username, $password, $db_name, 3306);
	if (mysqli_connect_errno($conn2)) {
	die('Failed to connect to MySQL: '.mysqli_connect_error());
	}
	$query2 = 'SELECT * FROM answers WHERE question like "%'.$row["question"].'"';
	$result2 = mysqli_query($conn2, $query2);
	if (mysqli_num_rows($result2) > 0) {
		print('<div class = "answer">');
		while($row2 = mysqli_fetch_assoc($result2)) {
    			print '<p> Answer by:' . $row2["answerer"] . '</p>';
			print '<h4 class="theAnswer">' . $row2["answer"] . '</h4>';

		}
		print('</div>');
	} 
	print("</div><br><br>");

}
} else {
  echo "this is bad";
}
mysqli_close($conn);
?>


        </div>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>
