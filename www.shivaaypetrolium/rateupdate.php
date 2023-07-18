<?php
	if(isset($_POST['update']))
	{	
		$date=$_POST['date'];
		$petrol=$_POST['petrol'];
		$diesel=$_POST['diesel'];
		$frmtime=$_POST['frmtime'];
		$totime=$_POST['totime'];
		$conn=mysqli_connect('localhost','root','','petrolium');
		$query="UPDATE productrate SET petrol='$petrol', diesel='$diesel', Fromtime='$frmtime',Totime='$totime' WHERE date='$date'";
		$result=mysqli_query($conn,$query);
		if(isset($result))
		{
			//echo $query;
			header("location:Adminwork.php");
		}
		else
		{
			
		}
	}
?>
<html>
	<head>
		<title>Update data</title>
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
		<div style="height:85%;width:100%">
			<center>
				<h2>Update Petrol & Diesel Rate</h2>
			</center>
				<form method="post" action="">
					<table align="center">
						<tr>
							<td>Date:</td>
							<td><label name="id" ><?php echo $date=$_GET['date']; ?></label>
							<input type="hidden" name="date" value="<?php echo $date=$_GET['date']; ?>" /></td>
						</tr>
						<tr>
						<td>Today Petrol Rate:</td>
						<td><input type='text' name='petrol' value="<?php echo $petrol=$_GET['petrol'];?>" />
						</td>
						<td>Today Diesel Rate</td>
						<td><input type='text' name='diesel' value="<?php echo $diesel=$_GET['diesel'];?>" />
						</td>	
					</tr>
					<tr>
						<td>From Time:</td>
						<td><input type="text" name="frmtime"  value="<?php echo $frmtime=$_GET['Fromtime']; ?>" /></td>
						<td>To time:</td>
						<td><input type="text" name="totime"  value="<?php echo $totime=$_GET['Totime']; ?>" /></td>
						</tr>
						<tr>
							<td colspan="3"><input type="submit" name="update" Value="Update" /></td>
						</tr>
					</table>
					</form>
		</div>
		<div style="height:10%;">
		<ul>
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
		</ul>
		</div>
	</body>
</html>