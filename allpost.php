<?php 

include 'header.php';
 

$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM allpost ");
?>


<!-- Heading All Post -->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		All Post
	</div>
</div>

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