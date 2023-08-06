<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Admin</title>
    <link rel="stylesheet" href="../admin.css">
    <style>
        body{
            background-image: url('../pics/ITS.jpg');
        }
    </style>
</head>
<body>
    <?php
        include('a-nav.php');
    ?>
    <div class="a-main">
        <div class="wrapper">
            <h1>Add Admin</h1>
            <br>
            <?php
               if(isset($_SESSION['add'])) {
                echo $_SESSION['add'].'<br>'.'<br>'.'<br>';
                unset($_SESSION['add']);
            }
            ?>
            <form action="add-admin.php" method="post">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td>
                            <input type="text" name="fullname" placeholder="Enter Admin Full Name">
                        </td>
                    </tr>
                    <tr>
                        <td>Username: </td>
                        <td>
                            <input type="text" name="username" placeholder="Enter Admin username">
                        </td>
                    </tr>
                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password" placeholder="Enter Admin password">
                        </td>
                    </tr>
                    <tr>
                        
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                        </td>
                    </tr>
                </table>

            </form>
        </div>
    </div>
    
    <?php
        include('a-footer.php');
    ?>
    <?php
        if(isset($_POST['submit'])){
            //storing data
            $fullname=$_POST['fullname'];
            $username=$_POST['username'];
            $password=$_POST['password'];
           
            
            //save the value to the database
            $sql="INSERT INTO admin value('','$fullname','$username','$password')";
            
            // executing query
            $res=mysqli_query($conn,$sql);
            if($res)
            {
                $_SESSION['add'] = "<div class='success'>Admin Added successfully.</div>";
                header("location:".SITEURL.'admin/admin-manager.php');
            }else
            {
                $_SESSION['add'] = "<div class='success'>Failed to add admin.</div>";
                header("location:".SITEURL.'admin/add-admin.php');
            }
        }
    ?>
    
</body>
</html>