<?php
//starting session
session_start();
// define site url
define('SITEURL','http://localhost/project/');

$conn = mysqli_connect("localhost","root","","vvs");
    if($conn){
        
    }else
    {
        echo "Failed to connect ";
    }
?>