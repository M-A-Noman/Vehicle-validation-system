<?php include('../connection.php'); ?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="../a-login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login </h1>
      <?php
        if(isset($_SESSION['admin_login'])){
          echo $_SESSION['admin_login'];
          unset($_SESSION['admin_login']);
        }
        if(isset($_SESSION['no_login'])){
          echo $_SESSION['no_login'];
          unset($_SESSION['no_login']);
        }
      ?>
      
     
      <form action="" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span>
     </span>
          <label>Username</label>
      
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
         
        </div>
      </form>
    </div>
    
    

  </body>
</html>
<?php 


  if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $res=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($res);
    if($count==1){
      $_SESSION['admin_login']="<div class='success'>Successfully logged in.</div>";
      $_SESSION['user']=$username;
      header('location:'.SITEURL.'admin/admin.php');
    }else{
      $_SESSION['admin_login']="<div style='color:red;text-align:center;'>Failed to login</div>";
      header('location:'.SITEURL.'admin/a-login.php');
    }
  }
?>
