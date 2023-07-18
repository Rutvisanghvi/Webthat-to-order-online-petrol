<?php
	session_start();
?>
<html>
	<head>
		<title>Contact Us</title>
		<link rel="Stylesheet" href="index.css" />
		<link rel="Stylesheet" href="contact.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
		<div class="bg">
		<div style="width:100%; height:5%;">
		<?php
				if(isset($_SESSION["cno"]))
				{
					echo "<ul>
				<li><a href='Admin.php'>Admin</a></li>
				<li><a href='Contact.php'>Contact Us</a></li>
				<li><a href='About Us.php'>About Us</a></li>
				<li><a href='Logout.php'>Logout</a></li>
				<li><a href='index.php'>Home</a></li>
				</ul>";
				}
				else{
					echo"<ul>
				<li><a href='Admin.php'>Admin</a></li>
				<li><a href='Contact.php'>Contact Us</a></li>
				<li><a href='About Us.php'>About Us</a></li>
				<li><a href='Login.php'>Login</a></li>
				<li><a href='index.php'>Home</a></li>
			</ul>";
				}
			?>
		</div>
		<div style="width:100%; height:90%;">
			<center><h1>Contact Us</h1></center>
			<div style="width:50%; float:left; text-align:justify; font-family:Times;">
				<table style="margin:130px; padding:12px;" >
					<tr><td><b>Address:</b></td></tr>
					<tr>
						<td>Opp.Gopal Hotel,</td>
					</tr>
					<tr>
						<td>Vartej Sidsar Bypass Road,</td>
					</tr>
					<tr>
						<td>Sidsar Bhavnagar-364000</td>
					</tr>
					<tr>
						<td><b>Mo:</b>9601601337</td>
					</tr>
					<tr>
						<td><b>Mail:</b>shivaaypetroleum.ioc@gmail.com</td>
					</tr>
				</table>
			</div>
			<div style="width:50%; float:right;">
				<iframe width="520" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=shivaay%20petroleum%20sidsar%20bhavnagar+()&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://embed-map.org/'>embed google map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=48b0158f049854eb28ad0f87ce01f14f68fc4486'></script>
			</div>
		</div>
		<div style="width:100%;">
			<center>
				<table>
					<form method="post" action="#">
					<tr>
						<td>Name:</td>
						<td><input type="text" name="nm" placeholder="Enter your Name:" /></td>
					</tr>
					<tr>
						<td>E-mail ID:</td>
						<td><input type="text" name="em" placeholder="Enter your e-mail Id"/></td>
					</tr>
					<tr>
						<td>Message:</td>
						<td><textarea name="msg" height="6" placeholder="Enter your Message"/></textarea></td>
					</tr>
					<tr>
						<td><input type="button" name="sub" Value="Submit" /></td>
					</tr>
				</form>
				</table>
			</center>
		</div>
		<div style="width:100%; height:5%;">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</div>
		</div>
	</body>
</html>