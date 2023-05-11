<?php
    $showAlert = false;
    $showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "pet care");
    $showAlert = false;
    $showError = false;
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exsists = false;
    if (($password == $cpassword) && $exsists == false) {
        $Encrypt_Pass=md5($password,false);
        $query = "INSERT INTO `users0501` (`Username`, `Password`, `Date`) 
            VALUES ('$username', '$Encrypt_Pass', current_timestamp())";
        $result = mysqli_query($conn, $query);
        if ($result) {
            $showAlert = true;
        } 
    }else {
        $showError = "Check your Provided information";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container-fluid {
            height: 100vh !important;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
            width: 100% !;
        }

        .center {
            height: 60%;
            display: flex;
            float: left;
            flex-direction: column;
            z-index: 999;
            justify-content: center;
            align-items: center;
        }

        .login_img {
            position: absolute;
            top: -30%;
            width: 100%;
        }

        h1 {
            color: #FFF;
            font-weight: bolder;
            margin-top: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 1px transparent black;
            padding: 10px 90px;
            border-radius: 10px;
        }

        label {
            margin-top: 20px;
            color: #FFF;
            font-size: 16px;
            font-weight: 900;
            font-family: sans-serif;
        }

        input {
            margin-top: 8px;
            padding: 8px 15px;
            font-size: 16px;
            border-radius: 8px;
            /* background-color: transparent; */
            outline: none;
        }

        input:focus {
            border: 1px solid black;
            transform: scale(105%);
        }

        button {
            margin: 20px 0px;
            padding: 5px 10px;
            display: inline-block;
            font-size: 15px;
            border-radius: 5px;
            width: 90px;
            /* outline:none; */
            border: transparent;

        }

        .btn {
            width: 90px !important;
            margin: 0px 0px !important;
            margin-top: 20px !important;
            padding: 0px 10px !important;
            display: inline-block !important;
            font-size: 15px !important;
            border-radius: 10px !important;
            height: 30px !important;
            /* outline:none; */
            border: transparent !important;

        }

        button:hover,
        .btn:hover {
            background-color: black;
            cursor: pointer;
            color: white;
            transition-duration: 0.5s;
            transform: scale(115%);
            outline: none;
        }

        /* .popup {
            width: 400px;
            border-radius: 6px;
            background-color: #FFF;
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: center;
            padding: 0 30px 30px;
            color: #2b2d42;
            transition: transform 0.4s, top 0.4s;
            visibility: hidden;
        }

        .open-popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }

        .popup img {
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
            color: #2b2d42;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background-color: #d90429;
            color: #2b2d42;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
        }

        .main#blur.active {
            filter: blur(100px);
            pointer-events: none;
            user-select: none;
        } */
        button>a{
            color:white
        }
        button>a:visited{
            color:white
        }
    </style>
</head>

<body>
    
<?php
    if($showAlert==true){
        echo ' 
        <div class="alert alert-success" role="alert" >
            A simple success alert—check it out!
        <button type="button" class="btn btn-primary" id="liveAlertBtn" style="width:100px !important; margin-top:-5px !important; float:right !important; color :black; "> <a href="./index.php" style:"color:white !important;">Login Page!</a></button>

        </div> 
        '
        ;

    }
    
?>


<div class="container-fluid ">
<div class="center main" id="blur">
            <h1>Sign Up</h1>
            <form action="loginz.php" method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Username" id="username"required >

                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" placeholder="Confirm Password" id="cpassword" required>

                <div style="width:100%;"> <button style="float: left;" onsubmit="openpopup() ,toggle()">Sign-Up</button>
                    <input type="reset" class="btn" style="float: right;">
                </div>
            </form>

            
        </div>
        </div>

   


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>

</html>