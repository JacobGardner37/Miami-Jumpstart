<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami University - Central Quad</title>
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
                <img src="../Dorms/Central/HamiltonH.png" alt="Hamilton Hall">
                <h2>Hamilton Hall</h2>
                <p>Hamilton Hall offers large meeting spaces for the sororities on campus and is home to sophomore girls.
                     It has renovated single, double, and triple rooms while being across the street from Phillips Hall and Goggin Ice Center. 
                    Hamilton Hall has separate wings for each sorority as well so the girls can live within close proximity to each other.
                    <br>
                    <br>
                    401 South Oak Street Oxford, OH 45056

                </p>
            </div>
            <div class="box">
                <img src="../Dorms/Central/MacCrackenH.png" alt="MacCracken Hall">
                <h2>MacCracken Hall</h2>
                <p>MacCracken Hall is one of the most photographed buildings on campus and houses sophomore sorority girls.
                     It is located in the heart of Central Quad and has Market Street at MacCracken attached to it. 
                    It offers renovated single, double, and triple rooms.
                    <br>
                    <br>                 
                    500 Center Drive Oxford, OH 45056
                </p>
            </div>
            <div class="box">
                <img src="../Dorms/Central/MinnichH.png" alt="Minnich Hall">
                <h2>Minnich Hall</h2>
                <p>Minnich Hall is home to sophomore girls in a sorority and offers renovated single, double, and triple rooms. 
                    It opens up into Central Quad which is a huge greenspace where Miami student organizations host events or students like to relax with their friends.
                     It also has large meeting rooms for the sororities as well.
                     <br>
                     <br>
                     400 South Maple Avenue Oxford, OH 45056

                     </p>
            </div>
            <div class="box">
                <img src="../Dorms/Central/RIchardH.png" alt="Richard Hall">
                <h2>Richard Hall</h2>
                <p>Richard Hall houses sophomore girls in sororities and offers renovated single, double, and triple rooms. 
                    It has a large lobby area that has been completely updated. 
                    Richard is located near Market Street at MacCracken as well as being across the street from Goggin Ice Center.
                    <br>
                    <br>
                    501 South Oak Street Oxford, OH 45056
                </p>
            </div>
            <div class="box">
                <img src="../Dorms/Central/ScottH.png" alt="Scott Hall">
                <h2>Scott Hall</h2>
                <p>Scott Hall is another dorm for sophomore girls in a sorority. It has renovated single, double, and triple rooms with large open common areas.
                     Scott is located across the street from Maplestreet Commons and has large meeting rooms for the different sororities to utilize. 
                     <br>
                     <br>
                     500 South Maple Avenue Oxford, OH 45056
                    </p>
            </div>
        </section>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>