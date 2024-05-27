<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>gallery</title>
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
    <link rel="stylesheet" href="gallery.css" />
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
                <a class="active1" href="gallery.php">GALLERY</a>
                <a href="about.php">ABOUT</a>
                <a href="contact.php">CONTACT</a>
                <a href="#"><i class="bi bi-search"></i></a>
                <a href="membership.php" style="background-color: green;border-radius: 8px">MEMBERSHIP</a>
                <a href="login.php">Login</a>
                <a href="logout.php">logOut</a>
            </div>
            <div class="menu_icon">
                <i class="bi bi-list" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div class="data">
            <h1>Gallery</h1>
            <em>
                <p>jym workout gallery</p>
            </em>
        </div>
    </header>

    <!-- section-1  -->
    <section>
        <div class="heading">
            <h1>That's my JYM gallery.</h1>
        </div>
        <div class="gallery">
            <div class="box row-2" style="background-image: url(image/slider-1.webp)"></div>
            <div class="box" style="background-image: url(image/slider-2.webp)"></div>
            <div class="box" style="background-image: url(image/service-bg-1.webp)"></div>
            <div class="box row-2" style="background-image: url(image/portfolio-bg.webp)"></div>
            <div class="box" style="background-image: url(image/personnel-1.webp)"></div>
            <div class="box row-2" style="background-image: url(image/personnel-2.webp)"></div>
            <div class="box" style="background-image: url(image/card1.webp)"></div>
            <div class="box" style="background-image: url(image/card2.webp)"></div>
            <div class="box" style="background-image: url(image/shutterstock_160323152.webp)"></div>
            <div class="box row-2" style="background-image: url(image/shutterstock_236117707.webp)"></div>
            <div class="box" style="background-image: url(image/card3.webp)"></div>
            <div class="box row-2" style="background-image: url(image/shutterstock_167027126.webp)"></div>
            <div class="box" style="
            background-image: url(image/shutterstock_192451625-700x460.webp);
          "></div>
            <div class="box row-2" style="background-image: url(image/g.jpg)"></div>
            <div class="box row-2" style="background-image: url(image/shutterstock_124868017.webp)"></div>
            <div class="box" style="background-image: url(image/shutterstock_164474051.webp)"></div>
            <div class="box" style="background-image: url(image/shutterstock_160323152.webp)"></div>
        </div>
    </section>

    <!-- footer  -->

    <footer>
        <h6>COPYRIGHT 2020 GOODLAYERS, ALL RIGHT RESERVED</h6>
    </footer>
    <script src="index.js"></script>
</body>

</html>