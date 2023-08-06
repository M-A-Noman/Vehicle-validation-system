<?php
    $id=$_GET['id']; 
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update status</title>
    <link rel="stylesheet" href="../admin.css">
    <style>
        body{
            background-image: url('../pics/ITS.jpg');
        }
    </style>
</head>
<body>
    
<?php include('a-nav.php') ?>
<div class="a-main">
    <div class="wrapper">
        <h1>Update Vehicles Status and Nameplate no</h1>
        <br>
            <?php 
                if(isset($_SESSION['update'])){
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
            ?>
         <br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Nameplate Number:</td>
                    <td><input type="text" name="nameplate_no" placeholder="T1524123"></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="status" placeholder="Registered"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Update" class="btn-secondary">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>

<?php include('a-footer.php') ?>
</body>
</html>
<?php


    if(isset($_POST['submit'])){
        $nameplate_no=$_POST['nameplate_no'];
        $check="SELECT * FROM register_vehicles WHERE nameplate_no='$nameplate_no'";
        $check1=mysqli_query($conn,$check);
        $count=mysqli_num_rows($check1);
        if($count>=1){
            $_SESSION['update']="<div class='error'>Nameplate Number is already taken.Please try another Nameplate Number.</div>";
            header('location:'.SITEURL.'admin/update-status.php?id=$id');
          
            
        }else if($count==0){
        $status= $_POST['status'];
        //updating database
        $sql="UPDATE register_vehicles SET nameplate_no='$nameplate_no',status='$status' WHERE si='$id'";
        // 
        $res=mysqli_query($conn,$sql);
        if($res){
            $_SESSION['update']="<div class='success'>Successfully Update Vehicles Nameplate No and Status.</div>";
            header('location:'.SITEURL.'admin/register-vehicles-request.php');
        }
        else{
            $_SESSION['update']="<div class='error'>Failed to update Nameplate No and Status.</div>";
            header('location:'.SITEURL.'admin/register-vehicles-request.php');

        }
    }
    }

?>