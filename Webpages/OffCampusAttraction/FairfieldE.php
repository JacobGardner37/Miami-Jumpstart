<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - FairfieldE</title>
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
                <img src="../OffCampusAttraction/Fairfield/FuncenterE.png" alt ="Fairfield Fun Center">
                <h2>Fairfield Fun Center</h2>
                <p>Fairfield Fun Center is located on Dixie Highway and is a great place to spend a warm day.
                     They have mini golf and batting cages for you to enjoy. 
                     It is a fun way for students to test their competitive spirit with their friends. 
                     <br>
                     <br>
                     Hours:
                        Monday - Thursday: 10am - 9pm
                        Friday - Saturday: 10am -10pm
                        Sunday: 10am - 8pm

                        <br>
                        <a href="https://www.fairfieldfuncenter.com/">Learn More</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Fairfield Fun Center";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Fairfield Fun Center" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Fairfield/JungleE.png" alt ="Jungle Jim's">
                <h2>Jungle Jim's</h2>
                <p>Jungle Jim's is a massive grocery store with products from all over the world. 
                    They have different sections based on each country with tons of whimsical displays throughout the store. 
                    It is also fun to just walk around in but try not to get lost.
                     <br>
                     <br>
                     Hours:
                        Sunday - Saturday: 8am - 10pm

                        <br>
                        <a href="https://junglejims.com/">Learn More</a>
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
		$query = "SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE \"%Jungle Jim's\";";
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
		$query = "SELECT * FROM reviews WHERE place_reviewed LIKE \"%Jungle Jim's\" ORDER BY date ASC;";
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
                <img src="../OffCampusAttraction/Fairfield/PetlandE.png" alt ="Petland">
                <h2>Petland</h2>
                <p>Petland Fairfield is located inside Jungle Jim's and allows any visitors to the store to play with puppies and other animals that they sell.
                     It is also a great place to purchase any needed supplies for your pet.
                     <br>
                     <br>                    
                        Hours:
                        Sunday - Saturday: 10am - 9pm
                        <br>
                        <a href="https://www.petlandfairfield.com/
                        ">Learn More</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Petland";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Petland" ORDER BY date ASC;';
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
                <img src="../OffCampusAttraction/Fairfield/ToyE.png" alt ="The Toy Department">
                <h2>Toy Department</h2>
                <p>The Toy Department is one of the largest toy stores in the United States. 
                    It offers the ability to buy and sell toys of any kind as well as pre order toys as well. 
                    It is a great place to explore on a rainy day.
                     <br>
                     <br>                    
                     Hours:
                     Monday - Saturday: 11am - 7pm
                     Sunday: 12pm - 5pm
                     
                        <br>
                        <a href="https://www.toydepartment.net/
                        ">Learn More</a>
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
		$query = 'SELECT ROUND(AVG(rating),2) FROM reviews WHERE place_reviewed LIKE "%Toy Department";';
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
		$query = 'SELECT * FROM reviews WHERE place_reviewed LIKE "%Toy Department" ORDER BY date ASC;';
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