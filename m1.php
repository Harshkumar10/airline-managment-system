<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<link rel="stylesheet" href="s.css">
<link rel="icon" href="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100" type="image/gif">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
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
	</nav><br><br>

<?php
 if(isset($_POST['submit']))
 {
   $username=$_SESSION['username'];
   $apname=$_POST['apname'];
   $bdate = date("y-m-d");
   $name =$_POST['name'];
   $source = $_POST["source"];
   $dest=$_POST["destination"];
   $tdate=$_POST["date"];
   $class= $_POST["class"];
   $age=$_POST["age"];
   $sex=$_POST["sex"];
   $cookie_name="place";
   $cookie_value=$dest;
   setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/");
   $q1="SELECT * FROM flight WHERE SOURCE='$source' and DESTINATION='$dest'";
   $r1=mysqli_query($con,$q1) or die(mysql_error());
   $ro1=mysqli_fetch_assoc($r1);
   if(!$ro1)
   {
	 echo"<b style='color:Tomato'>No Flights found For This route Please Check for route Via Mumbai or Delhi or local route or fill the details properly";
   }
   else
   {
     $fcode=$ro1["FLIGHTCODE"];
	 $arr=$ro1["ARRIVAL"];
	 $dep=$ro1["DEPARTURE"];
     $ins_query="INSERT INTO ticket(username,AP_NAME,FLIGHTCODE,SOURCE,DESTINATION,BOOKINGDATE,TRAVELDATE,CLASS,Name,Age,Sex)values
      ('$username','$apname','$fcode','$source','$dest','$bdate','$tdate','$class','$name','$age','$sex')";
    if(mysqli_query($con,$ins_query))
    {
     echo"";
    }
	
     $query1="SELECT * FROM users WHERE username='$username'";
     $result1=mysqli_query($con,$query1) or die(mysql_error());
     $row1=mysqli_fetch_assoc($result1);
     $semail ="u18co109@coed.svnit.ac.in";
     $email=$row1["email"];
     $headers = "From: <" . $semail . ">\n" ;
     $headers .= "MIME-Version: 1.0\n";
     $headers .= "Content-type: text/html; charset=utf-8\n";
     $headers .= "Return-Path: " . $semail . "\n";
     $headers .= "X-Mailer: PHP/" . phpversion();
     $subject = "Mail for Flight ticket";
	 $status="Confirmed";
     $message = "Airport:$apname\r\n   Flightcode:$fcode\r\n   Name:$name\r\n  Source:$source\r\n   Destination:$dest\r\n   CLASS:$class\r\n   Age:$age\r\n   Gender:$sex\r\n  Arrival time:$arr\r\n  Departure time:$dep";
     if (mail($email, $subject, $message, $headers)) 
	 {
	  echo"<b style='color:pink;'>Ticket has been booked for you We will mail your ticket  within 1 hour,Thanks for Using Our Services!</b>";
      echo"<br><br>";
      echo"<textarea rows='11' cols='75'>Airport: ".$apname."\nstatus: ".$status."\nFlightcode: ".$fcode."\nName: ".$name."\nSource: ".$source."\nDestination: ".$dest."\nCLASS: ".$class."\nAge: ".$age."\nGender: ".$sex."\nArrival time: ".$arr."\nDeparture time: ".$dep."</textarea>";
     }
    else
	{
	 echo"<b style='color:red;'>Check your details again or wait if your network is slow</b>";
    }
    }
    }
?>
<br><br>
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
