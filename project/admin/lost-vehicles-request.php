<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost-vehicles-request</title>
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
    <?php 
                if(isset($_SESSION['lost-update'])){
                    echo $_SESSION['lost-update'];
                    unset($_SESSION['lost-update']);
                }
            ?>
    <table class="table">
            <caption><h2 class="text-center padding1">Pending Request</h2></caption>


            <tr>
            <th class="t">SI NO</th>
            <th class="t">Nameplate No</th>
            <th class="t">Vehicle Type</th>
            <th class="t">FIR</th>
            <th class="t">Update request</th>
        </tr>
        <?php
           
           
            $sql = "SELECT * from lost_vehicle_application";
            $result=mysqli_query($conn,$sql);
            $si=1;
                while($row = $result -> fetch_assoc()){
                   {
                ?>
                    <tr>
                        <td class="t"> <?php echo $si++; ?> </td>
                        <td class="t"> <?php echo $row["nameplate_no"]; ?> </td>
                        <td class="t"> <?php echo $row["type"]; ?> </td>
                        <td class="t"> <?php echo $row["fir"]; ?> </td>
                        <td class="t"><a href="update-status-lost.php?nameplate_no=<?php echo $row['nameplate_no']?>" class="btn-secondary">Update Status</a></td>
                    </tr>
                <?php
                }
            }
           
        ?>
        </table>
    </div>
</div>
<?php include('a-footer.php') ?>
</body>
</html>
