<?php

include 'header.php'; 

include 'connect.php';

$id=$_GET['id'];

if(isset($_POST['update']))
{

  $name=$_POST["name"];
  $email=$_POST['email'];
  $password=$_POST['password'];

  if(mysqli_query($con,"UPDATE `users` SET `full_name`='$name',`email`=' $email',`password`='$password' WHERE id='$id'")) 
  {
    echo "<script>window.location='user_show.php';</script>";
  }
  else
  {
    echo "Cannot Insert".mysqli_errno();
  }
}

$query=mysqli_query($con,"SELECT * FROM users WHERE id='$id'");
$data=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Uers Update</title>
</head>
<body>
  <form  method="POST">
    <h2 class="text-center pt-5 text-primary">Uers Update</h2>
    <div class="mx-auto mt-5" style="width: 200px;">
     <div class="mb-3">
      <label  class="form-label">Full Name</label>
      <input type="text" value="<?php echo $data['full_name'];?>" class="form-control" name="name" >
    </div>
     <div class="mb-3">
      <label  class="form-label">Email</label>
      <input type="text" value="<?php echo $data['email'];?>" class="form-control" name="email" >
    </div>
     <div class="mb-3">
      <label  class="form-label">Password</label>
      <input type="text" value="<?php echo $data['password'];?>" class="form-control" name="password" >
    </div>
    <button type="submit" class="btn btn-primary" name="update">Update</button>
  </div>
</form>
</body>
</html>