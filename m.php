<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Mail</title>
</head>
<body>
<h1 style="text-align:center;"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100"/></h1>
<h1 style="text-align:center;">SHS Flight Booking</h1>
<?php
require('d.php');
session_start();
$name=$_SESSION['username'];
$email = $_SESSION['email'];
$headers = "From: <" . $email . ">\n" ;
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "Return-Path: " . $email . "\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$subject = "Recovery of Password";
$query="SELECT password FROM users where username='$name'";
$result = mysqli_query($con,$query) or die(mysql_error());
$row = mysqli_fetch_assoc($result);
$message = $row['password'];
if (mail($email, $subject, $message, $headers)) {
    	echo"<div class='form'>
<h3>Password Sent Successfully Check your mails</h3>
<br/>Click here to <a class='pa' href='l.php'>Login</a></div>";
}
?>
</body>
</html>
