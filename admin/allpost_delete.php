<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM allpost WHERE allpost_id='".$_GET['uidi']."'"))
	{
		header("location:allpost_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


