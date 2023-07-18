<?php
	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$name=$_POST['d_name'];
		$m_name=$_POST['m_name'];
		$l_name=$_POST['l_name'];
		$cno=$_POST['cno'];
		$ano=$_POST['d_ano'];
		$address=$_POST['address'];
		$age=$_POST['d_age'];
		$vno=$_POST['d_vno'];
		$conn=mysqli_connect('localhost','root','','petrolium');
		$query="UPDATE delivery SET name='$name',m_name='$m_name',l_name='$l_name',delivery_ano='$ano',address='$address',delivery_age='$age',vehical_no='$vno'WHERE id='$id' and delivery_cno='$cno'";
		$result=mysqli_query($conn,$query);
		header("location:deliveryboy.php");
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
				<h1>Update Delivery Boy data</h1>
			</center>
				<form method="post" action="">
					<table align="center" border="1">
						<tr>
							<td>ID:</td>
							<td><label name="id" value="<?php echo $id=$_GET['id']; ?>" ><?php echo $id=$_GET['id']; ?></label>
							<input type="hidden" name="id" value="<?php echo $id=$_GET['id']; ?>" /></td>
						</tr>
						<tr>
							<td>Name:</td>
							<td><input type="text" name="d_name" size="30px" value="<?php echo $name=$_GET['name']; ?>" /></td>
							<td rowspan="3"><img width="100px" name="img" height="100px" id="upload" src="<?php echo $photo=$_GET['photo']; ?>" > </img></td>
						</tr>
						<tr>
							<td>Middel Name:</td>
							<td><input type="text" name="m_name" size="30px" value="<?php echo $m_name=$_GET['m_name']; ?>" /></td>
						</tr>
						<tr>
							<td>Last Name:</td>
							<td><input type="text" name="l_name" size="30px" value="<?php echo $l_name=$_GET['l_name']; ?>" /></td>
						</tr>
						<tr>
							<td>Contact Number:</td>
							<td><label name="cno" value="<?php echo $cno=$_GET['delivery_cno']; ?>"><?php echo $cno=$_GET['delivery_cno']; ?></label>
							<input type="hidden" name="cno" value="<?php echo $cno=$_GET['delivery_cno']; ?>"></td>
							<td><input type="file" name="upload" size="30px" Value="Upload" accept=".jpg" onchange="preview_image(event)" /></td>
						</tr>
						<tr>
							<td>Aadhar Number:</td>
							<td colspan="2"><input type="text" name="d_ano" size="50px" value="<?php echo $ano=$_GET['delivery_ano']; ?>" /></td>
						</tr>
						<tr>
							<td>Address:</td>
							<td colspan="2"><input type="text" name="address" size="50px" value="<?php echo $ads=$_GET['address']; ?>" /></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td colspan="2"><input type="text" name="d_age" size="50px" value="<?php echo $age=$_GET['delivery_age']; ?>" /></td>
						</tr>
						<tr>
							<td>Vehical Number:</td>
							<td colspan="2"><input type="text" name="d_vno" size="50px" value="<?php echo $vno=$_GET['vehical_no']; ?>" /></td>
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