<?php

include 'header.php'; 

include 'connect.php';

$id=$_GET['id'];

if(isset($_POST['update']))
{

  $name=$_POST["name"];
  if(mysqli_query($con,"UPDATE `category` SET `cat_name`='$name' WHERE cat_id='$id'")) 
  {
    echo "<script>window.location='Category_show.php';</script>";
  }
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}

$query=mysqli_query($con,"SELECT * FROM category WHERE cat_id='$id'");
$data=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category Insert</title>
</head>
<body>
  <form  method="POST">
    <h2 class="text-center pt-5 text-primary">Category Update</h2>
    <div class="mx-auto mt-5" style="width: 200px;">
     <div class="mb-3">
      <label  class="form-label">Update Category</label>
      <input type="text" value="<?php echo $data['cat_name'];?>" class="form-control" name="name">
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
  </div>
</form>
</body>
</html>