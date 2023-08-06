<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Manager</title>
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
            <h1>Manage Admin</h1>
            <br>
            <?php
            if (isset($_SESSION['add'])) {
                echo $_SESSION['add'] . '<br>' . '<br>' . '<br>';
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'].'<br>' . '<br>' . '<br>';
                unset($_SESSION['delete']);
            }
            ?>
            <a href="add-admin.php" class="btn-primary">ADD ADMIN</a>
            <br><br><br>
            <table class="a-m-t">
                <tr>
                    <th>SI</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
                <?php
                $sql = "SELECT * FROM admin";
                $result = mysqli_query($conn, $sql);
                $sn = 1;
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $sn++ ?>.</td>
                        <td><?php echo $row['fullname'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><a href="delete-admin.php?id=<?php echo $row['id']; ?>" class="btn-danger">Delete Admin</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>


    <?php include('a-footer.php') ?>
</body>

</html>