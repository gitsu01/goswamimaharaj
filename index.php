<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - GOSWAMI MAHARAJ</title>
    <link rel="stylesheet" href="web_styles/global.css">
    <link rel="stylesheet" href="web_styles/hero_section.css">
    <?php
        require('includes/links.php');
    ?>
    <!-- Swiper JS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
</head>
<body>


    <!-- HEADER -->    
     <?php require('includes/header.php'); ?>
    
    <!-- HERO SECTION -->
    <div class="container my-5">
        <div class="d-flex justify-content-between ps-md-5 position-relative mb-md-4">
            <h1 class="font_kav title_font" >
                WANT TO VISIT & STAY IN GOSWAMI MAHARAJ MATH
            </h1>
            <div class="check_card position-absolute top-0 end-0 me-md-5 z-3" >
                <form action="" class="d-flex flex-column gap-2" >
                    <h5 class="fs-5 fw-semibold d-flex align-items-center" style="letter-spacing: 0.03em;" >
                        <i class="bi bi-journal-bookmark me-2 col_pri fs-4"></i>
                        Book a Room
                    </h5>
                    <div class="" >
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="loc">
                                <i class="bi bi-geo-alt-fill col_pri"></i>
                            </label>
                            <select class="form-select shadow-none text-secondary" id="loc">
                                <option selected>Select Location</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="loc">
                                <i class="bi bi-house-fill col_pri"></i>
                            </label>
                            <select class="form-select shadow-none text-secondary" id="loc">
                                <option selected>Select Bhavan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="width: 107px;">
                                <i class="col_pri">Check in</i>                            
                            </span>
                            <input type="date" class="form-control shadow-none text-secondary" >
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" style="width: 107px;"><i class="col_pri">Check out</i></span>
                            <input type="date" class="form-control shadow-none text-secondary" >
                        </div>
                    </div>
                    <div class="text-center" >
                        <button class="btn w-100 py-2 rounded-1 butt_fill mb-2" >BOOK NOW</button>
                        <a class="text-secondary fs-6" href="">Cancel or Modify Reservation</a>
                    </div>
                </form>
            </div>
        </div>
        <!-- Swiper -->
        <div class="swiper heroCarosel w-100 hero_carousel">
            <div class="swiper-wrapper">
                <div 
                    class="swiper-slide h-100"
                    style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.15));"
                >
                    <img class="img-fluid carr_img" src="./images/carousel/carr_1.jpg" alt="">
                </div>
                <div class="swiper-slide h-100">
                    <img class="img-fluid carr_img" src="./images/carousel/carr_2.jpg" alt="">
                </div>
                <div class="swiper-slide h-100">
                    <img class="img-fluid carr_img" src="./images/carousel/carr_3.jpg" alt="">                    
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Goswami Maharaj -->
    <div class="container mt-1 mb-5">
        <div class="text-center" >
            <h2 class="position-relative font_kav heading fs-3">
                GOSWAMI MAHARAJ
                <div class="back_div" ></div>
            </h2>            
        </div>
        <div class="mt-5 d-flex justify-content-between align-items-center row">
            <div class="col-md-5">
                <h1 class="fs-3 fw-semibold me-1  mb-3" >GOPAL KRISHNA GOSWAMI <br> MAHARAJ</h1>
                <p class="me-3 mb-3 text-secondary" >His Holiness Gopal Krishna Goswami Maharaja appeared on this planet on the most auspicious day of Annada Ekadashi, on August 14, 1944, in New Delhi, India. Having named as Gopal Krishna at the time of his appearance, his spiritual master had not changed his name at the time of harinama initiation.</p>
                <a class="cus_btn btn btn-cus-butt" href="#">KNOW MORE ABOUT HIM</a>
            </div>
            <div class="col-md-5" >
                <img class="img-fluid  w-100 gos_img shadow rounded" src="images/members/goswami.webp" alt="">
            </div>
        </div>
    </div>

    <!-- Donate Card -->
    <div class="container mb-5" >
        <div class="row donate_card px-5">
            <p class="col-md-9 m-0 p-0 text-secondary" >Your support is crucial to our organization's mission and the work we do to make a positive impact in our community. By making a donation, you are directly contributing to our efforts to make a difference in the lives of those we serve.</p>
            <a class="btn col-md-2 py-4 rounded-1 butt_fill height_100" >DONATE NOW</a>            
        </div>
    </div>

    <!-- Upcoming Events -->
    <div class="container mb-5">
        <div class="text-center" >
            <h2 class="position-relative font_kav heading fs-3">
                UPCOMING EVENTS
                <div class="back_div" ></div>
            </h2>            
        </div>

    </div>




    <!-- Footer -->
    <footer class="mt-3 py-5" >
        <div class="container" >
            <div class="row justify-content-between mb-5">
                <div class="col-md-5 pe-5">
                    <a href="index.php" class="" >
                        <h1 class="font_gran cus_logo m-0 mb-3" >Goswami Maharaj Math</h1>
                    </a>
                    <p class="me-3 mb-3 text-secondary" >Enim justo at consectetur habitant massa dui cras nulla. Nunc cursus faucibus orci sit mauris tincidunt at duis egestas. Amet eget sed est sed placerat pellentesque mollis sit. Lorem id risus integer proin porttitor vel vitae placerat.</p>
                    <a class="btn rounded-0 butt_fill me-2" >DONATE</a>
                    <a class="cus_btn btn btn-cus-butt" href="#">BOOK ROOM</a>
                </div>
                <div class="col-md-2">
                    <h3 class="fs-4 text-decoration-underline col_pri mb-2" >Pages</h3>
                    <div>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-bank2 col_pri me-1"></i>
                            Temples
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-calendar-event-fill col_pri me-1"></i>
                            Events
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-image col_pri me-1"></i>
                            Gallery
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-file-person col_pri me-1"></i>
                            About Us
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-envelope-at-fill col_pri me-1"></i>
                            Contact Us
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h3 class="fs-4 text-decoration-underline col_pri mb-2" >Follow Us</h3>
                    <div>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-youtube col_pri me-1"></i>
                            Youtube
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-facebook col_pri me-1"></i>
                            Facebook
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-twitter col_pri me-1"></i>
                            Twitter
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-instagram col_pri me-1"></i>
                            Instagram
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="fs-4 text-decoration-underline col_pri mb-2" >Contact Us</h3>
                    <div>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-telephone-fill col_pri me-1"></i>
                            +91 9749932205
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-telephone-fill col_pri me-1"></i>
                            +91 9749932205
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-envelope-fill col_pri me-1"></i> 
                            support@goswamimaharaj.com
                        </a>
                        <a class="nav-link mb-1" href="#">
                            <i class="bi bi-geo-alt-fill col_pri me-1"></i>
                            BBT Rode, Mayapur, West Bengal 741313, India
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2" >
                <p class="col_pri" >Design & Develop by <a>Subir</a></p>
                <div class="d-flex gap-3" >
                    <a class="nav-link fs-6" href="#">                            
                        Sitemap
                    </a>
                    <a class="nav-link fs-6" href="#">                            
                        Reservation Rules
                    </a>
                    <a class="nav-link fs-6" href="#">                            
                        Privacy Policy
                    </a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Import and Initialize Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".heroCarosel", {
            centeredSlides: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            effect: "creative",
            creativeEffect: {
                prev: {
                    shadow: true,
                    translate: [0, 0, -400],
                },
                next: {
                    translate: ["100%", 0, 0],
                },
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            lazy: true,
        });
    </script>
</body>
</html>