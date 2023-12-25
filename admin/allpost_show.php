<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>All Post</title>
</head>
<body>
 <h2 class="text-center pt-5 text-primary">All Post Show</h2>
  <div class="container pt-5">
 <a href="allpost_insert.php"><button type="button" class="btn btn-success" style="margin-left:940px ;">ADD NEWS</button></a>   
 </div>
 <table class="table table-striped mt-5 m-auto" style="width: 1000px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">All Post Title</th>
      <th scope="col">All Post Category</th>
      <th scope="col">All Post Images</th>
      <th scope="col">All Post Destruction</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th> 
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $temp=mysqli_query($con,"SELECT category.cat_name,allpost.allpost_id,allpost.allpost_title,allpost.allpost_destruction,allpost.allpost_image FROM allpost JOIN category  ON category.cat_id = allpost.cat_id");
    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $data['allpost_id']; ?></th>
        <td><?php echo $data['allpost_title']; ?></td>
        <td><?php echo $data['cat_name']; ?></td>
        <td><?php echo $data['allpost_destruction'];?></td>
        <td><img height=150px width=160px src="<?php echo $data['allpost_image']; ?>"></td>
        <td><a href="allpost_update.php?id=<?php echo $data['allpost_id']; ?>"
          class="text-primary"><button type="button" class="btn btn-primary">Update</button></a></td>
        <td><a href="allpost_delete.php?uidi=<?php echo $data['allpost_id']; ?>" 
            class="text-primary"><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
        </tbody>
        <?php
      }
      ?>
    </table>
  </body>
  </html>