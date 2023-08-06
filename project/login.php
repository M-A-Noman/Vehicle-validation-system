<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <?php include('C:\xampp\htdocs\project\global\header.php') ?>
  <style>
    body{
      background-image: url('./pics/bg.png');
    }
    .bg{
      width: 40%;
    margin-left: 30%;
    margin-top: .1%;
    background-color: #fff;
    }
    
  </style>

</head>

<body>
  <?php include('C:\xampp\htdocs\project\global\nav.php') ?>

  <div class="center">
    <h1>Login</h1>
    <?php 
      if(isset($_SESSION['login_failed'])){
        echo $_SESSION['login_failed'];
        unset($_SESSION['login_failed']);
      }
    ?>
    <form method="POST" action="display2.php" >
      <div class="txt_field">
      <input type="text"  name="username" required>  
      <span></span>
        <label for="Username" class="hw">Username</label>
        
      </div>

      <div class="txt_field">
      <input type="password"  name="password" required>  
      <span></span>
        <label for="password" class="hw">Password</label>
        
      </div>

      <div class="pass">
        <input type="submit"  name="submit" class="submit" value="Login">
      </div>
      <div class="noaccount ">
        <p><i>Don't have a acoount? <a href="./signup.php" class="noaccount-a">SIGN UP</a> here</i></p>
      </div>
    </form>
  </div>
</body>

</html>