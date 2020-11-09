<?php
include('a.php');
?>
<html>
<head>
<title>Ticket Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 style="text-align:center;"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100"/></h1>
<h1 style="text-align:center;">SHS Flight Booking</h1>
<div>
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
</select><br>
<p><input type="text" name="source"  placeholder="Enter Source" required /></p>
<p><input type="text" name="destination"  placeholder="Enter destination" required /></p>
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
</body>
</html>
