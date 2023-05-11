<?php
$TreatmentId=$_GET['Treatment_id'];
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'pet care');


$q = "SELECT *  FROM `treatment` WHERE `Treatment_no`='$TreatmentId'";

$query = mysqli_query($conn, $q);

$output = mysqli_fetch_array($query);

$Date= $output['Date_of_treatment'];
$Name= $output['Client_name'];
$Pet=$output['Pet_name'];
$DoctorName= $output['Diagnosed_by'];
$Disease= $output['Disease'];
$index= $output['Current_status'];
$durationT=$output['Duration_of_treatment'];
$CC=$output['center_id'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="printreport.css">
    
    <title>Document</title>

</head>

<body>
    <div class="container" id="print-content">
        <table style="display: block;">
            <tr>
                <div class="head_row">
                    <div class="head_logoz">
                        <img src="/img/logo.png" alt="" class="head_logo" >
                    </div>
                    <div class="head_col">
                        <h1 class="heading">Pet Care Center</h1><br>
                        <h3 class="sub_heading">Pakistan</h3>
                    </div>
                </div>
            </tr>
            <tr >
                <th colspan="12">
                   <h2 style="padding: 0; margin:0;margin-top:-20px;" class="report_heading"> REPORT</h2>
                </th>
            </tr>
            <tr>
                <div class="row2">
                    
                    <div class="col1">
                    <td> <p>Treatment Date</p></td>
                <td >  <p class="Date" ><?php echo $Date; ?></p></td>
                    </div>
                    <div class="col2">
                    <td> <p class="margin_left" >Treatment Number</p></td>
                <td> <p class="Sno"><?php echo $TreatmentId ?></p></td>
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row2">
                    <div class="col3">
                        <td>
                            <label for="Cname">Client Name</label>
                        </td>
                        <td> <p class="Cname"><?php echo $Name ?></p>
                        </td>
                    </div>

                    <div class="col4">
                        <td>
                            <p class="margin_left">Pet Name</p>
                        </td>
                        <td><p class="class"><?php echo $Pet ?></p></td>
                    </div>
                    <div class="col5">
                        
                    </div>
                </div>
            </tr>
            <tr>
                <div class="row3">
                    
                    <div class="col5">
                        <td>
                            <p>Diagnosed By</p>
                        </td>
                        <td><p class="section" ><?php echo $DoctorName ?></p>
                        </td>
                    </div>
                    <div class="col6">
                        <td  > <p class="margin_left">Disease</p> </td>
                        <td ><p class="name" ><?php echo $Disease ?></p> </td>
                    </div>
                </div>
            </tr>

            <tr>
                <div class="row4">
                    <div class="col3">
                        <td>
                            <p >Current Status</p>
                        </td>
                        <td><?php echo $index; ?></p>
                        </td>
                    </div>

                    <div class="col4">
                        <td style="width: 50%;">
                            <p class="margin_left">Duration of Treatment</p>
                        </td>
                        <td><p class="gender"><?php echo $durationT; ?></p></td>
                    </div>
                    <div class="col5">
                        <td>
                            <p class="margin_left">Center ID</p>
                        </td>
                        <td> <p class="sname"><?php echo $CC; ?></p>
                        </td>
                    </div>
                </div>
            </tr>

            
            <tr>
                <div class="row2">
                    <div class="col4">
                        <td>
                           <p>Received By </p>
                        </td>
                        <td><p class="receiver ">Ali</p></td>
                    </div>
                    
                </div>
            </tr>
     
        </table>
        <button type="button" onclick="printDiv('print-content')" class="btn">Print</button>
    
    </div>

    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            w=window.open();
            w.document.write(printContents);
            w.print();
            w.close();
        }
    </script>
</body>

</html>