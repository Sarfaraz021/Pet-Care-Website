<?php
  $Doctor_Id=$_GET['Doctor_Id'];
  $conn = mysqli_connect('localhost', 'root', '');
  mysqli_select_db($conn, 'pet care');

  $q="SELECT Doctor_name FROM doctors WHERE Doctor_id=$Doctor_Id";
  
  $query= mysqli_query($conn, $q);
  $output=mysqli_fetch_array($query);

  // $q="INSERT INTO `appointment` (`Appt id `Appointment Date`, `Appointment Time`, `Doctor Name`) 
  // VALUES ('0', '25-nov-2022', '05:00PM', 'Tanveer');";
  $q = "SELECT MAX(`Appt id`) as Appt_id FROM `appointment`;";

  $query = mysqli_query($conn, $q);
  
  $output2 = mysqli_fetch_array($query);
  
  $currentAppointment = $output2['Appt_id'];
  $currentAppointment++;
// $AppointmentD=$_GET['AppointmentD'];
// $time=$_GET['time'];
// echo $_GET['AppointmentD'];
// echo $_GET['time'];
echo $currentAppointment;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./appointment.css">
    <style>
      *{
    padding: 0;
    margin: 0;
}
.container{
    padding: 0 10%;
    margin: 40px auto 0;
}
body{
    
background: radial-gradient(circle,#d90429, #2b2d42);

    height: 100vh;
    width: 100%;
}
.heading {
    color: white !important;
    text-align: center;
    padding-bottom: 20px;
}
.table{
    filter: 100% !important;
    opacity: 1 !important;
    border-collapse: collapse;
    width: 100%;
    text-align: center;
}
thead{
    background-color: #d90429;
    color:#edf2f4 ;
}
thead tr th {
    letter-spacing: 0.35px;
    font-size: 14px;
    font-weight: 700;
    opacity: 1;
    padding: 12px;
    vertical-align: top;
    border: 1px solid #edf2f4;
}
tbody tr td {
    
    letter-spacing: 0.35px;
    color: #FFF;
    font-size: 14px;
    font-weight: 500;
    opacity: 1;
    padding: 8px;
    vertical-align: middle;
    border: 1px solid #edf2f4;
    background-color: #8d99ae;
    
    text-align: center;
}
tbody tr td .btn{ 
    width: 130px;
    color: #FFF !important;
    text-decoration: none;
    line-height: 35px;
    background-color: #d90429;
    display: inline-block;
    font-weight: medium;
    vertical-align: middle;
    user-select: none;
    border: 1px solid transparent;
    opacity: 1;
    font-size: 14px;
    text-align: center;

}

.form-control{
background-color: transparent;
color: #edf2f4  !important;
}
.form-label{
  color: #FFF !important;
}
.b_btn:hover{
  
  background-color: #FFF !important;
  color: #d90429 !important;
}

@media  (max-width:768px){
    .table thead{
        display: none;
    }
    .table, .table tbody, .table tbody tr ,.table td{
        width: 100%;
        display: block;
    }
    .table tr {
        margin-bottom:15px ;
    }
    .table tbody tr td {
        text-align: right;
        padding-left: 10%;
        position: relative;
    }
    td ::before{
        content: attr(data-label) !important;
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
    }
    td:nth-of-type(1)::before{
        content: "Appointment Number";
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
      }

    td:nth-of-type(2)::before{
        content: "Appointment Date";
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
      }

      td:nth-of-type(3)::before{
        content: "Appointment Time";
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
      }

      td:nth-of-type(4)::before{
        content: "Doctor Appoint";
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
      }

      td:nth-of-type(5)::before{
        content: "Pet Name";
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
      }

      td:nth-of-type(6)::before{
        content: "Check Availablity";
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: 700;
        font-size: 14px;
        text-align: left;
      }
    #time,.time{
      background-color: transparent !important;
      color: black !important;
      }

}
    </style>
    <title>Appointment Form</title>
</head>
<body>
      <div class="container" style="display: block; padding:0px; width: 50%; margin-top:3%;">
  <form action="./Print_Report.php"  method="GET">

        <div class="head" style="margin-bottom: 5%;"><h1 style="text-align: center; color:#edf2f4;">Appointment</h1></div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Appointment Number </label>
          <input  class="form-control" type="number" id="formFile" name="AppointmentN" value="<?php echo $currentAppointment; ?>" readonly disabled style="background-color:transparent;">
        </div>
        <div class="mb-3">
          <label for="formFileMultiple" class="form-label">Appointment Date</label>
          <input class="form-control" type="date" id="formFileMultiple" name="AppointmentD" multiple style="background-color:transparent;">
        </div>
        <div class="mb-3">
          <label for="time" class="form-label" >Appointment Time</label>
          <select name="time" id="time" class="form-control" style="color: #000 !important;background-color:transparent !important;">
            <option selected disabled value="form" class="time" >Select Shift here</option>
            <option value="9.00 am" class="time">9.00 am</option>
            <option value="12.00 am">12.00 am</option>
            <option value="4.00 am">4.00 am</option>
            <option value="5.00 am">5.00 am</option>
          </select>
        </div>
        o.
        <div>
          <label for="formFileLg" class="form-label">Doctor Name </label>
          <input class="form-control form-control-lg" id="formFileLg" name="DoctorN" type="text" value="<?php  echo $output['Doctor_name'] ?>" readonly disabled style="color: #000;background-color:transparent; cursor :pointer;">
      </div>
        <button style="margin-left:40% !important;margin-top:10px !important;color:#edf2f4 !important;outline:#000 !important;border:1px solid black ; text-decoration:none !important; background-color:#edf2f4 !important; color:#000 !important; " class="btn b_btn" ><a href="Print_Report.php" style="text-decoration:none !important; background-color:#edf2f4 !important; color:#000 !important;"> Book Appoint</a></button>
    </form>
    </div>

</body>
</html>