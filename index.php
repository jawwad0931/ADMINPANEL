<?php
include("Frontenddb/db.php");
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>

<body>

    <!--HOME STARTS HERE-->
    <section id="home" class="homeintro">
        <h1><a href="#about"><img src="./img/logo-nav.png" width="200" height="200" alt="logo" class="logo"></a></h1>
    </section>
    <!--LANDINGPAGE ENDS HERE-->
    <!--Team section starts here-->
    <section class="lawyer my-5" id="lawyer">
        <div class="container">
            <h2 class="text-center"> Meet our Lawyers </h2>
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
    <?php include("FrontendInclude/frontFooter.php") ?>

    <style>
        @media (max-width: 992px) {
            .card {
                width: 100%;
                /* Set the card width to 100% for small and medium screens */
            }
        }
    </style>