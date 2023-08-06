<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result</title>
    <?php include('./header.php') ?>
    <link rel="stylesheet" href="../style.css">
    <style>
        body{
            background-image: url("../pics/src_result.jpg") ;

        }

         table{
            border: 1px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        /* th,td{
            border: 1px solid black;
            padding: 4px;

        } */
        .t{
			text-align:center;
			border: 1px solid black;
            padding: 6px;
		}
        .header{
            text-align: center;
        }
       .btn{
           text-decoration: none;
           padding: .5%;
           /* margin-bottom: 10%; */
           margin-left: 90%;
          border-radius: 5px;
          border:1px solid black;
		  background-color:white;
           color: rgb(12, 108, 128);
       }
       .btn:hover{
		   color:white;
		  background-color:rgb(12, 108, 128);
		  border:none;
       }
       table{
           margin-top: 1%;
       }
	   /*for header decoration>*/
	   .content{
		   padding:20px 20px;
		   background-color:#eee;
		   border-radius:15px;
		   margin:20px 0px 50px 0px;
	   }
       .bt{
           background-color: rgb(149, 212, 201);
       }
      

    </style>
   
</head>
<body>
    <?php include('./nav.php') ?>


    <h2 class="header hdr">Welcome to Vehicle Validation System</h2>

    <h3 class="header">Here is Your search result</h3>


    <a class="btn" href="http://localhost/project/">back to home</a>


<?php
$conn = mysqli_connect("localhost", "root", "", "vvs");

if (isset($_POST["search"])) {

    $str = $_POST["src"];
    $result = mysqli_query($conn, "SELECT * FROM register_vehicles WHERE Nameplate_no LIKE '%$str%' ");
    $result1 = mysqli_query($conn, "SELECT * FROM register_vehicles WHERE Nameplate_no LIKE '%$str%' ");
    if(mysqli_fetch_array($result1)){
    ?>
    
  <table>
            <tr>
                <th class="t">Name</th>
                <th class="t">E-mail</th>
                <th class="t">NID</th>
                <th class="t">Vehicle</th>
                <th class="t">Driving License</th>
                <th class="t">Nameplate no</th>
                <th class="t bt">Status</th>
            </tr>
        <?php
    while ($row = mysqli_fetch_array($result)) {
        ?>

            <tr>
                        <td class="t"> <?php echo $row["name"]; ?> </td>
                        <td class="t"> <?php echo $row["email"]; ?> </td>
                        <td class="t"> <?php echo $row["nid"]; ?> </td>
                        <td class="t"> <?php echo $row["type"]; ?> </td>
                        <td class="t"> <?php echo $row["dl"]; ?> </td>
                        <td class="t"> <?php echo $row["nameplate_no"]; ?> </td>
                        <td class="t bt" <?php if ($row["status"] == "Registered") {
            echo "style=color:green;";
        } else if ($row["status"] == "pending") {
            echo "style=color:yellow;";
        } else {
            echo "style=color:red;background-color:#0x95D4C9";
        }
        ?> > <?php echo $row["status"] ?> </td>
            </tr>

<?php
}

    ?> </table><?php
}
else{
    ?>
    <span style="color: red;display:block;text-align:center; font-size:5vh;">No such vehicle found with NAMEPLATE NO:  <?php echo $str; ?></span>
    <?php
    

}
}

?>

    </body>
</html>