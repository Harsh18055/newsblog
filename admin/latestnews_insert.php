<?php 

include 'header.php';

include 'connect.php';

if(isset($_POST['sub']))
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

 
  $temp="INSERT INTO `latestnew`(`author_name`,`cat_id`, `author_news`, `date`, `destruction`, `images`) VALUES ('$name','$cat_id','$news',' $date','$destruction','$target_dir')";

  if(mysqli_query($con,$temp)) 
  {
     echo "<script>window.location='latestnews_show.php';</script>";
  }
  else
  {
     echo '<script>alert("Erroe!")</script>';
  }
}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Latest News Insert</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">Latest News Insert</h2>
    <div class="mx-auto mt-5" style="width: 350px;">
     <div class="mb-3">
      <label class="form-label">Author Name</label>
      <input type="text" class="form-control" name="name" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Latest News Category</label>
      <select class="form-select" name="cat_id" >
        <option selected disabled required >Select Category</option>
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
    <input type="text" class="form-control" name="news" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Author Date</label>
    <input type="text" class="form-control" name="date" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Author Destruction</label>
    <input type="text" class="form-control" name="destruction" required>
  </div>
  <div class="mb-3">
    <label for="formFile" class="form-label">Author Images</label>
    <input class="form-control" type="file" name="images" required>
  </div>
  <button type="submit" class="btn btn-primary" name="sub" >Add</button>
</div>
</form>
</body>
</html>