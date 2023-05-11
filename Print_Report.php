<?php
$DoctorId = $_GET['Doctor_Id'];
$conn = mysqli_connect('localhost', 'root', '');
mysqli_select_db($conn, 'pet care');

$q = "SELECT MAX(treatment_no) as treatment1 FROM `treatment`";

$query = mysqli_query($conn, $q);

$output = mysqli_fetch_array($query);

$CurrentTreatment = $output['treatment1'];
$CurrentTreatment++;

$q = "SELECT c1.Client_name as ClientName , c1.Pet_owned AS Pet, c1.Centre_chosed AS  CC
FROM client AS c1, client AS c2
WHERE c1.Client_no=(SELECT MAX(Client_no) FROM Client)";

$query = mysqli_query($conn, $q);

$output = mysqli_fetch_array($query);
$Name = $output['ClientName'];
$Pet = $output['Pet'];
$CC = $output['CC'];


$q = "SELECT  Doctor_name,Speciality 
FROM doctors
WHERE Doctor_id=$DoctorId";

$query = mysqli_query($conn, $q);

$output = mysqli_fetch_array($query);
$Disease = $output['Speciality'];
$DoctorName = $output['Doctor_name'];

$Status = array("In-Progess", "Diagnosed");

$randomGenerate = Lcg_value();

$duration = mt_rand(1, 31);

$Date = DATE("d/m/Y");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./printreport.css">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            display: block;
            margin-top: 20px;
        }

        .row1 {
            display: flex;
            width: 100%;
        }

        /* Heading */
        .head_row {
            width: 100%;
            display: flex;
            margin: auto;
        }

        .heading {
            float:left;
            text-align: center;
            width: 100%;
            border: none !important;
            width: 290px;
            background:
                linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
            border: 1px solid;
            padding: 10px 10px;
            margin: auto;
            display: block;
        }

        .sub_heading {
            float: left;
            width: 100%;
            margin: auto;
            text-align: left;
            margin-left: 19%;
        }

        .head_col {
            width: 100%;
        }

        .col1,
        .col2 {
            margin-top: 20px;
            width: 100%;
        }

        .head_logo {
            float: right;
            padding: 0px 20px;
        }

        .col2 {
            margin-left: 30%;
        }

        .col3,
        .col4,
        .col5 {
            width: 100%;
        }



        .report_heading {
            border: none !important;
            width: 100px;
            background:
                linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
            border: 1px solid;
            padding: 8px;
            margin: auto;
            display: block;
            position: relative;
            left: 42%;
            align-items: center;

            text-align: center;
        }



        .Sno,
        .Date,
        .section,
        .class,
        .gender,
        .Cname,
        .dob,
        .sname,
        .receiver,
        .amount,
        .name,
        .fname,
        .add,
        .contact {
            border: none !important;
            width: 100px;
            background:
                linear-gradient(#000, #000) center bottom 5px /calc(100% - 10px) 2px no-repeat;
            border: 1px solid;
            padding: 8px;
            text-align: center;
        }

        .margin_left {
            margin-left: 100px !important;
            padding: 0;
            margin-top: 0 !important;
        }

        .row2 {
            display: flex;
            width: 100%;
        }

        .head_logo {
            width: 70px;
        }

        .head_logoz {
            width: 30%;
        }

        .head_col {
            width: 100%;

        }


        /* Row Spacing */
        table {
            border-spacing: 1.0em;
            margin: auto;
            border: 2px dashed black;
        }


        .btn {
            margin-top: 20px;
            padding: 10px 30px;
            border-radius: 5px;
            border: 1px solid transparent;
            background-color: #2b2d42;
            color: #FFF;
        }
        .head_row{
            display:flex;
            flex-direction:column;
            align-items:center;
            text-align:center;
            justify-content:center;
        }
    </style>

    <title>Document</title>

</head>

<body>
    <div class="container" id="print-content">
        <table style="display: block;">
            <tr>
                <div class="head_row">
                    
                        <h1 class="heading" style="text-align:center;">Pet Care Center</h1><br>
                        <h3 class="">Pakistan</h3>
                </div>
            </tr>
            <tr>
                <th colspan="12">
                    <h2 style="padding: 0; margin:0;margin-top:-20px;" class="report_heading"> REPORT</h2>
                </th>
            </tr>
            <tr>
                <div class="row2">

                    <div class="col1">
                        <td>
                            <p>Treatment Date</p>
                        </td>
                        <td>
                            <p class="Date"><?php echo $Date; ?></p>
                        </td>
                    </div>
                    <div class="col2">
                        <td>
                            <p class="margin_left">Appointment Number</p>
                        </td>
                        <td>
                            <p class="Sno"><?php echo $CurrentTreatment ?></p>
                        </td>
                    </div>
                </div>
            </tr>

            <tr>
                <div class="row2">
                    <div class="col3">
                        <td>
                            <label for="Cname">Client Name</label>
                        </td>
                        <td>
                            <p class="Cname"><?php echo $Name ?></p>
                        </td>
                    </div>

                    <div class="col4">
                        <td>
                            <p class="margin_left">Pet Name</p>
                        </td>
                        <td>
                            <p class="class"><?php echo $Pet ?></p>
                        </td>
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
                        <td>
                            <p class="section"><?php echo $DoctorName ?></p>
                        </td>
                    </div>
                    <div class="col6">
                        <td>
                            <p class="margin_left">Disease</p>
                        </td>
                        <td>
                            <p class="name"><?php echo $Disease ?></p>
                        </td>
                    </div>
                </div>
            </tr>

            <tr>
                <div class="row4">
                    <div class="col3">
                        <td>
                            <p>Current Status</p>
                        </td>
                        <td>
                            <p class="dob"><?php
                                            $index = $Status[$randomGenerate];
                                            echo $index; ?></p>
                        </td>
                    </div>

                    <div class="col4">
                        <td style="width: 50%;">
                            <p class="margin_left">Duration of Treatment</p>
                        </td>
                        <td>
                            <p class="gender">
                                <?php
                                $durationT;
                                if ($duration <= 3) {
                                    $durationT = $duration . " Weeks";
                                    echo $durationT;
                                } else if ($duration > 3 && $duration <= 31) {
                                    $durationT = $duration . " Days";
                                    echo $durationT;
                                } else {
                                    echo "Error";
                                }
                                ?>

                            </p>
                        </td>
                    </div>
                    <div class="col5">
                        <td>
                            <p class="margin_left">Center ID</p>
                        </td>
                        <td>
                            <p class="sname"><?php echo $CC; ?></p>
                        </td>
                    </div>
                </div>
            </tr>

        </table>
        <button type="button" onclick="printDiv('print-content')" class="btn">Print</button>

    </div>

    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            w = window.open();
            w.document.write(printContents);
            w.print();
            w.close();
        }
    </script>
</body>

</html>
<?php
$q = "INSERT INTO `treatment` (`treatment_no`, `Client_name`, `Pet_name`, `Diagnosed_by`, `Disease`, `Current_status`,`Duration_of_treatment`,`Date_of_treatment`,`center_id`) 
        VALUES ('$CurrentTreatment', '$Name', '$Pet', '$DoctorName', '$Disease', '$index','$durationT','$Date','$CC');";


$query = mysqli_query($conn, $q);

?>