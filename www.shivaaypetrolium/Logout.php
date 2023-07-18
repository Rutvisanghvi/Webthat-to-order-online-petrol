<?php
	session_start();
	session_destroy();
	echo "<html><script>alert('Logout successfully')</script></html>";
	header("location:index.php");
?>