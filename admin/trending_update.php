<?php

include 'header.php'; 

include 'connect.php';

$id=$_GET['id'];

if(isset($_POST['update']))
{
  $cat_id=$_POST["cat_id"];
   $title=$_POST["title"];
  $destruction=$_POST["destruction"];
  
  $fname=$_FILES["images"]["name"];
  $tempname=$_FILES["images"]["tmp_name"];
  $target_dir="uploads/".$fname;

  move_uploaded_file($tempname,$target_dir);

  if(mysqli_query($con,"UPDATE trendingpost SET `trending_title`='$title',`trending_destruction`='$destruction',`cat_id`='$cat_id',`trending_image`='$target_dir' WHERE trending_id='$id'")) 
  {
    echo "<script>window.location='trending_show.php';</script>";
  }
  
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}

$query=mysqli_query($con,"SELECT * FROM trendingpost  WHERE trending_id='$id'");
$data=mysqli_fetch_array($query);

?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Trending Update</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">Trending News Update</h2>
    <div class="mx-auto mt-5" style="width: 350px;">
       <div class="mb-3">
      <label class="form-label">Author Title</label>
      <input type="text" class="form-control" name="title" value="<?php echo $data['trending_title'];?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Author Destruction</label>
      <input type="text" class="form-control" name="destruction" value="<?php echo $data['trending_destruction'];?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Trending Category</label>
      <select class="form-select" name="cat_id">
        <option>Select Category</option>
        <?php
        include("connect.php");
        $q=mysqli_query($con,"SELECT * FROM category");
        while ($c=mysqli_fetch_array($q,MYSQLI_ASSOC))

        {
         ?>
         <option value="<?php echo $c["cat_id"]; ?>">
          <?php echo $c["cat_name"]; ?>
        </option>
        <?php   
      }
      ?>  
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Author Images</label>
    <input type="file" class="form-control" name="images" value="<?php echo $data['trending_image'];?>"><br>
    <img src="<?php echo $data['trending_image'];?>" height=250px width=350px>
  </div>
    <button type="submit" class="btn btn-primary" name="update" >Update</button>
  </div>
</form>
</body>
</html>