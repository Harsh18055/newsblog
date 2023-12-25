
<?php 
$con=mysqli_connect("localhost","root","","news");
$result=mysqli_query($con,"SELECT * FROM latestnew ");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Boostrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Custom css Link -->
	<link rel="stylesheet" type="text/css" href="css/harsh.css">
	<!-- Owl Carousel Link -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
</head>
<body>

<!-- Heading Image Post-->
<div class="container heading">
	<div class="alert alert-primary" role="alert">
		Latest News
	</div>
</div>

<!-- Image Post-(1) -->
<div class="container post ">
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
<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Owl Carousel Script Link -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>

	<!-- Owl Carousel Script Link -->
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>