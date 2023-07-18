<?php
	session_start();
	if(isset($_POST['login']))
	{
		$cno=$_POST['cno'];
		$psw=$_POST['psw'];
		$conn = mysqli_connect('localhost','root','','petrolium');
		$show = "SELECT * FROM customer WHERE cust_contactno='$cno' and cust_psw='$psw'";
		$result = mysqli_query($conn,$show);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		if ($count==1)
		{
			$_SESSION["cno"]=$cno;
			header("location:services.php");
		}
		else
		{
			echo "unsuccess"; 	
			
		}
		mysqli_close($conn);
	}
?>
<html>
	<head>
		<title>Login page</title>
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
		<br/>
			<div class="size">
			<form method="post" action="">
			<table class="table">
			<tr>
				<th colspan="2"><font size="25px" color="green">Login</font></th>
			</tr>
				<tr>
					<td><font size="4px" color="black">Contact Number:</font></td>
					<td><input type="text" name="cno" placeholder="Enter your Contact Number" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">Password:</font></td>
					<td><input type="password" name="psw" placeholder="Enter your Password" /></td>
				</tr>
				<tr>
					<td align="center"><a href="forget.php">ForgetPassword?</a></td>
					<td align="center"><a href="registration.php">Create account</a></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="login" value="Login"></td>
				</tr>
				<tr><td></td></tr></table>
			</form>
		</div></div></div>
		<div>
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</div>
	</body>
</html>