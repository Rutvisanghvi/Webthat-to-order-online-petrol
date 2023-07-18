<?php
	if(isset($_POST['insert']))
	{
		extract($_FILES);
		//echo $name=$_FILES['file']['name'];
		//echo $type=$_FILES['file']['type'];
		move_uploaded_file($_FILES['file']['tmp_name'],"img/".$_FILES['file']['name']);
		$path="img/".$_FILES['file']['name'];
		echo $path;
		$name=$_POST['d_name'];
		$m_name=$_POST['m_name'];
		$l_name=$_POST['l_name'];
		$cno=$_POST['d_cno'];
		$ano=$_POST['d_ano'];
		$adr=$_POST['address'];
		$age=$_POST['d_age'];
		$vno=$_POST['d_vno'];
		$conn=mysqli_connect('localhost','root','','petrolium');
		$query="INSERT INTO delivery (photo,name,m_name,l_name,delivery_cno,delivery_ano,address,delivery_age,vehical_no) VALUES('$path','$name','$m_name','$l_name','$cno','$ano','$adr','$age','$vno')";
		$result=mysqli_query($conn,$query);
		if(count($result))
		{
			header("location:deliveryboy.php");
		}
		else
		{
			
		}	
	}
?>
<html>
	<head>
		<title>Insert data</title>
		<link rel="stylesheet" href="index.css" />
		<link rel="stylesheet" href="admin.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<script>
		var preview_image = function(event) 
		{
			var upload = document.getElementById('upload');
			upload.src = URL.createObjectURL(event.target.files[0]);
			upload.onload = function() 
			{
				URL.revokeObjectURL(upload.src) // free memory
			}
		};
</script>
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
				<h1>Insert Delivery Boy data</h1>
			</center>
				<form method="post" action="" enctype="multipart/form-data">
					<table align="center" border="1">
						<tr>
							<td>Name:</td>
							<td><input type="text" name="d_name" size="30px" placeholder="Enter Delivery Boy Name" /></td>
							<td rowspan="3">
							<img width="100px" name="img" height="100px" id="upload" > </img> </td>
						</tr>
						<tr>
							<td>Middel Name:</td>
							<td><input type="text" name="m_name" size="30px" placeholder="Enter Delivery Boy Middel Name" /></td>
						</tr>
						<tr>
							<td>Last Name:</td>
							<td><input type="text" name="l_name" size="30px" placeholder="Enter Delivery Boy Last Name" /></td>
						</tr>
						<tr>
							<td>Contact Number:</td>
							<td><input type="text" name="d_cno" size="30px" placeholder="Enter Delivery Boy Contact Number" /></td>
					<td><input type="file" name="file" accept=".jpg" onChange="preview_image(event)"></td>

						<tr>
							<td>Aadhar Number:</td>
							<td colspan="2"><input type="text" name="d_ano" size="50px" placeholder="Enter Delivery Boy Aadhar Number" /></td>
						</tr>
						<tr>
							<td>Address:</td>
							<td colspan="2"><input type="text" name="address" size="50px" placeholder="Enter Delivery Boy Address" /></td>
						</tr>
						<tr>
							<td>Age:</td>
							<td colspan="2"><input type="text" name="d_age" size="50px" placeholder="Enter Delivery Boy Age" /></td>
						</tr>
						<tr>
							<td>Vehical Number:</td>
							<td colspan="2"><input type="text" name="d_vno" size="50px" placeholder="Enter Delivery Boy Vehical Number" /></td>
						</tr>
						<tr>
							<td colspan="3">
							<input type="submit" name="insert" Value="Store" />
							</td>
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