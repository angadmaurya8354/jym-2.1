<?php
     $showAlert = false;
     $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        include 'dbconnect.php';
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        
        // $exists = false;
        
        // check whether this username exists
        $existSql = "SELECT * FROM `users` WHERE username = '$username'";
        $result = mysqli_query($conn, $existSql);
        $numExistRows = mysqli_num_rows($result);   
        if($numExistRows > 0){
            $showError = "Username Alredy Exists";
            // $exixts = true;
        }
        else{
            // $exists = false;
        
        
        if(($password == $cpassword)){
        
        $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";

        $result = mysqli_query($conn, $sql);
        if($result){
            $showAlert = true;
            
        }        
       }
     else{
        $showError = "Password do not match ";
    
        }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMBERSHIP</title>
    <!-- link cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- icon Cdn  -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- link css file  -->
    <link rel="stylesheet" href="membership.css">
    <!-- link bootstrap icons link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap");
    </style>
</head>

<body>
    <header>

        <div class="top_header">
            <div class="top_header_data">
                <div>
                    <h6>
                        <i class="bi bi-telephone-fill"></i>
                        +1 2223 4567
                    </h6>
                </div>
                <div>
                    <h6>
                        <i class="bi bi-clock"></i>
                        Monday - Sunday 10:00 - 22:00
                    </h6>
                </div>
                <div>
                    <h6>
                        <i class="bi bi-send-fill"></i>
                        12 Main Street Pt. London England
                    </h6>
                </div>
            </div>
            <div class="top_header_icon">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-chat-left-dots-fill"></i>
                <i class="bi bi-google"></i>
                <i class="bi bi-pinterest"></i>
                <i class="bi bi-twitter"></i>
            </div>
        </div>

        <!-- navbar-- -->

        <nav>
            <div class="logo">
                <img src="image/logo.webp" alt="" />
            </div>
            <div class="menu" id="menu">
                <a href="index.php">HOME</a>
                <a href="gallery.php">GALLERY</a>

                <a href="about.php">ABOUT</a>
                <a href="contact.php">CONTACT</a>
                <a href="#"><i class="bi bi-search"></i></a>
                <a class="active1" href="membership.php" style="background: green; border-radius: 8px">MEMBERSHIP</a>
                <a href="login.php">Login</a>
                <a href="logout.php">logOut</a>
            </div>
            <div class="menu_icon">
                <i class="bi bi-list" onclick="toggleMenu()"></i>
            </div>
        </nav>

        <!-- showalert -->

        <?php
        if($showAlert){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Success!</strong> Your Account is now created and you can login.
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
    }   
        if($showError){
       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>error!</strong>'. $showError.' 
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
    }   
    ?>

        <div class="data">
            <h1>MEMBERSHIP</h1>
            <a href="#signUp"><em>
                    <p>JOIN US NOW</p>
                </em></a>

        </div>



    </header>
    <!-- section-1  -->
    <!-- <section class="discount">
        <h1>OFFER'S AND DISCOUNTS</h1>
    </section> -->

    <!-- section-2  -->
    <section class="pricing">
        <div class="pricing_1">
            <h2>PRICING PLANS</h2>
            <p><em>Go with your right one </em></p>
        </div>

        <!-- 333333333333333333 -->
        <div class="pricing_2">
            <div class="pricing_2_main">
                <div class="pricing_2_main_data1">
                    <img src="image/price-icon-1.webp" alt="" />
                    <h6>PROFESSIONAL PLAN</h6>
                    <p>Price default caption</p>
                </div>
                <div class="pricing_2_main_data2">
                    <p><sup>$</sup> 299 <sub>/MO</sub></p>
                </div>
                <div class="pricing_2_main_data3">
                    <p style="padding-top: 15px">&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <div class="pricing_btn"><a href="#">LEARN MORE</a></div>
                </div>
            </div>
            <div class="pricing_2_main">
                <div class="pricing_2_main_data1 diff">
                    <img src="image/price-icon-2.webp" alt="" />
                    <h6>SPORTER PLAN</h6>
                    <p>Price default caption</p>
                </div>
                <div class="pricing_2_main_data2">
                    <p><sup>$</sup> 129 <sub>/MO</sub></p>
                </div>
                <div class="pricing_2_main_data3">
                    <p style="padding-top: 15px">&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <div class="pricing_btn diff_btn"><a href="#">LEARN MORE</a></div>
                </div>
            </div>
            <div class="pricing_2_main">
                <div class="pricing_2_main_data1">
                    <img src="image/price-icon-3.webp" alt="" />
                    <h6>BASIC PLAN</h6>
                    <p>Price default caption</p>
                </div>
                <div class="pricing_2_main_data2">
                    <p><sup>$</sup> 99 <sub>/MO</sub></p>
                </div>
                <div class="pricing_2_main_data3">
                    <p style="padding-top: 15px">&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <p>&#x2714; Price default list</p>
                    <div class="pricing_btn">
                        <a href="#">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->

    <section id="signUp">
        <h1>Sign up our JYM <span><img src="image/price-icon-2.webp" alt="" /></span></h1>

        <!-- alert  -->



        <!-- form  -->

        <form action="membership.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword">
                    <div id="emailHelp" class="form-text">Make sure to type the same password.</div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">SignUp</button>
        </form>

    </section>



    <!-- footer-- -->

    <footer>
        <h6>COPYRIGHT 2020 GOODLAYERS, ALL RIGHT RESERVED</h6>
    </footer>

    <script src="index.js"></script>
</body>

</html>