<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up here</title>
  <?php include('C:\xampp\htdocs\project\global\header.php') ?>
  <style>
    body{
      background-image: url('./pics/bg.png');
    }
  </style>

</head>

<body>
  <?php include('C:\xampp\htdocs\project\global\nav.php') ?>
  <!-- signup form start from here -->
  <div>
    <h2 class="tag hw">Sign-up</h2>
    <?php 
      if(isset($_SESSION['signup_success'])){
        echo $_SESSION['signup_success'];
        unset($_SESSION['signup_success']);
      }
      if(isset($_SESSION['signup_failed'])){
        echo $_SESSION['signup_failed'];
        unset($_SESSION['signup_failed']);
      }
    ?>
    <form action="display1.php">
      <div class="form-group">
        <label for="fullname" class="hw">Fullname</label>
        <input type="text" class="form-control hw" name="fullname">
      </div>

      <div class="form-group">
        <label for="email" class="hw">Email</label>
        <input type="email" class="form-control hw" name="email" required>
      </div>

      <div class="form-group">
        <label for="Username" class="hw">Username</label>
        <input type="text" class="form-control hw" name="username" required>
      </div>

      <div class="form-group">
        <label for="password" class="hw">Password</label>
        <input type="password" class="form-control hw" name="password" required>
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-secondary sbmt" name="submit" value="Register">
        <input type="reset" class="btn btn-secondary" value="Reset">
      </div>
      <div class="clr hw">
        <p><i>Already Have mebership? <a href="./login.php" class="have-account">LOG IN</a> here</i></p>
      </div>
    </form>
  </div>
  <!-- signup form start from here -->
  
  
  </body>

</html>
