<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - HamiltonF</title>
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
                <img src="../OffCampusAttraction/Hamilton/BillyYanksF_1.png" alt ="Billy Yanks">
                <h2>Billy Yanks</h2>
                <p>Billy Yanks is located in downtown Hamilton and is a great restaurant to go to with friends and family. 
                    They offer an extensive menu with salads, burgers, sandwiches, and house specials.
                     The restaurant is named after Union Soldiers in the Civil War.
                     <br>
                     <br>
                     Hours:
                        Monday - Thursday: 4-10pm,
                        Friday - Saturday: 11am - 10pm,
                        Closed Sunday
                        <br>
                        <a href="https://billyyanks.com/">Learn More</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Billy Yanks";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Billy Yanks" ORDER BY date ASC;';
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
    			print '<h4> Review by: ' . $row["user"] . ' on ' . $row["date"] .'</h4>';
			print '<p>' . $row["rating"] .  ' / 5 stars' . '</p>';
			print '<p>' . $row["review"] . '</p>';

		}
		}
		
		
		print('</div>');
		?> </p>

                </p>
            </div>
            <div class="box">
                <img src="../OffCampusAttraction/Hamilton/FretboardF.png" alt ="Fretboard">
                <h2>Fretboard & Public Brewing House</h2>
                <p> Fretboard Brewing & Public House is a great restaurant for families and is great for college students. 
                    They offer a menu featuring pizzas, salads, pasta, burgers, wraps, and specialties.
                     They also have a large beer menu.
                <br>
                <br>
                Hours:
                Sunday - Thursday: 11am - 9pm,
                Friday - Saturday: 11am - 10pm
                <br>
                <a href="https://www.fbpublichouse.com/">Learn More</a>

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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Fretboard";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Fretboard" ORDER BY date ASC;';
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
    			print '<h4> Review by: ' . $row["user"] . ' on ' . $row["date"] .'</h4>';
			print '<p>' . $row["rating"] .  ' / 5 stars' . '</p>';
			print '<p>' . $row["review"] . '</p>';

		}
		}
		
		
		print('</div>');
		?> </p>

                </p>
            </div>
            <div class="box">
                <img src="../OffCampusAttraction/Hamilton/TruewestF.png" alt ="True West">
                <h2>True West Coffee</h2>
                <p>
                    True West is a fun and trendy coffee shop located in downtown Hamilton and is a great place for students to study off campus or just meet up with friends. 
                    They also have a large study room upstairs that students can utilize.
                
                <br>
                <br>
                Hours:
                Monday - Friday: 6:30am - 6:30pm,
                Saturday: 8am - 6:30pm,
                Sunday: 8am - 5pm
                <br>
                <a href="https://www.truewestcoffee.com/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%True West Coffee";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%True West Coffee" ORDER BY date ASC;';
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
    			print '<h4> Review by: ' . $row["user"] . ' on ' . $row["date"] .'</h4>';
			print '<p>' . $row["rating"] .  ' / 5 stars' . '</p>';
			print '<p>' . $row["review"] . '</p>';

		}
		}
		
		
		print('</div>');
		?> </p>

                </p>

            </div>
            <div class="box">
                <img src="../OffCampusAttraction/Hamilton/VillageparlorF.png" alt ="Village Parlor">
                <h2>Village Parlor</h2>
                <p>The Village Parlor is a diner style restaurant that offers salad, soups, sandwiches.
                     It is a great place to visit given the theme of the restaurant and has had many historical figures and celebrities visit.
                
                <br>
                <br>
                Hours:
Tuesday - Thursday: 2:30 - 8:30pm,
Friday: 2:30 - 9pm,
Saturday: 12:30 - 9pm,
Sunday: 2:30 - 8pm,
Closed Sunday
<a href ="https://www.villageparlor.com/">Learn more</a>

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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Village Parlor";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Village Parlor" ORDER BY date ASC;';
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
    			print '<h4> Review by: ' . $row["user"] . ' on ' . $row["date"] .'</h4>';
			print '<p>' . $row["rating"] .  ' / 5 stars' . '</p>';
			print '<p>' . $row["review"] . '</p>';

		}
		}
		
		
		print('</div>');
		?> </p>

</p>
            </div>
            <div class="box">
                <img src="../OffCampusAttraction/Hamilton/SmoochiesF.png" alt ="Smoochies">
                <h2>Smoochies Boba & Crepes</h2>
                <p>Smoochies Boba & Crepes offers sweet and savory crepes as well as smoothies, milk tea, and fruit tea. 
                    It is one of the only restaurants in the area to offer these items and is a great place to go for brunch with friends.
                    <br>
                    <br>
                    Hours:
Monday - Thursday: 11am - 8pm,
Friday - Saturday: 11am - 9pm
Sunday: 11am - 6pm
<br>
<a href="http://places.singleplatform.com/smoochies-boba--crepes/menu?ref=google">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Smoochies Boba & Crepes";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Smoochies Boba & Crepes" ORDER BY date ASC;';
		$result = mysqli_query($conn, $query);
		if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
    			print '<h4> Review by: ' . $row["user"] . ' on ' . $row["date"] .'</h4>';
			print '<p>' . $row["rating"] .  ' / 5 stars' . '</p>';
			print '<p>' . $row["review"] . '</p>';

		}
		}
		
		
		print('</div>');
		?> </p>

                </p>
            </div>
            <div class="box">
                <img src="../OffCampusAttraction/Hamilton/MunicipalF.png" alt ="Municipal">
                <h2>Municipal Brew Works</h2>
                <p>Municipal Brew Works is a large brewery in downtown Hamilton located in an old historic building. 
                    They have tons of beers and seltzers on tap as well as a large patio that can be used for events.
                    <br>
                    <br>
                    Hours: 
Monday - Thursday: 3 - 10pm,
Friday: 2 - 11pm,
Saturday: 12 - 11pm,
Sunday: 12 - 8pm
<br>
<a href="https://www.municipal.beer/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Municipal Brew Works";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Municipal Brew Works" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Hamilton/Lounge24F.png" alt ="Lounge 24">
                <h2>Lounge 24</h2>
                <p> Lounge 24 is a vintage bar that offers craft beers, wines, and specialty cocktails. 
                    They have many live music events and have indoor and outdoor seating for people to enjoy the weather.
                     The bar sits right in the heart of the old courthouse square and has a beautiful setting.
                     <br>
                     <br>
                     Hours:
Sunday, Monday, Wednesday, Thursday: 4 - 11pm,
Friday - Saturday: 4pm - 2:30am,
Closed Tuesday
<a href="https://lounge24on2nd.com/">Learn more</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Lounge 24";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Lounge 24" ORDER BY date ASC;';
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
