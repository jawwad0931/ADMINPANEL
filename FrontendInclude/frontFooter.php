<!-- frontend ka footer -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    /* Footer */
.footer .btn.btn-social {
    margin-right: 5px;
    width: 35px;
    height: 35px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--light);
    border: 1px solid rgba(255,255,255,0.5);
    border-radius: 2px;
    transition: .3s;
}

.Contact .icons{
    margin-right: 15px;
}

.footer .btn.btn-social:hover {
    /* color: var(--primary); */
    color: rgba(32, 150, 219, 0.863);
    border-color: var(--light);
}

.footer .btn.btn-link {
    display: block;
    margin-bottom: 5px;
    padding: 0;
    text-align: left;
    font-size: 15px;
    font-weight: normal;
    text-transform: capitalize;
    transition: .3s;
}

.footer .btn.btn-link::before {
    position: relative;
    content: "\f105";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    margin-right: 10px;
}

.footer .btn.btn-link:hover {
    letter-spacing: 1px;
    box-shadow: none;
}

.footer .form-control {
    border-color: rgba(255,255,255,0.5);
}

.footer .copyright {
    padding: 25px 0;
    font-size: 15px;
    border-top: 1px solid rgba(256, 256, 256, .1);
}

.footer .copyright a {
    color: var(--light);
}

.footer .footer-menu a {
    margin-right: 15px;
    padding-right: 15px;
    border-right: 1px solid rgba(255, 255, 255, .1);
}

.footer .footer-menu a:last-child {
    margin-right: 0;
    padding-right: 0;
    border-right: none;
}

/* end footer */
</style>
<body>
    <!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row g-5 d-flex justify-content-center">
            <div class="col-lg-4 col-md-4">
                <h5 class="text-white mb-3">---Justice Law Firm---</h5>
                <p style="width:350px">"Trusted legal expertise for a secure tomorrow. Our seasoned team of lawyers is
                    dedicated to providing personalized solutions and unwavering advocacy. Your peace of mind is our
                    priority."</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a class="btn btn-link text-white-50 text-decoration-none" href="About.php">About Us</a>
                <a class="btn btn-link text-white-50 text-decoration-none" href="Contact.php">Contact Us</a>
                <a class="btn btn-link text-white-50 text-decoration-none" href="Services.php">Our Services</a>
                <a class="btn btn-link text-white-50 text-decoration-none" href="hire.php">Appointment</a>
                <a class="btn btn-link text-white-50 text-decoration-none" href="Term&cond.php">Term & Condition</a>
            </div>
            <div class="col-lg-4 col-md-4">
                <h5 class="text-white mb-4 me-2">Contact</h5>
                <a href="https://www.google.com/maps/place/Clifton,+Karachi,+Karachi+City,+Sindh,+Pakistan/@24.818303,66.999063,14z/data=!3m1!4b1!4m6!3m5!1s0x3eb33dbbdc1875bf:0x6a6572ab3a66fed8!8m2!3d24.8269877!4d67.025096!16zL20vMGMwdmti?entry=ttu"
                    class="text-white-50 Contact text-decoration-none">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-danger icons me-2"></i>Clifton,Karachi,Pakistan
                    </p>
                </a>
                <a href="tel:+923085499310" class="text-white-50 Contact text-decoration-none">
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary icons me-2"></i>+923085499310</p>
                </a>
                <a href="mailto:info@lawfirm.com" class="text-white-50 Contact text-decoration-none">
                    <p class="mb-2"><i class="fa fa-envelope text-info icons me-2"></i>jawwadk638@gmail.com</p>
                </a>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social mr-3" href="https://twitter.com/JobPrep2"><i
                            class="ion-social-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mr-3"
                        href="https://www.facebook.com/profile.php?id=61550471001860"><i
                            class="ion-social-facebook"></i></a>
                    <a class="btn btn-outline-light btn-social mr-3"
                        href="https://www.youtube.com/channel/UCCjONqDhNGQWVwpE86zdmig"><i
                            class="ion-social-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social mr-3 text-decoration-none" href="http://www.linkedin.com/"><i
                            class="ion-social-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="./js/script.js"></script>
<script src="./js/hire.js"></script>
<script src="./js/contact.js"></script>


<!-- Boostrap script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
<!-- Flickity JavaScript -->
<!-- <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> -->
<script src="js/flickity.pkgd.min.js"></script>
</body>
</html>