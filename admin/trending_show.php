<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trending Post</title>
</head>
<body>
 <h2 class="text-center pt-5 text-primary">Trending Post Show</h2>
  <div class="container pt-5">
 <a href="trending_insert.php"><button type="button" class="btn btn-success" style="margin-left:940px ;">ADD NEWS</button></a>   
 </div>
 <table class="table table-striped mt-5 m-auto" style="width: 800px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Trending Post Title</th>
      <th scope="col">Trending Post Destruction</th>
      <th scope="col">Category</th>
      <th scope="col">Trending Post Images</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $temp=mysqli_query($con,"SELECT category.cat_name,trendingpost.trending_id,trendingpost.trending_title,trendingpost.trending_destruction,trendingpost.trending_image FROM trendingpost JOIN category  ON category.cat_id = trendingpost.cat_id ");

    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $data['trending_id']; ?></th>
        <th scope="row"><?php echo $data['trending_title']; ?></th>
        <td><?php echo $data['trending_destruction']; ?></td>
        <th scope="row"><?php echo $data['cat_name']; ?></th>
        <td><img height=150px width=160px src="<?php echo $data['trending_image']; ?>"></td>
        <td><a href="trending_update.php?id=<?php echo $data['trending_id']; ?>"
          class="text-primary"><button type="button" class="btn btn-primary">Update</button></a></td>
        <td><a href="trending_delete.php?uidi=<?php echo $data['trending_id']; ?>" 
            class="text-primary"><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
        </tbody>
        <?php
      }
      ?>
    </table>
  </body>
  </html>