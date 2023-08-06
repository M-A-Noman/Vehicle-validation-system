<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>
    <div class="container mt-3">
        <div class="jumbotron text-center">
            <h1>VEHICLE VALIDATION SYSTEM</h1>
            <p><Main>Make your city easier</Main></p> 
          </div>
        <ul class="nav nav-pills row">
            <li class="nav-item col-6 text-center"><a data-toggle="pill" class="nav-link active" href="#login">Login</a></li>
            <li class="nav-item col-6 text-center"><a data-toggle="pill" class="nav-link" href="#signin">Sign-up</a></li>
        </ul>
        <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="" class="m-auto p-3">

                <div class="form-group">
                     <label for="Username">Username</label>
                     <input type="text" class="form-control" name="Username" required>
                </div>

                <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" class="form-control" name="password" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="Login">
                </div>                    
             </form>
        </div>
        <div id="signin" class="tab-pane">
            <form action="" class="m-auto p-3">

                <div class="form-group">
                     <label for="fullname">Fullname</label>
                     <input type="text" class="form-control" name="fullname">
                </div>

                <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control" name="email" required>
                </div>
                
                <div class="form-group">
                     <label for="Username">Username</label>
                     <input type="text" class="form-control" name="Username" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" required>
               </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="Register">
                    <input type="reset"  class="btn btn-secondary" value="Reset">
                </div>                    
             </form>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>