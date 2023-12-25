<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM latestnew WHERE id='".$_GET['uidi']."'"))
	{
		header("location:latestnews_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


