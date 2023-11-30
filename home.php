<!-- Home page ka code yahan hai -->
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");

?>

<body>
    <!--HOME STARTS HERE-->
    <section id="home" class="homeintro d-flex align-items-center justify-content-center"
        style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/backgroundimg.jpg); background-size: 100% auto; background-position: center; height: 500px;">
        <div class="text-center">
            <h1>Justice Law Firm heading goes here</h1>
            <a href="Hire.php" class="btn btn-outline-light">Book Your Consultation</a>
        </div>
    </section>
    <!--LANDINGPAGE ENDS HERE-->

    <!--Home page start-->
    <section class="lawyer my-3" id="lawyer">
        <div class="container">
            <h2 class="text-center fw-light">Meet our Lawyers</h2>
            <br>
            <hr>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php
                        $sltImage = "SELECT * FROM `updateimage`";
                        $result = mysqli_query($conn, $sltImage);
                        if (!$result) {
                            die(mysqli_error($conn));
                        } else {
                            while ($fetch = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-sm-6 col-md-3 d-flex flex-wrap">
                        <div class="card card-block">
                            <a>
                                <img src="img/' . $fetch["image"] . '" width="100" class="card-img-top" alt="Placeholder Image">
                                <div class="card-title-wrap">
                                    <span class="card-title"> ' . $fetch["Name"] . ' </span>
                                    <p class="card-text fs-6"> ' . $fetch["Desc"] . ' </p>
                                </div>
                                <div class="lawyer-over">
                                    <h4 class="hidden-md-down fs-3"> Connect This Lawyer </h4>
                                    <nav class="social-nav">
                                        <a href="www.twitter.com">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a href="www.facebook.com">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="www.linkedin.com">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </nav>
                                </div>
                            </a>
                        </div>
                    </div>';
                            }
                        }
                        ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- lawyer Quote message wala yahan hai -->
    <div class="container">
    <h1 class='fs-1 fw-light text-center m-3'>Hear from our client</h1>
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="carousel" data-flickity='{ "groupCells": true , "autoPlay": true }' style="height:500px; width:100%;">
                <div class="carousel-cell bg-primary" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Lawyer 12</h1>
                        <p class="text-light text-center p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                            possimus.</p>
                        <p class="text-light text-center">Jk ....</p>
                    </div>
                </div>
                <div class="carousel-cell bg-primary" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Lawyer 12</h1>
                        <p class="text-light text-center p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                            possimus.</p>
                    </div>
                </div>
                <div class="carousel-cell bg-primary" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Lawyer 12</h1>
                        <p class="text-light text-center p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                            possimus.</p>
                    </div>
                </div>
                <div class="carousel-cell bg-primary" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Lawyer 12</h1>
                        <p class="text-light text-center p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                            possimus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Our Award Slides -->
    <div class="container-fluid my-5">
    <hr>
    <div class="row">
        <div class="col-12">
        <div class="membership w-100 text-center">
            <h3 class="pt-4 text-secondary">Our Awards and Memberships</h3>
            <p class="pt-2 pb-4 fw-light text-secondary">Justice law Firm Group, P.C., recognizes that family law<br> matters involve complex, sensitive issues that can have a lasting<br> impact on you, your family, your finances and your future.</p>
        </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="carousel" data-flickity='{ "groupCells": true , "autoPlay": true }' style="height:200px;">        
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo11.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo12.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo13.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo14.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo15.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo16.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo17.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo18.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo19.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo20.svg" alt="">
                    </div>
                </div>
                <div class="carousel-cell" style="height: 100%; width:300px;">
                    <div id="CardImg">
                        <img src="img/logo21.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Home page end -->

    <?php
    include("FrontendInclude/backbutton.php");
    include("FrontendInclude/frontFooter.php");
    ?>
    <style>
        @media (max-width: 992px) {
            .card {
                width: 100%;
                /* Set the card width to 100% for small and medium screens */
            }
        }
    </style>