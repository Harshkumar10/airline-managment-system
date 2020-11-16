<?php
include("a.php");
require('d.php');
?>
<html>
<head>
<title>Feedback</title>
<link rel="stylesheet" href="s.css">
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
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$source=$_POST['source'];
	$dest=$_POST['dest'];
	$q=$_POST['query'];
	$fcode=$_POST['fcode'];
	$t=$_POST['tarea'];
	$query="INSERT INTO feedback(Name,email,SOURCE,DESTINATION,FLIGHTCODE,QUERY,Feed) VALUES('$name','$email','$source','$dest','$fcode','$q','$t')";
	$result = mysqli_query($con,$query);
	if($result){
	echo "Thanks for your precious response we will work on it and will provide you the best services";}
}
else{
?>
<div style="margin-left:80px;">
<img src="https://www.happyfares.in/Content/Images/Feedback.jpg" height="360" width="1300"/></div><br>
<div style="margin-left:80px;">
<h2>Feedback</h2>
<form action="" method="POST">
<input type="text" name="name" placeholder="Name*" required />
<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="rahul1234@gmail.com" placeholder="Email*" required /><br>
<input type="text" name="source" placeholder="Source*" required />
<div style="margin-left:200px;">
<textarea rows="9" cols="40" name="tarea" required>Feedback</textarea></div>
<input type="text" name="dest" placeholder="Destination*" required /><br><br>
<select style="width:223px;height:40px;" name="query">
<option selected disabled>What is the nature of your query?</option>
<option value="Appreciation">Appreciation</option>
<option value="Suggestion">Suggestion</option>
<option value="Complaint">Complaint</option>
<option value="Request">Request</option>
<option value="Enquiry">Enquiry</option>
</select><br>
<input type="text" name="fcode" placeholder="Flightcode*" required /><br>
<input type="submit" name="submit" value="Submit" />
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
<a href='Search1.php' class='ca'>Mumbai SanFrancisco</a><br><br>
<a href='Search1.php' class='ca'>Delhi SanFrancisco</a>
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
<?php }?>
</body>
</html>
 
