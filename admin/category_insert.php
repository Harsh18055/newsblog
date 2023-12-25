<?php 

include 'header.php';
include 'connect.php';

if(isset($_POST['sub']))
{
  $name=$_POST["name"];
  $temp="INSERT INTO category (`cat_name`) VALUES ('$name')";
  if(mysqli_query($con,$temp) && $name!="") 
  {
    echo "<script>window.location='Category_show.php';</script>";
  }
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Category Insert</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">Category Show</h2>
    <div class="mx-auto mt-5" style="width: 200px;">
     <div class="mb-3">
      <label class="form-label">Add Category</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <button type="submit" class="btn btn-primary" name="sub" >Add</button>
  </div>
</form>
</body>
</html>