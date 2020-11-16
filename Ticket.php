<?php
	include('a.php');
?>
<html>
<head>
<title>Ticket Registration</title>
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
	</nav>

<div>
<h2>Ticket booking</h2>
<form  method="post" action="m1.php">
<p><input type="text" name="username" placeholder="Enter username" required /></p>
<select name="apname" style="width:198px;height:40px;">
  <option title="Calicut" value="Calicut International Airport" >Calicut International Airport</option>
  <option title="Chandigarh" value="Chandigarh International Airport" >Chandigarh International Airport</option>
  <option title="Chennai" value="Chennai International Airport" >Chennai International Airport</option>
  <option title="Mumbai" value="Chhatrapati Shivaji International Airport" >Chhatrapati Shivaji International Airport</option>
  <option title="Goa" value="Dabolim Airport" >Dabolim Airport</option>
  <option title="Fort Worth" value="Dallas/Fort Worth International Airport" >Dallas/Fort Worth International Airport</option>
  <option title="Indore" value="Devi Ahilya Bai Holkar Airport" >Devi Ahilya Bai Holkar Airport</option>
  <option title="Frankfurt" value="Frankfurt Airport" >Frankfurt Airport</option>
  <option title="Houston" value="George Bush Intercontinental Airport" >George Bush Intercontinental Airport</option>
  <option title="Delhi" value="Indira Gandhi International Airport" >Indira Gandhi International Airport</option>
  <option title="New York City" value="John F. Kennedy International Airport" >John F. Kennedy International Airport</option>
  <option title="Bangalore" value="Kempegowda International Airport" >Kempegowda International Airport</option>
  <option title="Varanasi" value="Lal Bahadur Shastri International Airport" >Lal Bahadur Shastri International Airport</option>
  <option title="Louisville" value="Louisville International Airport" >Louisville International Airport</option>
  <option title="Kolkata" value="Netaji Subhas Chandra Bose International Airport" >Netaji Subhas Chandra Bose International Airport</option>
  <option title="Pune" value="Pune Airport" >Pune Airport</option>
  <option title="San Francisco" value="San Francisco International Airport" >San Francisco International Airport</option>
  <option title="Ahmedabad" value="Sardar Vallabhbhai Patel International Airport" >Sardar Vallabhbhai Patel International Airport</option>
  <option title="Surat" value="Surat International Airport" >Surat International Airport</option>
  <option title="Tampa" value="Tampa International Airport" >Tampa International Airport</option>
</select><br><br>
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
<p><input type="date"  name="date"  placeholder="Enter date of travelling" required /></p>
<input type="radio" name="class" value="ECONOMY" required>ECONOMY CLASS<br>
<input type="radio" name="class" value="BUSINESS" required>BUSINESS CLASS<br>
<input type="radio" name="class" value="FIRST" required>FIRST CLASS
<p><input type="text" name="name" placeholder="Enter your name" required /></p>
<p><input type="text" name="age" placeholder="Enter age" required /></p>
<p><input type="text" name="sex" placeholder="Enter gender" required /></p>
<p><input name="submit" type="submit"  value="Book" /></p>
</form>
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

</body>
</html>
