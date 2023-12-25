<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Users show</title>
</head>
<body>
 <h2 class="text-center pt-5 text-primary">Users Show</h2>
 <table class="table table-striped mt-5 m-auto" style="width: 800px;">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include("connect.php");
    $temp=mysqli_query($con,"SELECT * FROM users");
    while($data=mysqli_fetch_array($temp))
    {
      ?>
      <tr>
        <th scope="row"><?php echo $data['id']; ?></th>
        <td><?php echo $data['full_name']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><a href="user_update.php?id=<?php echo $data['id'];?>" class="text-primary"><button type="button" class="btn btn-primary">Update</button></a></td>
        <td><a href="user_delete.php?uidi=<?php echo $data['id'];?>&amp;cname=<?php echo $data['id']; ?>" class="text-primary"><button type="button" class="btn btn-danger">Delete</button></a></td>
      </tr>
    </tbody>
    <?php
  }
  ?>
</table>
</body>
</html>