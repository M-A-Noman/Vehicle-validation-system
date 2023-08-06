<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost vehicle</title>
    <?php include('C:\xampp\htdocs\project\global\header.php') ?>

</head>
<body>
<?php include('C:\xampp\htdocs\project\global\nav.php') ?>

    <div>
        <h2 class="tag">Lost Vehicle</h2>
          <div>
          <?php
                    if(isset($_SESSION['lost_request'])){
                        echo $_SESSION['lost_request'];
                        unset($_SESSION['lost_request']);
                    }
                ?>
            <form action="./display.php" method="POST">

                <div class="form-group">
                     <label for="nameplate">Vehicle's Nameplate Number : </label>
                     <input type="text" class="form-control" name="nameplate" required>
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
                     <label for="fir">FIR No : </label>
                     <?php
                    if(isset($_SESSION['fir'])){
                        echo $_SESSION['fir'];
                        unset($_SESSION['fir']);
                    }
                ?>
                     <input type="text" class="form-control" name="fir" required>
                </div>
                

                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="Submit" name="submit_lost">
                </div>                    
             </form>
    </div>
    <?php include('C:\xampp\htdocs\project\global\footer.php') ?>

</body>
</html>