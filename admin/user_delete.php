<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM  users WHERE id='".$_GET['uidi']."'"))
	{
		header("location:user_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


