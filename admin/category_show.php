<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>category_show</title>
</head>
<body>
 <h2 class="text-center pt-5 text-primary">Category Show</h2>
  <div class="container pt-5">
 <a href="category_insert.php"><button type="button" class="btn btn-success" style="margin-left:900px ;">ADD CATEGORY</button></a>   
 </div>
 <table class="table table-striped mt-5 m-auto" style="width: 800px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $temp=mysqli_query($con,"SELECT * FROM category");
    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $data['cat_id']; ?></th>
        <td><?php echo $data['cat_name']; ?></td>
        <td><a href="category_update.php?id=<?php echo $data['cat_id'];?>" class="text-primary"><button type="button" class="btn btn-primary">Update</button></a></td>
        <td><a href="category_delete.php?uidi=<?php echo $data['cat_id'];?>&amp;cname=<?php echo $data['cat_name']; ?>" class="text-primary"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
    </tbody>
    <?php
  }
  ?>
</table>
</body>
</html>