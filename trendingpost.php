<?php 
include 'header.php'; 


$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT category.cat_id,trendingpost.trending_id,trendingpost.trending_title,trendingpost.trending_destruction,trendingpost.trending_image FROM trendingpost JOIN category  ON category.cat_id = trendingpost.cat_id");
?>
<!-- Heading Trending Post -->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		Trending Post
	</div>
</div>

<!-- Trending Post -->
<section class="pt-5">
	<div class="container">
		<div class="row">	
			<?php
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_array($result))
				{	
					?>
					<div class="col-3 ">
						<div class="card" style="width: 18rem;">
							<img src="admin/<?php echo $row['trending_image'];?>"  class="card-img-top">
							<div class="card-body">
								<h5 class="card-title text-center"><?php echo $row['trending_title'];?></h5>
								<p class="card-text text-center"><?php echo $row['trending_destruction'];?></p>
							</div>

						</div>
					</div>
					<?php
				}

			}
			?>
		</div>
	</div>
</section>
