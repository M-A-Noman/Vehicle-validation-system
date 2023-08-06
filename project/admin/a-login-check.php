<?php
    if(!isset($_SESSION['user'])){
        $_SESSION['no_login']="<div style='color:red;text-align:center;'>Please login to enter admin panel</div>";
        header('location:'.SITEURL.'admin/a-login.php');
    }
?>