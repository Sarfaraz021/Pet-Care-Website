<?php
$Hospital_code = $_GET['CenterId'];

$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'pet care');

$q = "SELECT MAX(Client_no) as client FROM `client`";

$query = mysqli_query($conn, $q);

$output = mysqli_fetch_array($query);

$currentClient = $output['client'];
$currentClient++;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./register.css">
  <title>Document</title>
  <style>
    .container {
      position: relative;
      top: 100px !important;
      width: 100%;
      background-color: aquamarine;
    }
  </style>
</head>

<body>
  <div class="container-fluid">
    <div class="center">
      <div class="reg">
        <h1 style="text-align: center; color:white;">Register Yourself First</h1>
      </div>

      <form class="row g-3" method="GET" action="./Confirmation.php">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Client No </label>
          <input type="number" class="form-control" id="inputEmail4" readonly value="<?php echo $currentClient;?>" name="Client">
          <!-- <td hidden><a href="Confirmation.php?Client=$currentClient" hidden></a></td> -->
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Client Name</label>
          <input type="text" class="form-control" id="ClientName" name="ClientName" required>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Address</label>
          <input type="text" class="form-control" id="Password" placeholder="1234 Main St" name="Address" required>
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Pet Owned</label>
          <input type="text" class="form-control" id="Pet_Owned" name="PetOwned" required>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Contact Number</label>
          <input type="text" class="form-control" id="ContactNumber" name="ContactNumber" required>

        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label " id="choose">Center Choosed</label>
          <input type="number" class="form-control" id="inputZip" readonly value="<?php echo $Hospital_code; ?>" required name="CC">
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary"> Register</button>
        </div>
      </form>

    </div>
  </div>
</body>

</html>
