<html>
<head>
<title>Registration</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 style="margin-left:535px;"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100"/></h1>
<h1 style="margin-left:450px;">SHS Flight Booking</h1>
<?php
require('d.php');
if (isset($_REQUEST['username'])){
// removes backslashes
$username = stripslashes($_REQUEST['username']);
//escapes special characters in a string
$username = mysqli_real_escape_string($con,$username);
$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($con,$email);
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($con,$password);
$name=$_REQUEST['name'];
$trn_date = date("Y-m-d");
$passportno =$_REQUEST['passportno'];
$age=$_REQUEST['age'];
$sex=$_REQUEST['sex'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$country=$_REQUEST['country'];
$query = "INSERT into users(username, password, Name,email,trn_date,PASSPORTNO,AGE,SEX,CITY,STATE,COUNTRY) VALUES('$username', '$password','$name','$email','$trn_date','$passportno','$age','$sex','$city','$state','$country')";
$result = mysqli_query($con,$query);
if($result){
	header('Location: images.php');
}
else{
	echo"<b>Username or email already exist please use new one</b>";
     }
}else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="username"  placeholder="Enter username" required /><br><br>
<input type="password" name="password" placeholder="Enter password" required /><br><br>
<input type="text" name="name" placeholder="Enter name" required /><br><br>
<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="rahul1234@gmail.com" placeholder="Enter email" required /><br><br>
<input type="text" name="passportno"  placeholder="Enter Passportno" title="A1234568" required /><br><br>
<input type="text" name="age" placeholder="Enter Age" required /><br><br>
<input type="text" name="sex" placeholder="Enter Gender" required /><br><br>
<input type="text" name="city" placeholder="Enter your City" required /><br><br>
<input type="text" name="state" placeholder="Enter your State" required /><br><br>
<input type="text" name="country" placeholder="Enter your Country" required /><br><br>
<input type="submit" name="submit" value="Submit" />
</form>
</div>
<?php } ?>
</body>
</html>