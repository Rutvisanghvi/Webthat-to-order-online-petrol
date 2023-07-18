<?php
		if(isset($_POST['rate']))
	{
		$date=$_POST['date'];
		$petrol=$_POST['petrol'];
		$diesel=$_POST['diesel'];
		$Fromtime=$_POST['frmtime'];
		$Totime=$_POST['totime'];
		$conn=mysqli_connect('localhost','root','','petrolium');
		$query="INSERT INTO productrate (date,petrol,diesel,Fromtime,Totime) VALUES('$date','$petrol','$diesel','$Fromtime','$Totime')";
		$result=mysqli_query($conn,$query);
		if(count($result))
		{
			header("location:Adminwork.php");
		}
		else
		{
			
		}
		
	}
?>
<html>
	<head>
		<title>Insertrate</title>
		<link rel="stylesheet" href="index.css" />
		<link rel="stylesheet" href="admin.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
	<div style="height:5%;">
		<ul>
			<li><a href='Admin.php'>Admin</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="About Us.php">About Us</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<li><a href="index.php">Home</a></li>
		</ul>
		</div><br/><br/>
		<div style="height:90%;">
			<center>
				<form name="rate2" method="post" action="">
				<table>
					<tr>
						<td>Today Petrol Rate:</td>
						<td><input type='text' name='petrol' placeholder="Enter Petrol rate" />
						</td>
						<td>&nbsp;</td>
						<td>Today Diesel Rate</td>
						<td><input type='text' name='diesel' placeholder="Enter Diesel rate" />
						</td>	
					</tr>
					<tr>
						<td>Select Date:</td>
						<td><input type="date" name="date" /></td>
						<td>&nbsp;</td>
						<td>Select From Time:
						<input type="time" name="frmtime" /></td>
						<td>Select To Time:
						<input type="time" name="totime" /></td>
					</tr>
					<tr>
						<td><a href="Adminwork.php"><font size="3">back</a></td>
						<td colspan="5"><input type="submit" name="rate" value="Insert" /></td>
					</tr>
				</table>
				</form>
				</center>
			</div>
		<div style="height:5%;">
		<ul>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
		</ul>
		</div>
	</body>
</html>