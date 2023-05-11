<?php
    $login = false;
    $showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = mysqli_connect("localhost", "root", "", "pet care");
    $name = $_POST["name"];
    $password = $_POST["password"];
        $Encrypt_Pass=md5($password,false);
        $query = "SELECT * FROM `users0501` WHERE username='$name' AND `password`='$Encrypt_Pass'";
        $result = mysqli_query($conn, $query);
        $num=mysqli_num_rows($result);

        if ($num == 1) {
            $login = true;
            // echo "LOGGED IN";
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['username']=$username;
            header("location:./Menu.php");
        }else{
            // $showError="Invalid Credentials!";
            // echo $showError;
            echo ' 
        <div class="alert alert-Danger" role="alert">
           Error! Invalid Credentials!
        </div> ';
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
    <link rel="stylesheet" href="./loginz.css">
   
    
    <title>Document</title>
</head>
<body>
<?php
    if($login){
        
    }
    
?>
    <div class="container-fluid">

        <div class="left">
            <img src="./image/rabbit.jpg"  alt="" class="img">
        </div>
        <div class="right">
            <div class="center">
                <h1>Login</h1>
                <form action="#" method="POST">
                    <label for="name">Username</label>
                    <input type="text" name="name" placeholder="Name" id="name" required>
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password" required>

                    <div style="padding: 0px 10px;">
                        <button class="btn" style="margin-right: 10px;">Login</button>
                    </div>
                </form>
                <button type="btn" class="btn"  style="margin-left: 10px;"><a href="./loginz.php" style="text-decoration: none; color:black;">SignUp</a> </button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>