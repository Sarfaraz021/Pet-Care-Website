<?php
    $Client=$_GET['Client'];
    $ClientName=$_GET['ClientName'];
    $Address=$_GET['Address'];
    $PetOwned=$_GET['PetOwned'];
    $ContactNumber=$_GET['ContactNumber'];
    $CC=$_GET['CC'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Confirmation.css">
    <title>Document</title>
    
</head>

<body>
    <div class="container" >
        
    <div class="main" id="blur">
    
    <h1 class="title">
        Reveiw your Information !
    </h1>
    <table border="3">
        <tr>
            <td class="head">Client No</td>
            <td><?php echo $Client ?></td>
        </tr>
        <tr>
            <td class="head">Client NAME</td>
            <td><?php echo  $ClientName?></td>
        </tr>

        <tr>
            <td class="head">Address</td>
            <td><?php echo  $Address?></td>
        </tr>

        <tr>
            <td class="head">Pet Owned</td>
            <td><?php echo  $PetOwned?></td>
        </tr>
        <tr>
            <td class="head">Contact Number</td>
            <td><?php echo  $ContactNumber?></td>
        </tr>
        <tr>
            <td class="head">Center Choosed</td>
            <td><?php echo $CC ?></td>
        </tr>
    </table>
    <button class="btn" type="submit" onclick="openpopup() ,toggle()" >Submit</button>
    </div>
    <div class="popup" id="popup">
        <img src="./image/tick.png" alt="">
        <h2>
            Thank You !
        </h2>
        <?php
            $conn = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conn, 'pet care');
            
            $q = "INSERT INTO `client` (`Client_no`, `Client_name`, `Address`, `Pet_owned`, `Contact_no`, `Centre_chosed`) VALUES ('$Client', '$ClientName', '$Address', '$PetOwned', '$ContactNumber', '$CC');";
            
            $query = mysqli_query($conn, $q);
        ?>
        <p>Your Details has been successfully submitted.</p>
        <button type="submit"><a href="./doctor.php" style="color: #FFF; ">Go to Doctor Appointment</a> </button>
    </div>
</div>

<script>
    let popup =document.getElementById("popup");
    function openpopup(){
        popup.classList.add("open-popup");
    }
</script>
<script type="text/javascript">
    function toggle(){
        var blur =document.getElementById("blur");
        blur.classList.toggle('active');
    }
</script>
</body>

<script>

</script>