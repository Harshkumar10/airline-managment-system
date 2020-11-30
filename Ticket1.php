<?php
	include("a.php");
	require('d.php');
?>
<html>
<head>
	<title>Tickets Price</title>
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
	
    <div style="margin-top:20px;color:white;text-align:right;">
    <form  action="Search.php" method="post">
		<b>Source</b>
		<select name="source" style="width:198px;height:40px;">
		<option value="Calicut">Calicut</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chennai">Chennai</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Goa">Goa</option>
		<option value="Fort Worth">Fort Worth</option>
		<option value="Indore">Indore</option>
		<option value="Frankfurt">Frankfurt</option>
		<option value="Houston">Houston</option>
		<option value="Delhi">Delhi</option>
		<option value="New York City">New York City</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Varanasi">Varanasi</option>
		<option value="Louisville">Louisville</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Pune">Pune</option>
		<option value="San Francisco">San Francisco</option>
		<option value="Ahmedabad">Ahmedabad</option>
		<option value="Surat">Surat</option>
		<option value="Tampa">Tampa</option>
		</select><br><br>
		<b>Destination</b>
		<select name="destination" style="width:198px;height:40px;">
		<option value="Calicut">Calicut</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chennai">Chennai</option>
		<option value="Mumbai">Mumbai</option>
		<option value="Goa">Goa</option>
		<option value="Fort Worth">Fort Worth</option>
		<option value="Indore">Indore</option>
		<option value="Frankfurt">Frankfurt</option>
		<option value="Houston">Houston</option>
		<option value="Delhi">Delhi</option>
		<option value="New York City">New York City</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Varanasi">Varanasi</option>
		<option value="Louisville">Louisville</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Pune">Pune</option>
		<option value="San Francisco">San Francisco</option>
		<option value="Ahmedabad">Ahmedabad</option>
		<option value="Surat">Surat</option>
		<option value="Tampa">Tampa</option>
		</select><br><br>
		<input type="submit" name="submitE" value="Search">
	</form>
</div>


<table width="40%" border="1" style="border-collapse:collapse;">
	<thead>
		<tr style="background-color:#FF0000">
			<th><strong>SOURCE</strong></th>
			<th><strong>DESTINATION</strong></th>
			<th><strong>CLASS</strong></th>
			<th><strong>PRICE</strong></th>
		</tr>
	</thead>
	<tbody>
	<?php
		$sel_query="Select * from ticket1";
		$result = mysqli_query($con,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
		<tr style="background-color:pink">
		<td align="left"><?php echo $row["SOURCE"]; ?></td>
		<td align="left"><?php echo $row["DESTINATION"]; ?></td>
		<td align="center"><?php echo $row["CLASS"]; ?></td>
		<td align="center"><?php echo $row["PRICE"]; ?></td>
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

		</div>
</body>
</html>
