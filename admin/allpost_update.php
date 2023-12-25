<?php

include 'header.php'; 

include 'connect.php';

$id=$_GET['id'];

if(isset($_POST['update']))
{

  $title=$_POST["title"];
  $cat=$_POST["cat"];
  $destruction=$_POST["destruction"];
  
  $fname = $_FILES["images"]["name"];
  $tempname=$_FILES["images"]["tmp_name"];
  $target_dir = "uploads/".$fname;

  move_uploaded_file($tempname,$target_dir);

  $temp="UPDATE `allpost` SET `cat_id`='$cat',`allpost_title`=' $title',`allpost_destruction`='$destruction',`allpost_image`='$target_dir' WHERE allpost_id='$id'";

  if(mysqli_query($con,$temp)) 
  {
     echo "<script>window.location='allpost_show.php';</script>";
  }
  else
  {
    echo "Cannot Insert";
  }
}

$query=mysqli_query($con,"SELECT * FROM allpost WHERE allpost_id='$id'");
$data=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Post Update</title>
</head>
<body>
  <form  method="POST" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">All Post  Update</h2>
    <div class="mx-auto mt-5" style="width: 350px;">
     <div class="mb-3">
      <label  class="form-label">All Post Title</label>
      <input type="text" value="<?php echo $data['allpost_title'];?>" class="form-control" name="title" >
    </div>
     <div class="mb-3">
      <label class="form-label">All Post Category</label>
      <select class="form-select" name="cat">
        <option selected disabled >Select Category</option>
        <?php
        include("connect.php");
        $q=mysqli_query($con,"SELECT * FROM category");
        while ($c=mysqli_fetch_array($q,MYSQLI_ASSOC))

        {
         ?>
         <option value="<?php echo $c["cat_id"]; ?>"><?php echo $c["cat_name"]; ?></option>
         <?php   
       }
       ?>  
     </select>
   </div>
    <div class="mb-3">
      <label  class="form-label">All Post Destruction</label>
      <input type="text" value="<?php echo $data['allpost_destruction'];?>" class="form-control" name="destruction" >
    </div>
   <div class="mb-3">
    <label class="form-label">Author Images</label>
    <input type="file" class="form-control" name="images" value="<?php echo $data['allpost_image'];?>"><br>
    <img src="<?php echo $data['allpost_image'];?>" name="images" height=250px width=350px>
  </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
  </div>
</form>
</body>
</html>