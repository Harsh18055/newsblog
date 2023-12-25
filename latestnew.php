<?php 
include 'header.php'; 
$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM latestnew");
?>

<!-- Heading Image Post-->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		Latest News
	</div>
</div>

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
