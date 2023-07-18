<?php			
		//echo "Welcome";
			$con=mysqli_connect('localhost','root','','petrolium');
			echo var_dump($con);
			echo isset($con);
			$insert = "INSERT INTO order(cust_name)VALUES('pqr')";
			echo isset($insert);
			//$query="INSERT INTO delivery (photo,name,m_name,l_name,delivery_cno,delivery_ano,address,delivery_age,vehical_no) VALUES('$path','$name','$m_name','$l_name','$cno','$ano','$adr','$age','$vno')";
			//echo $insert = "INSERT INTO order(cust_name, cust_contactno, product, value, rate, quantity, date_time) VALUES('pqr','1234567890','petrol','150','98.75','1.52','2021-08-25 6:26:20')";
			$a=mysqli_query($con,$insert);
			echo isset($a);
			echo "Welcome";
			mysqli_close($con);			
?>