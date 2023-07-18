<?php
		session_start();
		$cno=$_SESSION["cno"];
		$conn=mysqli_connect('localhost','root','','petrolium');
		$display="SELECT cust_name FROM customer WHERE cust_contactno='".$cno."'";
		$name=mysqli_query($conn,$display);
		$rr = mysqli_fetch_array($name);
		$todaydate=date('Y-m-d');
		$show="SELECT petrol,diesel FROM productrate WHERE date='".$todaydate."'";
		$result=mysqli_query($conn,$show);
		while($row=mysqli_fetch_array($result))
		{
			$petrol=$row['petrol'];
			$diesel=$row['diesel'];
		}
		if(isset($_POST['Order']))
		{
			$product=$_POST['product'];
			$price=$_POST['price'];
			date_default_timezone_set("Asia/Kolkata");
			$time=date("Y-m-d G:i:s");
			if($product=='petrol')
			{
				$r=$petrol;
				$qua=$price/$r;
				$qua=round($qua,2);
				$insert= "INSERT INTO `order` (`order_id`, `cust_name`, `cust_contactno`, `product`, `value`, `rate`, `quantity`, `location`, `date_time`) VALUES (NULL, '$rr[0]', '$cno', '$product', '$price', '$r', '$qua', 'NULL', '$time')";
				$result=mysqli_query($conn,$insert);
				if(isset($result))
				{
					echo "<html><script>alert('Your Order have Successfully Accepted')</script></html>";
				}
				else
				{
				
				}
			}
			else
			{
				$r=$diesel;
				$qua=$price/$r;
				$qua=round($qua,2);
				$insert= "INSERT INTO `order` (`order_id`, `cust_name`, `cust_contactno`, `product`, `value`, `rate`, `quantity`, `location`, `date_time`) VALUES (NULL, '$rr[0]', '$cno', '$product', '$price', '$r', '$qua', 'NULL', '$time')";
				$result=mysqli_query($conn,$insert);
				if(count($result))
				{
					echo "<html><script>alert('Your Order have Successfully Accepted')</script></html>";
				}
				else
				{
			
				}
 
			}
		}	
		
?>
<html>
	<head>
		<title>Services</title>
		<link rel="stylesheet" href="index.css" />
		<link rel="stylesheet" href="login.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
		<script>
			let select;
			let p="<?php echo $petrol; ?>";
			let d="<?php echo $diesel; ?>";
			function rate(value)
			{
				select =value;
				document.getElementById('a').innerHTML="";
				var newdiv=document.createElement('div');
				if(value=='petrol')
				{
					newdiv.innerHTML=p;
					document.getElementById('a').appendChild(newdiv);
				}
				else
				{
					if(value=='deisel')
					{
						newdiv.innerHTML=d;
						document.getElementById('a').appendChild(newdiv);
					}
					else{
						newdiv.innerHTML= "<?php echo "00"; ?>";
						document.getElementById('a').appendChild(newdiv);
						
					}
				}
			}
			function quantity(qua)
			{
				/*document.write(qua);
				document.write(select);
				document.write(p);
				document.write(d);*/
				document.getElementById('q').innerHTML="";
				var newdiv=document.createElement('div');
				if(select=='petrol')
				{
					qua=qua/p;
					newdiv.innerHTML=(qua.toFixed(2));
					document.getElementById('q').appendChild(newdiv);
				}
				else
				{
						qua=qua/d;
						newdiv.innerHTML=(qua.toFixed(2));
						document.getElementById('q').appendChild(newdiv);
				}
				
			}
			//rate(document.getElementById("product-rate").options[document.getElementById("product-rate").selectedIndex].value);
		</script>
	</head>
	<body>
		<div style="width:100%; height:5%"class="login">
		<ul>
			<li><a href='Admin.php'>Admin</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="About Us.php">About Us</a></li>
			<li><a href="Logout.php">Logout</a></li>
			<li><a href="index.php">Home</a></li>
		</ul>
		<h3>
		<?php
			echo "Welcome ".$rr[0]." to Our Website.";
		?></h3>
		</div>
			<div style="widht:100%; height:90%; text-align:justify;">
				<div style="width:40%; float:left">
				<br/><br/>
					<br/><p align="justify"><font size="4px">&nbsp;&nbsp;&nbsp; We <b>"Shivaay Petrolium"</b> are retailer (Petrol-Diesel-Oli Seller) and authorised dealer of <b>"Indian Oil Corporation Limited".</b><br/>
				Our main goal is this "Our Customer don't have any Problem".
				Sometimes it happens that you are taking a vehical and going and if the Petrol\Diesel finish on the way.<br/>
				And without Petrol\Deisel it is not possible to drive a Vehical.
				So we need some Petrol\Deisel in this Time.
				Our Web site help in this time Our Web site help to user to order Petrol\Deisel of there requirement and our delivery boy delivery to user of there requirement.
				</font></p>
			</div>
			<div style="width:60%; float:right">
			<br/><br/>
				<form method="post" action="">
					<table border="5px">
						<tr>
							<th>Choice any one:&nbsp;</th>
							<th>Select Amount:&nbsp;</th>
							<th>Rate:&nbsp;</th>
							<th>Quantity:&nbsp;</th>
						</tr>
						<tr>
							<td><select id="product-rate" name="product" onChange="rate(this.options[this.selectedIndex].value)" >
							<option value="select">select</option>
							<option value="petrol">Petrol</option>
							<option value="deisel">Deisel</option>
							</select></td>
							<td><select name="price" onChange="quantity(this.options[this.selectedIndex].value)" >
							<option>100</option>
							<option>150</option>
							<option>200</option>
							<option>250</option>
							<option>300</option>
							<option>350</option>
							<option>400</option>
							<option>450</option>
							<option>500</option>
							</select></td>
							<td><label><div name="rate" id="a"></div></label></td>
							<td><label><div name="qua" id="q"></div></label></td>
						</tr>
						<tr>
							<td><input type="submit" name="Order" value="Order" /></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	<div style="width:100%; height:5%">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
			</ul>
		</div>	
	</body>
</html>
