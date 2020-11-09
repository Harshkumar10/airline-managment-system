<?php
  include("a.php");
  require('d.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Airport Information</title> 
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div><h1 class="logo"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="80" width="80"/></h1></div>
		<div><h1 class="company-name">SHS Flight Booking</h1></div>
	</header>
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
		</form>
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
	</table>
</body>
</html>
