<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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
    <link rel="stylesheet" href="about.css">
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

                <a class="active1" href="about.php">ABOUT</a>
                <a href="contact.php">CONTACT</a>
                <a href="#"><i class="bi bi-search"></i></a>
                <a href="membership.php" style="background: green; border-radius: 8px">MEMBERSHIP</a>
                <a href="login.php">Login</a>
                <a href="logout.php">logOut</a>
            </div>
            <div class="menu_icon">
                <i class="bi bi-list" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div class="data">
            <h1>ABOUT US</h1>
            <em>
                <p>Story About Us</p>
            </em>

        </div>
    </header>
    <!-- section-1  -->
    <section class="story">
        <div class="great">
            <h2>Our Great Story</h2>
            <div class="line"></div>
            <p>We had spent a lot of time to study, gather information and finally we come up <br> with the best page
                builder in the world. It’s the most powerful with many options <br> and it has everything you need. You
                can push them into 3 modes, <br> block mode, preview mode and live mode(frontend builder). Now with this
                tool, your imagination will be limitless.</p>
            <a href="#">READ MORE STORY</a>
        </div>

        <div class="great2">
            <p>PHOTOGRAPHY</p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar" style="width: 25%"></div>
            </div>
            <p>CODING</p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar" style="width: 50%"></div>
            </div>
            <p>BRANDING</p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar" style="width: 75%"></div>
            </div>
            <p>SOCIAL MEDIA</p>
            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="100" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar" style="width: 100%"></div>
            </div>

        </div>

    </section>

    <!-- section-2  -->
    <section class="paralex">
        <div class="paralex_data">
            <div class="paralex_datac">
                <div>
                    <ion-icon name="bulb-outline"></ion-icon>
                </div>
                <div>
                    <h6>GOODLAYERS PAGE BUILDER</h6>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone.</p>
                </div>
            </div>
            <div class="paralex_datac">
                <div>
                    <ion-icon name="desktop-outline"></ion-icon>
                </div>
                <div>
                    <h6>GOODLAYERS PAGE BUILDER</h6>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone.</p>
                </div>
            </div>
            <div class="paralex_datac">
                <div>
                    <ion-icon name="logo-react"></ion-icon>
                </div>
                <div>
                    <h6>GOODLAYERS PAGE BUILDER</h6>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone.</p>
                </div>
            </div>
        </div>




        <div class="paralex_data">
            <div class="paralex_datac">
                <div>
                    <ion-icon name="compass-outline"></ion-icon>
                </div>
                <div>
                    <h6>GOODLAYERS PAGE BUILDER</h6>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone.</p>
                </div>
            </div>
            <div class="paralex_datac">
                <div>
                    <ion-icon name="star-outline"></ion-icon></i>
                </div>
                <div>
                    <h6>GOODLAYERS PAGE BUILDER</h6>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone.</p>
                </div>
            </div>
            <div class="paralex_datac">
                <div>
                    <ion-icon name="time-outline"></ion-icon>
                </div>
                <div>
                    <h6>GOODLAYERS PAGE BUILDER</h6>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring
                        which I enjoy with my whole heart. I am alone.</p>
                </div>
            </div>
        </div>



    </section>

    <!-- secton-3  -->
    <section class="infinite">
        <div class="infinite_data">
            <em>
                <p>The most powerful theme on earth</p>
            </em>
            <h1>INFINITE WORDPRESS <br> THEME</h1>
            <p>We had spent a lot of time to study, gather information and finally we come up with the best page builder
                in the world. It’s the most powerful with many options and it has everything you need. You can push them
                into 3 modes, block mode, preview mode and live mode(frontend builder).</p>
            <em><a href="#">Learn More</a></em>

        </div>
        <div class="infinite_data_img">

        </div>
    </section>

    <!-- section-4  -->

    <!-- section-5  -->
    <section class="dedicated">
        <h1>Dedicated Support Team</h1>
        <p>Not only great theme but we also provide the best support.</p>
        <a href="#">LEARN MORE</a>
    </section>

    <!-- footer  -->

    <footer>
        <h6>COPYRIGHT 2020 GOODLAYERS, ALL RIGHT RESERVED</h6>
    </footer>
    <script src="index.js"></script>
</body>

</html>