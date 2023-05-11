<head>
    <link rel="stylesheet" href="list.css">
    
</head>
<body>
    
    <div class="container">
    <h1>Select Your Care Center</h1>
<?php
    
    $Hospital_Location=$_GET['CityName'];
    // echo $Hospital_Location;
    $conn = mysqli_connect('localhost', 'root','');
    mysqli_select_db($conn,'pet care');
    $q = "SELECT * from `care_center` WHERE `Hospital_Location` LIKE '$Hospital_Location'";
    $query = mysqli_query($conn,$q);

    // echo $output;

?>
<table >
     <tr>
     <tr>
        <th>Hospital Code</th>
        <th>Hospital Name</th>
        <th>Hospital Location</th>
    </tr>
<?php
while($etra= mysqli_fetch_array($query)){;
?>

<tr>
    <td><?php echo $etra['Hospital_code'] ?></td>
    <td class="sql_link"><a href="./register.php?CenterId=<?php echo $etra['Hospital_code'] ?>"><?php echo $etra['Hospital_name'] ?></a></td>
    <td><?php echo $etra['Hospital_Location']?></td>
</tr>
<?php 
}
?>
</tr>
</table>
</div>
</body>