<?php
include("a.php");
require('d.php');
?>
<html>
<head>
<style>
table,th,td{
	border: 1px solid black;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1 style="text-align:center;"><img src="https://cdn.dribbble.com/users/2761722/screenshots/7138526/image.png" height="100" width="100"/></h1>
<h1 style="text-align:center;">SHS Flight Booking</h1>
<?php 
 if(isset($_POST['submitS']))
	 { 
         $res1 = $_POST['state'];
          ?>
		  <h2 style="text-align:center;">Airport records</h2>
         <table width="70%" border="1" style="border-collapse:collapse;">
         <thead>
         <tr style="background-color:#FF0000">
         <th><strong>Airport Name</strong></th>
         <th><strong>COUNTRY</strong></th>
         <th><strong>CITY</strong></th>
         </tr>
         </thead>
         </tbody>
         <?php
            $sel_query="SELECT AP_NAME,COUNTRY,CITY FROM airport WHERE STATE='$res1'";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                   <tr style="background-color:pink">
                   <td align="center"><?php echo $row["AP_NAME"]; ?></td>
                   <td align="center"><?php echo $row["COUNTRY"]; ?></td>
                   <td align="center"><?php echo $row["CITY"]; ?></td>
                   </tr>
			<?php }
	        }?> 
	
<?php
    if(isset($_POST['submitC']))
	 {
         $res2 = $_POST['country'];
          ?>
         <table width="70%" border="1" style="border-collapse:collapse;">
         <thead>
         <tr style="background-color:#FF0000">
         <th><strong>Airport Name</strong></th>
         <th><strong>STATE</strong></th>
         <th><strong>CITY</strong></th>
         </tr>
         </thead>
         </tbody>
         <?php
            $sel_query="SELECT AP_NAME,STATE,CITY FROM airport WHERE COUNTRY='$res2'";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                   <tr style="background-color:pink">
                   <td align="center"><?php echo $row["AP_NAME"]; ?></td>
                   <td align="center"><?php echo $row["STATE"]; ?></td>
                   <td align="center"><?php echo $row["CITY"]; ?></td>
                   </tr>
			<?php }
	        }?> 

<?php 
 if(isset($_POST['submitD']))
	 { 
         $res3 = $_POST['source'];
		 $res4= $_POST['destination'];
          ?>
		  <h2 style="text-align:center;">Flight records</h2>
         <table width="70%" border="1" style="border-collapse:collapse;">
         <thead>
         <tr style="background-color:#FF0000">
         <th><strong>FLIGHTCODE</strong></th>
         <th><strong>SOURCE</strong></th>
         <th><strong>DESTINATION</strong></th>
		 <th><strong>ARRIVAL TIME</strong></th>
		 <th><strong>DEPARTURE TIME</strong></th>
         </tr>
         </thead>
         </tbody>
         <?php
            $sel_query="SELECT * FROM flight WHERE SOURCE='$res3' and DESTINATION='$res4'";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                   <tr style="background-color:pink">
                   <td align="center"><?php echo $row["FLIGHTCODE"]; ?></td>
                   <td align="center"><?php echo $row["SOURCE"]; ?></td>
                   <td align="center"><?php echo $row["DESTINATION"]; ?></td>
				   <td align="center"><?php echo $row["ARRIVAL"]; ?></td>
				   <td align="center"><?php echo $row["DEPARTURE"]; ?></td>
                   </tr>
			<?php }
	        }?> 

<?php 
 if(isset($_POST['submitE']))
	 { 
         $res7 = $_POST['source'];
		 $res8= $_POST['destination'];
          ?>
		  <h2 style="text-align:center;">Ticket records</h2>
         <table width="70%" border="1" style="border-collapse:collapse;">
         <thead>
         <tr style="background-color:#FF0000">
         <th><strong>SOURCE</strong></th>
         <th><strong>DESTINATION</strong></th>
		 <th><strong>CLASS</strong></th>
		 <th><strong>PRICE</strong></th>
         </tr>
         </thead>
         </tbody>
         <?php
            $sel_query="SELECT * FROM ticket1 WHERE SOURCE='$res7' and DESTINATION='$res8'";
            $result = mysqli_query($con,$sel_query);
            while($row = mysqli_fetch_assoc($result)) { ?>
                   <tr style="background-color:pink">
                   <td align="center"><?php echo $row["SOURCE"]; ?></td>
                   <td align="center"><?php echo $row["DESTINATION"]; ?></td>
				   <td align="center"><?php echo $row["CLASS"]; ?></td>
				   <td align="center"><?php echo $row["PRICE"]; ?></td>
                   </tr>
			<?php }
	        }?> 

</body>
</html>		
