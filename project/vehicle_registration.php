<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Your device</title>
    <?php include('C:\xampp\htdocs\project\global\header.php') ?>

</head>
<body>
<?php include('C:\xampp\htdocs\project\global\nav.php') ?>

    <div>
        <h2 class="tag">Vehicle's Registration</h2>
          <div>
            <form action="./display.php" method="post">
                <div class="form-group">
                    <label for="name">Owner's Name : </label>
                    <input type="text" class="form-control" name="name">
               </div>

               <div class="form-group">
                <label for="email">Email : </label><?php
                    if(isset($_SESSION['email'])){
                        echo $_SESSION['email'];
                        unset($_SESSION['email']);
                    }
                ?>
                <input type="email" class="form-control" name="email" required>
               </div>

                <div class="form-group">
                     <label for="dl">Driving License Number : </label>
                     <?php
                    if(isset($_SESSION['dl'])){
                        echo $_SESSION['dl'];
                        unset($_SESSION['dl']);
                    }
                ?>
                     <input type="number" class="form-control" name="dl" required>
                </div>

                <div class="form-group">
                    <label for="nid">Owner's NID : </label>
                    <?php
                    if(isset($_SESSION['nid'])){
                        echo $_SESSION['nid'];
                        unset($_SESSION['nid']);
                    }
                ?>
                    <input type="number" class="form-control" name="nid" required>
               </div>

               <div class="form-group">
                <label for="type">Vehicle's Type : </label> 
                <div class="dropdown"><select name="type"><option>Car</option>
                    <option>Bus</option>
                    <option selected>Bike</option>
                    <option>Truck</option></select>
                  </div>   
               </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="Submit" name="submit_registration">
               
                    <input type="reset" class="btn btn-secondary" value="Reset" >
                </div>                    
             </form>
    </div>
    <?php include('C:\xampp\htdocs\project\global\footer.php') ?>

</body>
</html>