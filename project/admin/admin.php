<?php  $conn = mysqli_connect("localhost","root","","vvs"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVS-ADMIN-PANEL-HOME-PAGE</title>
    <link rel="stylesheet" href="../admin.css">
    <style>
        body{
            background-image: url('../pics/ITS.jpg');
        }
    </style>
</head>
<body>
    <?php include('a-nav.php') ?>

    <!-- main section start from here -->
    <div class="a-main">
        <div class="wrapper">
        <?php 
        if(isset($_SESSION['admin_login'])){
          echo $_SESSION['admin_login'];
          unset($_SESSION['admin_login']);
        }
      ?>
           
        
        <table class="table">
            <caption><h2 class="text-center padding1">Registered Vehicles</h2></caption>
        <tr>
            <th class="t">SI NO</th>
            <th class="t">Name</th>
            <th class="t">E-mail</th>
            <th class="t">NID</th>
            <th class="t">Vehicle</th>
            <th class="t">Nameplate no</th>
            <th class="t">Status</th>
        </tr>
        <?php
           
            if($conn->connect_error)
            {
                die("Connection failed".$conn->connect_error);
            }
            $sql = "SELECT * from register_vehicles";
            $result=mysqli_query($conn,$sql);?>
            <?php
            if($result->num_rows >0)
            {
                while($row = $result -> fetch_assoc() AND $row['status']=="Registered"){
                //    echo "<tr><td>".$row["Name"]."</td><td>".$row["E-mail"]."</td><td>".$row["Nid"]."</td><td>".$row["Vehicle"]."</td><td>".$row["Nameplate no"]."</td><td>".$row["Status"]."</td></tr>" ;
                ?>
                    <tr>
                        <td class="t"> <?php echo $row["si"]; ?> </td>
                        <td class="t"> <?php echo $row["name"]; ?> </td>
                        <td class="t"> <?php echo $row["email"]; ?> </td>
                        <td class="t"> <?php echo $row["nid"]; ?> </td>
                        <td class="t"> <?php echo $row["type"]; ?> </td>
                        <td class="t"> <?php echo $row["nameplate_no"]; ?> </td>
                        <!-- <td class="t" <?php if($row["status"]=="Registered") echo "style=color:green;"; else if($row["status"]=="pending") echo"style=color:yellow"; else echo"style=color:red" ;?> > <?php echo $row["status"] ?> </td> -->
                        <td class="t"><?php echo $row['status'] ?> </td>
                    </tr>
                <?php
                }
            echo "</table>";
            }
            else{
                echo "0  result";
            }
           
        ?>
    </table>
    <table class="table">
        <caption><h2 class="text-center padding1">Users</h2></caption>
        <tr> 
            <th class="t">Full Name</th>
            <th class="t">E-mail</th>
            <th class="t">Username</th>
            <th class="t">Password</th>
        </tr>
        <?php
            $sql="SELECT * FROM user";
            $result = mysqli_query($conn,$sql);
            while($row = $result -> fetch_assoc()){
                ?>
                <tr>
                    <td class="t"><?php echo $row['fullname'] ?></td>
                    <td class="t"><?php echo $row['email'] ?></td>
                    <td class="t"><?php echo $row[ 'username'] ?></td>
                    <td class="t"><?php echo $row['password'] ?></td>
                </tr>
                <?php
            }
        ?>


    </table>
        </div>
            
       

    </div>

    <!-- header section end here -->

   <?php include('a-footer.php') ?>
    
</body>
</html>