<?php 

include 'header.php';

include 'connect.php';

if(isset($_POST['sub']))
{

  $cat=$_POST['cat'];
  $title=$_POST["title"];
  $destruction=$_POST['destruction'];
  
  $fname = $_FILES["image"]["name"];
  $tempname=$_FILES["image"]["tmp_name"];
  $target_dir = "uploads/".$fname;

  move_uploaded_file($tempname,$target_dir);


  $temp="INSERT INTO `allpost`( `allpost_title`,`cat_id`, `allpost_destruction`, `allpost_image`) VALUES ('$title','$cat','$destruction','$target_dir')";
  if(mysqli_query($con,$temp)) 
  {
    echo "<script>window.location='allpost_show.php';</script>";
  }
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}
?>


<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>All Post Insert</title>
</head>
<body>
  <form method="post" enctype="multipart/form-data">
    <h2 class="text-center pt-5 text-primary">All Post Insert</h2>
    <div class="mx-auto mt-5" style="width: 350px;">
     <div class="mb-3">
      <label class="form-label">All Post Title</label>
      <input type="text" class="form-control" name="title" required>
    </div>
     <div class="mb-3">
      <label class="form-label">All Post Destruction</label>
      <input type="text" class="form-control" name="destruction" required>
    </div>
     <div class="mb-3">
      <label class="form-label">All Post Category</label>
      <select class="form-select" required name="cat">
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
      <label class="form-label">All Post Images</label>
      <input type="file" class="form-control" name="image" required>
    </div>
    <button type="submit" class="btn btn-primary" name="sub" >Add</button>
  </div>
</form>
</body>
</html>