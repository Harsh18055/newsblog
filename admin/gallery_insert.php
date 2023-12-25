<?php 

include 'header.php';
include 'connect.php';

if(isset($_POST['sub']))
{
  $fname = $_FILES["images"]["name"];
  $tempname=$_FILES["images"]["tmp_name"];
  $target_dir = "uploads/".$fname;

  move_uploaded_file($tempname,$target_dir);

  $temp="INSERT INTO `gallery`(`name`) VALUES ('$target_dir')";
  if(mysqli_query($con,$temp)) 
  {
    echo "<script>window.location='gallery_show.php';</script>";
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
  <title>Gallery Insert</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">Gallery Insert</h2>
    <div class="mx-auto mt-5" style="width:300px;">
     <div class="mb-3">
      <label class="form-label">Gallery Post Images</label>
      <input type="file" class="form-control" name="images" required>
    </div>
    <button type="submit" class="btn btn-primary" name="sub" >Add</button>
  </div>
</form>
</body>
</html>