<?php
include('connection.php');
   
    if(isset($_GET['submit'])){
    $fullname=$_GET['fullname'];
    $email = $_GET['email'];
    $username= $_GET['username'];
    $password=$_GET['password'];
    $sql = "INSERT INTO user VALUES ('','$fullname','$email','$username','$password')";
    $res=mysqli_query($conn,$sql);
    if($res){
      $_SESSION['signup_success']="<div class='success' style='text-align:center;'>Successfully signed up.</div>";
      header('location:'.SITEURL.'signup.php');
    }
    else{
      $_SESSION['signup_failed']="<div class='error' style='text-align:center;'>Failed while registering.</div>";
      header('location:'.SITEURL.'signup.php');
    }
  }
?>