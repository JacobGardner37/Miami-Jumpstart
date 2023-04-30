<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Miami Jumpstart - This Week On Campus</title>
    <link rel="stylesheet" type="text/css" href="ThisWeek.css">
</head>
<body>
    <header>
        <div class ="logo">
            <a href = "../" style="text-decoration: none; color : #cf2424"> <h1>Miami Jumpstart</h1> </a>

        </div>
            <div class="title">
                <h1>This Week On Campus</h1>
            </div> 
	<div>
	<?php
		$email = $_SESSION["email"];
		if (isset($email)) {
			print('<a href="../logout.php" style="color: white; text-decoration: none; text-align : right"> <h2>Log out <h2></a>');
		} else {
			print('<a href="../createaccount.html" style="color: white; text-decoration: none; text-align : right"> <h2>Login</h2> </a>');
		}

	?>
	</div>
      
    </header>
    <div class="container">
      <nav></nav>
        <section id="content">
            <div class="box">
                <h2><b><u>Monday (5/1)</u></b></h2>
		<img src="WritingCafe.jpg" alt="Writing Cafe">
		<h2>Writing Cafe</h2>
		<h3>MacMillan Hall, Lower Level Lounge <br>5:00 - 7:00 PM</h3>
                <p>The English Language Learner Writing Center will provide an opportunity to improve your writing for projects and assignments in the final weeks of class. Bring your writing assignments and your friends! Get help with assignments and eat some cookies!</p>
            </div>
            <div class="box">
                <h2><b><u>Monday (5/1)</u></b></h2>
                <img src="CampusCare.jpg" alt="Campus Care">
                <h2>Campus Care - Drop-in conversations with mental health counselors</h2>
                <h3>Walter L. Gross Jr. Family Student Athlete Development Center, Room 9b<br>4:00 - 5:00 PM</h3>
		<p>Campus Care is an opportunity for students to consult with a trained mental health professional in a less formal and more convenient setting than a counseling appointment.  Campus Care is a "drop-in" service. No appointment is necessary and there is no fee.  Students are seen on a first-come, first-served basis. Usually, there is not much of a wait and conversations are typically about 15 minutes long or less. Stop by if you have a mental health question!</p>
            </div>
            <div class="box">
                <h2><b><u>Monday (5/1)</u></b></h2>
                <img src="dog.jpg" alt="Dog Therapy">
                <h2>Weekly Dog Therapy - Student Counseling Service</h2>
                <h3>Student Counseling Service, Room 118 <br>2:00 - 3:00 PM</h3>
                <p>Come pet a therapy dog, twice a week!  Every Monday from 2:00-3:00 pm and every Thursday 3:00-4:00pm, stop by the Student Counseling Service to pet a certified therapy dog (or two!).  It's a great way to meet others who love dogs and to de-stress from studying.  No registration and it's free!  Bring your friends!</p>
            </div>
            <div class="box">
                <h2><b><u>Tuesday (5/2)</u></b></h2>
                <img src="LifeAtMiami.jpg" alt="Life at and after Miami">
                <h2>Life at and after Miami: Measuring Success for International Students</h2>
                <h3>MacMillan Hall, 212 (Great Room)<br>3:00 - 4:00 PM</h3>
                <p>International alumni speaker: Dr. Ancilleno Davis '18 will be returning to Oxford to share his post Miami experiences. He is currently the senior scientist and policy analyst at the Bahamas National Trust.

Please join us in person at 212 MacMillan or virtually on Tuesday May 2 from 3-4pm for the lecture. <a href="https://miamioh.zoom.us/meeting/register/tZ0td-2sqTIsHdDinPTRFWtZxQ-Y3E5evB1h">Zoom Link</a></p>
            </div>
            <div class="box">
                <h2><b><u>Wednesday (5/3)</u></b></h2>
                <img src="etbd.jpg" alt="ETBD Student Expo">
                <h2>ETBD Student Expo</h2>
                <h3>Laws Hall, 1st and 2nd Floors</h3>
                <p>The Department of Emerging Technology in Business and Design is hosting our student expo on Wednesday, May 3rd. Many of our students will be displaying their work and projects throughout the first and second floors of Laws Hall. The event begins at 6 pm and light refreshments will be served. We hope to see you there!</p>
            </div>
            <div class="box">
                <h2><b><u>Wednesday (5/3)</u></b></h2>
                <img src="ukraine.jpg" alt="The Invasion of Ukraine: Impacts and Challenges | Energy & Energy Security">
                <h2>The Invasion of Ukraine: Impacts and Challenges | Energy & Energy Security</h2>
                <h3>Virtual <br>11:30 AM</h3>
                <p>Miami University in Luxembourg is pleased to invite you to the second in a series of six lectures titled The Invasion of Ukraine: Impacts and Challenges. In this Lecture, Ambassador and Professor Alain de Muyser will address the issue of Energy and Energy Security, from the perspective of Luxembourg, taking into account the regional aspects and the EU level. We hope you can join us in person (1 impasse du Chateau, Differdange, Luxembourg) or virtually for this relevant and important discussion. This series is also supported by Deutsch-Amerikanisches Institut Saarland, Atlantische Akademie Rheinland-Pfalz, and Miami University, John E. Dolibois European Center (with support from the U.S. Embassy in Berlin)</p>
            </div>
            <div class="box">
                <h2><b><u>Wednesday (5/3)</u></b></h2>
                <img src="swing.jpg" alt="Swing Dance Lesson">
                <h2>Swing Dance Lesson</h2>
                <h3>Armstrong Student Center, 2084<br>6:00 - 7:00 PM</h3>
                <p>Weekly Swing Dancing Lessons. Stop in anytime to learn: East coast, West coast, Charleston, Lindy Hop, and much more! All are welcome, no partner is required but feel free to bring your friends. No experience is needed. There are no fees, club dues, or auditions. Check our club emails for what topics will be covered this week! Hosted by: Swing Syndicate</p>
            </div>
            <div class="box">
                <h2><b><u>Thursday (5/4)</u></b></h2>
                <img src="cru.jpg" alt="Cru">
                <h2>Campus Connect</h2>
                <h3>Armstrong Student Center, Fritz Pavilion C <br>8:00 - 9:30 PM</h3>
                <p>The weekly gathering of Cru in which students, staff, and community members engage in Christian worship, fellowship, and conversation! Meet at Oxford Bible Fellowship and socialize afterwards with milk and cookies from 9-10 p.m.! Food provided. Hosted by: Cru</p>
            </div>
            <div class="box">
                <h2><b><u>Thursday (5/4)</u></b></h2>
                <img src="cec.jpg" alt="CEC Senior Design Expo">
                <h2>CEC Senior Design Expo</h2>
                <h3>Millet Hall <br>5:00 - 7:00 PM</h3>
                <p>The College of Engineering and Computing's Senior Design Expo is the culmination of each department’s engineering capstone classes, and allows students to demonstrate what they have learned in four years through their solutions to an open-ended design problem.</p>
            </div>
            <div class="box">
                <h2><b><u>Friday (5/5)</u></b></h2>
                <img src="YungGravy.jpg" alt="Yung Gravy">
                <h2>MAP Presents: Yung Gravy</h2>
                <h3>Millet Hall<br>8:00 - 10:00 PM</h3>
                <p>Yung Gravy is pulling up on the scene at Millett THIS May! Tickets are available for purchase now! Tickets will be available to non-Miami students as well! Accessible seating will be available at the event.</p>
            </div>
            <div class="box">
                <h2><b><u>Friday (5/5)</u></b></h2>
                <img src="SymphonyOrchestra.jpg" alt="Symphony Orchestra">
                <h2>Symphony Orchestra</h2>
                <h3>Hall Auditorium <br>7:30 PM</h3>
                <p>The Miami University Symphony Orchestra, directed by Ricardo Averbach, presents a special concert featuring the top three winners of Miami's 2023 Concerto Competition. The concert is free. This year, in celebration of the 120th anniversary of the Miami Orchestra program, the Department of Music created a Composition Competition for Miami students.</p>
            </div>
            <div class="box">
                <h2><b><u>Saturday (5/6)</u></b></h2>
                <img src="openhouse.jpg" alt="Lewis Place Open House">
                <h2>Open House for all graduating students at Lewis Place</h2>
                <h3>Lewis Place <br>3:30 - 5:00 PM</h3>
                <p>All graduating students are invited to drop in to the Open House at Lewis Place</p>
            </div>
            <div class="box">
                <h2><b><u>Saturday (5/6)</u></b></h2>
                <img src="docent.jpg" alt="Docent Tour">
                <h2>Docent Drop-In Tours</h2>
                <h3>Richard and Carole Cocks Art Museum <br>2:00 - 4:00 PM</h3>
                <p>Enjoy tours of the current exhibitions led by members of our volunteer docent group. These happen the 1st and 3rd Saturdays between February 4-June 10 from 2-4 PM. Just stop in and enjoy!</p>
            </div>
            <div class="box">
                <h2><b><u>Sunday (5/7)</u></b></h2>
                <img src="dance.jpg" alt="Dance Theatre">
                <h2>Dance Theatre Spring Concert</h2>
                <h3>Armstrong Student Center, Wilks Theater<br>2:00 PM</h3>
                <p>Join Dance Theatre with special guest choreographers and student choreographers for their Spring Concert:  May 6 @ 7:30 p.m.  and May 7 @ 2 p.m. Tickets:  Free for Miami students with their student ID at the Wilks Theater box office;  $10 students/seniors: $12 in advance general admission and $15 at the door. Box Office/Home Office or online at MiamiOH.edu/boxoffice</p>
            </div>
        </section>
    </div>
    <footer>
        <p></p>
    </footer>
</body>
</html>
