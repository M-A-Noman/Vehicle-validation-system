<?php include('C:\xampp\htdocs\project\connection.php') ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
      <div class="container">
                    
        <img src="logo.png" class="img-rounded" alt="Cinque Terre" width="204" height="105"> 
      </div>
      
    </div
    ><div class="container-fluid text-right margin-top">
      <?php include('C:\xampp\htdocs\project\global\search.php') ?>
    </div><a class="navbar-brand" href="http://localhost/project/">vehicle validation system</a>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="hvr"><a href="http://localhost/project/">Home</a></li>
        <li class="hvr"><a href="http://localhost/project/signup.php" >Sing UP</a></li>
        <li class="hvr"><a href="./about-us.php">About us</a></li>
        <li class="hvr"><a href="./help.php">Help</a></li>
      </ul><div class="container" >                          
          <div class="dropdown">
            <button class="dropbtn">Vehicle_Menu</button>
            <div class="dropdown-content">
              <a href="http://localhost/project/registerd_vehicle.php">registered vehicles</a>
              <!-- if login then go to actual page else go to login page start here -->
              
              <?php
                if(isset($_SESSION['site_user'])){
              ?>
              <a href="http://localhost/project/vehicle_registration.php">apply for registration</a><?php }
              else{
              ?>
              <a href="http://localhost/project/login.php">apply for registration</a><?php } ?>

              <!-- ======================================================================================= -->
              
              <?php
                if(isset($_SESSION['site_user'])){
              ?>
              <a href="http://localhost/project/lost_vehicles.php">lost vehicles</a><?php }
              else{
              ?>
              <a href="http://localhost/project/login.php">lost vehicles</a><?php } ?>
              <!-- if login then go to actual page else go to login page start here -->
            </div>
          </div>
      <ul class="nav navbar-nav navbar-right">
       <?php if(!isset($_SESSION['site_user'])){ ?> <li><a href="http://localhost/project/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li><?php } else { ?>

        <li><?php echo $_SESSION['site_user']."   " ?><a href="http://localhost/project/logout.php" style="display: inline;"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

        <?php } ?>
      </ul>
      
                
    </div>
  </div>
</nav>