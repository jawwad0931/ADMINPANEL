<!-- Home page ka code yahan hai -->
<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");

?>

<body>
    <!--HOME STARTS HERE-->
    <section id="home" class="homeintro d-flex align-items-center justify-content-center" style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(img/backgroundimg.jpg); background-size: 100% auto; background-position: center;">
        <div class="text-center">
            <h1 class="text-light">"Your Legal Ally – Justice Law Firm.<br /> Expertise, Dedication, Justice."</h1>
            <a href="Hire.php" class="btn btn-outline-light mt-3 consultGlow">Book Your Consultation</a>
        </div>
    </section>
    <!--LANDINGPAGE ENDS HERE-->

    <!--Home page start-->
    <section class="lawyer" id="lawyer">
        <div class="container">
            <h2 class="text-center text-secondary fw-bold text-bold">Our Lawyers</h2>
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
                                echo '<div class="col-sm-6 col-md-3 col-lg-6 d-flex flex-wrap">
                        <div class="card card-block">
                            <a>
                                <img src="img/' . $fetch["image"] . '" width="100" class="card-img-top" alt="Placeholder Image">
                                <div class="card-title-wrap">
                                    <span class="card-title"> ' . $fetch["Name"] . ' </span>
                                    <p class="card-text fs-6"> ' . $fetch["Desc"] . ' </p>
                                </div>
                                <div class="lawyer-over">
                                    <h4 class="hidden-md-down fs-3"> Connect This Lawyer </h4>
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
    <h3 class='fs-1 fw-bold text-center text-secondary m-3'>Testimonials</h3>
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="carousel" data-flickity='{ "groupCells": true , "autoPlay": true }' style="height:500px; width:100%;">
                <div class="carousel-cell bg-dark" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Gulpreet singh</h1>
                        <p class="text-light text-center p-4">"I was falsely implication in murder case ( Under Section 302 IPC) in 2011. I was in Judicial custody since 2012, Hon’ble ASJ rejected my bail. A firm fought my case on charge without any fee and I was acquittal and discharged of this case in 2014. I am honestly thankful of Shri Ompal Singh and this organisation."</p>
                    </div>
                </div>
                <div class="carousel-cell bg-dark" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Michael</h1>
                        <p class="text-light text-center p-4">"I was so lucky to have a friend refer me to Justice Law Firm, and Kristina West. She was always kind, upbeat and never judgmental. Kristina walked me through each step of the divorce process, so that."</p>
                    </div>
                </div>
                <div class="carousel-cell bg-dark" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Naveen Chauhan</h1>
                        <p class="text-light text-center p-4"> Naveen Chauhan, Advocate  Information: Cyber Crime is increasing day by day due to lack of awareness among the people as well as our judicial system and police. The technology is also developing very quickly so in most of the cases lack of cyber crime conviction is the primary result of absence of proper legal assistance to prosecute cyber crimes.</p>
                    </div>
                </div>
                <div class="carousel-cell bg-dark" style="height: 100%; width:415px;">
                    <div id="homeCard">
                        <div class="text-center p-4">
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                        <i class="ion-star text-center text-light fs-3"></i>
                         <i class="ion-star text-center text-light fs-3"></i>
                        </div>
                        <h1 class="text-light text-center">Morne Marshall</h1>
                        <p class="text-light text-center p-4"> I entered into a domestic partnership without doing all of my homework and when the relationship ended I found myself in a difficult situation. I never imagined the person I entered into partnership with would go after my finances the way he did. I was ignorant on the laws surrounding domestic partnerships or if I had any recourse. Ms. Schoenberg helped me understand exactly where I stood on a number of issues in my case and also what I could do to ensure I landed in a good place when it was all over.</p>
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
            <div class="carousel" data-flickity='{ "groupCells": true , "autoPlay": true }' style="height:220px;">        
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