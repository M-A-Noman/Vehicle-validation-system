<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register-vehicles-request</title>
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
                if(isset($_SESSION['update'])){
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
            ?>
           
        
        <table class="table">
            <caption><h2 class="text-center padding1">Pending Request</h2></caption>

            <tr>
            <th class="t">SI NO</th>
            <th class="t">Name</th>
            <th class="t">E-mail</th>
            <th class="t">NID</th>
            <th class="t">Vehicle</th>
            <th class="t">Nameplate no</th>
            <th class="t">Status</th>
            <th class="t">Update</th>
        </tr>
        <?php
           
           
            $sql = "SELECT * from register_vehicles";
            $result=mysqli_query($conn,$sql);
            $si=1;
                while($row = $result -> fetch_assoc()){
                    if($row["status"]=="pending"){
                ?>
                    <tr>
                        <td class="t"> <?php echo $si++; ?> </td>
                        <td class="t"> <?php echo $row["name"]; ?> </td>
                        <td class="t"> <?php echo $row["email"]; ?> </td>
                        <td class="t"> <?php echo $row["nid"]; ?> </td>
                        <td class="t"> <?php echo $row["type"]; ?> </td>
                        <td class="t"> <?php echo $row["nameplate_no"]; ?> </td>
                        <!-- <td class="t" <?php if($row["status"]=="Registered") echo "style=color:green;"; else if($row["status"]=="pending") echo"style=color:yellow"; else echo"style=color:red" ;?> > <?php echo $row["status"] ?> </td> -->
                        <td class="t"><?php echo $row['status'] ?> </td>
                        <td class="t"><a href="update-status.php?id=<?php echo $row['si']; ?>" class="btn-secondary">Update Status</a></td>
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
