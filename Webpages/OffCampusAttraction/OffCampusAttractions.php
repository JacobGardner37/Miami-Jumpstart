<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - Off-Campus Attractions</title>
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
			print('<a href="../../../logout.php" style="color: white; text-decoration: none; text-align : right"> <h2>Log out <h2></a>');
		} else {
			print('<a href="../../../createaccount.html" style="color: white; text-decoration: none; text-align : right"> <h2>Login</h2> </a>');
		}

	?>
	</div>
    </header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="../../">Back To Home</a></li>
		<?php
		if (isset($email)) {
		print('<li><a href="../../OffCampusReviews.html"> Leave a Review </a></li>');
		}
		?>
            </ul>
        </nav>
        <section id="content">
           
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="HamiltonF.php">
                    <img src="Hamilton.jpg" alt="Hamilton">
			<h2> Hamilton </h2>
                  </a>
		  
                  <div class="shadow-overlay"></div>
                </center>
              </div>
            </div>
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="FairfieldF.php">
                    <img src="Fairfield.jpg" alt="Fairfield">
			<h2> Fairfield </h2>
                  </a>
		
                  <div class="shadow-overlay"></div>
                </center>
              </div>
            </div>
         
           
           
        </section>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>
