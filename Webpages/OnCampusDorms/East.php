<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - East Quad</title>
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
                <img src="../Dorms/East/CollinsH.png" alt ="Collins Hall">
                <h2>Collins Hall</h2>
                <p>Collins Hall is open for both freshman and sophomore students and offers renovated single, double, and triple rooms.
                     It is located next to Garden Commons and across from Marcum Hotel. 
                    It is also a short walk from Farmer School of Business and has tennis courts located at the end of the Quad. 
                    <br>
                    <br>
                    31 North Fisher Drive Oxford, OH 45056
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Collins Hall";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Collins Hall" ORDER BY date ASC;';
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
                <img src="../Dorms/East/DorseyH.png" alt="Dorsey Hall">
                <h2>Dorsey Hall</h2>
                <p>Dorsey Hall is the closest to Farmer School of Business and other academic buildings.
                     It is also in front of Cook Field which is a great place for students to run, throw a ball, or lay out in the sun.
                      It is home to both freshman and sophomore students in single, double, and triple rooms. 
                    Dorsey also has Dorsey Market located next to it so students can grab snacks on the go.
                <br>
                <br>
                900 East High Street Oxford, OH 45056

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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Dorsey Hall";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Dorsey Hall" ORDER BY date ASC;';
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
                <img src="../Dorms/East/McBrideH.png" alt="McBride Hall">
                <h2>McBride Hall</h2>
                <p>McBride is home to many freshman students and the place for the Entrepreneurship LLC. It has renovated single, double, and triple rooms. 
                    There is a large parking lot next to it that students can utilize. 
                    It has a large study room/lounge on the first floor that students can enjoy with their friends. 
                <br>
                <br>
                11 North Fisher Drive Oxford, OH 45056
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%McBride Hall";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%McBride Hall" ORDER BY date ASC;';
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
                <img src ="../Dorms/East/SymmesH.png" alt="Symmes Hall">
                <h2>Symmes Hall</h2>
                <p>Symmes Hall is right next to Garden Commons and across from Farmer School of Business. 
                    It is perfect for business students and has a large green space for students to relax outside. 
                    It has a large parking lot behind it as well as Conrad Formal Gardens.
                     It is open to both freshman and sophomore with renovated single, double, and triple rooms.
                    <br>
                    <br>
                    801 East Withrow Street Oxford, OH 45056
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Symmes Hall";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Symmes Hall" ORDER BY date ASC;';
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
                <img src="../Dorms/East/DennisonH.png" alt="Dennison Hall">
                <h2>Dennison Hall</h2>
                <p>Dennison is the largest dorm on East Quad and is the closest to tennis and basketball courts. 
                    It also has a large parking lot connected to the building for students to use on the weekends.
                     Dennison houses freshman and sophomore students in renovated single, double, and triple rooms. 
                    It has a large study area attached to it as well.
                <br>
                <br>
                21 North Fisher Drive Oxford, OH 45056
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Dennison Hall";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Dennison Hall" ORDER BY date ASC;';
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
            
        </section>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>
