<?php
	//session_start();
	if(isset($_POST['update']))
	{
		$psw=$_POST['psw'];
		$cno=$_POST['cno'];
		$id=$_POST['id'];
		$conn = mysqli_connect('localhost','root','','petrolium');
		$show = "UPDATE customer SET cust_psw='$psw' WHERE cust_contactno='$cno' and cust_id='$id'";
		$result = mysqli_query($conn,$show);
		echo "<script>alert('Password changed successfully')</script>";
	
	}
	if(isset($_POST['verify']))
	{
		$cno=$_POST['cno'];
		$id=$_POST['id'];
		//echo $cno;
		//echo $psw;
		$conn = mysqli_connect('localhost','root','','petrolium');
		$show = "SELECT * FROM customer WHERE cust_contactno='$cno' and cust_id='$id'";
		$result = mysqli_query($conn,$show);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count=mysqli_num_rows($result);
		if ($count==1)
		{
			echo "<html>
				<body>
				<form method='post' name='update'>
				<table>
				<tr>
					<td><font size='4px' color='black'>Password:</font></td>
					<td><input type='password' name='psw' placeholder='Enter your Password' /></td>
				</tr>
				<tr>
					<td><font size='4px' color='black'>Conform Password:</font></td>
					<td><input type='password' name='psw1' placeholder='Enter your Conform Password' /></td>
				</tr>
				<tr>
					<td><input type='hidden' name='cno' value='".$cno."' /></td>
					<td><input type='hidden' name='id' value='".$id."' /></td>
				</tr>
				<tr>
					<td aling='center'><input type='submit' name='update' Value='Confirm' /></td>
				</tr>
				</table>
				</form>
				</body>
			</html>";
		}
		else
		{
			echo "unsuccess"; 	
			
		}
		mysqli_close($conn);
		
	}
?><html>
	<head>
		<title>ForgetPassword page</title>
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
			<table>
				<tr>
					<th colspan="2"><font size="25px" color="green">ForgetPassword</font></th>
				</tr>
				<tr>
					<td><font size="4px" color="black">Contact Number:</font></td>
					<td><input type="text" name="cno" placeholder="Enter your Contact Number" /></td>
				</tr>
				<tr>
					<td><font size="4px" color="black">E-mail ID:</font></td>
					<td><input type="text" name="id" placeholder="Enter your E-mail ID" /></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" name="verify" value="Verify" /></td>
					<td align="center"><a href="Login.php">Back</a></td>
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
		<div>
	</body>

</html>