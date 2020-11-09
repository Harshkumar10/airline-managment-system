<?php
include("a.php");
require('d.php');
?>
<html>
<head>
<title>Tickets Price</title>
<link rel="stylesheet" href="style.css">
<style>
table,th,td{
	border: 1px solid black;
}
</style>
</head>
<body>
<h1 style="text-align:center;"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100"/></h1>
<h1 style="text-align:center;">SHS Flight Booking</h1>
<div style="margin-top:0px;text-align:right;">
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
</table>
</body>
</html>
