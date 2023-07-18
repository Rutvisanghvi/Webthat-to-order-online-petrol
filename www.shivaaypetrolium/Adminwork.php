<?php
	if(isset($_POST['delivery']))
	{
		header("location:deliveryboy.php");
	}
	elseif(isset($_POST['insert']))
	{
		header("location:insertrate.php");
	}
	else
	{
		
	}
?><html>
	<head>
	<title>Admin Services</title>
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
				<form name="rate1" method="post" action="">
					<table>
					<tr>
						<td colspan="6"><font size="5px" color="black"><b>Petrol & Deisel Rate</b></font></td>
						<td><input type="submit" name="insert" Value="Insert" /></td>
					</tr>
					<tr>
						<th>Date</th>
						<th>Petrol Rate</th>
						<th>Deisel Rate</th>
						<th>From Time</th>
						<th>To Time</th>
					</tr>
					<?php
						$conn=mysqli_connect('localhost','root','','petrolium');
						$result=mysqli_query($conn,'select * from productrate');
						while($row = mysqli_fetch_array($result))
						{
							echo "<tr><td>".$row['date']."</td>";
							echo "<td>".$row['petrol']."</td>";
							echo "<td>".$row['diesel']."</td>";
							echo "<td>".$row['Fromtime']."</td>";
							echo "<td>".$row['Totime']."</td><td>&nbsp;</td>";
							$todaydate=date('Y-m-d');
							if($todaydate==$row[0])
							{
								echo "<td><a href='rateupdate.php?date=$row[0]&petrol=$row[1]&diesel=$row[2]&Fromtime=$row[3]&Totime=$row[4]'>update</a></td></tr>";
							}
							else{
								echo "<td><lable>update</lable></td>";
							}
							
						}
						mysqli_close($conn);
					?>
					<tr>
						<td colspan="10"><input type="submit" name="delivery" value="Delivery Boy" /></td>
					</tr>
				</table>
				</form>
			</center>
		</div>
		<div>
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