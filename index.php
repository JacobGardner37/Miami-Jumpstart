<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - Home</title>
    <link rel="stylesheet" type="text/css" href="homeFiles/home.css">
</head>
<body>
    <header>
        <div class ="logo">
            <h1>Miami Jumpstart</h1>
        </div>
	<div class ="title">
 	  <h1><u>Launch Pad</u></h1>
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
    <div class="container">
        <section id="content">
            <div class="box">
	      <div class="image-container">
		<center>
		  <a href="Webpages/OnCampusDorms/North.php">
		    <img src="homeFiles/OnCampusHousing.jpg" alt="On-Campus Housing">
		  </a>
		  <div class="shadow-overlay"></div>
		</center>
	      </div>
            </div>
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="This Week On Campus/ThisWeek.php">
                    <img src="homeFiles/ThisWeek.jpg" alt="This Week On Campus">
                  </a>
                  <div class="shadow-overlay"></div>
                </center>
              </div>
            </div>
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="Webpages/OffCampusHousing/RealEstate.php">
                    <img src="homeFiles/OffCampusHousing.jpg" alt="Off-Campus Housing">
                  </a>
                  <div class="shadow-overlay"></div>
                </center>
              </div>
            </div>
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="Webpages/DiningHalls/DiningHalls.php">
                    <img src="homeFiles/OnCampusDining.jpg" alt="On-Campus Dining">
                  </a>
                  <div class="shadow-overlay"></div>
                </center>
              </div>
            </div>
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="QA.php">
                    <img src="homeFiles/QandA.jpg" alt="Q & A">
                  </a>
                  <div class="shadow-overlay"></div>
                </center>
              </div>
            </div>
            <div class="box">
              <div class="image-container">
                <center>
                  <a href="Webpages/OffCampusAttraction/OffCampusAttractions.php">
                    <img src="homeFiles/OffCampusAttractions.jpg" alt="Off-Campus Attractions">
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




