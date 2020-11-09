<?php
include("a.php");
require('d.php');
?>
<html>
<head>
	<title>Flights Information</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div><h1 class="logo"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="80" width="80"/></h1></div>
		<div><h1 class="company-name">SHS Flight Booking</h1></div>
	</header>
	<h2 style="text-align:center;">Flight records</h2>

	<nav>
		<div class="main">
			<div><button onclick="window.location='./i.php' ">Airport</button></div>
			<div><button onclick="window.location='./v.php' ">Flight</button></div>
			<div><button onclick="window.location='./Ticket.php' ">Ticket</button></div>
			<div><button onclick="window.location='./lo.php' ">Logout</button></div>

			<div><button onclick="window.location='./Ticket1.php' ">Ticket Prices</button></div>
			<div><button onclick="window.location='./Profile.php' ">Profile</button></div>
		</div>
	</nav>

<div style="margin-top:40px;">
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
<input type="submit" name="submitD" value="Search">
</form>
</div>
<table width="65%" border="1" style="border-collapse:collapse;">
<thead>
<tr style="background-color:#FF0000">
<th><strong>FLIGHTCODE</strong></th>
<th><strong>SOURCE</strong></th>
<th><strong>DESTINATION</strong></th>
<th><strong>ARRIVAL TIME</strong></th>
<th><strong>DEPARTURE TIME</strong></th>
</tr>
</thead>
<tbody>
<?php
$sel_query="SELECT * FROM flight;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr style="background-color:pink">
<td align="left"><?php echo $row["FLIGHTCODE"]; ?></td>
<td align="left"><?php echo $row["SOURCE"]; ?></td>
<td align="left"><?php echo $row["DESTINATION"]; ?></td>
<td align="left"><?php echo $row["ARRIVAL"]; ?></td>
<td align="left"><?php echo $row["DEPARTURE"]; ?></td>
</tr>
<?php  } ?>
</tbody>
</table>
</body>
</html>
