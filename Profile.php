<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="s.css">
<link rel="icon" href="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
		<div><h1 id="logo"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="80" width="80"/></h1></div>
		<div><h1 id="company-name">SHS Flight Booking</h1></div>
	</header><br>
	
	<nav>
		<div id="main">
		    <div><button onclick="window.location='./H.php' ">Home</button></div>
			<div><button onclick="window.location='./i.php' ">Airport</button></div>
			<div><button onclick="window.location='./v.php' ">Flight</button></div>
			<div><button onclick="window.location='./Ticket.php' ">Ticket</button></div>
			<div><button onclick="window.location='./lo.php' ">Logout</button></div>
            <div><button onclick="window.location='./Ticket1.php' ">Ticket Prices</button></div>
			<div><button onclick="window.location='./Profile.php' ">Profile</button></div>
		</div>
	</nav>


<?php
$username=$_SESSION['username'];
$query2="SELECT * FROM users NATURAL JOIN images WHERE username='$username'";
$result2=mysqli_query($con,$query2) or die(mysql_error());
$row2=mysqli_fetch_assoc($result2);
?>
<div style="margin-left:640px;margin-top:40px;">
<img src="<?php echo $row2['Pic']?>" height="200" width="200"></div><br><br>
<div style="margin-left:610px;">
<h3 style="color:green;">Name: <?php echo $row2['Name']?></h3>
<h3 style="color:green;">Email: <?php echo $row2['email']?></h3>
<h3 style="color:green;">Passport Number: <?php echo $row2['PASSPORTNO']?></h3>
<h3 style="color:green;">Age: <?php echo $row2['AGE']?></h3>
<h3 style="color:green;">Gender: <?php echo $row2['SEX']?></h3>
<h3 style="color:green;">City: <?php echo $row2['CITY']?></h3>
<h3 style="color:green;">State: <?php echo $row2['STATE']?></h3>
<h3 style="color:green;">Country: <?php echo $row2['COUNTRY']?></h3>
</div>

		<div id="chain">
			<div>
				<h5 style="color:white;">About this site</h5><br>
				<a href='About.php' class='ca'>About us</a><br><br>
				<a href='Privacy.php' class='ca'>Privacy Policy</a><br><br>
				<a href='Feedback.php' class='ca'>Feedback</a>
			</div>

			<div>
			<h5 style="color:white;">Popular Domestic Route</h5><br>
			<a href='Search1.php' class='ca'>Chennai Mumbai</a><br><br>
			<a href='Search1.php' class='ca'>Delhi Mumbai</a><br><br>
			<a href='Search1.php' class='ca'>Delhi Goa</a>
			</div>

			<div>
			<h5 style="color:white;">Popular International Route</h5><br>
			<a href='Search1.php' class='ca'>Delhi Frankfurt</a><br><br>
			<a href='Search1.php' class='ca'>Calicut SanFrancisco</a><br><br>
			<a href='Search1.php' class='ca'>Delhi NewYorkCity</a>
			</div>

			<div>
			<h5 style="color:white;">Popular Indian Airlines</h5><br>
			<a href='https://www.goindigo.in/' class='ca'>Indigo airlines</a><br><br>
			<a href='http://www.airindia.in/' class='ca'>Air India airlines</a><br><br>
			<a href='https://www.airasia.com/en/gb' class='ca'>Air asia airlines</a>
			</div>

			<div>
			<h5 style="color:white;">International Airlines</h5><br>
			<a href='https://www.autohotel.org/?gclid=Cj0KCQiAy579BRCPARIsAB6QoIZyjX0SHRJQXLRknyt2wnEEN3wkbaIZi8qyGlnWiFezrVP_a-hTg5EaAkN3EALw_wcB' class='ca'>Frankfurt airlines</a><br><br>
			<a href='https://flyaerohp.com/?gclid=Cj0KCQiAy579BRCPARIsAB6QoIa7AOPY6K9y2-S4alUGN5AulYpdwjWo1xq7cDI8EWEnguu8Y1Yxmi4aAtjMEALw_wcB' class='ca'>Houston airlines</a><br><br>
			<a href='https://www.skyscanner.co.in/flights-to/dfw/airlines-that-fly-to-dallas-fort-worth-international-airport.html' class='ca'>Fort Worth airlines</a>
			</div>

</body>
</html>



