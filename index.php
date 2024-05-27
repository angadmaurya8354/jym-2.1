<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>doing jym</title>
    <!-- link cdn  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- link css  -->
    <link rel="stylesheet" href="style.css" />
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
                <a class="active1" href="index.php">HOME</a>
                <a href="gallery.php">GALLERY</a>
                <a href="about.php">ABOUT</a>
                <a href="contact.php">CONTACT</a>
                <a href="#"><i class="bi bi-search"></i></a>
                <a href="membership.php" style="background: green; border-radius: 8px;">MEMBERSHIP</a>
                <a href="login.php">Login</a>
                <a href="logout.php">logOut</a>
            </div>
            <div class="menu_icon">
                <i class="bi bi-list" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div class="data">
            <h1>FITNESS</h1>
            <h2>&SPORTS</h2>
            <p>One morning, when Gregor Smasa woke from troubled <br> he found himself transformed in his bed.</p>
            <a href="#">READ MORE</a>
        </div>

    </header>
    <!-- SECTION-1  -->
    <section class="yourself">
        <div class="dum">
            <div class="dum_data">
                <img src="image/icon-1.webp" alt="" />
                <h5>YOU HAVE TO EXPECT THINGS OF YOURSELF BEFORE YOU CAN DO THEM.</h5>
            </div>
            <p>
                One morning, when Gregor Samsa woke from troubled dreams, he found
                himself <br />
                transformed in his bed into a horrible vermin. He lay on his
                armour-like back, and <br />
                if he lifted his head a little he could see his brown belly.
            </p>
            <a href="#">LEARN MORE</a>
        </div>
        <div class="bolt">
            <div class="bolt_data">
                <i class="bi bi-lightning-fill"></i>
                <h5>YOU HAVE TO EXPECT THINGS OF YOURSELF BEFORE YOU CAN DO THEM.</h5>
            </div>
            <p>
                One morning, when Gregor Samsa woke from troubled dreams, he found
                himself <br />
                transformed in his bed into a horrible vermin. He lay on his
                armour-like back, and <br />
                if he lifted his head a little he could see his brown belly.
            </p>
            <a href="#">LEARN MORE</a>
        </div>
    </section>
    <!-- section-2  -->
    <section class="framework">
        <div class="framework_data">
            <p class="ama"><i> Are you ready to be amazed?</i></p>
            <h1>OUR NEW FRAMEWORK</h1>
            <p>
                We had spent a lot of time to study, gather information and finally we
                come up with the best page builder in the world. It’s the most
                powerful with many options and it has everything you need. You can
                push them into 3 modes, block mode, preview mode and live
                mode(frontend builder). Now with this tool, your imagination will be
                limitless.
            </p>
        </div>
        <div class="line">

            <div style="width: 90px; height: 2px; background-color: #e54444"></div>
            <div><img src="image/cross-divider.webp" alt="" /></div>
            <div style="width: 90px; height: 2px; background-color: #e54444"></div>
        </div>
        <div class="card">
            <div class="card_data1"></div>


            <div class="card_data2"></div>
            <div class="card_data3"></div>
        </div>
        <div class="line">
            <div style="width: 90px; height: 2px; background-color: #e54444"></div>
            <div><img src="image/cross-divider.webp" alt="" /></div>
            <div style="width: 90px; height: 2px; background-color: #e54444"></div>
        </div>
    </section>
    <!-- section-3  -->
    <section>
        <div class="num">
            <div class="num_data" style="border: none">
                <img src="image/service-icon-1.webp" alt="" />
                <h2>3000</h2>
                <p>SQM</p>
            </div>

            <div class="num_data">
                <img src="image/service-icon-2.webp" alt="" />
                <h2>320+</h2>
                <p>MACHINES</p>
            </div>
            <div class="num_data">
                <img src="image/service-icon-3.webp" alt="" />
                <h2>32</h2>
                <p>TRAINERS</p>
            </div>
            <div class="num_data">
                <img src="image/service-icon-4.webp" alt="" />
                <h2>50</h2>
                <p>METRES POOL</p>
            </div>
            <div class="num_data">
                <img src="image/service-icon-5.webp" alt="" />
                <h2>100</h2>
                <p>M. TRACK</p>
            </div>
        </div>
    </section>
    <!-- section-4  -->
    <section>
        <div class="comfort">
            <h2>GET OUT OF YOUR</h2>
            <h1>COMFORT ZONE</h1>
            <p>
                Hey, no one ever said getting an awesome, healthy body was easy.
                <br />
                that’s why the word work is in working out.
            </p>
        </div>
    </section>

    <!-- section-5  -->
    <section>
        <div class="parallax">
            <h2 class="opc">OPENING COURSES</h2>
            <p class="more">More Courses</p>
            <div class="opening">
                <div class="opening_card">
                    <img src="image/shutterstock_167027126.webp" alt="" />
                </div>
                <div class="opening_card">
                    <img src="image/shutterstock_124868017.webp" alt="" />
                </div>
                <div class="opening_card">
                    <img src="image/shutterstock_160323152.webp" alt="" />
                </div>
                <div class="opening_card">
                    <img src="image/shutterstock_236117707.webp" alt="" />
                </div>
            </div>

            <div class="sorry">
                <div class="sorry_data1">
                    <h2>Sorry</h2>
                    <p>This video does not exist.</p>
                </div>
                <div class="sorry_data2">
                    <p style="color: #e54444; font-size: 16px">
                        <i> Are you ready to be amazed? </i>
                    </p>
                    <h2>VIDEO INTRODUCTION</h2>
                    <p class="sorry_data2_p">
                        Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts. Separated
                        they live in Bookmarks grove right at the coast of the Semantics,
                        a large language ocean. A small river named Duden flows by their
                        place and supplies it with.
                    </p>
                    <a href="#">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- section-6  -->
    <section>
        <div class="save_main">
            <div class="save_main_data1">
                <div class="save_main_data1_c" style="background: #e54444">
                    <div><i class="bi bi-clock"></i></div>
                    <div>
                        <h5>SAVE A LOT OF YOUR TIME</h5>
                        <p>
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.
                        </p>
                    </div>
                </div>

                <div class="save_main_data1_c" style="background: #dc4444">
                    <div><i class="bi bi-chat"></i></div>
                    <div>
                        <h5>GREAT COMMUNITY</h5>
                        <p>
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.
                        </p>
                    </div>
                </div>
                <div class="save_main_data1_c" style="background: #cf3d3d">
                    <div><i class="bi bi-alarm"></i></div>
                    <div>
                        <h5>PERSONAL TRAINER</h5>
                        <p>
                            Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="save_main_data2">
                <p style="color: #e54444">
                    <i> Sections and wrapper can be manage easily</i>
                </p>
                <h2>
                    AT INFINITE FITNESS, WE PROVIDE YOU <br />
                    THE BEST SPORT ENVIRONMENT
                </h2>
                <p>
                    Sections and wrapper can be manage easily AT INFINITE FITNESS, WE
                    PROVIDE YOU THE BEST SPORT ENVIRONMENT Far far away, behind the word
                    mountains, far from the countries Vokalia and Consonantia, there
                    live the blind texts. Separated they live in Bookmarksgrove right at
                    the coast of the Semantics, a large language ocean. A small river
                    named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic <br /><br />
                    country, in which roasted parts of sentences fly into your mouth.
                    Even the all-powerful Pointing has no control about the blind texts
                    it is an almost unorthographic. The Big Oxmox advised her not to do
                    so, because there were thousands of bad Commas, wild Question Marks
                    and devious Semikoli, but the Little Blind Text didn’t listen. She
                    packed her seven versalia, put her initial into the belt and made
                    herself on the way. When she reached the first hills of the Italic
                    Mountains, she had a last <br />
                    view back on the skyline of her hometown Bookmarksgrove.
                </p>
            </div>
        </div>
    </section>
    <!-- section-7  -->
    <section>
        <div class="meet">
            <h2>MEET OUR TRAINERS</h2>
            <p>
                <i>Our trainers are the best of the best. They have over ten years of
                    experiences in this field.</i>
            </p>
        </div>
        <div class="card2main">
            <div class="card2main_d">
                <div style="height: fit-content; overflow: hidden">
                    <img src="image/personnel-1.webp" alt="" />
                </div>
                <div class="card2_d">
                    <h6>DAVID PARKER</h6>
                    <p><em>Fitness trainer</em></p>
                    <div style="
                width: 50px;
                background: rgb(146, 144, 144);
                height: 2px;
                margin-bottom: 17px;
              "></div>
                    <div class="social_icon">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-google"></i>
                        <i class="bi bi-pinterest"></i>
                        <i class="bi bi-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="card2main_d">
                <div style="height: fit-content; overflow: hidden">
                    <img src="image/personnel-2.webp" alt="" />
                </div>
                <div class="card2_d">
                    <h6>ALAN COOPER</h6>
                    <p><em>Yoga Teacher</em></p>
                    <div style="
                width: 50px;
                background: rgb(146, 144, 144);
                height: 2px;
                margin-bottom: 17px;
              " c></div>
                    <div>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-google"></i>
                        <i class="bi bi-pinterest"></i>
                        <i class="bi bi-twitter"></i>
                    </div>
                </div>
            </div>
            <div class="card2main_d">
                <div style="height: fit-content; overflow: hidden">
                    <img src="image/personnel-3.webp" alt="" />
                </div>
                <div class="card2_d">
                    <h6>PAUL FRANKY</h6>
                    <p><em>Cardio trainer</em></p>
                    <div style="
                width: 50px;
                background: rgb(146, 144, 144);
                height: 2px;
                margin-bottom: 17px;
              " c></div>
                    <div>
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-google"></i>
                        <i class="bi bi-pinterest"></i>
                        <i class="bi bi-twitter"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section-8  -->
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
    <!-- section-9  -->
    <section class="video1">
        <div class="video_data1">
            <video loop muted autoplay="autoplay">
                <source src="video/fitness-video-bg.mp4" />
            </video>
        </div>
        <div class="video_data">
            <h1>TESTIMONIAL</h1>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <p> <em> Duden flows by their place and supplies it with the necessary regelialia. It is a
                                paradisematic country, in which roasted parts of sentences fly into your mouth. Even
                                the
                                all-powerful Pointing has no con. </em></p>

                        <h2>“</h2>
                        <div class="cm">
                            <div><img src="image/testimonial-1-150x150.webp" alt=""></div>
                            <div>
                                <h5>JOHN SMITH
                                </h5>
                                <p style="color: #dc4444;"><em>9-5 Worker
                                    </em></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                        <p> <em></em> Duden flows by their place and supplies it with the necessary regelialia. It
                            is a
                            paradisematic country, in which roasted parts of sentences fly into your mouth. Even the
                            all-powerful Pointing has no con.</em> </p>
                        <h2>“</h2>
                        <div class="cm">
                            <div><img src="image/testimonial-2-150x150.webp" alt=""></div>
                            <div>
                                <h5>JOHN SMITH
                                </h5>
                                <p style="color: #dc4444;"><em>9-5 Worker
                                    </em></p>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- footer-- -->

    <footer>
        <h6>COPYRIGHT 2020 GOODLAYERS, ALL RIGHT RESERVED</h6>
    </footer>

    <script src="index.js"></script>
</body>

</html>