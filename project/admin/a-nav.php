 <!-- header section start from here -->
 <!-- connecting database -->
            <?php include('../connection.php');
                include('a-login-check.php');
            ?>
            
 <div class="a-menu">
        <div class="wrapper">
            <ul class="a-nav">
                <li><a href="admin.php">Home</a></li>
                <li><a href="admin-manager.php">Admin</a></li>
                <li><a href="register-vehicles-request.php">Register Vehicle request</a></li>
                <li><a href="lost-vehicles-request.php">Lost Vehicle request</a></li>
                <?php if(isset($_SESSION['user'])) {?><li><a href="a-logout.php">Logout</a></li><?php }?>

            </ul>

        </div>

    </div>

    <!-- header section end here -->