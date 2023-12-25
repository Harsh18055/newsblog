<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM  category WHERE cat_id='".$_GET['uidi']."'"))
	{
		header("location:category_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


