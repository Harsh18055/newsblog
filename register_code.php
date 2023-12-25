<?php

$con=mysqli_connect("localhost","root","","news");

if (isset($_POST['signup'])) 
{
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="INSERT INTO `users`(`full_name`, `email`, `password`) VALUES ('$username','$email','$password')";

    $res=mysqli_query($con,$query);

    if($res)
    {
        echo '<script>alert("Welcome to Login Page")</script>';
        header('location:login.php');
        
    }
    else
    {
        echo '<script>alert("Envalid")</script>';
        header('location:register.php');
    }
    mysql_close($con);
}


?>