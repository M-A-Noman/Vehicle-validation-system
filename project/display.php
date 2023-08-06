
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-wi*th, initial-scale=1.0">
    <title>Registration Complete</title>
    <?php include 'C:\xampp\htdocs\project\global\header.php'?>
</head>
<body>
   <?php include 'C:\xampp\htdocs\project\global\nav.php'?>

    <?php
if (isset($_POST['submit_registration'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    // checking
   
        $sql="SELECT * FROM register_vehicles WHERE email='$email'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['email']="<div style='color:#ff4757;'>E-mail must be unique for every user.</div>";
            header('location:'.SITEURL.'vehicle_registration.php');
            exit();
        }
    // checking
    $dl = $_POST['dl'];
    // checking
        $sql="SELECT * FROM register_vehicles WHERE dl='$dl'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['dl']="<div style='color:#ff4757;'>Driving License must be unique for every user.</div>";
            header('location:'.SITEURL.'vehicle_registration.php');
            exit();
        }
    // checking
    $nid = $_POST['nid'];
    // checking
        $sql="SELECT * FROM register_vehicles WHERE nid='$nid'";
        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);
        if($count==1){
            $_SESSION['nid']="<div style='color:#ff4757;'> NID number must be unique for every user.</div>";
            header('location:'.SITEURL.'vehicle_registration.php');
            exit();
        }
    // checking
    $type = $_POST['type'];
    $query = "INSERT INTO register_vehicles VALUES('','$name','$email','$dl','$nid','$type','pending','pending')";
    $data = mysqli_query($conn, $query);
    if ($data) {
        $_SESSION['register']="<div class='success'>Successfully applied for Registration</div>";
        header('location:'.SITEURL.'vehicle_registration.php');

    }  else {
        $_SESSION['register']="<div class='error'>Registration Failed.Try again later.</div>";
        header('location:'.SITEURL.'vehicle_registration.php');
    }
}
else if (isset($_POST['submit_lost'])) {
    $nameplate_no = $_POST["nameplate"];
    $type = $_POST["type"];
    $fir = $_POST["fir"];
     // checking
     $sql="SELECT * FROM lost_vehicle_application WHERE fir='$fir'";
     $res=mysqli_query($conn,$sql);
     $count=mysqli_num_rows($res);
     if($count==1){
         $_SESSION['fir']="<div style='color:#ff4757;'> FIR number must be unique for every CASE.</div>";
         header('location:'.SITEURL.'lost_vehicles.php');
         exit();
     }
 // checking
    $query = " INSERT INTO lost_vehicle_application VALUES('','$nameplate_no','$type','$fir')";
    $res=mysqli_query($conn,$query);
    if($res){
        $_SESSION['lost_request']="<div style='color:#2ed573;'>Successfully submitted to the server.Check back after latter.Your vehicles status will be updated soon.</div>";
        header('location:'.SITEURL.'lost_vehicles.php');
    }else{
        $_SESSION['lost_request']="<div style='color:#ff4757;'>Submission Failed.Try again later.</div>";
        header('location:'.SITEURL.'lost_vehicles.php');
    }

}
else if(isset($_POST['signup'])){
    $fullname=$_POST["fullname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql="INSERT INTO user VALUES ('','$fullname','$email','$username','$password')";
    $res= mysqli_query($conn,$sql);
    if($res){
        $_SESSION['signup_success']="<div class='success'>Signup completed</div>";
        header('location:'.SITEURL.'signup.php');
    }
    else{
        $_SESSION['signup_success']="<div class='error'>Signup failed</div>";
        header('location:'.SITEURL.'signup.php');
    }
}


?>

   <?php include 'C:\xampp\htdocs\project\global\footer.php'?>
</body>
</html>