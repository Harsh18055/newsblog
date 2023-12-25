<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM trendingpost WHERE trending_id='".$_GET['uidi']."'"))
	{
		header("location:trending_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


