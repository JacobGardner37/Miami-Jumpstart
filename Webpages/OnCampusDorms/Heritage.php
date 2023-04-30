<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - Heritage</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class ="logo">
            <a href = "../../" style="text-decoration: none; color : #cf2424"> <h1>Miami Jumpstart</h1> </a>
        </div>
            <div class="title">
                <h1> Dorms</h1>
            </div>
	<div>
	<?php
		$email = $_SESSION["email"];
		if (isset($email)) {
			print('<a href="../../logout.php" style="color: white; text-decoration: none; text-align : right"> <h2>Log out <h2></a>');
		} else {
			print('<a href="../../createaccount.html" style="color: white; text-decoration: none; text-align : right"> <h2>Login</h2> </a>');
		}

	?>
	</div>
        
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="North.php">North</a></li>
                <li><a href="South.php">South</a></li>
                <li><a href="East.php">East</a></li>
                <li><a href="Western.php">Western</a></li>
                <li><a href="Academic.php">Academic</a></li>
                <li><a href="Heritage.php">Heritage Commons</a></li>
		<?php 
		if (isset($email)) {
		print('
		<li><a href = "../../dormReview.html">Leave a Review</a></li>
		');}
		?>

            </ul>
        </nav>
        <section id="content">
            <div class="box">
                <img src="../Dorms/South/FisherH.png" alt ="Heritage Commons">
                <h2>Heritage Commons</h2>
                <p>Heritage Commons is open to all students except freshman and has 4 person apartment style rooms. 
                    Each apartment has 2 bathrooms as well as a large recreation space for all residents to utilize. 
                    It is conveniently located next to the Rec and Goggin Ice Center as well as being on the campus bus system. 
                    <br> <br>
                    Rating: 
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Heritage Commons";';
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_row($result);
		print $row[0] . ' / 5.00';
		mysqli_close($conn);
		print ('<br><br> Reviews: <br> <div style="overflow: auto; max-height: 200px;">');
		
		$conn = mysqli_init();
		mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
		if (mysqli_connect_errno($conn)) {
				die('Failed to connect to MySQL: '.mysqli_connect_error());
		}
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Heritage Commons" ORDER BY date ASC;';
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
    			print '<h4> Review by: ' . $row["user"] . ' on ' . $row["date"] .'</h4>';
			print '<p>' . $row["rating"] .  ' / 5 stars' . '</p>';
			print '<p>' . $row["review"] . '</p>';

		}
		}
		
		
		print('</div>');
		?>


                </p>
            </div>
            <div class="box">
                <h2>Names of Apartments</h2>
                <p>
                    Blanchard House -
805 South Campus Avenue Oxford, OH 45056
<br>
<br>
Fisher Hall -
801 South Campus Avenue Oxford, OH 45056
<br>
<br>
Logan Lodge -
800 South Oak Street Oxford, OH 45056
<br>
<br>
Pines Lodge -
803 South Campus Avenue Oxford, OH 45056
<br>
<br>
Reid Hall -
806 South Oak Street Oxford, OH 45056
<br>
<br>
Tallawanda Hall -
804 South Oak Street Oxford, OH 45056


                </p>
                
            </div>
            
            
        </section>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>