<?php
    $conn = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conn, 'pet care');
    
    // Demonstration of Nested Sub-Queries
    $q="SELECT Doctor_id,Doctor_name ,Speciality ,Email
        FROM doctors 
        WHERE `Enrolled_in_Centre` =
        ( SELECT Centre_chosed FROM client 
        WHERE Client_no=(SELECT MAX(Client_no) FROM Client))";

    $query= mysqli_query($conn, $q);
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./doctor.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <table border="1">
        <thead>
        <tr>
            <th style="padding: 0px 20px;">Doctor ID</th>
            <th  style="padding: 0px 20px;">Doctor Name</th>
            <th>Specialty </th>
            <th>Email</th>
        </tr>
        </thead>
   <?php while($etra=mysqli_fetch_array($query)){ ?>
        <tbody>
        <tr>
            <td class="td"> <a  href="appointment2.php/?Doctor_Id=<?php echo $etra['Doctor_id'] ?>"> <?php echo $etra['Doctor_id'] ?></a></td>
            <td><?php echo $etra['Doctor_name'] ?></td>
            <td><?php echo $etra['Speciality'] ?></td>
            <td><?php echo $etra['Email'] ?></td>
        </tr>
        </tbody>
    <?php }?>

    </table>
</div>
</body>
</html>