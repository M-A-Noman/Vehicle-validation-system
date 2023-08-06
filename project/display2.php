<?php
include('connection.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM user WHERE username='$username' AND password= '$password'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count==1){
        $_SESSION['login_success']="<div class='success' style='text-align:center;'>Successfully logged in.</div>";
        $_SESSION['site_user']=$username;
        header('location:'.SITEURL.'index.php');
    }else{
        $_SESSION['login_failed']="<div class='error' style='text-align:center;'>Username and Password dose not match. Please enter a valid username and password or create a new account if you are new in this website</div>";
        header('location:'.SITEURL.'login.php');
    }
}
?>