 <section>
	<div class="container">
		<div class="mt-5">
			<nav>
				<div class="topnav">
					<ul>
						<?php

						$con=mysqli_connect("localhost","root","","news");
						$temp=mysqli_query($con,"SELECT * FROM category");
						while($data=mysqli_fetch_array($temp))
						{

							?>
							<li><a href="latestnewdetails.php"><?php echo $data['cat_name']; ?></a></li>
							<?php
						}
						?>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</section> 