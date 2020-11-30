<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<title>Popular Domestic or International Routes</title>
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
	</nav><br>

<?php
if(isset($_POST['btn']))
{
$result= $_POST['search'];
if (strcmp($result,"ChennaiMumbai") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Chennai' AND DESTINATION='Mumbai'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
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
    <tr style="background-color:pink">
    <td align="left"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="left"><?php echo $row2["SOURCE"]; ?></td>
    <td align="left"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="left"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="left"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div style="margin-left:250px;">
	<img src="https://i1.wp.com/www.inventiva.co.in/wp-content/uploads/2020/02/Chennai.jpg?fit=1800%2C1200&ssl=1" height="350" width="350"/>
	<img src="https://thebetterindia-english.sgp1.digitaloceanspaces.com/uploads/2018/07/In-Pics_-These-Mind-Blowing-Aerial-Shots-of-Mumbai-Were-Taken-by-a-Drone.jpg" height="350" width="350"/>
	<div style="margin-left:120px;display:inline-block;">
	<div style="margin-left:20px;display:inline;color:white;">Chennai</div>
	<div style="margin-left:310px;display:inline;color:white;">Mumbai</div>
	</div>
	</div><br>
	
<?php  } 

if (strcmp($result, "DelhiMumbai") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Delhi' AND DESTINATION='Mumbai' ";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
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
    <tr style="background-color:pink">
    <td align="left"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="left"><?php echo $row2["SOURCE"]; ?></td>
    <td align="left"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="left"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="left"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div style="margin-left:250px;">
	<img src="https://cdn.getyourguide.com/img/tour/5c981adda8383.jpeg/146.jpg" height="350" width="350"/>
	<img src="https://thebetterindia-english.sgp1.digitaloceanspaces.com/uploads/2018/07/In-Pics_-These-Mind-Blowing-Aerial-Shots-of-Mumbai-Were-Taken-by-a-Drone.jpg" height="350" width="350"/>
	<div style="margin-left:120px;display:inline-block;">
	<div style="margin-left:20px;display:inline;color:white;">Delhi</div>
	<div style="margin-left:310px;display:inline;color:white;">Mumbai</div>
	</div>
	</div><br>

<?php  }
if (strcmp($result, "GoaDelhi") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Goa' AND DESTINATION='Delhi'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
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
    <tr style="background-color:pink">
    <td align="left"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="left"><?php echo $row2["SOURCE"]; ?></td>
    <td align="left"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="left"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="left"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div style="margin-left:250px;">
	<img src="https://static.toiimg.com/thumb/34117654/The-top-attractions-in-Goa.jpg?width=1200&height=900" height="350" width="350"/>
	<img src="https://cdn.getyourguide.com/img/tour/5c981adda8383.jpeg/146.jpg" height="350" width="350"/><br>
	<div style="margin-left:120px;display:inline-block;">
	<div style="margin-left:20px;display:inline;color:white;">Goa</div>
	<div style="margin-left:310px;display:inline;color:white;">Delhi</div>
	</div>
	</div><br>

<?php  }
if (strcmp($result, "FrankfurtDelhi") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Frankfurt' AND DESTINATION='Delhi'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
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
    <tr style="background-color:pink">
    <td align="left"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="left"><?php echo $row2["SOURCE"]; ?></td>
    <td align="left"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="left"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="left"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div style="margin-left:250px;">
	<img src="https://www.studying-in-germany.org/wp-content/uploads/2019/04/Frankfurt.jpg" height="350" width="350"/>
	<img src="https://cdn.getyourguide.com/img/tour/5c981adda8383.jpeg/146.jpg" height="350" width="350"/>
	<div style="margin-left:120px;display:inline-block;">
	<div style="margin-left:20px;display:inline;color:white;">Frankfurt</div>
	<div style="margin-left:310px;display:inline;color:white;">Delhi</div>
	</div>
	</div><br>

<?php  }

  if (strcmp($result, "CalicutSanFrancisco") == "true")
  {
	$query2="SELECT * FROM flight WHERE SOURCE='Calicut' AND DESTINATION='San Francisco'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
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
    <tr style="background-color:pink">
    <td align="left"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="left"><?php echo $row2["SOURCE"]; ?></td>
    <td align="left"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="left"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="left"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div style="margin-left:250px;">
	<img src="https://www.picnicwale.com/attractions/assets/sightseeing/calicut-in-kerala-cost.jpg" height="350" width="350"/>
	<img src="https://www.outfrontmedia.com/-/media/images/ofm/markets/san-francisco/san-francisco-hero.jpg" height="350" width="350"/>
	<div style="margin-left:120px;display:inline-block;">
	<div style="margin-left:20px;display:inline;color:white;">Calicut</div>
	<div style="margin-left:310px;display:inline;color:white;">San Francisco</div>
	</div>
	</div><br>
	

<?php  }

if(strcmp($result, "DelhiNewYorkCity") == "true")
{
	$query2="SELECT * FROM flight WHERE SOURCE='Delhi' AND DESTINATION='New York City'";
    $result2=mysqli_query($con,$query2) or die(mysql_error());
    $row2=mysqli_fetch_assoc($result2);?>
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
    <tr style="background-color:pink">
    <td align="left"><?php echo $row2["FLIGHTCODE"]; ?></td>
    <td align="left"><?php echo $row2["SOURCE"]; ?></td>
    <td align="left"><?php echo $row2["DESTINATION"]; ?></td>
    <td align="left"><?php echo $row2["ARRIVAL"]; ?></td>
    <td align="left"><?php echo $row2["DEPARTURE"]; ?></td>
    </tr>
	</tbody>
    </table><br><br>
	<div style="margin-left:250px;">
	<img src="https://cdn.getyourguide.com/img/tour/5c981adda8383.jpeg/146.jpg" height="350" width="350"/>
	<img src="https://s7d2.scene7.com/is/image/TWCNews/nyc-skyline-ap_jpg" height="350" width="350"/>
	<div style="margin-left:120px;display:inline-block;">
	<div style="margin-left:20px;display:inline;color:white;">Delhi</div>
	<div style="margin-left:310px;display:inline;color:white;">New York City</div>
	</div>
	</div><br>

<?php
   }

}
else{
?>
<form action="" method="post">
<select name="search" style="width:198px;height:40px;">
<option value="ChennaiMumbai">Chennai Mumbai</option>
<option value="DelhiMumbai">Delhi Mumbai</option>
<option value="GoaDelhi">Goa Delhi</option>
<option value="FrankfurtDelhi">Frankfurt Delhi</option>
<option value="CalicutSanFrancisco">Calicut SanFrancisco</option>
<option value="DelhiNewYorkCity">Delhi NewYorkCity</option>
</select><br>
<input type="submit" name="btn" value="Search"/>
</form><br><br><br>
<?php }?>
</body>	
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
</html>



