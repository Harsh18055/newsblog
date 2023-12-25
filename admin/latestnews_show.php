<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Latest News</title>
</head>
<body>
 <h2 class="text-center pt-5 text-primary">Latest News Show</h2>
 <div class="container pt-5">
 <a href="latestnews_insert.php"><button type="button" class="btn btn-success" style="margin-left:1040px ;">ADD NEWS</button></a>   
 </div>
 <table class="table table-striped mt-5 m-auto" style="width: 1000px;" enctype="multipart/form-data">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Author Name</th>
      <th scope="col">Category</th>
      <th scope="col">Author News</th>
      <th scope="col">Author Date</th>
      <th scope="col">Author Destruction</th>
      <th scope="col">Author Images</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");

    $temp=mysqli_query($con,"SELECT category.cat_name,latestnew.id,latestnew.author_name,latestnew.author_news,latestnew.date,latestnew.destruction,latestnew.images FROM latestnew JOIN  category  ON category.cat_id = latestnew.cat_id");

    //$temp=mysqli_query($con,"SELECT * FROM `latestnew`");

    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $data['id']; ?></th>
        <td><?php echo $data['author_name']; ?></td>
       <td><?php echo $data['cat_name']; ?>
        <td><?php echo $data['author_news']; ?></td>
        <td><?php echo $data['date']; ?></td>
        <td><?php echo $data['destruction']; ?></td>
        <td><img height=150px width=160px src="<?php echo $data['images']; ?>"></td>
        <td><a href="latestnews_update.php?id=<?php echo $data['id']; ?>"
          class="text-primary"><button type="button" class="btn btn-primary">Update</button></a></td>
          <td><a href="latestnews_delete.php?uidi=<?php echo $data['id']; ?>" 
            class="text-primary"><button type="button" class="btn btn-danger">Delete</button></a></td>
          </tr>
        </tbody>
        <?php
      }
      ?>
    </table>
  </body>
  </html>