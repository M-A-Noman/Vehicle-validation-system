<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update vehicles current status</title>
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
            <h1>Update vehicles current status</h1>
            <br>
            <br>
        <form action="" method="POST">
            <table class="tbl-30">
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
<!-- php start form here -->
<?php


if(isset($_POST['submit'])){
    $nameplate_no=$_GET['nameplate_no']; 
    
    $status= $_POST['status'];
    //updating database
    $sql="UPDATE register_vehicles SET status='$status' WHERE nameplate_no='$nameplate_no'";
    // 
    $res=mysqli_query($conn,$sql);
    if($res){
        $sqll="DELETE FROM lost_vehicle_application WHERE nameplate_no='$nameplate_no'";
        $ress=mysqli_query($conn,$sqll);
        
        $_SESSION['lost-update']="<div class='success'>Successfully Update Vehicles Status.</div>";
       
        header('location:'.SITEURL.'admin/lost-vehicles-request.php');
    }
    else{
        $_SESSION['lost-update']="<div class='error'>Failed to update and Status.</div>";
        header('location:'.SITEURL.'admin/lost-vehicles-request.php');

    }
}


?>
<!-- php end here -->