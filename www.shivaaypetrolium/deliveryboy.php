<?php
	if(isset($_POST['insert']))
	{
		header("location:insert.php");
	}
	elseif(isset($_POST['update']))
	{
		header("location:update.php");
	}
	elseif(isset($_POST['delete']))
	{
		header("location:delete.php");
	}
	else
	{
		
	}
?>
<html>
	<head>
	<title>Delivery Boys</title>
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
				<br/><br/>
				<form name="rate2" method="post" action="">
				<table>
					<tr>
						<td><a href="Adminwork.php"><font size="5">back</a></td>
						<td colspan="10"><font size="5px" color="black"><b>Delivery Boys</b></font></td>
						<td><input type="submit" name="insert" Value="Insert" /></td>
					</tr>
					<tr>
						<th>Photo</th>
						<th>ID</th>
						<th>Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
						<th>Contact Number</th>
						<th>Aadhar Number</th>
						<th>Address</th>
						<th>Age</th>
						<th>Vehicle Number</th>
					</tr>
					<?php
						$conn=mysqli_connect('localhost','root','','petrolium');
						$result=mysqli_query($conn,'select * from delivery');
						while($row = mysqli_fetch_array($result))
						{
							echo "<tr><td>"."<img width='50px' height='50px' src=".$row['photo']."></img></td>";
							echo "<td>".$row['id']."</td>";
							echo "<td>".$row['name']."</td>";
							echo "<td>".$row['m_name']."</td>";
							echo "<td>".$row['l_name']."</td>";
							echo "<td>".$row['delivery_cno']."</td>";
							echo "<td>".$row['delivery_ano']."</td>";
							echo "<td>".$row['address']."</td>";
							echo "<td>".$row['delivery_age']."</td>";
							echo "<td>".$row['vehical_no']."</td>";
							echo "<td><a href='update.php?photo=$row[0]&id=$row[1]&name=$row[2]&m_name=$row[3]&l_name=$row[4]&delivery_cno=$row[5]&
							delivery_ano=$row[6]&address=$row[7]&delivery_age=$row[8]&vehical_no=$row[9]'>update</a></td>";
							echo "<td><a href='delete.php?photo=$row[0]&id=$row[1]&name=$row[2]&m_name=$row[3]&l_name=$row[4]&delivery_cno=$row[5]&
							delivery_ano=$row[6]&address=$row[7]&delivery_age=$row[8]&vehical_no=$row[9]'>delete</a></td></tr>";
						}
						mysqli_close($conn);
					?>
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