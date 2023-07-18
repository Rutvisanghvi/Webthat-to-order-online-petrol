<?php
	$nm=$_POST["nm"];
	$mnm=$_POST["mnm"];
	$cno=$_POST["cno"];
	$id=$_POST["id"];
	$veh=$_POST["veh"];
?>
<html>
	<body><?php
		$conn=mysqli_connect('localhost','root','');
		$database=mysqli_select_db($conn,'petrolium');
		echo $nm;
		$insert="INSERT INTO customer(cust_name,cust_surname,cust_contactno,cust_id,no_vehical)values($nm,$mnm,$cno,$id,$veh)";
		if(mysqli_query($conn,$insert))
		{
				echo "Data inserted";
		}
		mysqli_close($conn);
		?>
	</body>
</html>