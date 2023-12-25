<?php 
include 'header.php'; 

$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM gallery ");

?>
<section class="pt-5">
	<div class="container">
		<div class="row">
			<?php
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_array($result))
				{

					?>
					<div class="col-3 pt-5">
						<img src="admin/<?php echo $row['name']; ?>" class="img-thumbnail" alt="...">
					</div>
					<?php
				}
			}
			?>
		</div>
	</div>
</section>
