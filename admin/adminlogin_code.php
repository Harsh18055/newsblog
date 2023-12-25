<?php

$con=mysqli_connect("localhost","root","","news");

  if (isset($_POST['submit'])) 
  {
    $email=$_POST['email'];
  $password=$_POST['password'];

  $query="SELECT * FROM admin WHERE email='$email' and password='$password'";

  $res=mysqli_query($con,$query);
  $rows=mysqli_num_rows($res);

  if($rows == 1)
  {
    ?>
    <script>alert("Login  Successfully")</script>
    <?php
    echo "<script>window.location='index.php';</script>";

  }
  else
  {
    ?>
    <script>alert("Login Not Successfully")</script>
    <?php
     echo "<script>window.location='adminlogin.php';</script>";
  }

  mysql_close($con);
  }



?>