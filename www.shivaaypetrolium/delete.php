<?php
		$photo=$_GET['photo'];
		$id=$_GET['id'];
		$name=$_GET['d_name'];
		$m_name=$_GET['m_name'];
		$l_name=$_GET['l_name'];
		$cno=$_GET['cno'];
		$ano=$_GET['d_ano'];
		$address=$_GET['address'];
		$age=$_GET['d_age'];
		$vno=$_GET['d_vno'];
		$conn=mysqli_connect('localhost','root','','petrolium');
		$query="DELETE from delivery WHERE id='$id'";
		$result=mysqli_query($conn,$query);
		echo "<html><script>alert('Delete record successfully');</script></html>";
		header("location:deliveryboy.php");
?>