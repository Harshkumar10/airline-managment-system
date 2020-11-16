<?php
include('a.php');
require('d.php');
?>
<html>
<head>
<title>profile</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$username=$_SESSION['username'];
$query2="SELECT * FROM users NATURAL JOIN images WHERE username='$username'";
$result2=mysqli_query($con,$query2) or die(mysql_error());
$row2=mysqli_fetch_assoc($result2);
?>
<div style="margin-left:640px;margin-top:40px;">
<img src="<?php echo $row2['Pic']?>" height="200" width="200"></div><br><br>
<div style="margin-left:610px;">
<h3 style="color:green;">Name: <?php echo $row2['Name']?></h3>
<h3 style="color:green;">Email: <?php echo $row2['email']?></h3>
<h3 style="color:green;">Passport Number: <?php echo $row2['PASSPORTNO']?></h3>
<h3 style="color:green;">Age: <?php echo $row2['AGE']?></h3>
<h3 style="color:green;">Gender: <?php echo $row2['SEX']?></h3>
<h3 style="color:green;">City: <?php echo $row2['CITY']?></h3>
<h3 style="color:green;">State: <?php echo $row2['STATE']?></h3>
<h3 style="color:green;">Country: <?php echo $row2['COUNTRY']?></h3>
</div>
</body>
</html>



