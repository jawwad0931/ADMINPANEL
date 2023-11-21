<?php 
    include("FrontendInclude/frontHeader.php");
    include("FrontendInclude/frontTopbar.php");
?>
<!-- Header Start -->
        <div class="container-fluid py-5  mb-5" style="background-image:url('img/cont.jpg');background-size:cover;height:500px;">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3">About Us</h1>
            </div>
        </div>
        <!-- Header End -->

    <!--about starts here-->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About Haki</h2>
            <div class="about-content">
                <div class="column left container">
                    <img src="./img/home.jpg" alt="about-img" class="about-img">
                </div>
                <div class="column right">
                    <div class="text">We are a SaaS <span>Company</span></div>
                    <p> We are a company that links you as a potential client to the best lawyers in the country.<br>
                        Enabling you to book an appointment at the convinience of your home. </p>
                    <a href="Hire.php">Services</a>
                </div>
            </div>
        </div>
    </section>
    <!--about ends here-->

<?php include("FrontendInclude/frontFooter.php") ?>


<style>
    .page-header{
        background-image: url('img/criminal.jpeg');
    }
</style>