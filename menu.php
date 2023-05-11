<?php
    if(isset($_SESSION['loggedin'])){
        header("location:./index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu <?php echo $_SESSION['username']; ?></title>

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Pet<span>Care.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>


    <div class="text-3"><span class="typing"></span></div>

    <!-- Work Section  -->

    <!-- my work section start -->
    <section class="mywork" id="home">
        <h2 class="title"> Animal Lives Matters </h2>
        <div class="container">
            <div class="card">
                <div class="content">
                    <h3>Care Center</h3> -->
                    <a href="./table.php" target="_blank"> <img src="./image/carecenter.png" alt="write" style="width:220px; height:180px;"> </a>
                </div>
            </div>
            <div class="card">
                <div class="content">
                    <h3>Treatment</h3>
                    <a href="./Report.php" target="_blank"> <img src="./image/diagnosis.png" alt="letterimg" style="width: 220px; height:180px "> </a>
                </div>
            </div>
        </div>

    </section>



    <!-- teams section starts -->
    <section class="teams" id="services">
        <div class="max-width">
            <h2 class="title">Services</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="./image/pet3.jpg" alt="">
                        <div class="text">Vaccinating Your Pet &#128137</div>
                        <p class="sub_text"></p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="./image/pet2 .jpg" alt="">
                        <div class="text">Keeping Your Pet Healthy</div>
                        <p class="sub_text"></p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="./image/pet10.jpg" alt="">
                        <div class="text">Leukemia Testing</div>
                        <p class="sub_text"></p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="./image/pet5.jpg" alt="">
                        <div class="text">Dentistry</div>
                        <p class="sub_text"></p>
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <img src="./image/pet4.jpg" alt="">
                        <div class="text"> Allergy Testing & Heartworm</div>
                        <p class="sub_text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="text"> <span class="typing-2"></span></div>

    <section id="about" style="background-color: #edf2f4;">
        <div class="max-wid">

            <h2 class="title" style="color:#2b2d42 ;">About Us</h2>
            <div class="main" >
                <div class="para">
                    <p >
                        We serve our clients and their pets with a friendly, competent staff and state-of-the-art medical equipment. We continually educate our staff about diseases and treatments so that they may educate you. Our mission is to continue to serve you with integrity and quality service.
                        We offer total pet care including, but not limited to vaccinations,
                        heartworm and leukemia testing, dermatology and allergy testing, digital radiology,
                        ultrasound, behavior and training counseling, and dentistry. We have well equipped
                        sterile surgical suites with intensive care units and patient monitory abilities
                        for routine and emergency surgical care.
                    </p>
                </div>
                <div class="img_about" >
                    <img src="./image/about.png" alt="" >
                </div>
            </div>

        </div>
    </section>



    <!-- footer section starts -->
    <footer>
        <span>Created By <a href="#">petcare</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>






    <!-- JS  -->
    <script src="script.js"></script>
    <script type="text/javascript" src="vanilla-tilt.js"> </script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".card"), {
            max: 25,
            speed: 400,
            glare: true,
            "max-glare": 1,
        });
    </script>

</body>

</html>