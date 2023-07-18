<?php
	session_start();
?><html>
	<head>
		<title>Shivaay Petrolium</title>
		<link rel="Stylesheet" href="index.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
		<div class="img">
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
		<div>
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		<div>
	</body>
</html>