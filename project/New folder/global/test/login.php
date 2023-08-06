<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="loginbox">
        
        
        <form action="./index.php" method="post">
        <fieldset> <legend><h2>LOGIN</h2></legend>
            <table>
           
                <tr> 
                    <td><label for="username" class="uname-label">Username: </label></td>
                    <td><input type="text" placeholder="Enter username/email" id="username" name="username"></td>
                </tr>

                <tr>
                    <td><label for="pass" class="pass-label">Password</label></td>
               <td> <input type="password" placeholder="Enter password" id="pass" name="pass"></td>
                </tr>
                <tr><td></td>
                <td><input type="submit" value="Submit" id="submit" name="submit"></td>
            </tr>
            </table>
            </fieldset>
        </form>
       
    </div>

</body>

</html>