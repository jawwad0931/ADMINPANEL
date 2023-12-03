<?php
include("FrontendInclude/frontHeader.php");
include("FrontendInclude/frontTopbar.php");
?>
<!-- Header Start -->
<div class="container-fluid py-5  mb-5"
    style="background-image:url('img/about.jfif');background-size:cover;height:600px;background-position:center;">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white fw-light mb-3">About Us</h1>
    </div>
</div>
<!-- Header End -->

<!--about starts here-->
<section class="about" id="about">
    <div class="max-width">
        <h2 class="title">About Justice Law Firm</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="column left container">
                        <img src="./img/home.jpg" alt="about-img" class="about-img" width='400px' height='300px'>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="column_right">
                        <div class="text">We are a SaaS <span>Company</span></div>
                        <p>
                            We are a dedicated legal services firm committed to connecting you with the finest lawyers
                            nationwide. Our platform empowers you as a potential client, making it seamless to book
                            appointments with top-tier legal professionals, all from the comfort of your home. At [Your
                            Justice Law Firm], we prioritize convenience, ensuring that your legal needs are met with
                            efficiency and excellence. Explore the possibilities of hassle-free legal assistance with
                            us.</p>
                        <a href="Hire.php" class='btn btn-dark'>Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid bg-light">
    <div class="row p-5">
        <div class="col-12 mt-5 p-5">
            <div>
                <h1 class="fw-light">About Justice Law Firm</h1>
                <h1 class="fw-light mt-5">Southlake Attorneys Offering Family Law & Estate Planning Services</h1>
            </div>
            <div>
                <p class="mt-5">Justice Law Firm has an excellent reputation and is known for providing
                    high-quality, individualized representation and attention to clients in need of legal services.
                    Our team of experienced attorneys can represent you in a variety of issues relating to family
                    law, divorce, estate planning, and collaborative law.</p>
                <p class="mt-5">We understand that legal issues are complex and challenging, so we strive to make
                    your experience as simple and stress-free as possible. Our attorneys can handle the legal work
                    for you, maintaining open communication and keeping you informed along the way.</p>
            </div>
            <hr>
            <h6>To get in touch with the professionals at Justice Law Firm, please contact us online or call (817)
                477-6756.</h6>
            <hr>
        </div>
    </div>
</div>


<!-- What our client say -->
<!-- Flickity HTML init -->
<div class="container">
    <h1 class='fs-1 fw-light text-center m-3'>What our Clients Say</h1>
    <hr>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="carousel" data-flickity='{ "groupCells": true }' style="height:300px">
                <div class="carousel-cell" style="height: 100%;">
                    <div id="content m-4 p-4">
                        <h1 class="text-light">Lawyer 01</h1>
                        <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci,
                            possimus.</p>
                    </div>
                </div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
                <div class="carousel-cell"></div>
            </div>
        </div>
    </div>
</div>
<!--about code ends here-->

<?php
include("FrontendInclude/backbutton.php");
include("FrontendInclude/frontFooter.php");
?>
<style>
    .page-header {
        background-image: url('img/criminal.jpeg');
    }

    @media screen and (max-width: 1000px) {
        .about-img {
            width: 100%;
        }

        .column_right {
            text-align: center;
            margin: 10px;
        }
    }
</style>