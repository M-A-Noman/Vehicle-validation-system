<?php
    include('../connection.php');
    //get id of index that will be deleted
    $id=$_GET['id'];
    $sql="DELETE FROM admin WHERE id=$id ";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
        $_SESSION['delete']="<div class='success'>Successfully deleted admin.</div>" ;
        header('location:'.SITEURL.'admin/admin-manager.php');
    }else
    {
        $_SESSION['delete']="<div class='error'>Failed to delete admin.</div>" ;
        header('location:'.SITEURL.'admin/admin-manager.php');
    }
?>