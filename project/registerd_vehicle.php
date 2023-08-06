
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Vehicle</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
            background-image: url("./pics/src_result.jpg") ;
        }
        th,td{
            border: 1px solid black;
            padding: 4px;
           
        }
        .t{
			/* text:bolder; */
			text-align:center;
			border: 1px solid black;
            padding: 4px; 
		}
       
    body{
      background-image: url('./pics/ITS.jpg');
    }
  
    </style>
    <?php include('C:\xampp\htdocs\project\global\header.php') ?>
</head>
<body>
    <?php include('./global/nav.php') ?>
    <table>
        <tr>
            <th class="t">Name</th>
            <th class="t">E-mail</th>
            <th class="t">NID</th>
            <th class="t">Vehicle</th>
            <th class="t">Nameplate no</th>
            <th class="t">Status</th>
        </tr>
        <?php
            $conn = mysqli_connect("localhost","root","","vvs");
            if($conn->connect_error)
            {
                die("Connection failed".$conn->connect_error);
            }
            $sql = "SELECT * from register_vehicles";
            $result=mysqli_query($conn,$sql);?>
            <?php
            if($result->num_rows >0)
            {
                while($row = $result -> fetch_assoc()){
                //    echo "<tr><td>".$row["Name"]."</td><td>".$row["E-mail"]."</td><td>".$row["Nid"]."</td><td>".$row["Vehicle"]."</td><td>".$row["Nameplate no"]."</td><td>".$row["Status"]."</td></tr>" ;
                ?>
                    <tr>
                        <td class="t"> <?php echo $row["name"]; ?> </td>
                        <td class="t"> <?php echo $row["email"]; ?> </td>
                        <td class="t"> <?php echo $row["nid"]; ?> </td>
                        <td class="t"> <?php echo $row["type"]; ?> </td>
                        <td class="t"> <?php echo $row["nameplate_no"]; ?> </td>
                        <td class="t" <?php if($row["status"]=="Registered") echo "style=color:green;"; else if($row["status"]=="pending") echo"style=color:yellow"; else echo"style=color:red" ;?> > <?php echo $row["status"] ?> </td>
                    </tr>
                <?php
                }
            echo "</table>";
            }
            else{
                echo "0  result";
            }
            $conn->close();
        ?>
    </table>
    
</body>
</html>