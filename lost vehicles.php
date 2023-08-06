<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
  <?php include('./global/nav.php') ?>
    <div class="container mt-3">
        <div class="jumbotron text-center">
            <h1>VEHICLE VALIDATION SYSTEM</h1>
            <p><Main>Make your city easier</Main></p> 
          </div>
          <h2 class="bg-info text-center p-3">Lost Vehicle</h2>
          <div>
            <form action="" class="m-auto p-3">

                <div class="form-group">
                     <label for="number">Vehicle's Nameplate Number : </label>
                     <input type="number" class="form-control" name="number" required>
                </div>

                <div class="form-group">
                    <label for="type">Vehicle's Type : </label>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Choose vehicle from here
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">Car</button>
                          <button class="dropdown-item" type="button">Bus</button>
                          <button class="dropdown-item" type="button">Bike</button>
                          <button class="dropdown-item" type="button">Truck</button>
                        </div>
                      </div>
                </div>

                <div class="form-group">
                     <label for="number">FIR No : </label>
                     <input type="number" class="form-control" name="number" required>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-secondary" value="Submit">
                </div>                    
             </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>