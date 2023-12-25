<?php include 'slider.php';?>

<?php include 'category.php';?>

<!-- Heading Image Post-->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		Latest News
	</div>
</div>

<!-- Image Post-(1) -->
<?php 

$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM latestnew");
?>

<!-- Image Post-(1) -->
<div class="container post">
	<div class="row">
		<?php

		if(mysqli_num_rows($result) > 0)
		{
			while($row=mysqli_fetch_array($result))
			{

				?>
				<div class="col-3">
					<div class="card border" style="width: 18rem;">
						<img src="admin/<?php echo $row['images']; ?>" class="rounded-3" alt="...">
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><?php echo $row['author_name']; ?></li>
							<li class="list-group-item"><?php echo $row['author_news']; ?></li>
							<li class="list-group-item"><?php echo $row['date']; ?></li>
						</ul>
						<div class="card-body">
							<p class="card-text"><?php echo $row['destruction']; ?></p>
						</div>

					</div>
				</div>
				<?php
			}

		}
		?>
	</div>
</div>




<!-- Pagination -->
<div class="container page-img" >
	<!-- <div class="page"> -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center mt-5" >
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link " href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>


<!-- Heading Trending Post -->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		Trending Post
	</div>
</div>

<!-- Trending Post -->
<?php 

$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT category.cat_id,trendingpost.trending_id,trendingpost.trending_title,trendingpost.trending_destruction,trendingpost.trending_image FROM trendingpost JOIN category  ON category.cat_id = trendingpost.cat_id");
?>

<!-- Trending Post -->
<section >
	<div class="container">
		<div class="row">	
			<?php
			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_array($result))
				{	
					?>
					<div class="col-3 pt-5">
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


<!-- Heading Gallery -->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		Gallery
	</div>
</div>

<!-- Gallery -->
<?php 

$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM gallery ");

?>
<section>
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


<!-- Heading All Post -->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		All Post
	</div>
</div>

<!-- All Post -->
<?php 

$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM allpost");
?>


<!-- All Post -->
<div class="container mt-5 d-flex justify-content-center">
	<div class="card mb-3" style="max-width: 1000px;">
		<div class="row g-0">
			
			<?php

			if(mysqli_num_rows($result) > 0)
			{
				while($row=mysqli_fetch_array($result))
				{

					?>
					<div class="col-md-4 pt-5">
						<img src="admin/<?php echo $row['allpost_image']; ?>" class="img-fluid rounded-start h-auto">
					</div>
					<div class="col-md-8 pt-5">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['allpost_title']; ?></h5>
							<p class="card-text "><?php echo $row['allpost_destruction'];?></p>
						</div>
					</div>
					<?php
				}

			}
			?>
		</div>
	</div>
</div>

<!--All Post Pagination -->
<div class="container page-img" >
	<!-- <div class="page"> -->
		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center mt-5" >
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>

<?php include 'footer.php'; ?>