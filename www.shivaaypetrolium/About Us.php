<?php
	session_start();
?><html>
	<head>
		<title>About Us</title>
		<link rel="Stylesheet" href="index.css" />
		<link rel="stylesheet" href="aboutus.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	</head>
	<body>
		<div class="bg">
		<div style="widht:100%; height:5%">
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
	
		<div style="widht:100%; height:90%; text-align:justify;">
			<center><h1>About Us</h1></center>
				<div style="width:55%; float:left">
				<p align="justify"><font size="5px">&nbsp;&nbsp;&nbsp; We <b>"Shivaay Petrolium"</b> are retailer (Petrol-Diesel-Oli Seller) and authorised dealer of <b>"Indian Oil Corporation Limited".</b>
				We Situated at "Opp. Gopal Hotel, Vartej-Sidsar Bypass Road, Sidsar, Bhavnagar - 364000". We are serving petroleum products (Petrol-Diesel-Oil) with 100% quality surity and 100% quantity surity.</p>
				
				<p>&nbsp;&nbsp;&nbsp; Indian Oli Produces large rang of lube products known as "SERVO". We are trading all "SERVO" products at 0% profit.
				As Mahatma Gandhiji said "A Customer is the most important Visitor on our preneses. He is not dependent on him. He is not an interrnption of our work. He is the purpose of it. He is not an outsider of our Bussiness. He is part of it. We are not doing him a faver by serving him. He is doing us a faver by giving us the opportunity to do so"By following this we are serving our customer as per their need with quality consciousness and transparency.</font></p>
				</div>
				
				<div style="width:45%; float:right" align="center">
					<img src="Patrolpump.jpg" style="width:400px; height:400px; border-radius:50%;" class="abuimg"/>
				</div>	
		</div>
		<div>
		<table>
					<tr>
						<td>1.Cleanly Washrooms</td>
						<td>2.Cool Drinking Water </td>
						<td>3.Free Air Services</td>
						<td>4.Free oil changing</td>
						<td>5.First Aid Avaliable</td>
						<td>6.Polite Team of C.A.</td>
						<td>7.Clock Room</td>
						<td>8.Digital Payment Available</td>
					</tr>
					<tr>
						<td><img src="Washroom.jpeg" style="width:175px; height:150px;" class="serimg" /></td>
						<td><img src="water.jpg" style="width:175px; height:150px;" class="serimg" /></td>
						<td><img src="Air.jpeg" style="width:175px; height:150px;" class="serimg" /></td>
						<td><img src="oil.jpeg" style="width:175px; height:150px;" class="serimg" /></td>
						<td><img src="firstaid.jpg" style="width:175px; height:150px;" class="serimg" /></td>
						<td><img src="staff.jpeg" style="width:175px; height:150px;" class="serimg" /></td>
						<td></td>
						<td></td>
					</tr>
				</table>
		</div>
		
		<div style="width:100%; height:5%">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</div>
		</div>
	</body>
</html>