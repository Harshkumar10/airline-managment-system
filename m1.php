<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Mail Ticket</title>
</head>
<body>
<h1 style="text-align:center;"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100"/></h1>
<h1 style="text-align:center;">SHS Flight Booking</h1>
<?php
 if(isset($_POST['submit']))
 {
   $username=$_POST['username'];
   $apname=$_POST['apname'];
   $bdate = date("y-m-d");
   $name =$_POST['name'];
   $source = $_POST["source"];
   $dest=$_POST["destination"];
   $tdate=$_POST["date"];
   $class= $_POST["class"];
   $age=$_POST["age"];
   $sex=$_POST["sex"];
   $q1="SELECT * FROM flight WHERE SOURCE='$source' and DESTINATION='$dest'";
   $r1=mysqli_query($con,$q1) or die(mysql_error());
   $ro1=mysqli_fetch_assoc($r1);
   if(!$ro1)
   {
	 echo"No Flights found For This route Please Check for route Via Mumbai or Delhi or local route";
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
	  echo"<b>Ticket has been booked for you We will mail your ticket  within 1 hour,Thanks for Using Our Services!</b>";
      echo"<br><br>";
      echo"<textarea rows='11' cols='75'>Airport: ".$apname."\nstatus: ".$status."\nFlightcode: ".$fcode."\nName: ".$name."\nSource: ".$source."\nDestination: ".$dest."\nCLASS: ".$class."\nAge: ".$age."\nGender: ".$sex."\nArrival time: ".$arr."\nDeparture time: ".$dep."</textarea>";
     }
    else
	{
	 echo"Check your details again";
    }
    }
    }
?>
</body>
</html>
