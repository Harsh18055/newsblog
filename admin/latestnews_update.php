<?php

include 'header.php'; 

include 'connect.php';

$id=$_GET['id'];

if(isset($_POST['update']))
{
  
  $name=$_POST["name"];
  $cat_id=$_POST["cat_id"];
  $news=$_POST["news"];
  $date=$_POST["date"];
  $destruction=$_POST["destruction"];
  


  $fname = $_FILES["images"]["name"];
  $tempname=$_FILES["images"]["tmp_name"];
  $target_dir = "uploads/".$fname;

  move_uploaded_file($tempname,$target_dir);

  $temp="UPDATE latestnew SET `author_name`='$name',`cat_id`='$cat_id',`author_news`='$news',`date`=' $date',`destruction`='$destruction',`images`='$target_dir' WHERE id='$id'";

  if(mysqli_query($con,$temp)) 
  {
    echo "<script>window.location='latestnews_show.php';</script>";
  }
  
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}

$query=mysqli_query($con,"SELECT * FROM latestnew  WHERE id='$id'");
$data=mysqli_fetch_array($query);

?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Latest News Update</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">Latest News Update</h2>
    <div class="mx-auto mt-5" style="width: 350px;">
     <div class="mb-3">
      <label class="form-label">Author Name</label>
      <input type="text" class="form-control" name="name" value="<?php echo $data['author_name'];?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Latest News Category</label>
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
    <label class="form-label">Author News</label>
    <input type="text" class="form-control" name="news" value="<?php echo $data['author_news'];?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Author Date</label>
    <input type="text" class="form-control" name="date" value="<?php echo $data['date'];?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Author Destruction</label>
    <input type="text" class="form-control" name="destruction" value="<?php echo $data['destruction'];?>">
  </div>
  <div class="mb-3">
    <label class="form-label">Author Images</label>
    <input type="file" class="form-control" name="images" value="<?php echo $data['images'];?>"><br>
    <img src="<?php echo $data['images'];?>" height=250px width=350px>
  </div>
  <button type="submit" class="btn btn-primary" name="update" >Update</button>
</div>
</form>
</body>
</html>