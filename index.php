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
            <h2 class="text-center"> Meet our Team </h2>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <?php
                        $sltImage = "SELECT * FROM `updateimage`";
                        $result = mysqli_query($conn, $sltImage);
                        if (!$result) {
                            die("Error in SQL query: " . mysqli_error($conn));
                        } else {
                            while ($fetch = mysqli_fetch_assoc($result)) {
                                echo '<div class="col-sm-6 col-md-3 d-flex flex-wrap">
                        <div class="card card-block">
                            <a>
                                <img src="img/' . $fetch["image"] . '" width="100" class="card-img-top" alt="Placeholder Image">
                                <div class="card-title-wrap">
                                    <span class="card-title"> ' . $fetch["Name"] . ' </span>
                                    <span class="card-text"> ' . $fetch["Profession"] . ' </span>
                                </div>
                                <div class="lawyer-over">
                                    <h4 class="hidden-md-down"> Connect With Me </h4>
                                    <nav class="social-nav">
                                        <a href="https://twitter.com/?lang=en">
                                            <i class="bi bi-twitter"></i>
                                        </a>
                                        <a href="https://web.facebook.com/?_rdc=1&_rd">
                                            <i class="bi bi-facebook"></i>
                                        </a>
                                        <a href="https://business.linkedin.com/marketing-solutions/linkedin-pages?trk=sem_lms_gaw&src=go-pa&veh=LMS_EMEA_Deprioritized_ROE_Search_Google-Brand_DR-PRS_Broad_Pages-Alpha_All_English_Core_415758549117__linkedin%20pages_c__kwd-344541005691_9216596363&mcid=6612464045041733646&cname=LMS_EMEA_Deprioritized_ROE_Search_Google-Brand_DR-PRS_Broad_Pages-Alpha_All_English_Core&camid=9216596363&asid=94475519438&targetid=kwd-344541005691&crid=415758549117&placement=&dev=c&ends=1&gclid=Cj0KCQiA-aGCBhCwARIsAHDl5x_2bYQsqI-0nC3xjWb7JsvXFFlz0exzM6Hbf0H9sVUjUwIBNJ5ObH4aApDJEALw_wcB&gclsrc=aw.ds">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </nav>
                                    <p>The form of the guarantee of conditions of life of society, assured by State’s power
                                        of constraint.</p>
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