<?php
error_reporting(0);
require('d.php');
?>
<html>
<head>
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


<?php

	if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$filename= $_FILES['uploadfile']['name'];
	$tempname= $_FILES['uploadfile']['tmp_name'];
	$folder= "Pics/".$filename;
	move_uploaded_file($tempname,$folder);
	$sql="INSERT INTO images(username,Pic) VALUES('$username','$folder')";
	$result=mysqli_query($con,$sql);
	if($result)
	{
	  	echo "<div class='form'>
		<h3>You have registered successfully.</h3>
		<br/>Click here to <a href='l.php' class='pa'>Login</a></div>";
	}
 	else{
		 echo"Image exists Please use new one";
 	}
 }
 else {?>
 
<form action="" method="post" enctype="multipart/form-data">
   <input type="text" name="username" placeholder="Enter username"/><br><br>
   <input type="file" name="uploadfile" value=""/>Photo<br>
   <input type="submit" name="submit" value="Submit"/>
 </form>
 <?php }?>
 


 </body>
 </html>
