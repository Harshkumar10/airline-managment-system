<?php
  include("a.php");
  require('d.php');
?>
<html lang="en">
<head>
	<title>Airport Information</title> 
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
	
	<h2 style="text-align:center;">Airport records</h2>
	<div style="margin-top:0px;text-align:right;">
		<form  action="Search.php" method="post">
			<b>Search by Country</b>
			<select name="country" style="width:198px;height:40px;">
				<option value="India">India</option>
				<option value="United States">United States</option>
				<option value="Germany">Germany</option>
			</select><br>
			<input type="submit" name="submitC" value="Search">
		</form><br>
		<form action="Search.php" method="post">
			<b>Search by State</b>
			<select name="state" style="width:198px;height:40px;">
				<option value="Kerala">Kerala</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Goa">Goa</option>
				<option value="Texas">Texas</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Hesse">Hesse</option>
				<option value="Delhi">Delhi</option>
				<option value="New York">New York</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kentucky">Kentucky</option>
				<option value="West Bengal">West Bengal</option>
				<option value="California">California</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Florida">Florida</option>
			</select><br>
			<input type="submit" name="submitS" value="Search">
		</form>
	</div>
	<table width="80%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr style="background-color:#FF0000">
			<th><strong>Airport Name</strong></th>
			<th><strong>STATE</strong></th>
			<th><strong>COUNTRY</strong></th>
			<th><strong>CITY</strong></th>
		</tr>
	</thead>
	<tbody>
		<?php
			$sel_query="SELECT * FROM airport";
			$result = mysqli_query($con,$sel_query);
			while($row = mysqli_fetch_assoc($result)) 
		{ ?>

			<tr style="background-color:pink">
				<td align="center"><?php echo $row["AP_NAME"]; ?></td>
				<td align="center"><?php echo $row["STATE"]; ?></td>
				<td align="center"><?php echo $row["COUNTRY"]; ?></td>
				<td align="center"><?php echo $row["CITY"]; ?></td>
			</tr>
			<?php  } ?>
	</tbody>
	</table><br><br>
	
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
