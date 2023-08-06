<?php
include('../connection.php');
session_destroy();
    header('location:'.SITEURL.'admin/a-login.php');

?>