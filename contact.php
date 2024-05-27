<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "jym";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $other = $_POST["other"];

    // Create a connection
    $conn = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

   

    // Insert query
    $sql = "INSERT INTO `quary` (`name`, `email`, `other`, `dt`) VALUES ('$name', '$email', '$other', CURRENT_TIMESTAMP())";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact.php</title>
    <!-- link cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- icon Cdn  -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- link css file  -->
    <link rel="stylesheet" href="contact.css" />
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
                <a class="active1" href="contact.php">CONTACT</a>
                <a href="#"><i class="bi bi-search"></i></a>
                <a href="membership.php" style="background-color: green; border-radius: 8px">MEMBERSHIP</a>
                <a href="login.php">Login</a>
                <a href="logout.php">logOut</a>
            </div>
            <div class="menu_icon">
                <i class="bi bi-list" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div class="data">
            <h1>CONTACT US</h1>
            <em>
                <p>Get Intouch</p>
            </em>
        </div>
    </header>

    <!-- section-1  -->
    <section class="contact">
        <div class="contact_data">
            <ion-icon name="call-outline"></ion-icon>
            <h5>PHONE</h5>
            <p>
                A wonderful serenity has taken possession of <br> my entire soul, like
                these sweet mornings.
            </p>
            <a href="#">+1-2345-2345</a>
        </div>
        <div class="contact_data">
            <ion-icon name="mail-outline"></ion-icon>
            <h5>EMAIL</h5>
            <p>
                A wonderful serenity has taken possession of <br> my entire soul, like
                these sweet mornings.
            </p>
            <a href="#"> Contact@goodlayers.com </a>
        </div>
        <div class="contact_data">
            <ion-icon name="navigate-outline"></ion-icon>
            <h5>LOCATION</h5>
            <p>4 apt. Flawing Street. The Grand <br>Avenue. Liverpool, UK 33342</p>
            <a href="#">View On Google Map</a>
        </div>
    </section>

    <!-- section-2  -->
    <section class="form_main">
        <h1>LEAVE US YOUR INFO</h1>
        <em>
            <p>and we will get back to you.</p>
        </em>
        <div class="line">

        </div>

        <form action="contact.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Full Name">
            <input type="email" name="email" id="email" placeholder="Email">
            <textarea name="other" id="other" placeholder="Massage"></textarea>
            <input type="submit" value="Submit Now">
        </form>

    </section>
    <!-- section-3  -->
    <section class="social_icon">
        <ion-icon name="mail-outline"></ion-icon>
        <ion-icon name="logo-facebook"></ion-icon>
        <ion-icon name="logo-google"></ion-icon>
        <ion-icon name="logo-twitter"></ion-icon>
        <ion-icon name="logo-instagram"></ion-icon>
    </section>
    <!-- footer  -->

    <footer>
        <h6>COPYRIGHT 2020 GOODLAYERS, ALL RIGHT RESERVED</h6>
    </footer>
    <script src="index.js"></script>
</body>

</html>