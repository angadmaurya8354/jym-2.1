<?php
     $login = false;
     $showError = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        include 'dbconnect.php';
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        
        // $exists = false;
        
        
                                                        
        
        $sql = "Select * from users where username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $sql);
        $num =mysqli_num_rows($result);
        if($num == 1){
            $login = true;
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            header("Location: index.php");
            
        }        
       
     else{
        $showError = "Invalid credentials";
    
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
    <link rel="stylesheet" href="login.css">
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
                <a href=" membership.php" style="background: green; border-radius: 8px">MEMBERSHIP</a>
                <a class="active1" href="login.php">Login</a>
                <a href="logout.php">logout</a>
            </div>
            <div class="menu_icon">
                <i class="bi bi-list" onclick="toggleMenu()"></i>
            </div>
        </nav>

        <!-- showalert -->

        <?php
        if($login){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Success!</strong> You are login .
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
            <h1>LOGIN</h1>
            <a href="#signUp"><em>
                    <p>JOIN US NOW</p>
                </em></a>

        </div>



    </header>
    <!-- section-1  -->
    <!-- <section class="discount">
        <h1>OFFER'S AND DISCOUNTS</h1>
    </section> -->

    <!-- section-3  -->

    <section id="signUp">
        <h1>Login our JYM <span><img src="image/price-icon-2.webp" alt="" /></span></h1>

        <!-- alert  -->



        <!-- form  -->

        <form action="login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">

                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </section>



    <!-- footer-- -->

    <footer>
        <h6>COPYRIGHT 2020 GOODLAYERS, ALL RIGHT RESERVED</h6>
    </footer>

    <script src="index.js"></script>
</body>

</html>