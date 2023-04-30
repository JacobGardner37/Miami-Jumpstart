<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - FairfieldF</title>
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
                <li><a href="FairfieldF.php">Food</a></li>
                <li><a href="FairfieldE.php">Entertainment</a></li>
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
                <img src="../OffCampusAttraction/Fairfield/TauqeriaF.png" alt="Taqueria Mercado">
                <h2>Taqueria Mercado</h2>
                <p> Taqueria Mercado is an authentic Mexican restaurant in Fairfield along Dixie Highway. T
                    hey have breakfast and lunch specials as well as salads, soup, fajitas, burritos, and tacos.
                     It is a family-owned-and-operated restaurant.
                    <br>
                    <br>
                    Hours:
                    Sunday - Saturday: 10am - 9:30pm                    
                    <br>
<a href ="https://www.taqueriamercado.com/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Taqueria Mercado";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Taqueria Mercado" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Fairfield/PhoF.png" alt="Pho Cincy">
                <h2>Pho Cincy</h2>
                <p> Pho Cincy is an authentic Vietnamese restaurant that specializes in fried rice, banh mi, pho, and traditional Vietnamese dishes.
                     It is a great place to go for someone looking to try new foods from other cultures.
                    <br>
                    <br>             
                    Hours:
                    Sunday - Saturday: 11am - 8pm
                    <br>
<a href ="https://www.phocincy.net/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Pho Cincy";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Pho Cincy" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Fairfield/WingsF.png" alt="Wings & Rings">
                <h2>Wings & Rings</h2>
                <p>Wings & Rings is a chain restaurant in the area but offers loaded fries, specialty onion rings, nachos, dips, and wings with different sauces and spice levels. 
                    It is a great place to go on the weekends when you are getting tired of dining hall food.
                    <br>
                    <br>
                    Hours:
                    Monday - Thursday: 11am - 11pm,
                    Friday - Saturday: 11am - 12am,
                    Sunday: 11am - 10pm                    
                <br>
<a href ="
https://www.wingsandrings.com/locations/dixie-highway-45014?utm_source=google&utm_medium=local&utm_campaign=google-local
">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Wings & Rings";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Wings & Rings" ORDER BY date ASC;';
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