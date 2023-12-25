<?php

include 'header.php'; 

include 'connect.php';

$id=$_GET['id'];

if(isset($_POST['sub']))
{

  $fname=$_FILES["images"]["name"];
  $tempname=$_FILES["images"]["tmp_name"];
  $target_dir="uploads/".$fname;

  move_uploaded_file($tempname,$target_dir);

  if(mysqli_query($con,"UPDATE `gallery` SET `name`='$target_dir' WHERE id='$id'")) 
  {
    echo "<script>window.location='gallery_show.php';</script>";
  }
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}

$query=mysqli_query($con,"SELECT * FROM gallery WHERE id='$id'");
$data=mysqli_fetch_array($query);

?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gallery Update</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">Gallery Update</h2>
    <div class="mx-auto mt-5" style="width:300px;">
     <div class="mb-3">
      <label class="form-label">Gallery Post Images</label>
      <input type="file" class="form-control" name="images" required value="<?php echo $data['name'];?>"><br>
    <img src="<?php echo $data['name'];?>" height=250px width=350px>
    </div>
    <button type="submit" class="btn btn-primary" name="sub" >Update</button>
  </div>
</form>
</body>
</html>