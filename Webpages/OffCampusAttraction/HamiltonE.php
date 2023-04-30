<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - Hamilton</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class ="logo">
            <a href = "../../" style="text-decoration: none; color : #cf2424"> <h1>Miami Jumpstart</h1> </a>

        </div>
            <div class="title">
                <h1>Off Campus Areas</h1>
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
                <li><a href="HamiltonF.php">Food</a></li>
                <li><a href="HamiltonE.php">Entertainment</a></li>
		<?php
		if (isset($email)) {
		print('<li><a href="../../OffCampusReviews.html"> Leave a Review </a></li>');
		}
		?>

                <li><a href="OffCampusAttractions.php">Back</a></li>
                
            </ul>
        </nav>
        <section id="content">
            <div class="box">
                <img src="../OffCampusAttraction/Hamilton/PinballE.png" alt="Pinball Garage">
                <h2>Pinball Garage</h2>
                <p>Pinball Garage is a fun place to hang out with friends in downtown Hamilton. 
                    It is a large arcade where people can play most pinball and arcade games while also enjoying something to eat with family and friends.
                    <br>
                    <br>
                    Hours:
Tuesday - Thursday: 12 - 10pm,
Friday - Saturday: 12pm - 1am,
Sunday: 12 - 8pm,
Closed Monday
<br>
<a href ="https://pinball-garage.square.site/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Pinball Garage";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Pinball Garage" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Hamilton/HIPE.png" alt ="HIP">
                <h2>HIP Boutique</h2>
                <p> HIP Boutique is a great place to shop with friends after a long day of class. 
                    They offer clothing, accessories, and home accessories. 
                    <br>
                    <br>
                    Hours:
Tuesday - Thursday: 11am -6pm,
Friday: 11am - 5pm,
Saturday: 11am - 4pm,
Closed Sunday and Monday
<br>
<a href="https://www.downtownhamiltonohio.com/downtown-hamilton-directory/hip-boutique">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%HIP Boutique";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%HIP Boutique" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Hamilton/MainstreetE.png" alt ="Mainstreet Vinyl">
                <h2>Mainstreet Vinyl</h2>
                <p>Main Street Vinyl is a record shop in downtown Hamilton that buys and sells new and used records as well as CDs and tapes. 
                    IT is a great place to spend an afternoon and fun to go to with friends and family.
                    <br>
                    <br>
                    Hours:
Wednesday - Saturday: 11am - 6pm,
Closed Sunday, Monday, Tuesday
<br>
<a href ="https://mainstvinyl.com/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Minstreet Vinyl";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Mainstreet Vinyl" ORDER BY date ASC;';
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
