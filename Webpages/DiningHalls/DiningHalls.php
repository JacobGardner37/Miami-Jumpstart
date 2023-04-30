<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - Dining Halls</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class ="logo">
            <a href = "../../" style="text-decoration: none; color : #cf2424"> <h1>Miami Jumpstart</h1> </a>

        </div>
            <div class="title">
                <h1> Dining Halls</h1>
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
		<?php
		if (isset($email)) {
		print('
                <li><a href="../../diningHallReview.html">Leave a Review</a></li>
        	');}
		?>    
	</ul>
        </nav>
        <section id="content">
            <div class="box">
                <img src="GardenD.png"alt="Garden Hall">
                <h2>Garden Commons</h2>
                <p>Garden Commons is conveniently located next to the Farmer School of Business and the East Quad dorms. It offers different stations ranging from made-to-order pasta, Indian cuisine, salad bar, American food, and Garden Market. Garden Market is a great place to visit on your way to and from class where you can grab snacks or coffee. 
                    <br>
                    <br>
                    95 N Patterson Avenue Oxford, Ohio 45056
                    
                    <br>
                    <br>
                    Hours:
                    Weekdays - 7:30am - 2:30pm, 5pm - 8pm
                    Weekends - 9am - 2pm, 5pm - 8pm
                    <br>
                    <br>
                    Garden Market:
                    Monday - Thursday - 11am - 8pm
                    Friday - 11am - 2pm
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Garden Commons";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Garden Commons" ORDER BY date ASC;';
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

		

            </div>
            <div class="box">
                <img src="MaplestreetD.png" alt="Maplestreet Station">
                <h2>Maplestreet Station</h2>
                <p>Maplestreet Commons is located across the street from Sorority Quad and adjacent to MET Quad. This dining hall is usually the busiest because it is surrounded by more dorms and academic buildings. Stations at this dining hall include made-to-order pasta, salad bar, dessert station, southwest, stir fry, allergen station, and American food. Commons Express is also located just next door and allows students the option to grab lunch on the way to class while still using a swipe from their meal plan.
                    <br>
                    <br>
                    571 Maple Street Oxford, Ohio 45056
                    <br>
                    <br>
                    Hours:
                    Weekdays - 7:30am - 8pm
                    Weekends - 9am - 2pm, 5pm - 8pm
                    <br>
                    <br>
                    Commons Express:
                    Monday - Thursday - 11am - 8pm
                    Friday - 11am - 2pm
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Maplestreet Commons";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Maplestreet Commons" ORDER BY date ASC;';
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
                <img src="MartinD.png" alt="Martin Dining">
                <h2>Martin Dining</h2>
                <p>Martin Commons is located across the street from all the major athletic facilities and in the heart of North Quad. With its sports themed interior it offers stations such as traditional comfort food, pizza and pasta, breakfast area, and salad bar. Scoreboard is also located next door and students can order meals ahead as well as grab any snacks/convenience items they could need. 
                    <br>
                    <br>
                    5397 Bonham Road Oxford, Ohio 45056
                    <br>
                    <br>
                    Hours:
                    Weekdays - 7:30am - 2:30pm, 5pm - 8pm
                    Weekends - 9am - 2pm, 5pm - 8pm
                    <br>
                    <br>
                    Scoreboard:
                    Daily - 10am - 10pm
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Martin Commons";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Martin Commons" ORDER BY date ASC;';
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
                <img src="WesternD.png" alt="Western Dining">
                <h2>Western Dining</h2>
                <p>Western Commons is the most newly built dining hall on campus with a focus on sustainability. This dining hall offers stations that include Mediterranean food, international cuisine, allergen station, American food, salad bar, and all rotating kinds of pizza. Greystone Market is located within Western Commons and serves as a smaller grocery store for students who live on Western Campus. 
                    <br>
                    <br>
                    480 Western Drive Oxford, Ohio 45056
                    <br>
                    <br>
                    Hours:
                    Weekdays - 7:30am - 2:30pm, 5pm - 8pm
                    Weekends - 9am - 2pm, 5pm - 8pm
                    <br>
                    <br>
                    Greystone Market:
                    Monday - Thursday - 11am - 8pm
                    Friday - 11am - 2pm

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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Western Commons";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Western Commons" ORDER BY date ASC;';
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
           
        </section>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>
