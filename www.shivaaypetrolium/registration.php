<?php
	if(isset($_POST['login']))
	{
		$nm = $_POST['nm'];
		$mnm = $_POST['mnm'];
		$cno = $_POST['cno'];
		$id = $_POST['id'];
		$veh = $_POST['veh'];
		$id1 = $_POST['id1'];
		$conn = mysqli_connect('localhost','root','','petrolium');
		$insert = "INSERT INTO customer(cust_name, cust_surname, cust_contactno, cust_id, no_vehical, cust_psw)VALUES('$nm','$mnm','$cno','$id','$veh','$id1')";
		if(mysqli_query($conn,$insert))
		{
				echo "Data inserted";
		}
		else
		{
			echo "abcd not available";
		}
		mysqli_close($conn);
	}
?>
<html>
	<head>
		<title>Registration page</title>
		<link rel="stylesheet" href="index.css" />
		<link rel="stylesheet" href="login.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
		<div class="img">
		<div class="login">
		<ul>
			<li><a href='Admin.php'>Admin</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="About Us.php">About Us</a></li>
			<li><a href="Login.php">Login</a></li>
			<li><a href="index.php">Home</a></li>
		</ul>
		<table>
		<br/>
			<div class="size">
			<form method="post" name="abc" action="">
			<tr>
				<th colspan="2"><font size="25px" color="green">Registration</font></th>
			</tr>
				<tr>
					<td><font size="4px" color="black">Enter Name</font></td>
					<td><input type="text" name="nm" placeholder="Enter your Name" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Enter Middel Name</font></td>
					<td><input type="text" name="mnm" placeholder="Enter your Middel Name" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Enter Contact Number</font></td>
					<td><input type="text" name="cno" placeholder="Enter your Contact Number" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Enter Email-id</font></td>
					<td><input type="text" name="id" placeholder="Enter your Email-id" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Enter Password</font></td>
					<td><input type="password" name="id1" placeholder="Enter your Password" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Enter Conform Password</font></td>
					<td><input type="password" name="id2" placeholder="Enter Conform password" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Select Your Vehical </font></td>
					<td>
						<select name="veh">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="login" value="Registration"></td>
					<td align="right"><a href="Login.php">Back</a></td>
				</tr>
				<!--<tr>
					<td align="center"><a href="forgetpassword.php">ForgetPassword?</a></td>
					<td align="center"><a href="registration.php">Create account</a></td>
				</tr>-->
				<tr><td></td></tr>
			</form>
			</table>
		</div></div></div>
		<div>
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		<div>
	</body>
</html>