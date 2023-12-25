<?php

include("connect.php");

	if(mysqli_query($con,"DELETE FROM gallery WHERE id='".$_GET['uidi']."'"))
	{
		header("location:gallery_show.php");
	}
	else
	{
		echo "<script>alert('Cannot Delete Category')</script>";
	}
?>


 